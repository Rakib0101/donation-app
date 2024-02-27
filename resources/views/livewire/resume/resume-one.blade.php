<div>

    {{-- {{ $name }} <br>
    <input type="text" class="form-control" wire:model.live="name"> --}}
    <header class="bg-primary-500 w-full flex flex-col sm:flex-row gap-4 justify-between items-center py-3 px-6">
        <a href="{{ route('candidate.chooseTemplate') }}"
            class="flex border px-3 py-1.5 rounded text-white gap-3 items-center">
            <x-svg.arrow-left />
            <span class="text-base leading-5 font-medium">
                {{ __('my_resume') }}
            </span>
        </a>
        <div
            class="lg:absolute lg:stable-rtl:translate-x-1/2 lg:stable-ltr:-translate-x-1/2 lg:start-1/2 flex-auto overflow-hidden flex items-center justify-center">
            <div class="me-1 max-w-32 sm:max-w-64 xl:max-w-48 2xl:max-w-64">
                <div class="relative flex items-center font-bold text-base overflow-hidden text-white">
                    <span class="absolute h-0 block overflow-hidden whitespace-pre">Untitled Resume Template</span>
                    <input type="text" class="rounded-none max-w-full outline-none inline-block text-start overflow-hidden border-b duration-150 transition-colors bg-transparent cursor-text px-0 truncate border-transparent placeholder-opacity-1 py-0.5 my-0.5 placeholder-white focus:placeholder-white/80 focus:border-primary-400 hover:border-primary-400"
                        alt="Untitled cover letter" id="resumeTitle" placeholder="Untitled Resume Template" value="">
                </div>
            </div>
            <label for="resumeTitle" class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-6 text-white">
                    <path fill="currentColor"
                        d="m413.385-379.999-63.693-63.693q-8.923-8.923-20.884-9.115-11.962-.192-21.269 9.115-9.308 9.308-9.308 21.384 0 12.077 9.308 21.384l81.154 81.769q10.846 10.846 25.307 10.846 14.461 0 25.307-10.846l165.154-165.153q8.923-8.923 9.115-21.5.193-12.576-9.115-21.884-9.307-9.307-21.692-9.307-12.384 0-21.691 9.307L413.385-379.999ZM260-180.001q-82.922 0-141.461-57.615-58.538-57.615-58.538-140.538 0-73.384 47-130.538 47-57.153 119.923-67.614 19.231-89.693 90.192-146.693 70.961-57 162.884-57 108.538 0 184.268 75.731 75.731 75.73 75.731 184.268v20.001h12.308q63.23 4.923 105.461 50.846Q899.999-403.23 899.999-340q0 66.922-46.538 113.461Q806.922-180.001 740-180.001H260ZM260-240h480q42 0 71-29t29-71q0-42-29-71t-71-29h-60v-80q0-83-58.5-141.5T480-720q-83 0-141.5 58.5T280-520h-20q-58 0-99 41t-41 99q0 58 41 99t99 41Zm220-240Z">
                    </path>
                </svg>
            </label>
        </div>
        <div class="inline-flex flex-wrap sm:flex-nowrap justify-center gap-4 items-center">
            <a href="javascript:void(0)"
                class="bg-white border border-gray-100 rounded outline-none shadow-none p-2 inline-flex text-primary-500">
                <x-svg.download-cloud-01 />
            </a>
            <button class="btn-secondary" type="button" data-drawer-target="drawer-resume-template"
                data-drawer-show="drawer-resume-template" data-drawer-placement="right" aria-controls="drawer-resume-template">
                <x-svg.plus-circle />
                Change Template
            </button>
        </div>
    </header>

    <div class="flex lg:flex-row flex-col-reverse">
        <div class="lg:w-3/5 h-full max-h-[92vh] overflow-y-auto">
            <div class="mb-8 border-e border-gray-100 shadow-gray-base-1 bg-white overflow-x-auto">
                <div class="mx-auto min-w-[600px] overflow-x-auto p-14">
                    <div class="pb-8">
                        <h2 class="text-[32px] leading-[48px] mb-6 title">
                            Hello <br>
                            <span class="text-lg block">Software Developer</span>
                        </h2>
                        <div class="grid grid-cols-3 gap-4">
                            <div><a href="javascript:void(0)"
                                    class="inline-flex text-xl text-[#18191C] gap-2 items-center"><i
                                        class="ph ph-device-mobile text-2xl"></i> <span
                                        class="truncate max-w-[250px]">+880123456789</span></a></div>
                            <div><a href="javascript:void(0)"
                                    class="inline-flex text-xl text-[#18191C] gap-2 items-center"><i
                                        class="ph-fill ph-envelope text-2xl"></i> <span
                                        class="truncate max-w-[250px]">candidate@mail.com</span></a></div> <!---->
                            <div><a href="https://johndoe.com"
                                    class="inline-flex text-xl gap-2 text-[#0D2A92] items-center truncate max-w-[250px]"><i
                                        class="ph-fill ph-globe text-2xl"></i>
                                    https://johndoe.com
                                </a></div>
                            <div><a href="https://www.facebook.com/zakirsoft"
                                    class="inline-flex text-xl gap-2 text-[#0D2A92] items-center"><span
                                        class="inline-flex"><i class="ph-fill ph-facebook-logo text-2xl"></i></span>
                                    <span class="truncate max-w-[250px]">zakirsoft</span></a></div>
                        </div>
                    </div>
                    <div class="py-2 px-4 bg-[#FFEDCC] rounded-[3px]">
                        <h2 class="text-2xl mb-0 text-black">Technical Skills</h2>
                    </div>
                    <div class="pt-[18px] pb-[22px]">
                        <table class="w-full skill-table">
                            <tr>
                                <td class="w-1/3">
                                    <div class="text-xl pb-2.5 whitespace-nowrap">
                                        Skills
                                    </div>
                                </td>
                                <td class="w-2/3">
                                    <div class="text-xl pb-2.5 text-medium whitespace-nowrap">
                                        laravel, apache nutch
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1/3">
                                    <div class="text-xl pb-2.5 whitespace-nowrap">
                                        Language
                                    </div>
                                </td>
                                <td class="w-2/3">
                                    <div class="text-xl pb-2.5 text-medium whitespace-nowrap">
                                        Macedonian, Southern Sotho
                                    </div>
                                </td>
                            </tr> <!---->
                        </table>
                    </div> <!---->
                    <div class="bg-[#FFEDCC] rounded-[3px] py-2 px-4">
                        <h2 class="text-2xl mb-0 text-black">Work Experience</h2>
                    </div>
                    <div class="pt-4">
                        <ul class="p-0 list-none">
                            <li class="mb-6">
                                <div class="flex text-base text-[#5E6670] font-medium gap-2 items-center mb-2">
                                    <p class="mb-0">
                                        January 2021 - January 2022
                                    </p>
                                    <p class="mb-0">•</p>
                                    <p class="mb-0">Google</p>
                                </div>
                                <h3 class="text-xl font-semibold mb-2">
                                    Software Engineer
                                </h3>
                                <p class="text-lg mb-0">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts and
                                    documentation to identify requirements and solutions, Write well-designed, testable
                                    code, Produce specifications and determine operational feasibility
                                </p>
                            </li>
                            <li class="mb-6">
                                <div class="flex text-base text-[#5E6670] font-medium gap-2 items-center mb-2">
                                    <p class="mb-0">
                                        January 2020 - December 2021
                                    </p>
                                    <p class="mb-0">•</p>
                                    <p class="mb-0">Facebook</p>
                                </div>
                                <h3 class="text-xl font-semibold mb-2">
                                    Product Manager
                                </h3>
                                <p class="text-lg mb-0">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts and
                                    documentation to identify requirements and solutions, Write well-designed, testable
                                    code, Produce specifications and determine operational feasibility
                                </p>
                            </li>
                            <li class="mb-6">
                                <div class="flex text-base text-[#5E6670] font-medium gap-2 items-center mb-2">
                                    <p class="mb-0">
                                        June 2015 - December 2019
                                    </p>
                                    <p class="mb-0">•</p>
                                    <p class="mb-0">Twitter</p>
                                </div>
                                <h3 class="text-xl font-semibold mb-2">
                                    Senior Software Engineer
                                </h3>
                                <p class="text-lg mb-0">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts and
                                    documentation to identify requirements and solutions, Write well-designed, testable
                                    code, Produce specifications and determine operational feasibility
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-[#FFEDCC] rounded-[3px] py-2 px-4">
                        <h2 class="text-2xl mb-0 text-black">Education</h2>
                    </div>
                    <div class="pt-4 pb-8">
                        <ul class="p-0 list-none">
                            <li class="mb-4">
                                <div class="flex text-base text-[#5E6670] font-medium gap-2 items-center mb-2">
                                    <p class="mb-0">
                                        2002 to 2002
                                    </p>
                                    <p class="mb-0">•</p>
                                    <p class="mb-0">Secondary</p>
                                </div>
                                <h3 class="text-xl font-semibold mb-0">SSC</h3>
                            </li>
                            <li class="mb-4">
                                <div class="flex text-base text-[#5E6670] font-medium gap-2 items-center mb-2">
                                    <p class="mb-0">
                                        2004 to 2004
                                    </p>
                                    <p class="mb-0">•</p>
                                    <p class="mb-0">Graduation</p>
                                </div>
                                <h3 class="text-xl font-semibold mb-0">BSC</h3>
                            </li>
                            <li class="mb-4">
                                <div class="flex text-base text-[#5E6670] font-medium gap-2 items-center mb-2">
                                    <p class="mb-0">
                                        2010 to 2010
                                    </p>
                                    <p class="mb-0">•</p>
                                    <p class="mb-0">Masters</p>
                                </div>
                                <h3 class="text-xl font-semibold mb-0">MSC</h3>
                            </li>
                        </ul>
                    </div> <!---->
                    <div class="pt-4 pb-8">
                        <ul class="p-0 list-none"></ul>
                    </div> <!---->
                    <ul class="pl-0 list-none mb-0 grid grid-cols-4 pt-4"></ul>
                </div>
            </div>
        </div>
        <!-- drawer component -->
        <div class="lg:w-2/5 h-full max-h-[92vh] overflow-y-auto lg:block hidden">
            <x-frontend.candidate.resume.resume-form />
        </div>
    </div>



    <!-- Choose Resume template -->
    <x-frontend.candidate.resume.drawer.resume-template />
</div>
