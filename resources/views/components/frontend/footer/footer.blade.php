<footer class="pt-20 bg-[#14181A] mt-auto">
    <div class="container">
        <div class="footer-top pb-14 flex flex-wrap gap-5">
            <div class="max-w-[424px] flex flex-col gap-5">
                <a href="/">
                    <img src="{{ asset('frontend/assets/images/logo/dark-logo.png') }}" alt="">
                </a>
                <p class="body-large-400 text-gray-400">{{ __('job_portal_description') }}</p>
                <ul class="flex gap-2.5 items-center">
                    <li>
                        <a href=""
                            class="text-gray-500 p-2 inline-flex justify-center items-center rounded-full hover:text-gray-900 hover:bg-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="text-gray-500 p-2 inline-flex justify-center items-center rounded-full hover:text-gray-900 hover:bg-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="text-gray-500 p-2 inline-flex justify-center items-center rounded-full hover:text-gray-900 hover:bg-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="text-gray-500 p-2 inline-flex justify-center items-center rounded-full hover:text-gray-900 hover:bg-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="text-gray-500 p-2 inline-flex justify-center items-center rounded-full hover:text-gray-900 hover:bg-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex-grow sm:pl-[60px]">
                <h3 class="widget-title mb-3 text-base-600 text-white">{{ __('quick_links') }}</h3>
                <ul>
                    <li><a href="/pricing-plan" class="footer-link">{{__('pricing')}}</a></li>
                    <li><a href="/contact-us" class="footer-link">{{__('contact')}}</a></li>
                    <li><a href="/blog" class="footer-link">{{__('blog')}}</a></li>
                </ul>
            </div>
            <div class="flex-grow">
                <h3 class="widget-title mb-3 text-base-600 text-white">{{__('candidate')}}</h3>
                <ul>
                    <li><a href="/candidate/resume-builder" class="footer-link">{{ __('build_resume') }}</a></li>
                    <li><a href="/jobs" class="footer-link">{{__('search_job')}}</a></li>
                    <li><a href="/companies" class="footer-link">{{__('search_employers')}}</a></li>
                </ul>
            </div>
            <div class="flex-grow">
                <h3 class="widget-title mb-3 text-base-600 text-white">{{__('employers')}}</h3>
                <ul>
                    <li><a href="/company/post-job" class="footer-link">{{__('post_job')}}</a></li>
                    <li><a href="/candidate/resume-builder" class="footer-link">{{ __('search_resume') }}</a></li>
                    <li><a href="/candidates" class="footer-link">{{ __('job_application') }}</a></li>
                </ul>
            </div>
            <div class="flex-grow">
                <h3 class="widget-title mb-3 text-base-600 text-white">{{__('support')}}</h3>
                <ul>
                    <li><a href="/help-center" class="footer-link">{{ __('help_center') }}</a></li>
                    <li><a href="/terms-conditions" class="footer-link">{{__('terms_condition')}}</a></li>
                    <li><a href="/privacy-policy" class="footer-link">{{ __('privacy_policy') }}</a></li>
                    <li><a href="/faqs" class="footer-link">{{__('faqs')}}</a></li>
                </ul>
            </div>
        </div>
        <div
            class="footer-bottom pt-6 lg:pt-0 flex gap-4 flex-wrap-reverse justify-center items-center border-t border-gray-800">
            <img src="{{ asset('frontend/assets/images/mobile-app.png') }}" alt="">
            <div class="flex-grow">
                <h2 class="heading-05 text-white mb-2">{{ __('download_mobile_app') }}</h2>
                <p class="body-large-500 text-gray-200 mb-6">{{ __('get_everything_at_your_fingertips') }}</p>
                <div class="flex gap-3">
                    <a href="" class="hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('frontend/assets/images/logo/play-store.png') }}" alt="">
                    </a>
                    <a href="" class="hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('frontend/assets/images/logo/app-store.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="flex-grow">
                <p class="body-base-400 text-gray-400 flex lg:justify-end">© 2023 Jobpilot - Job Portal. All rights
                    Reserved</p>
            </div>
        </div>
    </div>
</footer>
