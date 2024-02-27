<?php

namespace App;

use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\CandidateController;
use App\Http\Controllers\Website\CandidateDashboardController;
use App\Http\Controllers\Website\CandidateResumeController;
use App\Http\Controllers\Website\CompanyController;
use App\Http\Controllers\Website\CompanyDashboardController;
use App\Http\Controllers\Website\JobController;
use App\Http\Controllers\Website\WebsiteController;
use App\Models\Job;
use App\Services\Website\IndexPageService;
use Illuminate\Support\Facades\Route;
use Modules\Location\Entities\City;
use Modules\Location\Entities\Country;

Route::get('/test', function () {

    // return JobSkill::
    // return City::with('country')->first();

    return (new IndexPageService())->execute();
});

// =====================================================================
// =====================Website Public Routes==========================
// =====================================================================
Route::controller(WebsiteController::class)->name('website.')->group(function () {
    // Public Page Route List
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact-us', 'contact')->name('contact');

    Route::get('/pricing-plan', 'pricing')->name('plan');
    Route::get('/plans/{label}', 'planDetails')->name('plan.details');

    Route::get('/faqs', 'faqs')->name('faqs');
    Route::get('/terms-conditions', 'termsCondition')->name('termsCondition');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacyPolicy');
    Route::get('/refund-policy', 'refundPolicy')->name('refundPolicy');

    Route::get('/help-center', 'helpCenter')->name('helpCenter');
    Route::get('/help-center-details', 'helpCenterDetails')->name('helpCenterDetails');
    Route::get('/resume-guideline', 'resumeGuideline')->name('resumeGuideline');

    Route::post('/markasread/single/notification', 'markReadSingleNotification')->name('markread.notification');
    Route::post('/set/session', 'setSession')->name('set.session');
    Route::get('/selected/country', 'setSelectedCountry')->name('set.country');
    Route::get('/selected/country/remove', 'removeSelectedCountry')->name('remove.country');
    Route::get('job/autocomplete', 'jobAutocomplete')->name('job.autocomplete');
    Route::post('/job/benefits/create', 'jobBenefitCreate')->name('job.benefit.create');

    Route::get('/search-autocomplete', 'searchAutoComplete');
});

// Frontend Blog Public Routes
Route::controller(BlogController::class)->name('website.')->group(function () {
    Route::get('/blog', 'blogPosts')->name('posts');
    // Route::get('/blog/{post:slug}', 'blogPost')->name('post');
    Route::get('/blog/details', 'blogPost')->name('post');
    Route::post('/comment/{post:slug}/add', 'comment')->name('comment');
});

// Frontend Jobs Public Routes
Route::controller(JobController::class)->name('website.')->group(function () {
    // Route::get('/careerjet/jobs', 'careerjetJobs')->name('careerjet.job');
    // Route::get('/indeed/jobs', 'indeedJobs')->name('indeed.job');
    Route::get('/jobs', 'jobs')->name('jobs');
    // Route::get('/job/{job:slug}', 'jobDetails')->name('job.details');
    Route::get('/job/details', 'jobDetails')->name('job.jobDetails');
    // Route::get('/loadmore', 'loadmore');
    // Route::get('/jobs/category/{category}', 'jobsCategory')->name('job.category.slug');
    // Route::get('/jobs/{job:slug}/bookmark', 'toggleBookmarkJob')->name('job.bookmark')->middleware('user_active');
    // Route::post('/jobs/apply', 'toggleApplyJob')->name('job.apply')->middleware('user_active');
});

