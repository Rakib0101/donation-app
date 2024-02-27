<?php

namespace App\Services\Website;

use App\Models\Candidate;
use App\Models\Job;
use App\Models\User;

class SearchAutoCompleteService
{
    /**
     * Get terms condition
     *
     * @return void
     */
    public function execute($request)
    {
        if ($request->type == 'job') {
            $data = $this->getJobs($request->keywords);
        } elseif ($request->type == 'company') {
            $data = $this->getCompanies($request->keywords);
        } elseif ($request->type == 'candidate') {
            $data = $this->getCandidate($request->keywords);
        } else {
            $data = [];
        }

        // $jobs = Job::select('title as value', 'id')
        //     ->where('title', 'LIKE', '%'.$request->get('search').'%')
        //     ->active()
        //     ->withoutEdited()
        //     ->latest()
        //     ->get()
        //     ->take(15);

        // if ($jobs && count($jobs)) {
        //     $data = '<ul class="dropdown-menu show">';
        //     foreach ($jobs as $job) {
        //         $data .= '<li class="dropdown-item"><a href="'.route('website.job', ['keyword' => $job->value]).'">'.$job->value.'</a></li>';
        //     }
        //     $data .= '</ul>';
        // } else {
        //     $data = '<ul class="dropdown-menu show"><li class="dropdown-item">No data found</li></ul>';
        // }

        return $data;

    }

    /**
     * Get jobs
     *
     * @return void
     */
    protected function getJobs(string $keywords)
    {
        return Job::select('title as value', 'id')
            ->where('title', 'LIKE', '%'.$keywords.'%')
            ->active()
            ->withoutEdited()
            ->latest()
            ->take(8)
            ->get()
            ->map(function ($job) {
                return [
                    'value' => $job->value,
                    'id' => $job->id,
                    'type' => 'job',
                    'url' => route('website.jobs', ['keyword' => $job->value]),
                ];
            });
    }

    /**
     * Get companies
     *
     * @return void
     */
    protected function getCompanies(string $keywords)
    {
        return User::select('name as value', 'id')
            ->where('role', 'company')
            ->where('name', 'LIKE', '%'.$keywords.'%')
            ->latest()
            ->take(8)
            ->get()
            ->map(function ($company) {
                return [
                    'value' => $company->value,
                    'id' => $company->id,
                    'type' => 'company',
                    'url' => route('companies', ['keyword' => $company->value]),
                ];
            });
    }

    /**
     * Get Candidate
     *
     * @return void
     */
    protected function getCandidate(string $keywords)
    {
        return User::select('name as value', 'id')
            ->where('role', 'candidate')
            ->where('name', 'LIKE', '%'.$keywords.'%')
            ->latest()
            ->take(8)
            ->get()
            ->map(function ($candidate) {
                return [
                    'value' => $candidate->value,
                    'id' => $candidate->id,
                    'type' => 'candidate',
                    'url' => route('candidates', ['keyword' => $candidate->value]),
                ];
            });
    }
}
