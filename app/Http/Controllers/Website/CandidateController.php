<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Traits\CandidateAble;
use App\Http\Traits\CandidateSkillAble;
use App\Http\Traits\HasCandidateResume;
// use App\Models\AppliedJob;
use App\Models\Candidate;
use App\Models\CandidateCvView;
// use App\Models\CandidateLanguage;
use App\Models\CandidateResume;
// use App\Models\Company;
// use App\Models\ContactInfo;
use App\Models\Education;
use App\Models\Experience;
// use App\Models\JobRole;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Services\Website\Candidate\CandidateProfileDetailsService;
// use App\Services\Website\Candidate\CandidateSettingUpdateService;
// use App\Services\Website\Candidate\DashboardService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    use CandidateAble, CandidateSkillAble, HasCandidateResume;

    /**
     * Candidate page view
     *
     * @return void
     */
    // public function candidates(Request $request)
    public function candidates()
    {
        try {
            // abort_if(auth('user')->check() && authUser()->role == 'candidate', 404);
            // $data['professions'] = Profession::all()->sortBy('name');
            // $data['candidates'] = $this->getCandidates($request);
            // $data['experiences'] = Experience::all();
            // $data['educations'] = Education::all();
            // $data['skills'] = Skill::all()->sortBy('name');
            // $data['popularTags'] = Tag::popular()
            //     ->withCount('tags')
            //     ->latest('tags_count')
            //     ->get()
            //     ->take(10);

            // reset candidate cv views history
            // $this->reset();

            // return view('frontend.pages.candidates', $data);
            return view('frontend.pages.browse-candidate');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate details page view
     *
     * @param  string  $username
     * @return void
     */
    // public function candidateDetails(Request $request, $username)
    public function candidateDetails()
    {
        try {
            // $candidate = User::where('username', $username)
            //     ->with('candidate', 'contactInfo', 'socialInfo')
            //     ->firstOrFail();

            // abort_if(auth('user')->check() && $candidate->id != auth('user')->id(), 404);

            // if ($request->ajax) {
            //     return response()->json($candidate);
            // }

            // return view('frontend.pages.candidate-details', compact('candidate'));
            return view('frontend.pages.candidate-profile');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate profile details
     *
     * @return Response
     */
    public function candidateProfileDetails(Request $request)
    {
        try {
            if (! auth('user')->check()) {
                return response()->json([
                    'message' => __('if_you_perform_this_action_you_need_to_login_your_account_first_do_you_want_to_login_now'),
                    'success' => false,
                ]);
            }

            $user = authUser();

            if ($user->role != 'company') {
                return response()->json([
                    'message' => __('you_are_not_authorized_to_perform_this_action'),
                    'success' => false,
                ]);
            } else {
                $user_plan = $user->company->userPlan;
            }
            if (! $user_plan) {
                return response()->json([
                    'message' => __('you_dont_have_a_chosen_plan_please_choose_a_plan_to_continue'),
                    'success' => false,
                ]);
            }

            $already_view = CandidateCvView::join('candidates', 'candidate_cv_views.candidate_id', '=', 'candidates.id')
                ->join('users', 'candidates.user_id', '=', 'users.id')
                ->where('users.username', $request->username)
                ->where('candidate_cv_views.company_id', currentCompany()->id)
                ->first();

            if (empty($already_view)) {
                if (isset($user_plan) && $user_plan->candidate_cv_view_limitation == 'limited' && $user_plan->candidate_cv_view_limit <= 0) {
                    return response()->json([
                        'message' => __('you_have_reached_your_limit_for_viewing_candidate_cv_please_upgrade_your_plan'),
                        'success' => false,
                        'redirect_url' => route('website.plan'),
                    ]);
                }
            }

            $data = (new CandidateProfileDetailsService())->execute($request);

            return response()->json($data);
        } catch (\Exception $e) {

            flashError('An error occurred: '.$e->getMessage());

            return back();
        }

    }

    /**
     * Candidate application profile details
     *
     * @return Response
     */
    public function candidateApplicationProfileDetails(Request $request)
    {
        try {
            $candidate = User::where('username', $request->username)
                ->with([
                    'contactInfo',
                    'socialInfo',
                    'candidate' => function ($query) {
                        $query->with('experiences', 'educations', 'experience', 'coverLetter', 'education', 'profession', 'languages:id,name', 'skills', 'socialInfo');
                    },
                ])
                ->firstOrFail();

            $candidate->candidate->birth_date = Carbon::parse($candidate->candidate->birth_date)->format('d F, Y');

            $languages = $candidate->candidate
                ->languages()
                ->pluck('name')
                ->toArray();
            $candidate_languages = $languages ? implode(', ', $languages) : '';

            $skills = $candidate->candidate->skills->pluck('name');
            $candidate_skills = $skills ? implode(', ', json_decode(json_encode($skills))) : '';

            return response()->json([
                'success' => true,
                'data' => $candidate,
                'skills' => $candidate_skills,
                'languages' => $candidate_languages,
            ]);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate download cv
     *
     * @return void
     */
    public function candidateDownloadCv(CandidateResume $resume)
    {
        try {
            $filePath = $resume->file;
            $filename = time().'.pdf';
            $headers = ['Content-Type: application/pdf', 'filename' => $filename];
            $fileName = rand().'-resume'.'.pdf';

            return response()->download($filePath, $fileName, $headers);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function dashboard()
    {
        try {

            if (auth('user')->check() && authUser()->role == 'candidate') {

                return redirect()->route('candidate.dashboard');

            } elseif (auth('user')->check() && authUser()->role == 'company') {
                storePlanInformation();

                return redirect()->route('company.dashboard');
            }

            return redirect('login');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