// Only For Company Public Routes
Route::controller(CompanyController::class)->group(function () {

    // Company Public Routes
    Route::get('/companies', 'companies')->name('companies');
    Route::get('/company/profile', 'companyDetails')->name('company.details');
    // Company Public Routes

    // Route::get('plans', 'plan')->name('plan')->middleware('user_active');
    // Route::post('download/transaction/invoice/{transaction}', 'downloadTransactionInvoice')->name('transaction.invoice.download');
    // Route::get('view/transaction/invoice/{transaction:order_id}', 'viewTransactionInvoice')->name('transaction.invoice.view');
    // Route::get('pending-edited-jobs', 'pendingEditedJobs')->name('pending.edited.jobs');
    // Route::get('create/pay-per-job', 'payPerJob')->name('job.payPerJobCreate')->withoutMiddleware('has_plan');
    // Route::post('/store/payper/job', 'storePayPerJob')->name('payperjob.store')->withoutMiddleware('has_plan');
    // Route::get('create/job', 'createJob')->name('job.create')->middleware('user_active');
    // Route::post('/store/job', 'storeJob')->name('job.store');
    // Route::get('/job/payment', 'payPerJobPayment')->name('payperjob.payment')->withoutMiddleware('has_plan');
    // Route::get('/promote/job/{job:slug}', 'showPromoteJob')->name('job.promote.show');
    // Route::get('/promote/{job:slug}', 'jobPromote')->name('promote');
    // Route::get('/clone/{job:slug}', 'jobClone')->name('clone');
    // Route::post('/promote/job/{jobCreated}', 'promoteJob')->name('job.promote');
    // Route::get('edit/{job:slug}/job', 'editJob')->name('job.edit')->withoutMiddleware('has_plan');
    // Route::post('make/job/expire/{job}', 'makeJobExpire')->name('job.make.expire');
    // Route::post('make/job/active/{job}', 'makeJobActive')->name('job.make.active');
    // Route::put('/update/{job:slug}/job', 'updateJob')->name('job.update')->withoutMiddleware('has_plan');
    // Route::get('job/applications', 'jobApplications')->name('job.application');
    // Route::put('applications/sync', 'applicationsSync')->name('application.sync');
    // Route::post('applications/column/store', 'applicationColumnStore')->name('applications.column.store');
    // Route::delete('applications/group/delete/{group}', 'applicationColumnDelete')->name('applications.column.delete');
    // Route::put('applications/group/update', 'applicationColumnUpdate')->name('applications.column.update');
    // Route::delete('delete/{job:id}/application', 'destroyApplication')->name('application.delete');
    // Route::get('bookmarks', 'bookmarks')->name('bookmark');
    // Route::get('settings', 'setting')->name('setting')->withoutMiddleware('has_plan');
    // Route::put('settings/update', 'settingUpdateInformation')->name('settingUpdateInformation')->withoutMiddleware('has_plan');
    // Route::get('/all/notifications', 'allNotification')->name('allNotification');
    // Route::post('applications/group/store', 'applicationsGroupStore')->name('applications.group.store');
    // Route::put('applications/group/update/{group}', 'applicationsGroupUpdate')->name('applications.group.update');
    // Route::delete('applications/group/destroy/{group}', 'applicationsGroupDestroy')->name('applications.group.destroy');
    // Route::post('/questions', 'storeQuestion')->name('questions.store');
    // Route::get('/questions', 'manageQuestion')->name('questions.manage');
    // Route::post('/questions/featureToggle', 'featureToggle')->name('questions.featureToggle');
    // Route::delete('/questions/{question}', 'deleteQuestion')->name('questions.delete');

    // Route::post('/company/bookmark/{candidate}', 'companyBookmarkCandidate')->name('companybookmarkcandidate')->middleware('user_active');
    // Route::get('account-progress', 'accountProgress')->name('account-progress')->withoutMiddleware('has_plan');
    // Route::put('/profile/complete/{id}', 'profileCompleteProgress')->name('profile.complete')->withoutMiddleware('has_plan');
    // Route::get('/bookmark/categories', 'bookmarkCategories')->name('bookmark.category.index');
    // Route::post('/bookmark/categories/store', 'bookmarkCategoriesStore')->name('bookmark.category.store');
    // Route::get('/bookmark/categories/edit/{category}', 'bookmarkCategoriesEdit')->name('bookmark.category.edit');
    // Route::put('/bookmark/categories/update/{category}', 'bookmarkCategoriesUpdate')->name('bookmark.category.update');
    // Route::delete('/bookmark/categories/destroy/{category}', 'bookmarkCategoriesDestroy')->name('bookmark.category.destroy');
    // Route::post('username/change', 'usernameUpdate')->name('username.change');
});

// =====================================================================
// =====================Company Dashboard Routes========================
// =====================================================================
Route::view('/account-setting/step-01', 'frontend.account-setup.step-01');
Route::view('/account-setting/step-02', 'frontend.account-setup.step-02');
Route::view('/account-setting/step-03', 'frontend.account-setup.step-03');
Route::view('/account-setting/step-04', 'frontend.account-setup.step-04');
Route::view('/account-setting/step-05', 'frontend.account-setup.step-05');

