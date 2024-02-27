<?php

namespace App\Services\Website\Candidate\Resume;

class UpdateProjectService {
    public function execute($resumeProject, $request){
        $resumeProject->update([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        return responseSuccess('Project updated successfully', $resumeProject);
    }
}
