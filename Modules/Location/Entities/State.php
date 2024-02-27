<?php

namespace Modules\Location\Entities;

use App\Http\Traits\Sluggable;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            forgetCache('home_page_countries_jobs');
            forgetCache('home_page_states_jobs');
        });

        self::updated(function ($model) {
            forgetCache('home_page_countries_jobs');
            forgetCache('home_page_states_jobs');
        });

        self::deleted(function ($model) {
            forgetCache('home_page_countries_jobs');
            forgetCache('home_page_states_jobs');
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'city_id', 'id');
    }
}
