<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Modules\Location\Entities\City;
use Modules\Location\Entities\Country;
use Modules\Location\Entities\State;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $appends = [
        'days_remaining', 'deadline_active', 'can_apply', 'full_address', 'country_city', 'country_state_city',
    ];

    protected $casts = [
        'bookmarked' => 'boolean',
        'applied' => 'boolean',
        'can_apply' => 'boolean',
        'highlight_till' => 'datetime',
        'featured_until' => 'datetime',
        'urgent_until' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            forgetCache('home_page_featured_jobs');
            forgetCache('home_page_countries_jobs');
            forgetCache('home_page_states_jobs');
            forgetCache('home_page_cities_jobs');
            forgetCache('home_page_overview');
        });

        self::updated(function ($model) {
            forgetCache('home_page_featured_jobs');
            forgetCache('home_page_countries_jobs');
            forgetCache('home_page_states_jobs');
            forgetCache('home_page_cities_jobs');
            forgetCache('home_page_overview');
        });

        self::deleted(function ($model) {
            forgetCache('home_page_featured_jobs');
            forgetCache('home_page_countries_jobs');
            forgetCache('home_page_states_jobs');
            forgetCache('home_page_cities_jobs');
            forgetCache('home_page_overview');
        });
    }

    /**
     * Set the job's title.
     *
     * @return void
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $value_slug = Str::slug($value);
        $is_exists = Job::whereSlug($value_slug)->where('id', '!=', $this->id)->exists();

        if ($is_exists) {
            $this->attributes['slug'] = $value_slug.'-'.time().'-'.uniqid();
        } else {
            $this->attributes['slug'] = $value_slug;
        }
    }

    /**
     * Get the highlight attribute
     *
     * @return void
     */
    public function getHighlightAttribute($value)
    {
        if ($value) {
            $days = cache()->remember('highlight_job_days', 60 * 24 * 30, function () {
                return Setting::select('highlight_job_days')->value('highlight_job_days');
            });

            if ($days > 0 && $this->attributes['highlight_till']) {
                $is_active = Carbon::parse($this->attributes['highlight_till'])->isFuture();

                if (! $is_active) {
                    $this->update(['highlight' => 0]);

                    return false;
                }
            }

            return true;
        }

        return false;
    }

    /**
     * Get the featured attribute
     *
     * @return void
     */
    public function getFeaturedAttribute($value)
    {
        if ($this->attributes['featured']) {
            $days = cache()->remember('featured_job_days', 60 * 24 * 30, function () {
                return Setting::select('featured_job_days')->value('featured_job_days');
            });

            if ($days > 0 && $this->attributes['featured_until']) {
                $is_active = Carbon::parse($this->attributes['featured_until'])->isFuture();

                if (! $is_active) {
                    $this->update(['featured' => 0]);

                    return false;
                }
            }

            return true;
        }

        return false;
    }

    /**
     * Get the job's full address.
     *
     * @return string
     */
    public function getFullAddressAttribute()
    {
        $country = $this->country;
        $region = $this->region;
        $extra = $region != null ? ' , ' : '';

        return $region.$extra.$country;
    }

    /**
     * Get the job's country and city.
     *
     * @return string
     */
    public function getCountryCityAttribute()
    {
        $country = $this?->country?->name;

        if (isset($city)) {
            return $city.' , '.$country;
        }

        return $country;
    }

    /**
     * Get the job's country and city.
     *
     * @return string
     */
    public function getCountryStateCityAttribute()
    {
        $country = $this?->country?->name;

        if (isset($this->city)) {
            $city = $this?->city?->name;
        }
        if (isset($this->state)) {
            $state = $this?->state?->name;
        }

        if (isset($city) && isset($state)) {
            return $city.' , '.$state.' , '.$country;
        }

        if (isset($city) && ! isset($state)) {
            return $city.' , '.$country;
        }

        if (! isset($city) && isset($state)) {
            return $state.' , '.$country;
        }

        return $country;
    }

    /**
     * Get the job's days remaining
     *
     * @return mixed
     */
    public function getDaysRemainingAttribute()
    {
        return Carbon::now(config('templatecookie.timezone'))->parse($this->deadline)->diffForHumans(null, true, true, 2);
    }

    /**
     * Get the can apply job's attribute.
     *
     * @return bool
     */
    public function getCanApplyAttribute()
    {
        if ($this->apply_on === 'app') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the deadline active attribute
     *
     * @return mixed
     */
    public function getDeadlineActiveAttribute()
    {
        return Carbon::parse($this->deadline)->format('Y-m-d') >= Carbon::now()->toDateString();
    }

    /**
     * Get the without edited job scope
     *
     * @return mixed
     */
    public function scopeWithoutEdited($query)
    {
        return $query->where('waiting_for_edit_approval', false);
    }

    /**
     * Get the edited job scope
     *
     * @return mixed
     */
    public function scopeEdited($query)
    {
        return $query->where('waiting_for_edit_approval', true);
    }

    /**
     * Get the active job scope
     *
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Get the expired job scope
     *
     * @return mixed
     */
    public function scopeExpired($query)
    {
        return $query->where('status', 'expired');
    }

    /**
     * Get the inactive job scope
     *
     * @return mixed
     */
    public function scopeInactive($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Get the pending job scope
     *
     * @return mixed
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Get the open job scope
     *
     * @return mixed
     */
    public function scopeOpenPosition($query)
    {
        return $query->where('status', 'active')->where('deadline', '>=', Carbon::now()->toDateString());
    }

    /**
     * Get the company jobs scope
     *
     * @return mixed
     */
    public function scopeCompanyJobs($query, $company_id)
    {
        return $query->where('company_id', $company_id);
    }

    /**
     * Get the new job scope
     *
     * @return mixed
     */
    public function scopeNewJobs($query)
    {
        return $query->where('status', 'active')->where('created_at', '>=', Carbon::now()->subDays(7)->toDateString());
    }

    /**
     * Get the featured job scope
     *
     * @return mixed
     */
    public function scopeFeatured($query)
    {
        return $query->whereFeatured(true)->whereNotNull('featured_at')->where('featured_till', '>=', Carbon::now()->toDateString());
    }

    /**
     * Get the urgent job scope
     *
     * @return mixed
     */
    public function scopeUrgent($query)
    {
        return $query->whereUrgent(true)->whereNotNull('urgent_at')->where('urgent_till', '>=', Carbon::now()->toDateString());
    }

    /**
     * Get the highlight job scope
     *
     * @return mixed
     */
    public function scopeHighlight($query)
    {
        return $query->whereHighlight(true)->whereNotNull('highlight_at')->where('highlight_till', '>=', Carbon::now()->toDateString());
    }

    /**
     * Get the category that owns the Job
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(JobCategory::class);
    }

    /**
     * Get the role that owns the Job
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(JobRole::class, 'role_id');
    }

    /**
     * Get the company that owns the Job
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class)->with('user');
    }

    /**
     * Get all of the bookmarkedCandidates for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookmarkJobs()
    {
        return $this->belongsToMany(Candidate::class, 'bookmark_candidate_job');
    }

    /**
     * Get all of the appliedJobs for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appliedJobs()
    {
        return $this->belongsToMany(Candidate::class, 'applied_jobs')->withPivot('job_id', 'candidate_id')->with('user')->withTimestamps();
    }

    /**
     * Get the experience that owns the Job
     *
     * @return BelongsTo
     */
    public function experience()
    {
        return $this->belongsTo(Experience::class, 'experience_id');
    }

    /**
     * Get the education that owns the Job
     *
     * @return BelongsTo
     */
    public function education()
    {
        return $this->belongsTo(Education::class, 'education_id');
    }

    /**
     * Get the profession that owns the Job
     *
     * @return BelongsTo
     */
    public function profession()
    {
        return $this->belongsTo(Profession::class, 'profession_id');
    }

    /**
     * Get the job type that owns the Job
     *
     * @return BelongsTo
     */
    public function job_type()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }

    /**
     * Get the salary type that owns the Job
     *
     * @return BelongsTo
     */
    public function salary_type()
    {
        return $this->belongsTo(SalaryType::class, 'salary_type_id');
    }

    /**
     * Get the tags that owns the Job
     *
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tag');
    }

    /**
     * Get the benefits that owns the Job
     *
     * @return BelongsToMany
     */
    public function benefits()
    {
        return $this->belongsToMany(Benefit::class, 'job_benefit');
    }

    /**
     * Get the skills that owns the Job
     *
     * @return BelongsToMany
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'job_skills');
    }

    /**
     * Get the questions that owns the Job
     *
     * @return BelongsToMany
     */
    public function questions()
    {
        return $this->belongsToMany(CompanyQuestion::class);
    }

    /**
     * Get the country that owns the Job
     *
     * @return BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the state that owns the Job
     *
     * @return BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Get the city that owns the Job
     *
     * @return BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
