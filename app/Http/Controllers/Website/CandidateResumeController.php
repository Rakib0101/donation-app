<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\ResumeTemplate;
use App\Http\Controllers\Controller;
use App\Services\Website\Candidate\Resume\CreateOrUpdateResumeService;

class CandidateResumeController extends Controller
{
     /**
     * My resume
     *
     * @return Renderable
     */
    public function myResume()
    {
        return view('frontend.pages.candidate.resume-builder');
    }

    /**
     * Candidate create resume information
     *
     * @return Renderable
     */
    public function createResumeInfo()
    {
        return view('frontend.pages.candidate.resume-builder.create.index');
    }

    /**
     * Candidate chooseTemplate
     *
     * @return Renderable
     */
    public function chooseTemplate()
    {
        try {
            $templates = ResumeTemplate::latest()->get();

            return view('frontend.pages.candidate.resume-builder.create.choose-template', compact('templates'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Resume demo preview
     *
     * @param ResumeTemplate $template
     * @return \Illuminate\View\View
     */
    public function cvResumeDemoPreview(ResumeTemplate $template)
    {
        $resume_file_name = $template->file_name;
        $resume_full_path = 'frontend.pages.candidate.demo_resume.' . $resume_file_name;

        return view($resume_full_path, compact('template'));
    }

     /**
     * Candidate selectTemplate
     *
     * @return Renderable
     */
    public function selectTemplate(ResumeTemplate $template)
    {
        try {
            $user = auth('user')->user()->load('candidate', 'contactInfo');

            if (!session('candidate_resume_no')) {
                session(['candidate_resume_no' => null]);
            }

            if (!session('selected_template_id')) {
                session(['selected_template_id' => $template->id]);
            }

            $resume = (new CreateOrUpdateResumeService())->execute();

            return view('frontend.pages.candidate.resume-builder.create.select-template', [
                'resume' => $resume,
                'template' => $template,
                'user' => $user,
            ]);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate resume save
     *
     * @return Renderable
     */
    public function resumeSave(Request $request){
        $candidate_resume = (new CreateOrUpdateResumeService())->execute();

        $candidate_resume->update([
            'title' => $request->resume_name,
            'is_active' => 1,
        ]);

        return back()->with('success', 'Resume saved successfully');
    }
}
