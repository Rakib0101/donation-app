<?php

namespace App\Services\Website\Candidate\Resume;

class CreateProjectService {
    public function execute($candidate_resume, $request){
        $data = $candidate_resume->projects()->create([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        return responseSuccess('Project saved successfully', $data);
    }
}
