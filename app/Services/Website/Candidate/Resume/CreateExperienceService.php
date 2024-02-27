<?php

namespace App\Services\Website\Candidate\Resume;

class CreateExperienceService {
    public function execute($candidate_resume, $request){
        $data = $candidate_resume->experiences()->create([
            'company' => $request->company,
            'position' => $request->position,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'currently_working' => $request->currently_working ? true : false,
        ]);

        return responseSuccess('Experience saved successfully', $data);
    }
}