Route::controller(CompanyDashboardController::class)->group(function () {
    Route::get('/company/dashboard', 'dashboard')->name('company.dashboard');
    Route::get('/company/my-jobs', 'myjobs')->name('company.myjob');
    Route::get('/company/job-promotion', 'jobPromotion')->name('company.jobPromotion');
    Route::get('company/post-job', 'postJob')->name('company.postJob');
    Route::get('company/job-application', 'jobApplication')->name('company.jobApplication');
    Route::get('company/message', 'message')->name('company.message');
    Route::get('company/saved-application', 'savedApplication')->name('company.savedApplication');
    Route::get('company/plan-billing-recurring', 'plan')->name('company.plan');
    Route::get('company/team-member', 'teamMember')->name('company.teamMember');
    Route::get('company/my-companies', 'myCompanies')->name('company.myCompanies');
    Route::get('company/settings', 'settings')->name('company.settings');
    Route::get('company/settings/detail-info', 'settingsDetailInfo')->name('company.settingsDetailInfo');
    Route::get('company/settings/social-media', 'settingsSocialMedia')->name('company.settingsSocialMedia');
    Route::get('company/settings/contact', 'settingsContact')->name('company.settingsContact');
    Route::get('/company/settings/other', 'settingsOther')->name('company.settingsOther');

});

// =====================================================================
// =====================Candidate Public Routes=========================
// =====================================================================
Route::controller(CandidateController::class)->group(function () {

    Route::get('/candidates', 'candidates')->name('candidates');
    Route::get('/candidate/profile', 'candidateDetails')->name('candidate.candidateDetails');

    // Route::get('dashboard', 'dashboard')->name('dashboard');
    // Route::get('applied-jobs', 'appliedjobs')->name('appliedjob');
    // Route::get('bookmarks', 'bookmarks')->name('bookmark');
    // Route::get('settings', 'setting')->name('setting');
    // Route::put('settings/update', 'settingUpdate')->name('settingUpdate');
    // Route::get('/all/notifications', 'allNotification')->name('allNotification');
    // Route::get('/job/alerts', 'jobAlerts')->name('job.alerts');
    // Route::post('/resume/store', 'resumeStore')->name('resume.store');
    // Route::post('/resume/store/ajax', 'resumeStoreAjax')->name('resume.store.ajax');
    // Route::post('/get/resume/ajax', 'getResumeAjax')->name('get.resume.ajax');
    // Route::post('/resume/update', 'resumeUpdate')->name('resume.update');
    // Route::delete('/resume/delete/{resume}', 'resumeDelete')->name('resume.delete');
    // Route::post('/experiences/store', 'experienceStore')->name('experiences.store');
    // Route::put('/experiences/update', 'experienceUpdate')->name('experiences.update');
    // Route::delete('/experiences/{experience}', 'experienceDelete')->name('experiences.destroy');
    // Route::post('/educations/store', 'educationStore')->name('educations.store');
    // Route::put('/educations/update', 'educationUpdate')->name('educations.update');
    // Route::delete('/educations/{education}', 'educationDelete')->name('educations.destroy');
    // Route::post('/cv/show', 'cvShow')->name('cv.show');
});

// Only For Candidate Dashboard(Candidate Personal) Routes
Route::controller(CandidateDashboardController::class)->group(function () {
    Route::get('/candidate/dashboard', 'dashboard')->name('candidate.dashboard');
    Route::get('/candidate/applied-jobs', 'appliedJobs')->name('candidate.appliedJobs');
    Route::get('/candidate/saved-jobs', 'savedJobs')->name('candidate.savedJobs');
    Route::get('/candidate/job-alert', 'jobAlert')->name('candidate.jobAlert');
    Route::get('/candidate/message', 'message')->name('candidate.message');
    Route::get('/candidate/create-resume/profile', 'createResumeProfile')->name('candidate.createResumeProfile');
    Route::get('/candidate/create-resume/detailed-info', 'createResumeDetailedInfo')->name('candidate.createResumeDetailedInfo');
    Route::get('/candidate/create-resume/social-media', 'createResumeSocialMedia')->name('candidate.createResumeSocialMedia');
    Route::get('/candidate/create-resume/contact', 'createResumeContact')->name('candidate.createResumeContact');
    Route::get('/candidate/settings', 'settings')->name('candidate.settings');
});

