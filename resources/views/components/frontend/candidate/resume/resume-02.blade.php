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
        <button class="btn-secondary" type="button" data-drawer-target="drawer-resume" data-drawer-show="drawer-resume"
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
    <div class="max-w-[1320px] min-w-[1200px] mx-auto overflow-x-auto bg-[#0F172A]">
        <div class="pt-20 pb-8 text-center flex justify-center">
            <div>
                <h2 class="text-[#E2E8F0] font-extrabold leading-[71px] text-6xl">
                    John Doe
                </h2>
                <div class="pt-2">
                    <span class="text-[#CBD5E1] font-medium text-[20px] leading-[25px] pt-2">
                        Software Developer
                    </span>
                </div>
                <div class="flex tw justify-center gap-4 pt-4">
                    <div class="email flex items-center justify-center gap-1 text-[#E2E8F0]">
                        <i class="ph ph-envelope-simple"></i>
                        <a href="#" class="text-base font-normal text-[#E2E8F0]">
                            candidate@mail.com
                        </a>
                    </div>
                    <div class="email flex items-center justify-center gap-1 text-[#E2E8F0]"><i class="ph ph-phone"></i>
                        <a href="#" class="text-base font-normal text-[#E2E8F0]">
                            +880123456789
                        </a>
                    </div>
                </div>
                <div class="portfolio flex gap-2 justify-center mt-5"><button
                        class="bg-[#F6F3FF] border border-[#222222] text-[#222222] flex items-center flex-row gap-1 rounded-3xl py-2 px-4"><span
                            class="inline-flex"> <i class="ph ph-globe  pt-1"></i></span> <a href="https://johndoe.com"
                            target="_blank"
                            class="text-[14px] leading-4 font-semibold text-[#222222]">https://johndoe.com</a></button>
                    <button
                        class="bg-[#F6F3FF] border border-[#222222] text-[#222222] flex items-center flex-row gap-1 rounded-3xl py-2 px-4"><span
                            class="inline-flex"><i class="ph ph-facebook-logo  pt-1"></i></span> <a
                            href="https://www.facebook.com/zakirsoft" target="_blank"
                            class="text-[14px] leading-4 font-semibold text-[#222222]">zakirsoft</a></button>
                </div>
            </div>
        </div>
        <div class="mx-auto p-8 bg-[#0F172A]">
            <div class="education-section pb-[126px]">
                <div>
                    <table class="skill-table w-full">
                        <tr>
                            <td class="w-[30%] align-top border-b border-b-[#334155]">
                                <p class="text-base py-7 mb-0 font-bold text-[#E2E8F0]">Education</p>
                            </td>
                            <td class="align-top border-b border-b-[#334155]">
                                <div class="py-7">
                                    <div class="flex items-baseline justify-between">
                                        <div class="title flex gap-1 items-center">
                                            <p class="text-[18px] leading-[23px] font-bold text-[#E2E8F0]">
                                                SSC</p>
                                            <p class="text-[18px] leading-[23px] font-normal text-[#E2E8F0]">
                                                — Secondary</p>
                                        </div>
                                        <div class="align-top flex items-center gap-1 pt-0"><i
                                                class="ph ph-calendar text-[#64748B]"></i> <span
                                                class="text-[#E2E8F0] font-medium text-[16px] leading-[17px] font-['Inconsolata']">
                                                2002 -
                                                2002</span></div>
                                    </div>
                                    <div class="flex items-baseline justify-between">
                                        <div class="title flex gap-1 items-center">
                                            <p class="text-[18px] leading-[23px] font-bold text-[#E2E8F0]">
                                                BSC</p>
                                            <p class="text-[18px] leading-[23px] font-normal text-[#E2E8F0]">
                                                — Graduation</p>
                                        </div>
                                        <div class="align-top flex items-center gap-1 pt-0"><i
                                                class="ph ph-calendar text-[#64748B]"></i> <span
                                                class="text-[#E2E8F0] font-medium text-[16px] leading-[17px] font-['Inconsolata']">
                                                2004 -
                                                2004</span></div>
                                    </div>
                                    <div class="flex items-baseline justify-between">
                                        <div class="title flex gap-1 items-center">
                                            <p class="text-[18px] leading-[23px] font-bold text-[#E2E8F0]">
                                                MSC</p>
                                            <p class="text-[18px] leading-[23px] font-normal text-[#E2E8F0]">
                                                — Masters</p>
                                        </div>
                                        <div class="align-top flex items-center gap-1 pt-0"><i
                                                class="ph ph-calendar text-[#64748B]"></i> <span
                                                class="text-[#E2E8F0] font-medium text-[16px] leading-[17px] font-['Inconsolata']">
                                                2010 -
                                                2010</span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/4 align-top border-b border-b-[#334155]">
                                <p class="text-base py-7 mb-0 text-[#E2E8F0] font-semibold">Work Experience</p>
                            </td>
                            <td class="align-top border-b border-b-[#334155]">
                                <div class="py-7">
                                    <div>
                                        <div class="flex items-baseline justify-between">
                                            <div class="title flex gap-1 items-center">
                                                <p class="text-[18px] leading-[23px] font-bold text-[#E2E8F0]">
                                                    Google</p>
                                                <p class="text-[18px] leading-[23px] font-normal text-[#E2E8F0]">
                                                    — Software Engineer</p>
                                            </div>
                                            <div class="align-top flex items-center gap-1 pt-0"><i
                                                    class="ph ph-calendar text-[#64748B]"></i> <span
                                                    class="text-[#E2E8F0] font-medium text-[16px] leading-[17px] font-['Inconsolata']">January
                                                    2021
                                                    -
                                                    January 2022</span></div>
                                        </div>
                                        <div class="text-white text-sm mb-5"
                                            style="font-family: &quot;Plus Jakarta Sans&quot;;">
                                            Execute full software development life cycle (SDLC), Develop flowcharts,
                                            layouts and documentation to identify requirements and solutions, Write
                                            well-designed, testable code, Produce specifications and determine
                                            operational feasibility
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-baseline justify-between">
                                            <div class="title flex gap-1 items-center">
                                                <p class="text-[18px] leading-[23px] font-bold text-[#E2E8F0]">
                                                    Facebook</p>
                                                <p class="text-[18px] leading-[23px] font-normal text-[#E2E8F0]">
                                                    — Product Manager</p>
                                            </div>
                                            <div class="align-top flex items-center gap-1 pt-0"><i
                                                    class="ph ph-calendar text-[#64748B]"></i> <span
                                                    class="text-[#E2E8F0] font-medium text-[16px] leading-[17px] font-['Inconsolata']">January
                                                    2020
                                                    -
                                                    December 2021</span></div>
                                        </div>
                                        <div class="text-white text-sm mb-5"
                                            style="font-family: &quot;Plus Jakarta Sans&quot;;">
                                            Execute full software development life cycle (SDLC), Develop flowcharts,
                                            layouts and documentation to identify requirements and solutions, Write
                                            well-designed, testable code, Produce specifications and determine
                                            operational feasibility
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-baseline justify-between">
                                            <div class="title flex gap-1 items-center">
                                                <p class="text-[18px] leading-[23px] font-bold text-[#E2E8F0]">
                                                    Twitter</p>
                                                <p class="text-[18px] leading-[23px] font-normal text-[#E2E8F0]">
                                                    — Senior Software Engineer</p>
                                            </div>
                                            <div class="align-top flex items-center gap-1 pt-0"><i
                                                    class="ph ph-calendar text-[#64748B]"></i> <span
                                                    class="text-[#E2E8F0] font-medium text-[16px] leading-[17px] font-['Inconsolata']">June
                                                    2015
                                                    -
                                                    December 2019</span></div>
                                        </div>
                                        <div class="text-white text-sm mb-5"
                                            style="font-family: &quot;Plus Jakarta Sans&quot;;">
                                            Execute full software development life cycle (SDLC), Develop flowcharts,
                                            layouts and documentation to identify requirements and solutions, Write
                                            well-designed, testable code, Produce specifications and determine
                                            operational feasibility
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr> <----> <---->
                                <tr>
                                    <td class="w-1/4 align-top border-b border-b-[#334155]">
                                        <p class="text-base py-7 text-[#E2E8F0] mb-0 font-semibold">
                                            Skills, Tools, Language &amp; Hobbies
                                        </p>
                                    </td>
                                    <td class="align-top border-b text-white border-b-[#334155]">
                                        <div class="py-7">
                                            <div>
                                                <h2 class="text-[18px] leading-[23px] font-bold text-[#E2E8F0]">
                                                    Skills
                                                </h2>
                                                <div class="grid grid-cols-7 pb-3 gap-1 justify-between">
                                                    <div class="col-span-5">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1">
                                                            <span
                                                                class="text-[#CBD5E1] bg-[#334155] py-[2px] px-[6px] rounded-md text-sm">
                                                                laravel
                                                            </span>
                                                            <span
                                                                class="text-[#CBD5E1] bg-[#334155] py-[2px] px-[6px] rounded-md text-sm">
                                                                apache nutch
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="pt-6">
                                                    <h2 class="text-[18px] leading-[23px] font-bold text-[#E2E8F0]">
                                                        Languages
                                                    </h2>
                                                    <div class="grid grid-cols-7 pb-3 gap-1 justify-between">
                                                        <div class="col-span-5">
                                                            <div class="flex flex-wrap gap-x-2 gap-y-1">
                                                                <span class="text-[#CBD5E1] bg-[#334155] py-[2px] px-[6px] rounded-md text-sm">
                                                                    Macedonian
                                                                </span><span class="text-[#CBD5E1] bg-[#334155] py-[2px] px-[6px] rounded-md text-sm">
                                                                    Southern Sotho
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </td>
                                </tr>
                    </table>
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
