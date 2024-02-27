<?php

namespace App\Services\Website\Candidate\Resume;

use App\Models\Resume;

class CreateOrUpdateResumeService {
    public function execute(){
        $resume_no = session('candidate_resume_no');
        $template_id = session('selected_template_id');

        if ($resume_no && $template_id) {
            $candidate_resume = Resume::where([
                'resume_no' => $resume_no,
                'resume_template_id' => $template_id,
            ])->first();
        }else{
            $user = auth('user')->user()->load('candidate', 'contactInfo');

            // Get first name and last name
            $name_explodes = explode(' ', $user->name);
            $first_name = $name_explodes[0];
            $last_name = '';

            for ($i=0; $i < count($name_explodes); $i++) {
                if ($i > 0) $last_name .= $name_explodes[$i] . ' ';
            };

            $candidate_experience = $user->candidate->experiences;
            $candidate_educations = $user->candidate->educations;
            $candidate_social_media = $user->socialInfo;
            $candidate_skills = $user->candidate->skills->pluck('name')->toArray();
            $candidate_languages = $user->candidate->languages->pluck('name')->toArray();

            // Resume create
            $candidate_resume = Resume::create([
                'resume_no' => uniqid(),
                'candidate_id' => currentCandidate()->id,
                'resume_template_id' =>  $template_id,
                'title' => 'My Resume',
                'first_name' => $first_name,
                'last_name' => $last_name,
                'profession' => $user->candidate->profession->name,
                'website' => $user->candidate->website,
                'email' => $user->email,
                'phone' => $user->contactInfo->phone,
                'address' => $user->contactInfo->address,
                'description' => $user->candidate->bio,
                'gender' => $user->candidate->gender,
                'marital_status' => $user->candidate->marital_status,
                'is_active' => false,
            ]);

            // Resume experiences
            foreach ($candidate_experience as $experience) {
                $candidate_resume->experiences()->create([
                    'company' => $experience->company,
                    'position' => $experience->designation,
                    'description' => $experience->responsibilities,
                    'start_date' => formatTime($experience->start, 'F Y'),
                    'end_date' => formatTime($experience->end, 'F Y'),
                    'currently_working' => $experience->currently_working,
                ]);
            }

            // Resume educations
            foreach ($candidate_educations as $education) {
                $candidate_resume->educations()->create([
                    'institute' => $education->level,
                    'degree' => $education->degree,
                    'start_date' => $education->year,
                    'end_date' => $education->year,
                    'currently_studying' => false,
                ]);
            }

            // Resume Social Media
            foreach ($candidate_social_media as $social_media) {
                $candidate_resume->socialMedia()->create([
                    'type' => $social_media->social_media ?? '',
                    'link' => $social_media->url ?? '',
                ]);
            }

            // Resume skills
            foreach ($candidate_skills as $skill) {
                $candidate_resume->skills()->create([
                    'name' => $skill,
                ]);
            }

            // Resume languages
            foreach ($candidate_languages as $language) {
                $candidate_resume->languages()->create([
                    'name' => $language,
                ]);
            }

            session(['candidate_resume_no' => $candidate_resume?->resume_no]);
        }

        session(['candidate_resume_no' => $candidate_resume?->resume_no]);
        session(['selected_template_id' => $candidate_resume?->resume_template_id]);

        return $candidate_resume->load('experiences', 'skills', 'tools', 'languages', 'hobbies', 'projects', 'socialMedia', 'educations', 'achievements');
    }
}
