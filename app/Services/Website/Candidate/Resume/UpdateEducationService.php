<?php

namespace App\Services\Website\Candidate\Resume;

class UpdateEducationService {
    public function execute($resumeEducation, $request){
        $resumeEducation->update([
            'institute' => $request->institute,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'currently_studying' => $request->currently_studying ? true : false,
        ]);

        return responseSuccess('Education updated successfully', $resumeEducation);
    }
}
