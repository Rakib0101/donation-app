<div class="w-full flex flex-col sm:flex-row gap-4 justify-between items-center py-6">
    <div class="flex gap-3 items-center">
        <a href="{{ route('candidate.chooseTemplate') }}" class="inline-flex text-[#0A65CC]">
            <x-svg.arrow-left />
        </a>
        <div>
            <h3 class="text-base leading-5 font-medium text-[#18191C] mb-1">
                {{ __('my_resume') }}
            </h3>
            <a href="{{ route('candidate.chooseTemplate') }}" class="text-sm font-semibold mb-0">
                {{ __('change_template') }}
            </a>
        </div>
    </div>
    <div class="inline-flex flex-wrap sm:flex-nowrap justify-center gap-4 items-center">
        <a href="javascript:void(0)"
            class="bg-white border border-gray-100 rounded outline-none shadow-none p-2 inline-flex text-primary-500">
            <x-svg.download-cloud-01 />
        </a>
        <button class="btn-secondary" data-drawer-target="drawer-resume" data-drawer-show="drawer-resume"
            data-drawer-placement="right" aria-controls="drawer-resume">
            <x-svg.plus-circle />
            Add Information
        </button>
        @if (!$resume->is_active)
            <button class="btn-primary" type="button" data-modal-target="save-resume-modal" data-modal-toggle="save-resume-modal">
                {{ __('save_resume') }}
            </button>
        @endif
    </div>
