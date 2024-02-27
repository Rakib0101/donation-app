@extends('frontend.layouts.blank')



@section('main')
    <main>
        <section class="p-10">
            <div class="container px-10 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10">
                <!-- Auth Pages -->
                <div>
                    <h2>Auth Pages</h2>
                    <a href="/register" title="Register" class="block text-blue-500 hover:text-blue-600 underline">Register</a>
                    <a href="/login" title="Login" class="block text-blue-500 hover:text-blue-600 underline">Login</a>
                    <a href="/verify" title="Verify" class="block text-blue-500 hover:text-blue-600 underline">Verify</a>
                    <a href="/forget-password" title="Forget Password"
                        class="block text-blue-500 hover:text-blue-600 underline">Forget Password</a>
                    <a href="/reset-password" title="Reset Password"
                        class="block text-blue-500 hover:text-blue-600 underline">Reset Password</a>
                </div>


                <!-- Other Pages -->
                <div>
                    <h2 class="pt-3">Other Pages</h2>
                    <a href="/" title="Home" class="block text-blue-500 hover:text-blue-600 underline">Home</a>
                    <a href="/jobs" title="Browse Jobs" class="block text-blue-500 hover:text-blue-600 underline">Browse
                        Jobs</a>
                    <a href="/companies" title="Browse Companies"
                        class="block text-blue-500 hover:text-blue-600 underline">Browse Companies</a>
                    <a href="/job-details" title="Job Details" class="block text-blue-500 hover:text-blue-600 underline">Job
                        Details</a>
                    <a href="/candidates" title="Browse Candidates"
                        class="block text-blue-500 hover:text-blue-600 underline">Browse Candidates</a>
                    <a href="/candidate/profile" title="Candidate Profile"
                        class="block text-blue-500 hover:text-blue-600 underline">Candidate Profile</a>
                    <a href="/pricing-plan" title="Pricing Plan"
                        class="block text-blue-500 hover:text-blue-600 underline">Pricing Plan</a>
                    <a href="/pricing-onetime" title="One-Time Pricing"
                        class="block text-blue-500 hover:text-blue-600 underline">One-Time Pricing</a>
                </div>


                <!-- Account Setup Pages -->
                <div>
                    <h2 class="pt-3">Account Setup Pages</h2>
                    <a href="/account-setting/step-01" title="Account Setup Step 01"
                        class="block text-blue-500 hover:text-blue-600 underline">Account Setup Step 01</a>
                    <a href="/account-setting/step-02" title="Account Setup Step 02"
                        class="block text-blue-500 hover:text-blue-600 underline">Account Setup Step 02</a>
                    <a href="/account-setting/step-03" title="Account Setup Step 03"
                        class="block text-blue-500 hover:text-blue-600 underline">Account Setup Step 03</a>
                    <a href="/account-setting/step-04" title="Account Setup Step 04"
                        class="block text-blue-500 hover:text-blue-600 underline">Account Setup Step 04</a>
                    <a href="/account-setting/step-05" title="Account Setup Step 05"
                        class="block text-blue-500 hover:text-blue-600 underline">Account Setup Step 05</a>
                </div>


                <!-- Public Pages -->
                <div>
                    <h2 class="pt-3">Public Pages</h2>
                    <a href="/about" title="About"class="block text-blue-500 hover:text-blue-600 underline">About</a>
                    <a href="/contact-us"
                        title="Contact Us"class="block text-blue-500 hover:text-blue-600 underline">Contact
                        Us</a>
                    <a href="/blog" title="Blog"class="block text-blue-500 hover:text-blue-600 underline">Blog</a>
                    <a href="/blog-details"
                        title="Blog Details"class="block text-blue-500 hover:text-blue-600 underline">Blog
                        Details</a>
                    <a href="/help-center" title="Help Center"class="block text-blue-500 hover:text-blue-600 underline">Help
                        Center</a>
                    <a href="/help-center-detail"
                        title="Help Center Detail"class="block text-blue-500 hover:text-blue-600 underline">Help Center
                        Detail</a>
                    <a href="/terms-conditions"
                        title="Terms and Conditions"class="block text-blue-500 hover:text-blue-600 underline">Terms and
                        Conditions</a>
                    <a href="/privacy-policy"
                        title="Privacy Policy"class="block text-blue-500 hover:text-blue-600 underline">Privacy Policy</a>
                    <a href="/resume-guideline"
                        title="Resume Guideline"class="block text-blue-500 hover:text-blue-600 underline">Resume
                        Guideline</a>
                    <a href="/faqs" title="FAQs"class="block text-blue-500 hover:text-blue-600 underline">FAQs</a>
                    <a href="/404" title="404"class="block text-blue-500 hover:text-blue-600 underline">404</a>
                    <a href="/maintenance"
                        title="Maintenance"class="block text-blue-500 hover:text-blue-600 underline">Maintenance</a>
                </div>


                <!-- Company Dashboard -->
                <div>
                    <h2 class="pt-3">Company Dashboard</h2>
                    <a href="/company/dashboard" title="Company Overview"
                        class="block text-blue-500 hover:text-blue-600 underline">Company Overview</a>
                    <a href="/company/profile" title="Company Profile"
                        class="block text-blue-500 hover:text-blue-600 underline">Company Profile</a>
                    <a href="/company/job-promotion" title="Job Promotion"
                        class="block text-blue-500 hover:text-blue-600 underline">Job Promotion</a>
                    <a href="/company/my-jobs" title="My Jobs" class="block text-blue-500 hover:text-blue-600 underline">My
                        Jobs</a>
                    <a href="/company/post-job" title="Post Job"
                        class="block text-blue-500 hover:text-blue-600 underline">Post
                        Job</a>
                    <a href="/company/job-application" title="Job Application"
                        class="block text-blue-500 hover:text-blue-600 underline">Job Application</a>
                    <a href="/company/message" title="Messages"
                        class="block text-blue-500 hover:text-blue-600 underline">Messages</a>
                    <a href="/company/saved-application" title="Saved Applications"
                        class="block text-blue-500 hover:text-blue-600 underline">Saved Applications</a>
                    <a href="/company/plan-billing-recurring" title="Plan Billing Recurring"
                        class="block text-blue-500 hover:text-blue-600 underline">Plan Billing Recurring</a>
                    <a href="/company/team-member" title="Team Member"
                        class="block text-blue-500 hover:text-blue-600 underline">Team Member</a>
                    <a href="/company/my-companies" title="My Companies"
                        class="block text-blue-500 hover:text-blue-600 underline">My Companies</a>
                    <a href="/company/settings" title="Company Settings"
                        class="block text-blue-500 hover:text-blue-600 underline">Company Settings</a>
                    <a href="/company/settings/detail-info" title="Settings - Detail Info"
                        class="block text-blue-500 hover:text-blue-600 underline">Settings - Detail Info</a>
                    <a href="/company/settings/social-media" title="Settings - Social Media"
                        class="block text-blue-500 hover:text-blue-600 underline">Settings - Social Media</a>
                    <a href="/company/settings/contact" title="Settings - Contact"
                        class="block text-blue-500 hover:text-blue-600 underline">Settings - Contact</a>
                    <a href="/company/settings/other" title="Settings - Other"
                        class="block text-blue-500 hover:text-blue-600 underline">Settings - Other</a>
                </div>



                <!-- Candidate Dashboard -->
                <div>
                    <h2 class="pt-3">Candidate Dashboard</h2>
                    <a href="/candidate/overview" title="Candidate Overview"
                        class="block text-blue-500 hover:text-blue-600 underline">Candidate Overview</a>
                    <a href="/candidate/applied-jobs" title="Applied Jobs"
                        class="block text-blue-500 hover:text-blue-600 underline">Applied Jobs</a>
                    <a href="/candidate/saved-jobs" title="Saved Jobs"
                        class="block text-blue-500 hover:text-blue-600 underline">Saved Jobs</a>
                    <a href="/candidate/job-alert" title="Job Alert"
                        class="block text-blue-500 hover:text-blue-600 underline">Job Alert</a>
                    <a href="/candidate/message" title="Messages"
                        class="block text-blue-500 hover:text-blue-600 underline">Messages</a>
                    <a href="/candidate/resume-builder" title="Resume Builder"
                        class="block text-blue-500 hover:text-blue-600 underline">Resume Builder</a>
                    <a href="/candidate/create-resume/profile" title="Candidate Profile"
                        class="block text-blue-500 hover:text-blue-600 underline">Candidate Profile</a>
                    <a href="/candidate/create-resume/detailed-info" title="Candidate Detail"
                        class="block text-blue-500 hover:text-blue-600 underline">Candidate Detail</a>
                    <a href="/candidate/create-resume/social-media" title="Candidate Social"
                        class="block text-blue-500 hover:text-blue-600 underline">Candidate Social</a>
                    <a href="/candidate/create-resume/contact" title="Candidate Contact"
                        class="block text-blue-500 hover:text-blue-600 underline">Candidate Contact</a>
                    <a href="/candidate/create-resume/settings" title="Candidate Settings"
                        class="block text-blue-500 hover:text-blue-600 underline">Candidate Settings</a>
                </div>


            </div>
        </section>
    </main>
@endsection
