<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\UserPlan;
use Illuminate\Http\Request;

class CompanyDashboardController extends Controller
{
    /**
     * Company Dashboard
     *
     * @return Response
     */
    public function dashboard()
    {
        try {
            $data['userplan'] = UserPlan::with('plan')
                ->companyData()
                ->firstOrFail();
            $data['openJobCount'] = auth()
                ->user()
                ->company->jobs()
                ->active()
                ->count();
            $data['pendingJobCount'] = auth()
                ->user()
                ->company->jobs()
                ->pending()
                ->count();

            // Recent 4 Jobs
            $data['recentJobs'] = auth()
                ->user()
                ->company->jobs()
                ->latest()
                ->take(4)
                ->with('company.user', 'job_type')
                ->withCount('appliedJobs')
                ->get();
            $data['savedCandidates'] = auth()
                ->user()
                ->company->bookmarkCandidates()
                ->count();

            return view('frontend.pages.company.dashboard', $data);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company my jobs
     *
     * @return Response
     */
    public function myjobs(Request $request)
    {
        try {
            // $query = currentCompany()
            //     ->jobs()
            //     ->withCount('appliedJobs')
            //     ->withoutEdited();

            // status search
            // if ($request->has('status') && $request->status != null) {
            //     $query->where('status', $request->status);
            // }

            // status search
            // if ($request->has('apply_on') && $request->apply_on != null) {
            //     $query->where('apply_on', $request->apply_on);
            // }

            // $myJobs = $query
            //     ->with('job_type:id,name')
            //     ->latest()
            //     ->paginate(12)
            //     ->withQueryString();

            // foreach ($myJobs as $job) {
            //     if ($job->days_remaining < 1) {
            //         $job->update([
            //             'status' => 'expired',
            //             'deadline' => null,
            //         ]);
            //     }
            // }

            // return view('frontend.pages.company.my-jobs', compact('myJobs'));
            return view('frontend.pages.company.my-jobs');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company jobPromotion
     *
     * @return Response
     */
    public function jobPromotion()
    {
        try {

            return view('frontend.pages.company.job-promotion');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company postJob
     *
     * @return Response
     */
    public function postJob()
    {
        try {

            return view('frontend.pages.company.post-job');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company jobApplication
     *
     * @return Response
     */
    public function jobApplication()
    {
        try {

            return view('frontend.pages.company.job-application');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company message
     *
     * @return Response
     */
    public function message()
    {
        try {

            return view('frontend.pages.company.message');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company savedApplication
     *
     * @return Response
     */
    public function savedApplication()
    {
        try {

            return view('frontend.pages.company.saved-application');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company planBillingRecurring
     *
     * @return Response
     */
    public function plan()
    {
        try {

            return view('frontend.pages.company.plan-billing-recurring');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company teamMember
     *
     * @return Response
     */
    public function teamMember()
    {
        try {

            return view('frontend.pages.company.team-member');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company myCompanies
     *
     * @return Response
     */
    public function myCompanies()
    {
        try {

            return view('frontend.pages.company.my-companies');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company settings
     *
     * @return Response
     */
    public function settings()
    {
        try {

            return view('frontend.pages.company.settings.company');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company settingsDetailInfo
     *
     * @return Response
     */
    public function settingsDetailInfo()
    {
        try {

            return view('frontend.pages.company.settings.detail-info');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company settingsSocialMedia
     *
     * @return Response
     */
    public function settingsSocialMedia()
    {
        try {

            return view('frontend.pages.company.settings.social-media');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company settingsContact
     *
     * @return Response
     */
    public function settingsContact()
    {
        try {

            return view('frontend.pages.company.settings.contact');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Company settingsOther
     *
     * @return Response
     */
    public function settingsOther()
    {
        try {

            return view('frontend.pages.company.settings.other');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
