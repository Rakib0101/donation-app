<?php

namespace App;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Website\GlobalController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

// Auth Pages
Route::view('/register', 'frontend.auth.register');
Route::view('/login', 'frontend.auth.login')->name('login');

Route::view('/verify', 'frontend.auth.verify');
Route::view('/forget-password', 'frontend.auth.forget-password');

Route::view('/jobs', 'frontend.pages.browse-jobs');
Route::view('/companies', 'frontend.pages.browse-companies');
Route::view('/job-details', 'frontend.pages.job-details');
Route::view('/candidates', 'frontend.pages.browse-candidate');
Route::view('/candidate/profile', 'frontend.pages.candidate-profile');
Route::view('/pricing-plan', 'frontend.pages.pricing');
Route::view('/pricing-onetime', 'frontend.pages.pricing-onetime');

// Account Setup Pages
Route::view('/account-setting/step-01', 'frontend.account-setup.step-01');
Route::view('/account-setting/step-02', 'frontend.account-setup.step-02');
Route::view('/account-setting/step-03', 'frontend.account-setup.step-03');
Route::view('/account-setting/step-04', 'frontend.account-setup.step-04');
Route::view('/account-setting/step-05', 'frontend.account-setup.step-05');

// Public Pages
Route::view('/contact-us', 'frontend.pages.contact-us');
Route::view('/blog', 'frontend.pages.blog');
Route::view('/blog-details', 'frontend.pages.blog-details');
Route::view('/help-center', 'frontend.pages.help-center');
Route::view('/help-center-detail', 'frontend.pages.help-center-detail');
Route::view('/terms-conditions', 'frontend.pages.terms-conditions');
Route::view('/privacy-policy', 'frontend.pages.privacy-policy');
Route::view('/resume-guideline', 'frontend.pages.resume-guideline');
Route::view('/faqs', 'frontend.pages.faqs');
Route::view('/404', 'frontend.pages.404');
Route::view('/maintenance', 'frontend.pages.maintenance');

// company dashboard
Route::view('/company/overview', 'frontend.pages.company.company-dashboard')->name('company.overview');
Route::view('/company/profile', 'frontend.pages.company.company-profile');
Route::view('/company/job-promotion', 'frontend.pages.company.job-promotion');
Route::view('/company/my-jobs', 'frontend.pages.company.my-jobs');
Route::view('/company/post-job', 'frontend.pages.company.post-job');
Route::view('/company/job-application', 'frontend.pages.company.job-application');
Route::view('/company/message', 'frontend.pages.company.message');
Route::view('/company/saved-application', 'frontend.pages.company.saved-application');
Route::view('/company/plan-billing-recurring', 'frontend.pages.company.plan-billing-recurring');
Route::view('/company/team-member', 'frontend.pages.company.team-member');
Route::view('/company/all-companies', 'frontend.pages.company.all-companies');
Route::view('/company/settings', 'frontend.pages.company.settings.company');
Route::view('/company/settings/detail-info', 'frontend.pages.company.settings.detail-info');
Route::view('/company/settings/social-media', 'frontend.pages.company.settings.social-media');
Route::view('/company/settings/contact', 'frontend.pages.company.settings.contact');
Route::view('/company/settings/other', 'frontend.pages.company.settings.other');

// Candidate Dashboard
Route::view('/candidate/overview', 'frontend.pages.candidate.overview')->name('candidate.overview');
Route::view('/candidate/applied-jobs', 'frontend.pages.candidate.applied-jobs');
Route::view('/candidate/saved-jobs', 'frontend.pages.candidate.saved-jobs');
Route::view('/candidate/job-alert', 'frontend.pages.candidate.job-alert');
Route::view('/candidate/message', 'frontend.pages.candidate.message');
Route::view('/candidate/resume-builder', 'frontend.pages.candidate.resume-builder');
Route::view('/candidate/create-resume/profile', 'frontend.pages.candidate.resume-builder.create.profile');
Route::view('/candidate/create-resume/detailed-info', 'frontend.pages.candidate.resume-builder.create.detailed-info');
Route::view('/candidate/create-resume/social-media', 'frontend.pages.candidate.resume-builder.create.social-media');
Route::view('/candidate/create-resume/contact', 'frontend.pages.candidate.resume-builder.create.contact');
Route::view('/candidate/settings', 'frontend.pages.candidate.settings');

