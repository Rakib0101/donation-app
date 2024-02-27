<?php

namespace App\Services\Website;

use App\Http\Traits\HasCountryBasedJobs;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobRole;
use Illuminate\Support\Facades\Cache;
use Modules\Location\Entities\City;
use Modules\Location\Entities\Country;
use Modules\Location\Entities\State;
use Modules\Testimonial\Entities\Testimonial;

class IndexPageService
{
    use HasCountryBasedJobs;

    /**
     * Get index page data
     *
     * @return void
     */
    public function execute(): array
    {
        $data['featured_jobs'] = $this->getFeaturedJobs();
        $data['top_companies'] = $this->getTopCompanies();
        $data['top_categories'] = $this->getTopCategories();
        $data['jobs_by_countries'] = $this->getJobsByCountries();
        $data['jobs_by_states'] = $this->getJobsByStates();
        $data['jobs_by_cities'] = $this->getJobsByCities();
        $data['testimonials'] = $this->getTestimonials();
        $data['overview'] = $this->getOverview();

        // // Featured Jobs With Single && Multiple Country Base
        // $featured_jobs_query = Job::query()->withoutEdited()->with('company.user', 'job_type:id,name', 'category')->withCount([
        //     'bookmarkJobs', 'appliedJobs',
        //     'bookmarkJobs as bookmarked' => function ($q) {
        //         $q->where('candidate_id', auth('user')->check() && currentCandidate() ? currentCandidate()->id : '');
        //     }, 'appliedJobs as applied' => function ($q) {
        //         $q->where('candidate_id', auth('user')->check() && currentCandidate() ? currentCandidate()->id : '');
        //     },
        // ]);
        // $data['featured_jobs'] = $this->filterCountryBasedJobs($featured_jobs_query)->where('featured', 1)->active()->get()->take(6);

        // $data['popular_categories'] = $popular_categories_list->values();

        // $popular_roles_list = JobRole::withCount('jobs')->take(8)->get()->map(function ($role) use ($setting, $is_single_base_country_type) {
        //     if ($is_single_base_country_type) {
        //         if ($setting->app_country) {

        //             $country = Country::where('id', $setting->app_country)->first();
        //             if ($country) {
        //                 $role->open_position_count = $role->jobs()->where('country', 'LIKE', "%$country->name%")->openPosition()->count();
        //             }
        //         }
        //     } else {
        //         $selected_country = session()->get('selected_country');

        //         if ($selected_country && $selected_country != null) {
        //             $country = selected_country()->name;
        //             $role->open_position_count = $role->jobs()->where('country', 'LIKE', "%$country%")->openPosition()->count();
        //         } else {
        //             $role->open_position_count = $role->jobs()->openPosition()->count();
        //         }
        //     }

        //     return $role;
        // });

        return $data;
    }

    /**
     * Get featured jobs
     *
     * @return void
     */
    protected function getFeaturedJobs()
    {
        return Cache::rememberForever('home_page_featured_jobs', function () {
            return Job::query()
                ->featured()
                ->active()
                ->withoutEdited()
                ->with([
                    'company' => function ($query) {
                        $query->select('id', 'user_id', 'logo')->with('user:id,username,name');
                    },
                    'job_type:id,name',
                    'salary_type',
                    'country:id,name',
                    'state:id,name',
                    'city:id,name',
                ])
                ->latest('featured_at')
                ->take(6)
                ->get([
                    'id', 'company_id', 'title', 'slug', 'featured', 'featured_at', 'featured_till', 'job_type_id', 'country_id', 'state_id', 'city_id', 'salary_mode', 'min_salary', 'max_salary', 'custom_salary', 'salary_type_id', 'is_remote',
                ]);
        });
    }

    /**
     * Get top companies
     *
     * @return void
     */
    protected function getTopCompanies()
    {
        return Cache::rememberForever('home_page_top_companies', function () {
            return Company::query()
                ->with('user:id,name', 'industry.translations')
                ->withCount([
                    'jobs as jobs_count' => function ($q) {
                        $q->where('status', 'active');
                    },
                ])
                ->latest('jobs_count')
                ->take(12)
                ->get([
                    'id', 'user_id', 'logo', 'industry_type_id',
                ]);
        });
    }

    /**
     * Get top categories
     *
     * @return void
     */
    protected function getTopCategories()
    {
        return Cache::rememberForever('home_page_top_categories', function () {
            return JobCategory::query()
                ->withCount('jobs')
                ->latest('jobs_count')
                ->take(16)
                ->get();
        });
    }

    /**
     * Get jobs by countries
     *
     * @return array
     */
    protected function getJobsByCountries()
    {
        return Cache::rememberForever('home_page_countries_jobs', function () {
            return Country::query()
                ->select('id', 'name', 'status')
                ->active()
                ->withCount('jobs')
                ->latest('jobs_count')
                ->having('jobs_count', '>', 1)
                ->take(16)
                ->get();
        });
    }

    /**
     * Get jobs by states
     *
     * @return array
     */
    protected function getJobsByStates()
    {
        return Cache::rememberForever('home_page_states_jobs', function () {
            return State::query()
                ->select('id', 'name', 'status', 'country_id')
                ->active()
                ->with('country:id,name')
                ->withCount('jobs')
                ->latest('jobs_count')
                ->having('jobs_count', '>', 1)
                ->take(16)
                ->get();
        });
    }

    /**
     * Get jobs by cities
     *
     * @return array
     */
    protected function getJobsByCities()
    {
        return Cache::rememberForever('home_page_cities_jobs', function () {
            return City::query()
                ->select('id', 'name', 'status', 'state_id')
                ->active()
                ->with('country')
                ->withCount('jobs')
                ->latest('jobs_count')
                ->having('jobs_count', '>', 1)
                ->take(16)
                ->get();
        });
    }

    /**
     * Get testimonials
     *
     * @return array
     */
    protected function getTestimonials()
    {
        return Cache::rememberForever('home_page_testimonials', function () {
            return Testimonial::query()
                ->whereCode(currentLangCode())
                ->get();
        });
    }

    /**
     * Get overview
     *
     * @return array
     */
    protected function getOverview()
    {
        return Cache::rememberForever('home_page_overview', function () {
            return [
                'total_active_jobs' => Job::withoutEdited()->openPosition()->active()->count(),
                'total_companies' => Company::count(),
                'total_candidates' => Candidate::count(),
                'total_new_jobs' => Job::active()->withoutEdited()->newJobs()->count(),
            ];
        });
    }
}
