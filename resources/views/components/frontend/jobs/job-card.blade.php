@props(['isMatched' => false, 'enableTimezone' => false, 'showLink' => false, 'job' => []])

<a href="/job-details"
    class="shadow-gray-base-2 p-[1.5rem] border border-gray-100 rounded-xl space-y-4 relative z-99 bg-gray-white hover:shadow-gray-base-4 hover:-translate-y-1 transition-all duration-300">
    @if ($isMatched)
        <span
            class=" rounded-tr-xl font-bold absolute top-0 right-0 bg-[linear-gradient(270deg,#E6F2FF_0%,rgba(230,245,235,0.00)_100%)] px-[1rem] py-[0.38rem] text-[0.75rem] text-green-500">
            <div class="inline-flex items-center gap-1">
                <x-svg.zap stroke="currentColor" fill="currentColor" /> 76% Match
            </div>
        </span>
    @else
        @if ($job->featured)
            <span class=" rounded-tr-xl font-bold absolute top-0 right-0 bg-[linear-gradient(270deg,#E6F2FF_0%,rgba(230,248,232,0.00)_100%)] px-[1rem] py-[0.38rem] text-[0.75rem] text-primary-500">
                {{ __('FEATURED') }}
            </span>
        @endif
    @endif
    <div class="job-card-header flex items-center flex-wrap gap-[0.75rem] !mt-0">

        <div class="h-[2.5rem] w-[2.5rem] rounded-md overflow-hidden">
            <img src="{{ $job?->company?->logo_url }}" alt="company logo"
                class="object-cover w-full" loading="lazy">
        </div>
        <div>
            <p class="body-base-600 text-gray-900 capitalize">
                {{ $job['title'] }}
            </p>
            <small class="body-small-400 text-gray-700">
                {{ $job?->company?->user?->name }}
            </small>
        </div>
    </div>
    <div class="job-card-body space-y-[0.5rem]">
        <div class="flex items-center gap-[0.5rem]">
            <span>
                <x-svg.cash-icon />
            </span>
            <p class="body-small-400 text-gray-700">
                @if ($job->salary_mode == 'range')
                {{ currentCurrencyCode() }} {{ currencyAmountShort($job->min_salary) }} -
                    {{ currencyAmountShort($job->max_salary) }}
                @else
                    {{ $job->custom_salary }}
                @endif

                @if ($job->salary_type)
                    / {{ $job?->salary_type?->name }}
                @endif
            </p>
        </div>
        <div class="flex items-center gap-[0.5rem]">
            <span>
                <x-svg.locate-icon />
            </span>
            <p class="body-small-400 text-gray-700">
                {{ $job?->country_state_city }}
            </p>
        </div>
    </div>
    @if ($showLink)
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4 flex-1">
                <button class="btn-text-primary">
                    View Detail
                    <span>
                        <x-svg.arrow-circle-right />
                    </span>
                </button>
                <button class="btn-text-dark" type="button">
                    Save
                    <span>
                        <x-svg.book-mark />
                    </span>
                </button>
            </div>
            <small class="body-small-400 text-gray-500 ">Applied: 17 Jan, 2023</small>
        </div>
    @else
        <div class="job-card-footer flex items-center gap-[0.5rem]">
            <span class="badge-green-transparent">
                {{ $job?->job_type?->name }}
            </span>
            @if ($job->is_remote)
                <span class="badge-secondary-transparent">
                    {{ __('remote') }}
                </span>
            @endif
        </div>
    @endif


</a>
