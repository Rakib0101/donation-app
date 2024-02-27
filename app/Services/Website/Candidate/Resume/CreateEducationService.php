<?php

namespace App\Services\Website\Candidate\Resume;

class CreateEducationService {
    public function execute($candidate_resume, $request){
        $data = $candidate_resume->educations()->create([
            'institute' => $request->institute,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'currently_studying' => $request->currently_studying ? true : false,
        ]);

        return responseSuccess('Education saved successfully', $data);
    }
}
