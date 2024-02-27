@props(['job' => []])
@php
    $isLocked = false;
@endphp
<div id="jobdetails-drawer"
    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full duration-500  bg-white w-[95%] md:w-[85%] lg:w-[70%] xl:w-[60%] space-y-6"
    tabindex="-1" aria-labelledby="drawer-right-label">

    <div class="flex items-center flex-wrap justify-between">
        <button type="button" data-drawer-hide="jobdetails-drawer" aria-controls="jobdetails-drawer"
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
                Open job details in new tab
            </a>
        </div>
    </div>
    <div class="divide-gray-100 divide-y">
        <div class="flex items-center flex-wrap gap-3 pb-6">
            <div class="flex flex-wrap items-start gap-2">

                <div class="space-y-3">
                    <h4 class="heading-04 text-gray-900">Senior User Experience Designer</h4>
                    <div class="flex items-center gap-2 flex-wrap">

                        <div class="flex items-center gap-2 body-small-400 text-gray-600">
                            Posted : <strong>{{ $job['job_posted_at'] }}</strong>
                        </div>
                        <div
                            class="flex items-center gap-1 body-small-400 text-gray-600 before:content-['\2022'] before:mr-2">
                            <span class="badge-secondary-transparent">{{ $job['job_salary'] }}/ Month</span>
                        </div>
                        <div
                            class="flex items-center gap-1 body-small-400 text-gray-600 before:content-['\2022'] before:mr-2">
                            <span class="badge-green-transparent">{{ $job['job_type'] }}</span>
                        </div>
                        @if ($job['urgent'])
                            <div
                                class="flex items-center gap-1 body-small-400 text-gray-600 before:content-['\2022'] before:mr-2">
                                <span class="badge-red-fill ">Urgent</span>
                            </div>
                        @endif

                    </div>

                </div>
            </div>
            <div class="space-y-[0.75rem] ml-0 md:ml-auto">
                @if ($isLocked)
                    <div>
                        <button type="button" href="#" class="btn-label-primary">
                            <x-svg.lock-02 />
                            Unlock Profile
                        </button>
                    </div>
                @else
                    <div class="flex items-center gap-[0.5rem]">
                        <button type="button"
                            class="bg-primary-50 text-primary-500 w-[2.75rem] h-[2.75rem] rounded-lg flex items-center justify-center">
                            <x-svg.book-mark />
                        </button>
                        <div>
                            <button class="btn-primary" data-modal-target="apply-jobs-modal"
                                data-modal-toggle="apply-jobs-modal">
                                Apply Now
                                <x-svg.arrow-circle-right />
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 body-small-400 text-gray-700">
                        Expire in:
                        <span class="text-red-500 body-small-600"> 19 Jul, 2023</span>
                    </div>
                @endif
            </div>
        </div>
        <div
            class="flex items-start py-6 divide-gray-100 divide-y md:divide-x md:divide-y-0 flex-col md:flex-row gap-3">
            <div class="space-y-6 flex-1 pb-6 md:pb-0 md:pr-6 basis-[65%]">
                <h5 class="heading-06 text-gray-800">Job Description</h5>
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
                    <h6 class="body-large-600 text-gray-800">Key Responsibilities:</h6>
                    <ul class="list-disc pl-5 space-y-2">
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Lead the design and development of user-friendly and visually appealing digital experiences
                            across multiple platforms.
                        </li>
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Lead the design and development of user-friendly and visually appealing digital experiences
                            across multiple platforms.
                        </li>
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Lead the design and development of user-friendly and visually appealing digital experiences
                            across multiple platforms.
                        </li>
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Lead the design and development of user-friendly and visually appealing digital experiences
                            across multiple platforms.
                        </li>
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Lead the design and development of user-friendly and visually appealing digital experiences
                            across multiple platforms.
                        </li>
                    </ul>
                </div>
                <div class="space-y-[1rem]">
                    <h6 class="body-large-600 text-gray-800">Requirements:</h6>
                    <ul class="list-disc pl-5 space-y-2">
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Minimum of 15 years of experience in user experience design, with a strong portfolio
                            showcasing
                            successful projects.
                        </li>
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Bachelor's degree or higher in Design, Interaction Design, Human-Computer Interaction, or a
                            related field.
                        </li>
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Bachelor's degree or higher in Design, Interaction Design, Human-Computer Interaction, or a
                            related field.
                        </li>
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Bachelor's degree or higher in Design, Interaction Design, Human-Computer Interaction, or a
                            related field.
                        </li>
                        <li class="text-gray-700 text-[1rem] font-normal">
                            Bachelor's degree or higher in Design, Interaction Design, Human-Computer Interaction, or a
                            related field.
                        </li>
                    </ul>
                </div>
                <p class="text-gray-700 text-[1rem] font-normal">
                    We offer competitive compensation and a comprehensive benefits package, including health insurance,
                    retirement plans, paid time off, and professional development opportunities.
                </p>
                <div class="space-y-[1rem]">
                    <h6 class="body-large-600 text-gray-800">How to apply</h6>
                    <p class="text-gray-700 text-[1rem] font-normal">
                        To apply for this position, please submit your updated resume and a link to your portfolio
                        showcasing your design work. We look forward to hearing from you and reviewing your
                        qualifications.
                        Please send your application to Designerzafor@gmail.com with the subject line "Senior UX
                        Designer
                        Application".
                    </p>
                </div>
            </div>
            <div class="md:pl-6 md:pt-0 pt-6 basis-[35%]">
                <div class=" space-y-[1.5rem] divide-y divide-gray-100">
                    <div class=" space-y-[1.5rem] pb-4">

                        <div class="flex items-start gap-[0.75rem]">
                            <i class="text-primary-500 mt-1">
                                <x-svg.layers-two-01 />
                            </i>
                            <div class="space-y-[0.25rem]">
                                <h6 class="body-large-600 text-gray-900">Experienced</h6>
                                <p class="body-base-400 text-gray-600">Level of Seniority</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-[0.75rem]">
                            <i class="text-primary-500 mt-1">
                                <x-svg.target-04 />
                            </i>
                            <div class="space-y-[0.25rem]">
                                <h6 class="body-large-600 text-gray-900">15 years</h6>
                                <p class="body-base-400 text-gray-600">Min experience need</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-[0.75rem]">
                            <i class="text-primary-500 mt-1">
                                <x-svg.arrow-right-circle />
                            </i>
                            <div class="space-y-[0.25rem]">
                                <h6 class="body-large-600 text-gray-900">04</h6>
                                <p class="body-base-400 text-gray-600">Vacancy</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-[1rem] py-[1rem]">
                        <p class="caption-02 text-primary-500">Required Skills</p>
                        <div class="flex flex-wrap gap-[0.5rem]">
                            <span class="badge-secondary-transparent">UX Design</span>
                            <span class="badge-secondary-transparent">Ui Design</span>
                            <span class="badge-secondary-transparent">Wirefarme Design</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 py-[1rem]">
                        <p class="caption-02 text-primary-500">Job Company</p>
                        <div class="flex items-start gap-[0.75rem]">
                            <div class="w-[3rem] h-[3rem] rounded-md overflow-hidden">
                                <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company logo"
                                    class="w-full">
                            </div>
                            <div>
                                <h4 class="body-large-600 text-gray-900">Miro.Inc</h4>
                                <p class="body-small-400 text-gray-700">Foreign exchange company</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-[0.5rem] flex-wrap">
                            <span
                                class="bg-green-50 text-gray-900 body-small-500 inline-flex items-center py-[0.25rem] pl-[0.125rem] pr-[0.75rem] rounded-[0.375rem] gap-[0.25rem]">
                                <i
                                    class="h-[1.25rem] w-[1.25rem] rounded-[0.2rem] inline-flex items-center justify-center bg-green-500 text-gray-white">
                                    <x-svg.check />
                                </i>
                                Verified
                            </span>
                            <span class="badge-gray-transparent">
                                Finance
                            </span>
                        </div>
                    </div>
                    <div class="space-y-[1rem] py-[1rem]">
                        <p class="caption-02 text-primary-500">Keyword</p>
                        <div class="flex items-center gap-[0.5rem] flex-wrap">
                            <span class="badge-gray-transparent">
                                UI/UX Designer
                            </span>
                            <span class="badge-gray-transparent">
                                UX Designer
                            </span>
                            <span class="badge-gray-transparent">
                                Product Designer
                            </span>
                            <span class="badge-gray-transparent">
                                Product Designer
                            </span>
                        </div>

                    </div>
                    <div class="space-y-[1.5rem] pt-4">
                        <div class="space-y-[0.5rem]">
                            <span class="body-small-400 text-gray-500"> Share</span>
                            <div class="space-y-2">
                                <div class="flex items-center gap-[0.5rem]">
                                    <x-frontend.forms.input value="https://example.com/jobs/ui-desinger" />
                                    <button class="btn-white" type="button">
                                        Copy
                                    </button>
                                </div>
                                <div class="flex items-center gap-[0.5rem]">
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
            </div>
        </div>
        <div class="pt-6 space-y-3">
            <h6 class="heading-06 text-gray-800">Similar Jobs</h6>
            <div class="space-y-2">
                @foreach ($job['similar_jobs'] as $smj)
                    <p class="group line-clamp-1 body-base-400 text-gray-700">
                        <a href="#"
                            class="links-url-base text-primary-500 group-hover:text-primary-600 underline">{{ $smj['title'] }}</a>
                        {{ $smj['description'] }}
                    </p>
                @endforeach

            </div>
        </div>
    </div>

</div>
