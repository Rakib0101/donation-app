@props(['job'])

<div class="space-y-4">
    <div
        class="flex flex-wrap gap-4 shadow-gray-base-2 rounded-xl p-[1.25rem] transition-all duration-300 border border-gray-100 hover:shadow-gray-base-4 items-center">
        <div class="flex-grow space-y-[0.5rem]">
            <a href="{{ route('website.job.jobDetails', $job->slug) }}" wire:navigate class="body-large-600 text-gray-900 hover:text-[--primary-600]">
                {{ $job->title }}
            </a>
            <div class="flex items-center gap-2">

                @if ($job->deadline_active)
                    <span class="flex items-center gap-2 body-small-600 text-green-600">
                        <small class="h-[0.5rem] w-[0.5rem] rounded-full bg-green-600"></small>
                        {{ __('active') }}
                    </span>
                @else
                    <span class="flex items-center gap-2 body-small-600 text-red-600">
                        <small class="h-[0.5rem] w-[0.5rem] rounded-full bg-red-600"></small>
                        {{ __('expired') }}
                    </span>
                @endif
                
                <span class="badge-green-transparent"> {{ ucfirst($job->job_type ? $job->job_type->name : '') }}</span>
                
                @if ($job->is_remote)
                    <span class="badge-secondary-transparent">
                        {{ __('remote') }}
                    </span>
                @endif

            </div>
            <div class="body-xs-600 text-gray-500">
                {{ __('applied_at') }} {{ \Carbon\Carbon::parse($job->pivot->created_at)->format('jS F, Y') }}
            </div>
        </div>
        <div class="flex flex-grow items-center justify-between">
            <div class="space-y-[0.75rem] self-center">
                <div class="flex items-center gap-[0.5rem]">
                    <span>
                        <x-svg.cash-icon />
                    </span>
                    <p class="body-small-400 text-gray-700">
                        @if ($job->salary_mode == 'range')
                            {{currentCurrencySymbol()}}{{ getFormattedNumber($job->min_salary) }} -
                            {{ currentCurrencySymbol() }}{{ getFormattedNumber($job->max_salary) }}
                        @else
                            {{ $job->custom_salary }}
                        @endif
                        /{{ $job->salary_type->name }}
                    </p>

                </div>
                <div class="flex items-center gap-[0.5rem]">
                    <span>
                        <x-svg.locate-icon />
                    </span>
                    <p class="body-small-400 text-gray-700">{{ $job->exact_location ? $job->exact_location : $job->full_address }}</p>
                </div>
            </div>

        </div>
        <div class="body-small-400 text-gray-700 md:max-w-[360px]">
            <p>{{ $job->pivot->cover_letter }}</p>
        </div>

        <div class="flex items-center gap-2 lg:justify-end">
            <a href="{{ route('website.job.jobDetails', $job->slug) }}" wire:navigate class="btn-white-primary">
                {{ __('view_details') }}
                <x-svg.arrow-circle-right />
            </a>
        </div>
    </div>
</div>
