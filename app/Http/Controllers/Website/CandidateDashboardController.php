<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Traits\CandidateAble;
use App\Http\Traits\CandidateSkillAble;
use App\Http\Traits\HasCandidateResume;
// use App\Models\AppliedJob;
use App\Models\Candidate;
use App\Models\CandidateLanguage;
// use App\Models\CandidateResume;
use App\Models\Company;
use App\Models\ContactInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\JobRole;
use App\Models\Profession;
use App\Models\Skill;
use App\Services\Website\Candidate\CandidateSettingUpdateService;
use App\Services\Website\Candidate\DashboardService;
use Illuminate\Http\Request;

class CandidateDashboardController extends Controller
{
    use CandidateAble, CandidateSkillAble, HasCandidateResume;

    public function __construct()
    {
        $this->middleware('access_limitation')->only([
            'settingUpdate',
        ]);
    }

    /**
     * Candidate dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        try {
            $data = (new DashboardService())->execute();

            return view('frontend.pages.candidate.dashboard', $data);

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate appliedJobs
     *
     * @return Renderable
     */
    public function appliedJobs()
    {
        try {

            return view('frontend.pages.candidate.applied-jobs');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate savedJobs
     *
     * @return Renderable
     */
    public function savedJobs()
    {
        try {

            return view('frontend.pages.candidate.saved-jobs');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate jobAlert
     *
     * @return Renderable
     */
    public function jobAlert()
    {
        try {

            return view('frontend.pages.candidate.job-alert');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate message
     *
     * @return Renderable
     */
    public function message()
    {
        try {

            return view('frontend.pages.candidate.message');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate createResumeProfile
     *
     * @return Renderable
     */
    public function createResumeProfile()
    {
        try {

            return view('frontend.pages.candidate.resume-builder.create.profile');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate createResumeDetailedInfo
     *
     * @return Renderable
     */
    public function createResumeDetailedInfo()
    {
        try {

            return view('frontend.pages.candidate.resume-builder.create.detailed-info');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate createResumeSocialMedia
     *
     * @return Renderable
     */
    public function createResumeSocialMedia()
    {
        try {

            return view('frontend.pages.candidate.resume-builder.create.social-media');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate createResumeContact
     *
     * @return Renderable
     */
    public function createResumeContact()
    {
        try {

            return view('frontend.pages.candidate.resume-builder.create.contact');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate settings
     *
     * @return Renderable
     */
    public function settings()
    {
        try {

            return view('frontend.pages.candidate.settings');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    // Jobpilot old methods

    /**
     * Candidate notification page
     *
     * @return \Illuminate\Http\Response
     */
    public function allNotification()
    {
        try {
            $notifications = auth()
                ->user()
                ->notifications()
                ->paginate(12);

            return view('frontend.pages.candidate.all-notification', compact('notifications'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate job alert page
     *
     * @return \Illuminate\Http\Response
     */
    public function jobAlerts()
    {
        try {
            $notifications = auth()
                ->user()
                ->notifications()
                ->where('type', 'App\Notifications\Website\Candidate\RelatedJobNotification')
                ->paginate(12);

            return view('frontend.pages.candidate.job-alerts', compact('notifications'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate bookmark page
     *
     * @return \Illuminate\Http\Response
     */
    public function bookmarks(Request $request)
    {
        try {
            $candidate = Candidate::where('user_id', auth()->id())->first();
            if (empty($candidate)) {
                $candidate = new Candidate();
                $candidate->user_id = auth()->id();
                $candidate->save();
            }

            $jobs = $candidate
                ->bookmarkJobs()
                ->withCount([
                    'appliedJobs as applied' => function ($q) use ($candidate) {
                        $q->where('candidate_id', $candidate->id);
                    },
                ])
                ->paginate(12);

            if (auth('user')->check() && authUser()->role == 'candidate') {
                $resumes = currentCandidate()->resumes;
            } else {
                $resumes = [];
            }

            return view('frontend.pages.candidate.bookmark', compact('jobs', 'resumes'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate bookmark company toggle
     *
     * @return \Illuminate\Http\Response
     */
    public function bookmarkCompany(Company $company)
    {
        try {
            $company->bookmarkCandidateCompany()->toggle(currentCandidate());

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate settings page
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        try {
            $candidate = auth()->user()->candidate;

            if (empty($candidate)) {
                Candidate::create(['user_id' => auth()->id()]);
            }

            // for contact
            $contactInfo = ContactInfo::where('user_id', auth()->id())->first();
            $contact = [];
            if ($contactInfo) {
                $contact = $contactInfo;
            } else {
                $contact = '';
            }

            // for social link
            $socials = auth()->user()->socialInfo;

            // for candidate resume/cv
            $resumes = $candidate->resumes;

            $job_roles = JobRole::all()->sortBy('name');
            $experiences = Experience::all();
            $educations = Education::all();
            $professions = Profession::all()->sortBy('name');
            $skills = Skill::all()->sortBy('name');
            $languages = CandidateLanguage::all(['id', 'name']);
            $candidate->load('skills', 'languages', 'experiences', 'educations', 'jobRoleAlerts:id,candidate_id,job_role_id');

            return view('frontend.pages.candidate.setting', [
                'candidate' => $candidate->load('skills', 'languages'),
                'contact' => $contact,
                'socials' => $socials,
                'job_roles' => $job_roles,
                'experiences' => $experiences,
                'educations' => $educations,
                'professions' => $professions,
                'resumes' => $resumes,
                'skills' => $skills,
                'candidate_languages' => $languages,
            ]);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate setting update
     *
     * @return \Illuminate\Http\Response
     */
    public function settingUpdate(Request $request)
    {
        try {
            (new CandidateSettingUpdateService())->update($request);

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate username update
     *
     * @return \Illuminate\Http\Response
     */
    public function usernameUpdate(Request $request)
    {
        try {
            $request->session()->put('type', 'account');

            if ($request->type == 'candidate_username') {
                $request->validate([
                    'username' => 'required|unique:users,username,'.auth()->user()->id,
                ]);

                authUser()->update([
                    'username' => $request->username,
                ]);

                flashSuccess(__('username_updated_successfully'));

                return back();
            }
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
