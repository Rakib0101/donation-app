@extends('frontend.layouts.app')
@section('title', __('pricing'))
@section('description')
    @php
        $data = metaData('home');
    @endphp
    {{ $data->description }}
@endsection
@section('og:image')
    {{ asset($data->image) }}
@endsection
@section('title')
    {{ $data->title }}
@endsection

@section('main')

    <section class="py-20">
        <div class="container">
            <h2 class="heading-01 leading-[116.66%] text-center mb-6">{{ __('pricing_plan') }}</h2>
            <div x-data="{ tab: 'one_time' }" class="relative w-full">
                <div
                    class="relative grid grid-cols-1 sm:grid-cols-2 gap-2 items-center justify-center w-full p-2 bg-gray-50 rounded-[10px] select-none mx-auto max-w-[520px]">
                    <button @click="tab='one_time'"
                        class="relative z-20 inline-flex items-center justify-center w-full h-11 px-4 heading-07 leading-[150%] transition-all rounded-md cursor-pointer whitespace-nowrap"
                        :class="tab == 'one_time' ? 'bg-black text-white' : 'bg-white text-black'"> {{ __('one_time') }}</button>
                    <button @click="tab='recurring'"
                        class="relative z-20 inline-flex items-center justify-center w-full h-11 px-4 heading-07 leading-[150%] transition-all rounded-md cursor-pointer whitespace-nowrap"
                        :class="tab == 'recurring' ? 'bg-black text-white' : 'bg-white text-black'">{{ __('recurring') }}</button>
                </div>

                <div class="relative w-full mt-10">
                    @if(count($plans))

                        <!-- Tab Content 1 -->
                        <template x-if="tab=='one_time'">
                            @if (count($one_time_plans))
                                <div class="isolate mx-auto grid max-w-md grid-cols-1 gap-6 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                                    @foreach ($one_time_plans as $plan)
                                        <x-frontend.pricing.pricing-card :plan="$plan" :current_currency="$current_currency" :recommended="$plan->recommended" />
                                    @endforeach
                                </div>
                            @else
                                <div class="flex justify-center">
                                    <x-not-found message="{{ __('no_price_plan_found_contact_website_owner') }}" />
                                </div>
                            @endif
                        </template>
                        <!-- End Tab Content 1 -->

                        <!-- Tab Content 2 -->
                        <template x-if="tab=='recurring'">
                            @if (count($recurring_plans))
                                <div class="isolate mx-auto grid max-w-md grid-cols-1 gap-6 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                                    @foreach ($recurring_plans as $plan)
                                        <x-frontend.pricing.pricing-card :plan="$plan" :current_currency="$current_currency" :recommended="$plan->recommended" />
                                    @endforeach
                                </div>
                            @else
                                <div class="flex justify-center">
                                    <x-not-found message="{{ __('no_price_plan_found_contact_website_owner') }}" />
                                </div>
                            @endif
                        </template>
                        <!-- End Tab Content 2 -->

                    @else
                        <div class="flex justify-center">
                            <x-not-found message="{{ __('no_price_plan_found_contact_website_owner') }}" />
                        </div>
                    @endif
                </div>

            </div>
        </div>

        {{-- <div class="mt-10 flex justify-center gap-8 flex-wrap">
            <p class="inline-flex gap-2 items-center body-base-500 text-gray-700">
                <x-svg.target-04 />
                <span>7 {{__('days_of_free_trial')}}</span>
            </p>
            <p class="inline-flex gap-2 items-center body-base-500 text-gray-700">
                <x-svg.zap />
                <span>{{__('cancel_anytime_anywhere')}}</span>
            </p>
            <p class="inline-flex gap-2 items-center body-base-500 text-gray-700">
                <x-svg.credit-card />
                <span>{{__('secure_payment_method')}}</span>
            </p>
        </div> --}}

    </section>

    <section class="">
        <div class="container">
            <div class="py-12 px-6 rounded-2xl flex justify-center items-center border border-gray-100"
                style="background: linear-gradient(0deg, rgba(243, 244, 245, 0.50) 0%, rgba(243, 244, 245, 0.50) 100%), #FFF;">
                <div class="max-w-[696px] text-center">
                    <div class="p-4 inline-flex rounded-full bg-white">
                        <x-svg.calendar />
                    </div>
                    <h3 class="body-xxl-600 mb-3">{{ __('pricing_cta_title') }}</h3>
                    <p class="body-large-400 mb-6">{{ __('pricing_cta_content') }}</p>
                    <div class="flex flex-wrap justify-center gap-3 items-center">
                        <a href="tel:{{ $cms_setting?->footer_phone_no }}" class="btn-primary" class="text-white">
                            <x-svg.phone />
                            <span>{{ $cms_setting?->footer_phone_no ?? '' }}</span>
                        </a>
                        <a href="" class="btn-secondary">
                            <span>{{ __('book_consultation') }}</span>
                            <x-svg.link />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ section --}}
    <x-frontend.pricing.faq :faqs="$faqs" />

    {{-- Call to action section --}}
    <x-frontend.home.cta :total_candidates="$total_candidates" />
@endsection

@push('css')
<style>
    .tab-btn {
        background: white;
        color: black;
    }
    .tab-btn.active {
        background: transparent;
        color: white;
    }
</style>
@endpush

@push('script')
    {{-- @stack('component_scripts') --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('tabData', () => ({

            }))
        })
    </script>
@endpush
