<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Traits\CandidateAble;
use App\Http\Traits\HasCountryBasedJobs;
// use App\Http\Traits\JobAble;
use App\Http\Traits\ResetCvViewsHistoryTrait;
use App\Models\Candidate;
// use App\Models\CandidateCvView;
// use App\Models\CandidateResume;
use App\Models\Company;
// use App\Models\Education;
// use App\Models\Experience;
use App\Models\Job;
// use App\Models\Profession;
// use App\Models\Skill;
// use App\Models\Tag;
// use App\Models\User;
// use App\Notifications\Website\Candidate\ApplyJobNotification;
// use App\Notifications\Website\Candidate\BookmarkJobNotification;
// use App\Services\Website\Candidate\CandidateProfileDetailsService;
// use App\Services\Website\Company\CompanyDetailsService;
// use App\Services\Website\Company\CompanyListService;
use App\Services\Website\IndexPageService;
// use App\Services\Website\Job\JobListService;
use App\Services\Website\PricePlanService;
use App\Services\Website\PrivacyPolicyService;
use App\Services\Website\RefundPolicyService;
use App\Services\Website\SearchAutoCompleteService;
// use Carbon\Carbon;
use App\Services\Website\TermsConditionService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Modules\Currency\Entities\Currency as CurrencyModel;
use Modules\Faq\Entities\Faq;
use Modules\Faq\Entities\FaqCategory;
use Modules\Language\Entities\Language;
use Modules\Location\Entities\Country;
use Modules\Plan\Entities\Plan;
use Modules\Testimonial\Entities\Testimonial;
use Stevebauman\Location\Facades\Location;

class WebsiteController extends Controller
{
    use CandidateAble, HasCountryBasedJobs, ResetCvViewsHistoryTrait;

