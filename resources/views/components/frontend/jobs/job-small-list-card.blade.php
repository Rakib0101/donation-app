<div
    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 shadow-gray-base-2 rounded-xl p-[1.25rem] border border-gray-100 items-center">
    <div class="space-y-[0.5rem]">
        <h4 class="body-large-600 text-gray-900">Job Title</h4>
        <div class="flex items-center gap-2">
            <span class="flex items-center gap-2 body-small-600 text-green-600">
                <small class="h-[0.5rem] w-[0.5rem] rounded-full bg-green-600"></small>
                Active
            </span>
            <span class="badge-green-transparent">Full-Time</span>
            <span class="badge-secondary-transparent">Remote</span>
        </div>
        <div class="body-xs-600 text-gray-500">
            Job expire in 28th July, 2023
        </div>
    </div>
    <div class="flex items-center justify-between">
        <div class="space-y-[0.75rem] self-center">
            <div class="flex items-center gap-[0.5rem]">
                <span>
                    <x-svg.cash-icon />
                </span>
                <p class="body-small-400 text-gray-700">$2500 - $4000 / Monthly</p>
            </div>
            <div class="flex items-center gap-[0.5rem]">
                <span>
                    <x-svg.locate-icon />
                </span>
                <p class="body-small-400 text-gray-700">Dhaka 1207, Bangladesh</p>
            </div>
        </div>

    </div>
    <div>
        <p class="body-small-500 text-gray-600 flex items-center gap-1">
            <span class="heading-05 text-gray-900">723</span>
            Applications Received
        </p>
    </div>
    <div class="flex flex-1 items-center gap-2 justify-between lg:justify-end" x-data="{ openDropdown: false }" x-init>
        <a href="" class="btn-white-primary whitespace-nowrap">
            View Applicaiton
            <x-svg.arrow-circle-right />
        </a>
        <div class="relative">
            <button type="button" class="icon-btn-white" @click="openDropdown = !openDropdown">
                <x-svg.dots-horizontal />
            </button>
            <div x-show="openDropdown" @click.outside="openDropdown = false" x-cloak x-transition id="dropdown"
                class="z-10  bg-gray-white  rounded-lg shadow min-w-max md:min-w-[14rem]  absolute top-7 right-5 border border-gray-200">
                <ul class="py-[0.75rem]" aria-labelledby="dropdownDefaultButton">
                    <li
                        class="py-[0.5rem] px-[1.12rem] body-base-400 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 ease-linear">
                        <a href="#" class="flex items-center gap-2">
                            <x-svg.arrow-right />
                            View Detail
                        </a>
                    </li>
                    <li
                        class="py-[0.5rem] px-[1.12rem] body-base-400 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 ease-linear">
                        <a href="#" data-modal-target="promot-job-modal" data-modal-toggle="promot-job-modal"
                            class="flex items-center gap-2">
                            <x-svg.upload-02 />
                            Promote Job
                        </a>
                    </li>
                    <li
                        class="py-[0.5rem] px-[1.12rem] body-base-400 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 ease-linear">
                        <a href="#" class="flex items-center gap-2">
                            <x-svg.copy-05 />
                            Clone Job
                        </a>
                    </li>
                    <li
                        class="py-[0.5rem] px-[1.12rem] body-base-400 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-all duration-200 ease-linear">
                        <a href="#" class="flex items-center gap-2">
                            <x-svg.trash-03 />
                            Archive
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <x-frontend.modals.promot-jobs />
</div>