</div>
<div class="mb-8 border border-gray-100 rounded-lg shadow-gray-base-1 bg-white overflow-x-auto">
    <div class="max-w-[1320px] min-w-[1200px] mx-auto">
        <div class="flex">
            <div class="w-1/3 bg-gray-700">
                <div class="pt-10 pb-5"><img src="http://127.0.0.1:8001/backend/image/default.png" alt="image"
                        class="rounded-full w-[200px] h-[200px] mx-auto block"></div>
                <div class="pl-8">
                    <div class="py-5">
                        <h2 class="text-white text-2xl">Contact</h2>
                        <div class="w-full" style="border: 1px solid rgb(192, 191, 191);"></div>
                        <div class="pt-4">
                            <h4 class="text-base font-medium text-gray-100 mb-1">
                                Phone
                            </h4>
                            <p class="text-base text-[#a2a2a3] m-0 p-0">+880123456789</p>
                        </div>
                        <div class="pt-4">
                            <h4 class="text-base font-medium text-gray-100 mb-1 leading-[100%]">
                                Email
                            </h4>
                            <p class="text-base text-[#a2a2a3] m-0 p-0">candidate@mail.com</p>
                        </div> <!---->
                        <div class="pt-4">
                            <h4 class="text-base font-medium text-gray-100 mb-1 leading-[100%]">
                                Social Media
                            </h4>
                            <div class="flex flex-col"><a href="https://www.facebook.com/zakirsoft"
                                    class="inline-flex text-md gap-2 text-[#a2a2a3] items-center whitespace-nowrap"><span
                                        class="inline-flex"><i class="ph-fill ph-facebook-logo  text-2xl"></i></span>
                                    <span>zakirsoft</span></a></div>
                        </div>
                    </div>
                    <div class="py-5 z-10">
                        <h2 class="text-white text-2xl">Education</h2>
                        <div class="w-full" style="border: 1px solid rgb(192, 191, 191);"></div>
                        <div class="pt-4">
                            <h6 class="text-base text-gray-100">
                                2002 -
                                2002
                            </h6>
                            <p class="text-base capitalize text-white m-0 p-0">
                                SSC
                            </p>
                            <p class="text-base capitalize text-white m-0 p-0">
                                Secondary
                            </p>
                        </div>
                        <div class="pt-4">
                            <h6 class="text-base text-gray-100">
                                2004 -
                                2004
                            </h6>
                            <p class="text-base capitalize text-white m-0 p-0">
                                BSC
                            </p>
                            <p class="text-base capitalize text-white m-0 p-0">
                                Graduation
                            </p>
                        </div>
                        <div class="pt-4">
                            <h6 class="text-base text-gray-100">
                                2010 -
                                2010
                            </h6>
                            <p class="text-base capitalize text-white m-0 p-0">
                                MSC
                            </p>
                            <p class="text-base capitalize text-white m-0 p-0">
                                Masters
                            </p>
                        </div>
                    </div>
                    <div class="py-5 z-10">
                        <h2 class="text-white text-2xl">Skills</h2>
                        <div class="w-full" style="border: 1px solid rgb(192, 191, 191);"></div>
                        <div class="pt-4">
                            <ul class="text-white text-base pl-5">
                                <li class="py-1 text-base text-[#bfbfc2]">
                                    laravel
                                </li>
                                <li class="py-1 text-base text-[#bfbfc2]">
                                    apache nutch
                                </li>
                            </ul>
                        </div>
                    </div> <!---->
                    <div class="pb-[50px] z-10">
                        <h2 class="text-white text-2xl">Language</h2>
                        <div class="w-full" style="border: 1px solid rgb(192, 191, 191);"></div>
                        <div class="pt-2">
                            <p class="text-base text-[#bfbfc2] m-0 pt-1">
                                Macedonian
                            </p>
                            <p class="text-base text-[#bfbfc2] m-0 pt-1">
                                Southern Sotho
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-2/3 px-8 bg-white pb-10">
                <div class="pt-14 text-black">
                    <h2 class="text-5xl text-[#575751]"><strong class="text-gray-600">John
                            Doe </strong></h2>
                    <h4 class="text-3xl mb-8">Software Developer</h4>
                    <p class="pt-2 m-0 pb-4 text-justify">
                        Sometimes you may wish to stop running validation rules on an attribute after the first
                        validation failure. To do so, assign the bail rule to the attribute:
                    </p>
                </div>
                <div class="pt-1">
                    <h2 class="text-black font-semibold text-2xl">Experience</h2>
                    <div class="w-full" style="border: 1px solid rgb(82, 79, 82);"></div>
                    <div class="mt-10">
                        <div class="ml-2 pl-5 relative" style="border-left: 1px solid rgb(82, 79, 82);">
                            <span class="absolute top-0 -left-[6px] rounded-full w-2.5 h-2.5 inline-flex z-50 bg-white"
                                style="border: 2px solid rgb(50, 59, 76);"></span>
                            <div>
                                <p class="text-[#61615e] text-base leading-[100%] mb-[5px] font-semibold"
                                    style="padding-top: 0px;">
                                    January 2021 -
                                    January 2022
                                </p> <span class="text-base text-gray-gray-600 m-0 p-0">
                                    Google
                                </span>
                                <h4 class="text-lg text-[#4d4a4d] font-semibold mb-2.5 mt-2">
                                    Software Engineer
                                </h4>
                                <div class="text-sm pb-5">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts
                                    and
                                    documentation to identify requirements and solutions, Write well-designed,
                                    testable
                                    code, Produce specifications and determine operational feasibility
                                </div>
                            </div>
                        </div>
                        <div class="ml-2 pl-5 relative" style="border-left: 1px solid rgb(82, 79, 82);">
                            <span class="absolute top-0 -left-[6px] rounded-full w-2.5 h-2.5 inline-flex z-50 bg-white"
                                style="border: 2px solid rgb(50, 59, 76);"></span>
                            <div>
                                <p class="text-[#61615e] text-base leading-[100%] mb-[5px] font-semibold"
                                    style="padding-top: 0px;">
                                    January 2020 -
                                    December 2021
                                </p> <span class="text-base text-gray-gray-600 m-0 p-0">
                                    Facebook
                                </span>
                                <h4 class="text-lg text-[#4d4a4d] font-semibold mb-2.5 mt-2">
                                    Product Manager
                                </h4>
                                <div class="text-sm pb-5">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts
                                    and
                                    documentation to identify requirements and solutions, Write well-designed,
                                    testable
                                    code, Produce specifications and determine operational feasibility
                                </div>
                            </div>
                        </div>
                        <div class="ml-2 pl-5 relative" style="border-left: 1px solid rgb(82, 79, 82);">
                            <span class="absolute top-0 -left-[6px] rounded-full w-2.5 h-2.5 inline-flex z-50 bg-white"
                                style="border: 2px solid rgb(50, 59, 76);"></span>
                            <div>
                                <p class="text-[#61615e] text-base leading-[100%] mb-[5px] font-semibold"
                                    style="padding-top: 0px;">
                                    June 2015 -
                                    December 2019
                                </p> <span class="text-base text-gray-gray-600 m-0 p-0">
                                    Twitter
                                </span>
                                <h4 class="text-lg text-[#4d4a4d] font-semibold mb-2.5 mt-2">
                                    Senior Software Engineer
                                </h4>
                                <div class="text-sm pb-5">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts
                                    and
                                    documentation to identify requirements and solutions, Write well-designed,
                                    testable
                                    code, Produce specifications and determine operational feasibility
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- drawer component -->
<x-frontend.candidate.resume.resume-drawer />

<!-- Save Resume modal -->
@if (!$resume->is_active)
<x-frontend.candidate.resume.save-resume />
@endif