// ====================================================================
// --------------------------Guest Routes------------------------------
// ====================================================================
Route::controller(WebsiteController::class)->name('website.')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    // Route::get('/contact', 'contact')->name('contact');
    // Route::get('/plans', 'pricing')->name('plan');
    // Route::get('/plans/{label}', 'planDetails')->name('plan.details');
    // Route::get('/faq', 'faq')->name('faq');
    // Route::get('/terms-condition', 'termsCondition')->name('termsCondition');
    // Route::get('/privacy-policy', 'privacyPolicy')->name('privacyPolicy');
    // Route::get('/refund-policy', 'refundPolicy')->name('refundPolicy');
    // Route::get('/coming-soon', 'comingSoon')->name('comingsoon');
    // Route::get('/careerjet/jobs', 'careerjetJobs')->name('careerjet.job');
    // Route::get('/indeed/jobs', 'indeedJobs')->name('indeed.job');
    // Route::get('/jobs', 'jobs')->name('job');
    // Route::get('/loadmore', 'loadmore');
    // Route::get('/jobs/category/{category}', 'jobsCategory')->name('job.category.slug');
    Route::get('/job/{job:slug}', 'jobDetails')->name('job.details');
    // Route::get('/jobs/{job:slug}/bookmark', 'toggleBookmarkJob')->name('job.bookmark')->middleware('user_active');
    // Route::post('/jobs/apply', 'toggleApplyJob')->name('job.apply')->middleware('user_active');
    // Route::get('/candidates', 'candidates')->name('candidate');
    // Route::get('/candidates/{candidate:username}', 'candidateDetails')->name('candidate.details');
    // Route::get('/candidate/profile/details', 'candidateProfileDetails')->name('candidate.profile.details');
    // Route::get('/candidate/application/profile/details', 'candidateApplicationProfileDetails')->name('candidate.application.profile.details');
    // Route::get('/candidates/download/cv/{resume}', 'candidateDownloadCv')->name('candidate.download.cv');
    // Route::get('/employers', 'employees')->name('company');
    // Route::get('/employer/{user:username}', 'employersDetails')->name('employe.details');
    // Route::get('/posts', 'posts')->name('posts');
    // Route::get('/post/{post:slug}', 'post')->name('post');
    // Route::post('/comment/{post:slug}/add', 'comment')->name('comment');
    // Route::post('/markasread/single/notification', 'markReadSingleNotification')->name('markread.notification');
    // Route::post('/set/session', 'setSession')->name('set.session');
    // Route::get('/selected/country', 'setSelectedCountry')->name('set.country');
    // Route::get('/selected/country/remove', 'removeSelectedCountry')->name('remove.country');
    // Route::get('job/autocomplete', 'jobAutocomplete')->name('job.autocomplete');
    // Route::post('/job/benefits/create', 'jobBenefitCreate')->name('job.benefit.create');
});
Route::view('/sitemap', 'frontend.pages.sitemap');

Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout');
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('/user-password-update', 'reset')->name('user.password.update');
});

Route::controller(GlobalController::class)->group(function () {
    // Route::get('/check/username/{name}', 'checkUsername');
    Route::get('/translated/texts', 'fetchCurrentTranslatedText');
    Route::get('/lang/{lang}', 'changeLanguage');
    // Route::get('/migrate/data', 'migrateData');
    // Route::get('/optimize-clear', 'optimizeClear')->name('app.optimize-clear');
    // Route::post('/ckeditor/upload', 'ckeditorImageUpload')->name('ckeditor.upload');
});