Route::controller(CandidateResumeController::class)->name('candidate.')->group(function(){
     //cv resumes

    Route::get('/candidate/resume-builder', 'myResume')->name('resumeBuilder');
    Route::get('/candidate/create-resume', 'createResumeInfo')->name('createResume');
    Route::get('/candidate/choose-template', 'chooseTemplate')->name('chooseTemplate');
    Route::get('/resume-preview/{template:slug}', 'cvResumeDemoPreview')->name('resume.preview');
    Route::get('/candidate/select-template/{template:slug}', 'selectTemplate')->name('selectTemplate');
    Route::post('/cv-resume/save', 'resumeSave')->name('resume.save');




     Route::get('/cv-resume', 'cvResume')->name('cv.resume');
     Route::put('/cv-resume/title/update', 'cvResumeTitleUpdate')->name('cv.resume.title');
     Route::get('/{resume:resume_no}/preview', 'cvResumePreview')->name('cv.resume.preview')->withoutMiddleware('candidate');
     Route::get('/cv-resume/create', 'cvResumeCreate')->name('cv.resume.create');
     Route::get('/cv-resume/{resume:resume_no}/edit', 'cvResumeEdit')->name('cv.resume.edit');
     Route::delete('/cv-resume/delete', 'cvResumeDelete')->name('cv.resume.delete');
     Route::get('/cv-resume/choose', 'cvResumeChoose')->name('cv.resume.choose');
     Route::get('/cv-resume/template/{template:slug}', 'cvResumeSelected')->name('cv.resume.selected');
     Route::get('/resume-download/{resume:resume_no}', 'cvResumeDemoDownload')->name('cv.resume.download')->withoutMiddleware('candidate');

     Route::post('/cv-resume/basic', 'resumeSaveBasicInfo')->name('cv.resume.basic');
     Route::post('/cv-resume/description', 'resumeSaveDescriptionInfo')->name('cv.resume.description');

     Route::post('/cv-resume/project', 'resumeSaveProjectInfo');
     Route::delete('/cv-resume/project/{resumeProject:id}', 'resumeSaveProjectInfoDelete');
     Route::post('/cv-resume/project/{resumeProject:id}/update', 'resumeProjectInfoUpdate');

     Route::post('/cv-resume/experience', 'resumeSaveExperienceInfo');
     Route::delete('/cv-resume/experience/{resumeExperience:id}', 'resumeSaveExperienceInfoDelete');
     Route::post('/cv-resume/experience/{resumeExperience:id}/update', 'resumeExperienceInfoUpdate');

     Route::post('/cv-resume/education', 'resumeSaveEducationInfo');
     Route::delete('/cv-resume/education/{resumeEducation:id}', 'resumeSaveEducationInfoDelete');
     Route::post('/cv-resume/education/{resumeEducation:id}/update', 'resumeEducationInfoUpdate');

     Route::post('/cv-resume/achievement', 'resumeSaveAchievementInfo');
     Route::delete('/cv-resume/achievement/{resumeAchievement:id}', 'resumeSaveAchievementInfoDelete');
     Route::post('/cv-resume/achievement/{resumeAchievement:id}/update', 'resumeAchievementInfoUpdate');
     Route::post('/cv-resume/social-media', 'resumeSocialMediaUpdate');

     Route::post('/cv-resume/other', 'resumeSaveOtherInfo');
     Route::get('/cv-resume/attributes', 'resumeAttributes');
     Route::get('/cv-resume/attributes/collections', 'resumeAttributesCollections');
});

// =====================================================================
// =============================Guest Routes=============================
// ======================================================================

// ======================================================================
// =============================Authenticated Routes=====================
// ======================================================================
// Route::middleware('auth:user', 'verified')->group(function () {
// Dashboard Route
//     Route::get('/user/dashboard', [WebsiteController::class, 'dashboard'])->name('user.dashboard');

//     Route::post('/user/notification/read', [WebsiteController::class, 'notificationRead'])->name('user.notification.read');

