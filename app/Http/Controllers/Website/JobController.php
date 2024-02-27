<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Traits\JobAble;
use App\Models\Job;
use App\Notifications\Website\Candidate\ApplyJobNotification;
use App\Notifications\Website\Candidate\BookmarkJobNotification;
use App\Services\Website\Job\JobListService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    use JobAble;

    /**
     * Careerjet jobs list
     *
     * @return Renderable
     */
    public function careerjetJobs(Request $request)
    {
        try {
            if (! config('templatecookie.careerjet_id')) {
                abort(404);
            }

            $careerjet_jobs = $this->getCareerjetJobs($request, 25);

            return view('frontend.pages.jobs.careerjet-jobs', compact('careerjet_jobs'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Indeed jobs list
     *
     * @return Renderable
     */
    public function indeedJobs(Request $request)
    {
        try {
            if (! config('templatecookie.indeed_id')) {
                abort(404);
            }

            $indeed_jobs = $this->getIndeedJobs($request, 25);

            return view('frontend.pages.jobs.indeed-jobs', compact('indeed_jobs'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Job page view
     *
     * @return void
     */
    public function jobs(Request $request)
    {
        try {
            // $data = (new JobListService())->jobs($request);

            // For adding currency code
            // $current_currency = currentCurrency();

            // return view('frontend.pages.jobs', $data, compact('current_currency'));
            return view('frontend.pages.browse-jobs');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    public function loadmore(Request $request)
    {
        try {
            $data = (new JobListService())->loadMore($request);

            return view('components.website.job.load-more-jobs', compact('data'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Job category page view
     *
     * @param  string  $slug
     * @return void
     */
    public function jobsCategory(Request $request, $slug)
    {
        try {
            $data = (new JobListService())->categoryJobs($request, $slug);

            return view('frontend.pages.jobsCategory', $data);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Job details page view
     *
     * @param  Request  $request
     * @param  string  $slug
     * @return void
     */
    // public function jobDetails(Job $job)
    public function jobDetails()
    {
        try {
            // if ($job->status == 'pending') {
            //     if (! auth('admin')->check()) {
            //         abort_if(! auth('user')->check(), 404);
            //         abort_if(authUser()->role != 'company', 404);
            //         abort_if(currentCompany()->id != $job->company_id, 404);
            //     }
            // }

            // $data = $this->getJobDetails($job);
            // $data['questions'] = $job->questions;

            // return view('frontend.pages.job-details', $data);
            return view('frontend.pages.job-details');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    public function toggleBookmarkJob(Job $job)
    {
        try {
            $check = $job->bookmarkJobs()->toggle(auth('user')->user()->candidate);

            if ($check['attached'] == [1]) {
                $user = auth('user')->user();
                // make notification to company candidate bookmark job
                Notification::send($job->company->user, new BookmarkJobNotification($user, $job));
                // make notification to candidate for notify
                if (auth()->user()->recent_activities_alert) {
                    Notification::send(auth('user')->user(), new BookmarkJobNotification($user, $job));
                }
            }

            $check['attached'] == [1] ? ($message = __('job_added_to_favorite_list')) : ($message = __('job_removed_from_favorite_list'));

            flashSuccess($message);

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    public function toggleApplyJob(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'resume_id' => 'required',
                    'cover_letter' => 'required',
                ],
                [
                    'resume_id.required' => 'Please select resume',
                    'cover_letter.required' => 'Please enter cover letter',
                ],
            );

            if ($validator->fails()) {
                flashError($validator->errors()->first());

                return back();
            }

            if (auth('user')->user()->candidate->profile_complete != 0) {
                flashError(__('complete_your_profile_before_applying_to_jobs_add_your_information_resume_and_profile_picture_for_a_better_chance_of_getting_hired'));

                return redirect()->route('candidate.dashboard');
            }

            $candidate = auth('user')->user()->candidate;
            $job = Job::find($request->id);

            DB::table('applied_jobs')->insert([
                'candidate_id' => $candidate->id,
                'job_id' => $job->id,
                'cover_letter' => $request->cover_letter,
                'candidate_resume_id' => $request->resume_id,
                'application_group_id' => $job->company->applicationGroups->where('is_deleteable', false)->first()->id ?? 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // make notification to candidate and company for notify
            $job->company->user->notify(new ApplyJobNotification(auth('user')->user(), $job->company->user, $job));

            if (auth('user')->user()->recent_activities_alert) {
                auth('user')
                    ->user()
                    ->notify(new ApplyJobNotification(auth('user')->user(), $job->company->user, $job));
            }

            flashSuccess(__('job_applied_successfully'));

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
