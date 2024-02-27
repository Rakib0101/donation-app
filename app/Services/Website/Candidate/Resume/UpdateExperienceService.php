<?php

namespace App\Services\Website\Candidate\Resume;

class UpdateExperienceService {
    public function execute($resumeExperience, $request){
        $resumeExperience->update([
            'company' => $request->company,
            'position' => $request->position,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'currently_working' => $request->currently_working ? true : false,
        ]);

        return responseSuccess('Experience updated successfully', $resumeExperience);
    }
}