// Candidate Routes
// Route::controller(CandidateController::class)->prefix('candidate')->middleware('candidate')->name('candidate.')->group(function () {
//     Route::get('dashboard', 'dashboard')->name('dashboard');
//     Route::get('applied-jobs', 'appliedjobs')->name('appliedjob');
//     Route::get('bookmarks', 'bookmarks')->name('bookmark');
//     Route::get('settings', 'setting')->name('setting');
//     Route::put('settings/update', 'settingUpdate')->name('settingUpdate');
//     Route::get('/all/notifications', 'allNotification')->name('allNotification');
//     Route::get('/job/alerts', 'jobAlerts')->name('job.alerts');
//     Route::post('/resume/store', 'resumeStore')->name('resume.store');
//     Route::post('/resume/store/ajax', 'resumeStoreAjax')->name('resume.store.ajax');
//     Route::post('/get/resume/ajax', 'getResumeAjax')->name('get.resume.ajax');
//     Route::post('/resume/update', 'resumeUpdate')->name('resume.update');
//     Route::delete('/resume/delete/{resume}', 'resumeDelete')->name('resume.delete');
//     Route::post('/experiences/store', 'experienceStore')->name('experiences.store');
//     Route::put('/experiences/update', 'experienceUpdate')->name('experiences.update');
//     Route::delete('/experiences/{experience}', 'experienceDelete')->name('experiences.destroy');
//     Route::post('/educations/store', 'educationStore')->name('educations.store');
//     Route::put('/educations/update', 'educationUpdate')->name('educations.update');
//     Route::delete('/educations/{education}', 'educationDelete')->name('educations.destroy');
//     Route::post('/cv/show', 'cvShow')->name('cv.show');
// });

// Company Routes
// Route::controller(CompanyController::class)->prefix('company')->middleware(['company', 'has_plan'])->name('company.')->group(function () {
//     Route::middleware('company.profile')->group(function () {
//         Route::get('dashboard', 'dashboard')->name('dashboard');
//         Route::get('plans', 'plan')->name('plan')->middleware('user_active');
//         Route::post('download/transaction/invoice/{transaction}', 'downloadTransactionInvoice')->name('transaction.invoice.download');
//         Route::get('view/transaction/invoice/{transaction:order_id}', 'viewTransactionInvoice')->name('transaction.invoice.view');
//         Route::get('my-jobs', 'myjobs')->name('myjob')->withoutMiddleware('has_plan');
//         Route::get('pending-edited-jobs', 'pendingEditedJobs')->name('pending.edited.jobs');
//         Route::get('create/pay-per-job', 'payPerJob')->name('job.payPerJobCreate')->withoutMiddleware('has_plan');
//         Route::post('/store/payper/job', 'storePayPerJob')->name('payperjob.store')->withoutMiddleware('has_plan');
//         Route::get('create/job', 'createJob')->name('job.create')->middleware('user_active');
//         Route::post('/store/job', 'storeJob')->name('job.store');
//         Route::get('/job/payment', 'payPerJobPayment')->name('payperjob.payment')->withoutMiddleware('has_plan');
//         Route::get('/promote/job/{job:slug}', 'showPromoteJob')->name('job.promote.show');
//         Route::get('/promote/{job:slug}', 'jobPromote')->name('promote');
//         Route::get('/clone/{job:slug}', 'jobClone')->name('clone');
//         Route::post('/promote/job/{jobCreated}', 'promoteJob')->name('job.promote');
//         Route::get('edit/{job:slug}/job', 'editJob')->name('job.edit')->withoutMiddleware('has_plan');
//         Route::post('make/job/expire/{job}', 'makeJobExpire')->name('job.make.expire');
//         Route::post('make/job/active/{job}', 'makeJobActive')->name('job.make.active');
//         Route::put('/update/{job:slug}/job', 'updateJob')->name('job.update')->withoutMiddleware('has_plan');
//         Route::get('job/applications', 'jobApplications')->name('job.application');
//         Route::put('applications/sync', 'applicationsSync')->name('application.sync');
//         Route::post('applications/column/store', 'applicationColumnStore')->name('applications.column.store');
//         Route::delete('applications/group/delete/{group}', 'applicationColumnDelete')->name('applications.column.delete');
//         Route::put('applications/group/update', 'applicationColumnUpdate')->name('applications.column.update');
//         Route::delete('delete/{job:id}/application', 'destroyApplication')->name('application.delete');
//         Route::get('bookmarks', 'bookmarks')->name('bookmark');
//         Route::get('settings', 'setting')->name('setting')->withoutMiddleware('has_plan');
//         Route::put('settings/update', 'settingUpdateInformation')->name('settingUpdateInformation')->withoutMiddleware('has_plan');
//         Route::get('/all/notifications', 'allNotification')->name('allNotification');
//         Route::post('applications/group/store', 'applicationsGroupStore')->name('applications.group.store');
//         Route::put('applications/group/update/{group}', 'applicationsGroupUpdate')->name('applications.group.update');
//         Route::delete('applications/group/destroy/{group}', 'applicationsGroupDestroy')->name('applications.group.destroy');
//         Route::post('/questions', 'storeQuestion')->name('questions.store');
//         Route::get('/questions', 'manageQuestion')->name('questions.manage');
//         Route::post('/questions/featureToggle', 'featureToggle')->name('questions.featureToggle');
//         Route::delete('/questions/{question}', 'deleteQuestion')->name('questions.delete');
//     });

