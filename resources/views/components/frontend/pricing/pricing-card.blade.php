@props(['plan', 'current_currency', 'recommended' => false])

<div class="p-6 relative overflow-hidden border border-gray-100 shadow-gray-base-1 rounded-xl">
    <div>
        <h3 class="body-xl-600 text-gray-900 leading-[140%] mb-4">{{ $plan->label }}</h3>
        <div class="flex gap-2 items-center mb-2">
            <span class="heading-02 text-secondary-500">
                {{ currencyPosition($plan->price, true,$current_currency) }}
            </span>
            {{-- <span class="text-[40px] leading-[120%] line-through text-gray-300">$108</span> --}}
        </div>
        {{-- <p class="body-base-500 text-gray-600 leading-[150%]">USD/Yearly</p> --}}
    </div>
    <ul class="flex flex-col gap-3">
        <li class="flex gap-2 items-center body-base-500 {{ $plan->job_limit ? 'text-gray-800' : 'text-gray-800/40' }}">
            @if ($plan->job_limit)
                <x-svg.check />
            @else
                <x-svg.check-less-opacity />
            @endif
            <span>
                {{ __('post') }} {{ $plan->job_limit }}
                {{ __('jobs') }}
            </span>
        </li>
        <li class="flex gap-2 items-center body-base-500 {{ $plan->featured_job_limit ? 'text-gray-800' : 'text-gray-800/40' }}">
            @if ($plan->featured_job_limit)
                <x-svg.check />
            @else
                <x-svg.check-less-opacity />
            @endif
            <span>{{ $plan->featured_job_limit }}
                {{ __('featured_job') }}</span>
        </li>
        <li class="flex gap-2 items-center body-base-500 {{ $plan->highlight_job_limit ? 'text-gray-800' : 'text-gray-800/40' }}">
            @if ($plan->highlight_job_limit)
                <x-svg.check />
            @else
                <x-svg.check-less-opacity />
            @endif
            <span>{{ $plan->highlight_job_limit }}
                {{ __('highlights_job') }}</span>
        </li>
        <li class="flex gap-2 items-center body-base-500 {{ $plan->candidate_cv_view_limitation || $plan->candidate_cv_view_limit ? 'text-gray-800' : 'text-gray-800/40' }}">
            @if ($plan->candidate_cv_view_limitation || $plan->candidate_cv_view_limit)
                <x-svg.check />
            @else
                <x-svg.check-less-opacity />
            @endif
            <span>
                {{ $plan->candidate_cv_view_limitation == 'limited' ? $plan->candidate_cv_view_limit : __('unlimited') }}
                {{ __('candidate_profile_view') }}
            </span>
        </li>
        <li class="flex gap-2 items-center body-base-500 {{ $plan->profile_verify ? 'text-gray-800' : 'text-gray-800/40' }}">
            @if ($plan->profile_verify)
                <x-svg.check />
            @else
                <x-svg.check-less-opacity />
            @endif
            <span>
                {{ __('ability_to_profile_verify') }}
            </span>
        </li>
    </ul>
    <div class="mt-3">
        <a href="{{ route('website.plan.details', $plan->label) }}"" class="btn-primary w-full">Start Free Trial</a>
    </div>
    {{-- <div>
        <p class="flex gap-2 items-center heading-07 text-green-500 capitalize leading-[150%]">
            <x-svg.wallet />
            <span>Save $27 USD (25% OFF)</span>
        </p>
    </div> --}}
    @if($recommended)
        <span class="absolute top-0 right-0 inline-flex py-1.5 px-4 caption-02 text-secondary-500 uppercase" style="background: linear-gradient(270deg, #FFF0E6 0%, rgba(255, 240, 230, 0.00) 100%);">
            {{ __('recommanded') }}
        </span>
    @endif
</div>
