<?php

namespace App\Livewire\Candidate;

use App\Http\Resources\JobListResource;
use App\Models\Candidate;
use Livewire\Component;
use Livewire\WithPagination;

class AppliedJobs extends Component
{
    use WithPagination;

    public function render()
    {

        $candidate = Candidate::where('user_id', auth()->id())->first();

        if (empty($candidate)) {
            $candidate = new Candidate();
            $candidate->user_id = auth()->id();
            $candidate->save();
        }

        $jobs = $candidate->appliedJobs()
            ->latest()
            ->paginate(8);

        return view('livewire.candidate.applied-jobs', [
            'jobs' => JobListResource::collection($jobs),
            'candidate' => $candidate,
        ]);

    }
}
