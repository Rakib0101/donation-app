<?php

use function Livewire\Volt\{state};
use Livewire\Volt\Component;

new class extends Component {
    public $hello = 'hello';
}?>

<section class="mt-[2rem]">
    {{ $hello }}
    <div class="container mx-auto flex items-start gap-4 lg:divide-x divide-gray-100">
        <div class="flex-1 min-w-[300px] hidden lg:inline">
            <x-frontend.jobfilter />
        </div>
        <div class="space-y-[1.5rem] w-full px-6">
            <div class="flex items-center gap-4 body-base-400 text-gray-700 flex-col sm:flex-row">
                <div class="lg:hidden mr-auto">
                    <button type="button" class="icon-btn-white" title="show-sidebar"
                        data-drawer-target="jobfilter-drawer" data-drawer-show="jobfilter-drawer"
                        aria-controls="jobfilter-drawer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                        </svg>
                    </button>
                    <x-frontend.drawers.jobfilter-drawer />
                </div>
                <div class="flex-1 text-gray-600 w-full">
                    <x-frontend.forms.input class="hover:border-primary-500" :icon="true"
                        placeholder="Search jobs">
                        <x-svg.search-md stroke="currentColor" />
                    </x-frontend.forms.input>
                </div>
                <div
                    class="w-full flex items-center sm:w-auto border border-gray-100 transition duration-200 ease-linear hover:border-primary-500 focus-within:border-primary-500 rounded-lg overflow-hidden px-3 shadow-gray-base-1">
                    <span class="body-base-400 text-gray-900">Sort by:</span>
                    <select name="job-type" id="job-type"
                        class="border-0 outline-0 focus:ring-0  body-base-400 text-gray-600 py-2.5 flex-grow">
                        <option disabled selected>Most Relavent</option>
                        <option>Job Type</option>
                        <option>Job Type</option>
                        <option>Job Type</option>
                    </select>
                </div>
            </div>
            {{-- @if ($isListView)
                <div class="  divide-gray-100 divide-y">
                    @foreach ($jobs as $job)
                        <x-frontend.jobs.job-list-card :job="$job" />
                    @endforeach

                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                    @foreach ($jobs as $job)
                        <x-frontend.jobs.job-card />
                    @endforeach
                </div>
            @endif --}}
            <div class="mt-[2.5rem]">
                <ul class="flex items-center gap-[0.75rem] justify-center" x-init x-data="{ activeTab: 1 }">
                    <li
                        class="h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-[rgba(240,234,251,0.40)] text-primary-100">
                        <a href="#">
                            <x-svg.arrow-circle-left />
                        </a>
                    </li>
                    <template x-for="n in 5" :key="n">
                        <li class="h-[2.75rem] w-[2.75rem] rounded-full flex items-center justify-center  hover:shadow-gray-base-2 border border-transparent  transition-all duration-200 ease-in-out"
                            :class="activeTab === n ? 'bg-primary-500 text-gray-white' :
                                'hover:border-gray-100 hover:text-gray-900 text-gray-700'">
                            <a href="#" x-text="`0${n}`"></a>
                        </li>
                    </template>

                    <li
                        class="h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-primary-50 text-primary-500 hover:bg-primary-500 hover:text-gray-white transition-all duration-200 ease-in-out">
                        <a href="#">
                            <x-svg.arrow-circle-right />
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
