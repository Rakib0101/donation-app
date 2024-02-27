<div>
    <aside class=" divide-y divide-gray-100 px-4 ">
        <div>
            <details class="group py-2" open>
                <summary
                    class="flex justify-between items-center font-medium cursor-pointer px-4 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
                    <span> Location</span>
                    <span class="transition group-open:rotate-180 text-gray-500">
                        <x-svg.chevron-down />
                    </span>
                </summary>
                <div class="space-y-4 py-3">
                    <div class="px-6">
                        <select name="country" id="select-country">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="px-6">
                        <select name="state" id="select-state">
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
                    class="flex justify-between items-center font-medium cursor-pointer px-4 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
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
                    class="flex justify-between items-center font-medium cursor-pointer px-4 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
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
                    class="flex justify-between items-center font-medium cursor-pointer px-4 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
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
                    class="flex justify-between items-center font-medium cursor-pointer px-4 py-2 body-md-500 text-gray-700 group-hover:text-gray-900 group-open:text-gray-900 transition duration-200">
                    <span>Category</span>
                    <span class="transition group-open:rotate-180 text-gray-500">
                        <x-svg.chevron-down />
                    </span>
                </summary>
                <div class="space-y-4 py-3">
                    <div class="px-6">
                        <select name="country" id="select-category">
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

@push('css')
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <style>

    </style>
@endpush

@push('script')
    <script src="{{ asset('backend/plugins/select2/js/select2.min.js') }}" defer></script>
    <script defer>
        $(document).ready(function() {
            $('#select-country').select2({
                placeholder: "Select Country",
                allowClear: true
            });
            $('#select-state').select2({
                placeholder: "Select State",
                allowClear: true
            });
            $('#select-category').select2({
                placeholder: "Select Category",
                allowClear: true
            });
        });
    </script>
@endpush
