@props(['candidate' => []])
@php
    $isLocked = false;
@endphp
<div id="companydetails-drawer"
    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full duration-500  bg-white w-[95%] md:w-[85%] lg:w-[70%] xl:w-[60%] space-y-6"
    tabindex="-1" aria-labelledby="drawer-right-label">

    <div class="flex items-center flex-wrap justify-between">
        <button type="button" data-drawer-hide="companydetails-drawer" aria-controls="companydetails-drawer"
            class="text-primary-500  bg-primary-50 hover:bg-primary-500 hover:text-gray-white  rounded-lg text-sm w-10 h-10  inline-flex items-center justify-center ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div>
            <a href="#" target="_blank"
                class="links-url-small underline hover:text-primary-600 text-primary-500 transition duration-200 ease-linear inline-flex items-center gap-2 capitalize">
                <x-svg.link-external-01 />
                Open company details in new tab
            </a>
        </div>
    </div>
    <div class="divide-gray-100 divide-y space-y-6">
        <div class="py-6 flex items-center justify-between flex-wrap gap-4">
            <div class="flex flex-wrap items-center gap-6">
                <div class="w-[7.75rem] h-[7.75rem]">
                    <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company image"
                        class="w-full">
                </div>
                <div class="space-y-[1rem]">
                    <div>
                        <h4 class="heading-04 text-gray-900">Stripe Inc.</h4>
                        <p class="body-base-400 text-gray-900">Financial services company</p>
                    </div>
                    <div class="flex items-center gap-[0.5rem]">
                        <span
                            class="bg-green-50 text-gray-900 body-small-500 inline-flex items-center py-[0.25rem] pl-[0.125rem] pr-[0.75rem] rounded-[0.375rem] gap-[0.25rem]">
                            <i
                                class="h-[1.25rem] w-[1.25rem] rounded-[0.2rem] inline-flex items-center justify-center bg-green-500 text-gray-white">
                                <x-svg.check />
                            </i>
                            Verified
                        </span>
                        <span class="badge-primary-transparent">
                            3 Open Position
                        </span>
                    </div>
                </div>
            </div>
            <div class="space-y-3">
                <div class="flex items-center gap-[0.5rem]">
                    @if ($isLocked)
                        <div>
                            <button type="button" href="#" class="btn-label-primary">
                                <x-svg.lock-02 />
                                Unlock Profile
                            </button>
                        </div>
                    @else
                        <div>
                            <a href="#" class="btn-primary" data-modal-target="apply-jobs-modal"
                                data-modal-toggle="apply-jobs-modal">
                                View jobs
                                <x-svg.arrow-circle-right />
                            </a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
        <div class="py-6  flex flex-col md:flex-row divide-y md:divide-y-0 md:divide-x divide-gray-100">
            <div class="space-y-4 basis-[60%] pr-6 ">

                <h5 class="heading-05 text-gray-900">About company</h5>
                <p class="text-[1rem] text-gray-700 font-normal">Stripe builds financial infrastructure that ambitious
                    companies use to launch their boldest products. Our customers range from hours-old startups to
                    complex
                    global businesses. Collectively, they are growing the GDP of the internet. You can help.</p>
                <p class="text-[1rem] text-gray-700 font-normal">Stripe builds financial infrastructure that ambitious
                    companies use to launch their boldest products. Our customers range from hours-old startups to
                    complex
                    global businesses. Collectively, they are growing the GDP of the internet. You can help.</p>
                <p class="text-[1rem] text-gray-700 font-normal">Stripe builds financial infrastructure that ambitious
                    companies use to launch their boldest products. Our customers range from hours-old startups to
                    complex
                    global businesses. Collectively, they are growing the GDP of the internet. You can help.</p>
                <div class="space-y-[1rem]">
                    <h6 class="body-xl-600 text-gray-900">Working for the world, across the world</h6>
                    <p class="text-[1rem] text-gray-700 font-normal">Stripe is a team, not a place. We have two
                        headquarters
                        (San Francisco and Dublin), but we belong to
                        the internet. We speak more than 30 languages with our customers and even more with our
                        families.
                    </p>
                </div>
                <div class="space-y-[1rem]">
                    <h5 class="heading-05 text-gray-900">Life at stripe</h5>
                    <div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-3  gap-[1rem]">
                        <div class="h-auto w-full overflow-hidden rounded-[0.75rem]">
                            <img src="{{ asset('frontend/assets/images/life-at-company.png') }}"
                                alt="life at company img" class="w-full">
                        </div>
                        <div class="h-auto w-full overflow-hidden rounded-[0.75rem]">
                            <img src="{{ asset('frontend/assets/images/life-at-company.png') }}"
                                alt="life at company img" class="w-full">
                        </div>
                        <div class="h-auto w-full overflow-hidden rounded-[0.75rem]">
                            <img src="{{ asset('frontend/assets/images/life-at-company.png') }}"
                                alt="life at company img" class="w-full">
                        </div>
                        <div class="h-auto w-full overflow-hidden rounded-[0.75rem]">
                            <img src="{{ asset('frontend/assets/images/life-at-company.png') }}"
                                alt="life at company img" class="w-full">
                        </div>
                        <div class="h-auto w-full overflow-hidden rounded-[0.75rem]">
                            <img src="{{ asset('frontend/assets/images/life-at-company.png') }}"
                                alt="life at company img" class="w-full">
                        </div>
                        <div class="h-auto w-full overflow-hidden rounded-[0.75rem]">
                            <img src="{{ asset('frontend/assets/images/life-at-company.png') }}"
                                alt="life at company img" class="w-full">
                        </div>
                    </div>
                </div>
                {{-- <div class="space-y-[1rem]">
                    <h5 class="heading-05 text-gray-900">Open position (3)</h5>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-[1rem]">
                        <x-frontend.jobs.job-card />
                        <x-frontend.jobs.job-card />
                        <x-frontend.jobs.job-card />
                        <x-frontend.jobs.job-card />
                    </div>
                    <div>
                        <a href="#" class="btn-text-primary">View All <x-svg.arrow-circle-right /></a>
                    </div>
                </div> --}}


            </div>
            <div class="w-full basis-[40%] space-y-6">

                <div class="p-6  divide-y divide-gray-100">
                    <div class="space-y-[1rem] pb-[1rem]">
                        <p class="caption-02 text-primary-500">Employers information</p>
                        <div class="space-y-[1rem]">
                            <div class="text-[1rem] font-normal text-gray-700">
                                Year of establishment: <b class="text-gray-900">Jan, 1997</b>
                            </div>
                            <div class="text-[1rem] font-normal text-gray-700">
                                Number of employees: <b class="text-gray-900">500 - 999</b>
                            </div>
                            <div class="text-[1rem] font-normal text-gray-700">
                                Language: <b class="text-gray-900">English, Bangla</b>
                            </div>
                            <div class="text-[1rem] font-normal text-gray-700">
                                Headquarters: <b class="text-gray-900">San Francisco</b>
                            </div>
                            <div class="text-[1rem] font-normal text-gray-700">
                                Industry: <b class="text-gray-900">Financial services</b>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-[1rem] py-[1rem]">
                        <p class="caption-02 text-primary-500">Perks & Benefits</p>
                        <div class="flex flex-wrap gap-[0.5rem]">
                            <span class="badge-gray-transparent">Health insurance</span>
                            <span class="badge-gray-transparent">Health insurance</span>
                            <span class="badge-gray-transparent">Health insurance</span>
                            <span class="badge-gray-transparent">Health insurance</span>
                            <span class="badge-gray-transparent">Health insurance</span>
                            <span class="badge-gray-transparent">Health insurance</span>
                            <span class="badge-gray-transparent">Health insurance</span>
                            <span class="badge-gray-transparent">Health insurance</span>
                            <span class="badge-gray-transparent">Health insurance</span>

                        </div>
                    </div>

                    <div class="py-4">
                        <p class="caption-02 text-primary-500">Social Profile</p>
                        <ul class="flex flex-wrap items-center gap-x-4 mt-4">
                            <li class="inline-flex">
                                <a href="#"
                                    class="inline-flex items-center gap-2 heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                    <i>
                                        <x-svg.globe-03 />
                                    </i>
                                    Website
                                </a>
                            </li>
                            <li class="inline-flex">
                                <a href="#"
                                    class="inline-flex items-center gap-2 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                    <i>
                                        <x-svg.linkedin />
                                    </i>
                                </a>
                            </li>
                            <li class="inline-flex">
                                <a href="#"
                                    class="inline-flex items-center gap-2 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                    <i>
                                        <x-svg.facebook />
                                    </i>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <div class="space-y-[0.5rem] pt-4">
                        <span class="body-small-400 text-gray-500"> Share</span>
                        <div class="flex items-center flex-wrap gap-[0.5rem]">
                            <button class="btn-white" type="button">
                                <x-svg.paperclip />
                                Copy Link
                            </button>
                            <a class="icon-btn-white h-[2.75rem] w-[2.75rem]" href="mailto: abc@example.com">
                                <x-svg.mail-02 />
                            </a>
                            <a class="icon-btn-white h-[2.75rem] w-[2.75rem]" href="#">
                                <x-svg.linkedin />
                            </a>
                            <a class="icon-btn-white h-[2.75rem] w-[2.75rem]" href="#">
                                <x-svg.facebook />
                            </a>
                            <a class="icon-btn-white h-[2.75rem] w-[2.75rem]" href="#">
                                <x-svg.twitter />
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div style="background: linear-gradient(0deg, rgba(255, 240, 230, 0.50) 0%, rgba(255, 240, 230, 0.50) 100%), #FFF;"
            class="py-[5rem] mt-[5rem]">
            <div class="container mx-auto">
                <div class="container mx-auto space-y-[2.5rem]">
                    <h4 class="heading-01 tex-gray-900 text-center">Latest Jobs</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                        {{-- <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card /> --}}
                    </div>
                    <div class="text-center">
                        <a role="button" href="#" class="btn-white">
                            <x-svg.magnify-glass />
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
