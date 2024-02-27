<!-- drawer component -->
<div id="jobfilter-drawer"
    class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800 border border-gray-100 shadow-gray-base-2 rounded-md lg:hidden"
    tabindex="-1" aria-labelledby="drawer-label">

    <button type="button" data-drawer-hide="jobfilter-drawer" aria-controls="jobfilter-drawer"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
    <aside class="divide-y divide-gray-100 px-2 mt-4">
        <div>
            <details class="group py-2" open>
                <summary
                    class="flex justify-between items-center font-medium cursor-pointer px-3 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
                    <span> Location</span>
                    <span class="transition group-open:rotate-180 text-gray-500">
                        <x-svg.chevron-down />
                    </span>
                </summary>
                <div class="space-y-4 py-3">
                    <div class="px-6">
                        <select name="country" id="select-country-drawer">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="px-6">
                        <select name="state" id="select-state-drawer">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="px-6">
                        <x-frontend.forms.checkbox label="Remote" id="remote_filter" />
                    </div>
                </div>

            </details>
        </div>
        <div>
            <details class="group py-2" open>
                <summary
                    class="flex justify-between items-center font-medium cursor-pointer px-3 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
                    <span> Job Type</span>
                    <span class="transition group-open:rotate-180 text-gray-500">
                        <x-svg.chevron-down />
                    </span>
                </summary>
                <div class="space-y-3 py-3">

                    <div class="px-6 flex items-center justify-between">
                        <x-frontend.forms.checkbox label="Fixed Price" id="fp" />
                        <small class="text-gray-900 body-small-500">1</small>
                    </div>
                    <div class="px-6 flex items-center justify-between">
                        <x-frontend.forms.checkbox label="Full Time" id="ft" />
                        <small class="text-gray-900 body-small-500">10</small>
                    </div>
                    <div class="px-6 flex items-center justify-between">
                        <x-frontend.forms.checkbox label="Hourly Contact" id="hc" />
                        <small class="text-gray-900 body-small-500">4</small>
                    </div>
                    <div class="px-6 flex items-center justify-between">
                        <x-frontend.forms.checkbox label="Part Time" id="pt" />
                        <small class="text-gray-900 body-small-500">2</small>
                    </div>
                </div>

            </details>
        </div>
        <div>
            <details class="group py-2" open>
                <summary
                    class="flex justify-between items-center font-medium cursor-pointer px-3 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
                    <span>Experience</span>
                    <span class="transition group-open:rotate-180 text-gray-500">
                        <x-svg.chevron-down />
                    </span>
                </summary>
                <div class="space-y-3 py-3">

                    <div class="px-6 flex items-center justify-between">
                        <x-frontend.forms.checkbox label="2 years +" id="2y+" />
                        <small>1</small>
                    </div>
                    <div class="px-6 flex items-center justify-between">
                        <x-frontend.forms.checkbox label="5 years +" id="5y+" />
                        <small>10</small>
                    </div>
                    <div class="px-6 flex items-center justify-between">
                        <x-frontend.forms.checkbox label="Senior" id="sn" />
                        <small>4</small>
                    </div>
                </div>

            </details>
        </div>
        <div>
            <details class="group py-2" open>
                <summary
                    class="flex justify-between items-center font-medium cursor-pointer px-3 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
                    <span>Salary</span>
                    <span class="transition group-open:rotate-180 text-gray-500">
                        <x-svg.chevron-down />
                    </span>
                </summary>
                <div class="space-y-4 py-3">

                    <div class="px-6 flex items-center justify-between w-full">
                        <x-frontend.forms.multirange-slider />
                    </div>
                    <div class="px-6 flex items-center justify-between w-full gap-2">
                        <x-frontend.forms.badge-check name="Weekly" id="wk" />
                        <x-frontend.forms.badge-check name="Monthly" id="mn" />
                        <x-frontend.forms.badge-check name="Hourly" id="hl" />
                    </div>
                </div>

            </details>
        </div>
        <div>
            <details class="group py-2" open>
                <summary
                    class="flex justify-between items-center font-medium cursor-pointer px-3 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
                    <span>Category</span>
                    <span class="transition group-open:rotate-180 text-gray-500">
                        <x-svg.chevron-down />
                    </span>
                </summary>
                <div class="space-y-4 py-3">
                    <div class="px-4">
                        <select name="country" id="select-category-drawer">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                </div>

            </details>
        </div>
        <div>
            <div class=" py-3 space-y-3">
                <button class="btn-label-primary w-full">Apply Filter</button>
                <button class="btn-dark-transparent w-full">Clear Filter</button>
            </div>
        </div>
    </aside>
</div>

@push('script')
    <script defer>
        $(document).ready(function() {
            $('#select-country-drawer').select2({
                placeholder: "Select Country",
                allowClear: true
            });
            $('#select-state-drawer').select2({
                placeholder: "Select State",
                allowClear: true
            });
            $('#select-category-drawer').select2({
                placeholder: "Select Category",
                allowClear: true
            });
        });
    </script>
@endpush