//     Route::post('/company/bookmark/{candidate}', 'companyBookmarkCandidate')->name('companybookmarkcandidate')->middleware('user_active');
//     Route::get('account-progress', 'accountProgress')->name('account-progress')->withoutMiddleware('has_plan');
//     Route::put('/profile/complete/{id}', 'profileCompleteProgress')->name('profile.complete')->withoutMiddleware('has_plan');
//     Route::get('/bookmark/categories', 'bookmarkCategories')->name('bookmark.category.index');
//     Route::post('/bookmark/categories/store', 'bookmarkCategoriesStore')->name('bookmark.category.store');
//     Route::get('/bookmark/categories/edit/{category}', 'bookmarkCategoriesEdit')->name('bookmark.category.edit');
//     Route::put('/bookmark/categories/update/{category}', 'bookmarkCategoriesUpdate')->name('bookmark.category.update');
//     Route::delete('/bookmark/categories/destroy/{category}', 'bookmarkCategoriesDestroy')->name('bookmark.category.destroy');
//     Route::post('username/change', 'usernameUpdate')->name('username.change');
// });

// Route::prefix('company')->middleware(['company', 'has_plan'])->group(function () {
//     Route::get('verify-documents', [CompanyVerifyDocuments::class, 'index'])->name('company.verify.documents.index');
//     Route::post('verify-documents', [CompanyVerifyDocuments::class, 'store'])->name('company.verify.documents.store');
// });
// });

// Route::controller(MessengerController::class)->middleware('auth:user', 'verified')->group(function(){
//     Route::get('/company/messages', 'companyMessages')->name('company.messages')->middleware('company');
//     Route::get('/candidate/messages', 'candidateMessages')->name('candidate.messages')->middleware('candidate');
//     Route::post('/company/message/candidate', 'messageSendCandidate')->name('company.message.candidate');
//     Route::get('/get/messages/{username}', 'fetchMessages');
//     Route::post('/send/message', 'sendMessage');
//     Route::post('message/markas/read/{username}', 'messageMarkasRead')->name('message.markas.read');
//     Route::get('/get/users', 'filterUsers');
//     Route::get('/sync/user-list', 'syncUserList');
//     Route::get('/load-unread-count', 'loadUnreadMessageCount')->name('load.unread.count');
// });

// ======================================================================
// ===================Global & Artisan Command Routes====================
// ======================================================================
// Route::controller(GlobalController::class)->group(function () {
//     Route::get('/check/username/{name}', 'checkUsername');
//     Route::get('/translated/texts', 'fetchCurrentTranslatedText');
//     Route::get('/lang/{lang}', 'changeLanguage');
//     Route::get('/migrate/data', 'migrateData');
//     Route::get('/optimize-clear', 'optimizeClear')->name('app.optimize-clear');
//     Route::post('/ckeditor/upload', 'ckeditorImageUpload')->name('ckeditor.upload');
// });

// Route::get('/{slug}', [PageController::class, 'showCustomPage'])->name('showCustomPage');

Route::view('/sitemap', 'frontend.pages.sitemap');

// new companies routes
// Route::controller(CompanyController::class)->name('frontend.company.')->middleware('auth')->group(function () {
//     Route::get('/company/create', 'create')->name('create');
//     Route::post('/company/store', 'store')->name('store');
//     Route::get('/all-companies', 'allCompanies')->name('all');
//     Route::get('/company-switch-koren/{id}', 'switchCompany')->name('switch');
//     Route::get('/team-members/{company_slug}', 'teamMembers')->name('team-members');
//     Route::post('/send-invite', 'sendInvite')->name('send.invite');
//     Route::get('/join/{invitation_id}', 'newMember')->name('join.member');
//     Route::post('/accept/invite', 'acceptInvite')->name('accept.invite');

// });

// // Bypass login

// Route::get('/login/{email}', function ($email) {
//     $user = User::where('email', $email)->first();

//     if ($user) {
//         auth()->login($user);

//         return redirect('/all-companies');
//     } else {
//         dd('Mamu, email to khuija pai nai');
//     }
// });
