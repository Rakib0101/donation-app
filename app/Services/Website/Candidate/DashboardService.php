<?php

namespace App\Services\Website\Candidate;

use App\Http\Resources\JobListResource;
use App\Models\Candidate;

class DashboardService
{
    /**
     * Get dashboard data
     */
    public function execute(): array
    {
        $candidate = Candidate::where('user_id', auth()->id())->first();

        if (empty($candidate)) {
            $candidate = new Candidate();
            $candidate->user_id = auth()->id();
            $candidate->save();
        }

        $appliedJobsCount = $candidate->appliedJobs()->count();

        $favoriteJobs = $candidate->bookmarkJobs->count();

        $jobs = $candidate->appliedJobs()
            ->latest()
            ->limit(4)
            ->get();

        $notifications = auth('user')->user()->notifications()->count();

        return [
            'appliedJobsCount' => $appliedJobsCount,
            'favoriteJobs' => $favoriteJobs,
            'notifications' => $notifications,
            'jobs' => JobListResource::collection($jobs),
            'candidate' => $candidate,
        ];
    }
}
