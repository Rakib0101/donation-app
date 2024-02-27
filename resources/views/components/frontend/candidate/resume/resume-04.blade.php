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
    <div class="template-box max-w-[1320px] min-w-[1200px] mx-auto text-white relative"
        style="border: 1px solid rgb(200, 204, 209);">
        <div class="bg-[#942637] h-[160px] absolute left-0 top-0 w-full z-10"></div>
        <div class="pt-16 pb-12 flex z-30 relative">
            <div class="w-[30%] pl-10">
                <div class="mb-[42px]"><img src="http://127.0.0.1:8001/backend/image/default.png" alt="image"
                        class="rounded-full w-[224px] h-[224px] inline-block"></div>
                <div>
                    <div>
                        <h4 class="text-[#942637] text-[21px] font-semibold">My Contact</h4>
                        <p class="w-[150px]" style="border-bottom: 3px solid rgb(148, 38, 55); padding: 0px 0px 5px;">
                        </p>
                    </div>
                    <p class="flex items-center gap-1 text-black m-0 py-1"><i class="ph ph-envelope-open text-2xl"></i>
                        <span class="mt-[-3.5px] text-base">
                            candidate@mail.com
                        </span></p> <!---->
                    <p class="flex items-center gap-1 text-black m-0 py-1"><i class="ph ph-globe text-2xl"></i> <span
                            class="mt-[-3.5px] text-base">
                            https://johndoe.com
                        </span></p>
                    <p class="flex items-start gap-1 text-black m-0 py-1"><i class="ph ph-phone-call text-2xl"></i>
                        <span class="mt-[-3.5px] text-base">
                            +880123456789
                        </span></p>
                    <div>
                        <p class="flex items-start gap-1 text-black m-0 py-1"><span class="mt-[-3.5px] text-sm"><a
                                    href="https://www.facebook.com/zakirsoft"
                                    class="inline-flex text-base gap-2 text-black items-center whitespace-nowrap"><span
                                        class="text-black inline-flex text-2xl"><i
                                            class="ph-fill ph-facebook-logo"></i></span> <span
                                        class="text-black">zakirsoft</span></a></span></p>
                    </div>
                </div>
                <div>
                    <div>
                        <h4 class="text-[#942637] text-[21px] font-semibold">Skill</h4>
                        <p class="w-[150px]" style="border-bottom: 3px solid rgb(148, 38, 55); padding: 0px 0px 5px;">
                        </p>
                    </div>
                    <ul class="text-black text-base pl-5">
                        <li class="text-black text-base">
                            laravel
                        </li>
                        <li class="text-black text-base">
                            apache nutch
                        </li>
                    </ul>
                </div> <!---->
                <div>
                    <div>
                        <h4 class="text-[#942637] text-[21px] font-semibold">Language</h4>
                        <p class="w-[150px]" style="border-bottom: 3px solid rgb(148, 38, 55); padding: 0px 0px 5px;">
                        </p>
                    </div>
                    <ul class="text-black text-base pl-5">
                        <li class="text-black text-base">
                            Macedonian
                        </li>
                        <li class="text-black text-base">
                            Southern Sotho
                        </li>
                    </ul>
                </div> <!---->
                <div>
                    <h4 class="text-[#942637] text-[21px] whitespace-normal font-semibold">Education
                    </h4>
                    <p class="w-[165px]" style="border-bottom: 3px solid rgb(148, 38, 55); padding: 0px 0px 5px;">
                    </p>
                    <p class="flex text-sm items-start gap-2 text-black"><i
                            class="ph-fill ph-circle bg-black rounded-full mt-[5px]"></i> <span
                            class="flex gap-1 flex-col text-base"><span>
                                Secondary
                            </span> <span class="italic">
                                SSC
                            </span> <span class="italic">
                                2002 - 2002
                            </span></span></p>
                    <p class="flex text-sm items-start gap-2 text-black"><i
                            class="ph-fill ph-circle bg-black rounded-full mt-[5px]"></i> <span
                            class="flex gap-1 flex-col text-base"><span>
                                Graduation
                            </span> <span class="italic">
                                BSC
                            </span> <span class="italic">
                                2004 - 2004
                            </span></span></p>
                    <p class="flex text-sm items-start gap-2 text-black"><i
                            class="ph-fill ph-circle bg-black rounded-full mt-[5px]"></i> <span
                            class="flex gap-1 flex-col text-base"><span>
                                Masters
                            </span> <span class="italic">
                                MSC
                            </span> <span class="italic">
                                2010 - 2010
                            </span></span></p>
                </div>
            </div>
            <div class="w-[70%] px-14">
                <div class="pb-[30px]">
                    <h2 class="text-4xl text-[#f5f5f4]">
                        John Doe
                    </h2>
                    <h4 class="text-2xl text-[#f5f5f4]">
                        Software Developer
                    </h4>
                </div>
                <div>
                    <div>
                        <h4 class="text-[#942637] text-[21px] font-semibold">About Me</h4>
                        <p class="w-[165px]" style="border-bottom: 3px solid rgb(148, 38, 55); padding: 0px 0px 5px;">
                        </p>
                    </div>
                    <p class="text-black text-sm">
                        Sometimes you may wish to stop running validation rules on an attribute after the first
                        validation failure. To do so, assign the bail rule to the attribute:
                    </p>
                </div>
                <div class="text-black">
                    <div>
                        <div>
                            <h4 class="text-[#942637] text-[21px] font-semibold">Professional Experience
                            </h4>
                            <p class="w-[165px]"
                                style="border-bottom: 3px solid rgb(148, 38, 55); padding: 0px 0px 5px;"></p>
                        </div>
                        <div>
                            <p class="text-black mb-0.5 text-lg font-semibold">Google</p>
                            <p class="mb-2 text-sm italic">January 2021 -
                                January 2022</p>
                            <p class="mb-5"> Execute full software development life cycle (SDLC), Develop flowcharts,
                                layouts and documentation to identify requirements and solutions, Write well-designed,
                                testable code, Produce specifications and determine operational feasibility </p>
                        </div>
                        <div>
                            <p class="text-black mb-0.5 text-lg font-semibold">Facebook</p>
                            <p class="mb-2 text-sm italic">January 2020 -
                                December 2021</p>
                            <p class="mb-5"> Execute full software development life cycle (SDLC), Develop flowcharts,
                                layouts and documentation to identify requirements and solutions, Write well-designed,
                                testable code, Produce specifications and determine operational feasibility </p>
                        </div>
                        <div>
                            <p class="text-black mb-0.5 text-lg font-semibold">Twitter</p>
                            <p class="mb-2 text-sm italic">June 2015 -
                                December 2019</p>
                            <p class="mb-5"> Execute full software development life cycle (SDLC), Develop flowcharts,
                                layouts and documentation to identify requirements and solutions, Write well-designed,
                                testable code, Produce specifications and determine operational feasibility </p>
                        </div>
                    </div> <!----> <!---->
                </div>
            </div>
        </div>
        <div class="bg-[#942637] h-[20px] absolute left-0 bottom-0 w-full"></div>
    </div>
</div>

<!-- drawer component -->
<x-frontend.candidate.resume.resume-drawer />

<!-- Save Resume modal -->
@if (!$resume->is_active)
<x-frontend.candidate.resume.save-resume />
@endif