    /**
     * Home page view
     *
     * @param  Request  $request
     * @return void
     */
    public function index()
    {
        try {
            // return 123;
            $data = (new IndexPageService())->execute();
            $data['total_candidates'] = Candidate::count();

            return view('frontend.pages.index', $data);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * About page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        try {
            $testimonials = Testimonial::all();
            $companies = Company::count();
            $candidates = Candidate::count();

            return view('frontend.pages.about', compact('testimonials', 'companies', 'candidates'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Contact page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('frontend.pages.contact-us');
    }

    /**
     * Plan page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pricing()
    {
        try {
            abort_if(auth('user')->check() && authUser()->role == 'candidate', 404);

            $plans = Plan::active()->get();

            $one_time_plans = $plans->where('payment_type', 'one_time');
            $recurring_plans = $plans->where('payment_type', 'recurring');

            $plan_descriptions = $plans->pluck('descriptions')->flatten();
            $total_candidates = Candidate::count();

            $current_language = currentLanguage();
            $current_currency = currentCurrency();
            $current_language_code = $current_language ? $current_language->code : config('templatecookie.default_language');

            $faqs = Faq::where('code', currentLangCode())
                ->with('faq_category')
                ->whereHas('faq_category', function ($query) {
                    $query->where('name', 'Plan');
                })
                ->get();

            if ($current_language_code) {
                $plans->load([
                    'descriptions' => function ($q) use ($current_language_code) {
                        $q->where('locale', $current_language_code);
                    },
                ]);
            }

            return view('frontend.pages.pricing', compact(
                'plans', 'one_time_plans', 'recurring_plans',
                'faqs', 'current_language', 'plan_descriptions', 'current_currency', 'current_language_code', 'total_candidates'
            ));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Plan details page
     *
     * @param  string  $label
     * @return void
     */
    public function planDetails($label)
    {
        try {
            abort_if(! auth('user')->check(), 404);
            abort_if(auth('user')->check() && auth('user')->user()->role == 'candidate', 404);

            $data = (new PricePlanService())->details($label);

            return view('frontend.pages.plan-details', $data);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Faq page
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faqs()
    {
        try {
            $faq_categories = FaqCategory::with([
                'faqs' => function ($q) {
                    $q->where('code', currentLangCode());
                },
            ])->get();

            return view('frontend.pages.faqs', compact('faq_categories'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Terms and condition page view
     *
     * @param  Request  $request
     * @return void
     */
    public function termsCondition()
    {
        try {
            $data = (new TermsConditionService())->execute();

            return view('frontend.pages.terms-conditions', $data);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Privacy policy page view
     *
     * @param  Request  $request
     * @return void
     */
    public function privacyPolicy()
    {
        try {
            $data = (new PrivacyPolicyService())->execute();

            return view('frontend.pages.privacy-policy', $data);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Refund policy page view
     *
     * @param  Request  $request
     * @return void
     */
    public function refundPolicy()
    {

        try {
            $data = (new RefundPolicyService())->execute();

            return view('frontend.pages.refund-policy', $data);

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Help Center
     *
     * @return Renderable
     */
    public function helpCenter()
    {
        try {

            return view('frontend.pages.help-center');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Help Center Details
     *
     * @return Renderable
     */
    public function helpCenterDetails()
    {
        try {

            return view('frontend.pages.help-center-details');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Resume Guideline
     *
     * @return Renderable
     */
    public function resumeGuideline()
    {
        try {

            return view('frontend.pages.resume-guideline');

        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    // Old methods start from here

    /**
     * Notification mark as read
     *
     * @param  Request  $request
     * @return void
     */
    public function notificationRead()
    {
        try {
            foreach (auth()->user()->unreadNotifications as $notification) {
                $notification->markAsRead();
            }

            return response()->json(true);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    public function register($role)
    {
        try {
            return view('frontend.auth.register', compact('role'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Mark all notification as read
     *
     * @return void
     */
    public function markReadSingleNotification(Request $request)
    {
        try {
            $has_unread_notification = auth()
                ->user()
                ->unreadNotifications->count();

            if ($has_unread_notification && $request->id) {
                auth()
                    ->user()
                    ->unreadNotifications->where('id', $request->id)
                    ->markAsRead();
            }

            return true;
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Set session
     *
     * @return void
     */
    public function setSession(Request $request)
    {
        try {
            info($request->all());
            $request->session()->put('location', $request->input());

            return response()->json(true);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Set current location
     *
     * @param  Request  $request
     * @return void
     */
    public function setCurrentLocation($request)
    {
        try {
            // Current Visitor Location Track && Set Country IF App Is Multi Country Base
            $app_country = setting('app_country_type');

            if ($app_country == 'multiple_base') {
                $ip = request()->ip();
                // $ip = '103.102.27.0'; // Bangladesh
                // $ip = '105.179.161.212'; // Mauritius
                // $ip = '110.33.122.75'; // AUD
                // $ip = '5.132.255.255'; // SA
                // $ip = '107.29.65.61'; // United States"
                // $ip = '46.39.160.0'; // Czech Republic
                // $ip = "94.112.58.11"; // Czechia

                if ($ip) {
                    $current_user_data = Location::get($ip);
                    if ($current_user_data) {
                        $user_country = $current_user_data->countryName;
                        if ($user_country) {
                            $this->setLangAndCurrency($user_country);
                            $database_country = Country::where('name', $user_country)
                                ->where('status', 1)
                                ->first();
                            if ($database_country) {
                                $selected_country = session()->get('selected_country');
                                if (! $selected_country) {
                                    session()->put('selected_country', $database_country->id);

                                    return true;
                                }
                            }
                        }
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Process for set currency & language
     *
     * @param  string  $name
     * @return bool
     */
    public function setLangAndCurrency($name)
    {
        try {
            // this process for get language code/sort name  and currency sortname
            $get_lang_wise_sort_name = \File::json(resource_path('backend/dummy-data/country_currency_language.json'));

            $country_name = Str::slug($name);
            if ($get_lang_wise_sort_name) {
                // loop json file data

                for ($i = 0; $i < count($get_lang_wise_sort_name); $i++) {
                    $json_country_name = Str::slug($get_lang_wise_sort_name[$i]['name']);

                    if ($country_name == $json_country_name) {
                        // check country are same

                        $cn_code = $get_lang_wise_sort_name[$i]['currency']['code'];
                        $ln_code = $get_lang_wise_sort_name[$i]['language']['code'];

                        // Currency setup
                        $set_currency = CurrencyModel::where('code', Str::upper($cn_code))->first();
                        if ($set_currency) {
                            session(['current_currency' => $set_currency]);
                            currencyRateStore();
                        }
                        // // Currency setup
                        $set_language = Language::where('code', Str::lower($ln_code))->first();
                        if ($set_language) {
                            session(['current_lang' => $set_language]);
                            // session()->put('set_lang', $lang);
                            app()->setLocale($ln_code);
                        }

                        // menu list cache clear
                        Cache::forget('menu_lists');

                        return true;
                    }
                }
            } else {
                return false;
            }
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Set selected country
     *
     * @return void
     */
    public function setSelectedCountry(Request $request)
    {
        try {
            session()->put('selected_country', $request->country);

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Remove selected country
     *
     * @return void
     */
    public function removeSelectedCountry()
    {
        try {
            session()->forget('selected_country');

            return redirect()->back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Job autocomplete
     *
     * @return array
     */
    public function searchAutoComplete(Request $request)
    {
        try {
            $response = (new SearchAutoCompleteService())->execute($request);

            return $response;
        } catch (\Exception $e) {
            return [
                'error' => $e->getMessage(),
            ];
        }
    }
}
