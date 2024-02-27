@extends('frontend.layouts.app')

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
    <x-frontend.home.hero />
    <section class="mt-[-64px]">
        <div class="container mx-atuo">
            <div class="tabs-card" x-init x-data="tabData">
                <ul class="  overflow-hidden flex overflow-x-auto snap-x items-center justify-between  bg-gray-50  ">
                    <template x-for="tab in tabs" :key="tab.id">
                        <li @click="activeTab= tab.id" x-text="tab.title" role="button"
                            class="snap-start flex-1 text-center px-[1.5rem] py-[1rem] whitespace-nowrap border-b  border-b-gray-100 heading-06 text-gray-500 transition-all duration-300 hover:active-tab"
                            :class="activeTab === tab.id ? 'active-tab' : ''" />
                    </template>
                </ul>
                <div>
                    <template x-if="activeTab===1">
                        <div class="featured-jobs-tab">
                            <div class="p-[2.25rem] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                                @foreach ($featured_jobs as $job)
                                    <x-frontend.jobs.job-card :job="$job"/>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-center pb-[2.25rem] w-full">
                                <a href="{{ route('website.jobs') }}" class="btn-white-primary gap-2 hover:shadow-gray-base-2 transition-all duration-200 ease-in-out">
                                    {{ __('view_all_jobs') }}
                                    <span>
                                        <x-svg.arrow-right-circle />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </template>

                    <template x-if="activeTab===2">
                        <div class="top-company-tab">
                            <div class="p-[2.25rem] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[1.5rem]">
                                @foreach ($top_companies as $company)
                                    <x-frontend.company.company-card :company="$company"/>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-center pb-[2.25rem] w-full">
                                <a href="#"
                                    class="btn-white-primary gap-2 hover:shadow-gray-base-2 transition-all duration-200 ease-in-out">
                                    {{ __('view_all_company') }}
                                    <span>
                                        <x-svg.arrow-right-circle />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </template>
                    <template x-if="activeTab===3">
                        <div class="job-by-department-tab">
                            <div class="p-[2.25rem] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[1.5rem]">
                                @foreach ($top_categories as $category)
                                    <x-frontend.job-by-department-card :category="$category"/>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-center pb-[2.25rem] w-full">
                                <a href="#"
                                    class="btn-white-primary gap-2 hover:shadow-gray-base-2 transition-all duration-200 ease-in-out">
                                    View all Category
                                    <span>
                                        <x-svg.arrow-right-circle />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </template>
                    <template x-if="activeTab===4">
                        <div class="job-by-location-tab">
                            @if ($jobs_by_countries && count($jobs_by_countries))
                                <div class="m-[2.25rem]">
                                    <h3 class="body-xxl-600 text-gray-900">Jobs by Countries</h3>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-[1.5rem] mt-2">
                                        @foreach ($jobs_by_countries as $item)
                                            <div class="hover:shadow-gray-base-1 text-gray-700  hover:text-gray-900 hover:scale-[1.03] transition-all duration-300  px-[1rem] py-[0.75rem] border border-transparent hover:border-gray-100 rounded-[0.5rem] ">
                                                <a href="#" class="body-base-500 ">
                                                    {{ $item?->name }}
                                                </a>
                                                {{-- <small class="body-small-400 text-gray-700 block">
                                                    {{ $item?->jobs_count }}+ jobs
                                                </small> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            @if ($jobs_by_states && count($jobs_by_states))
                                <div class="m-[2.25rem]">
                                    <h3 class="body-xxl-600 text-gray-900">Jobs by States</h3>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-[1.5rem] mt-2">
                                        @foreach ($jobs_by_states as $item)
                                            <div class="hover:shadow-gray-base-1 text-gray-700  hover:text-gray-900 hover:scale-[1.03] transition-all duration-300  px-[1rem] py-[0.75rem] border border-transparent hover:border-gray-100 rounded-[0.5rem] ">
                                                <a href="#" class="body-base-500 ">
                                                    {{ $item?->name }}
                                                </a>
                                                {{-- <small class="body-small-400 text-gray-700 block">
                                                    {{ $item?->jobs_count }}+ jobs
                                                </small> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            @if ($jobs_by_cities && count($jobs_by_cities))
                                <div class="m-[2.25rem]">
                                    <h3 class="body-xxl-600 text-gray-900">Jobs by Cities</h3>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-[1.5rem] mt-2">
                                        @foreach ($jobs_by_cities as $item)
                                            <div class="hover:shadow-gray-base-1 text-gray-700  hover:text-gray-900 hover:scale-[1.03] transition-all duration-300  px-[1rem] py-[0.75rem] border border-transparent hover:border-gray-100 rounded-[0.5rem] ">
                                                <a href="#" class="body-base-500 ">
                                                    {{ $item?->name }}
                                                </a>
                                                {{-- <small class="body-small-400 text-gray-700 block">
                                                    {{ $item?->jobs_count }}+ jobs
                                                </small> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <div class="flex items-center justify-center pb-[2.25rem] w-full">
                                <a href="#"
                                    class="btn-white-primary gap-2 hover:shadow-gray-base-2 transition-all duration-200 ease-in-out">
                                    View all Location Jobs
                                    <span>
                                        <x-svg.arrow-right-circle />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </template>
                    <template x-if="activeTab===5">
                        <div class="others-tab">
                            <div class="p-[2.25rem] flex flex-wrap gap-x-[1.5rem]">
                                <x-frontend.others-popular-search />
                            </div>
                            <div class="p-[2.25rem]">
                                <x-frontend.others-vacancy />
                            </div>

                            <div class="flex items-center justify-center pb-[2.25rem] w-full">
                                <a href="#"
                                    class="btn-white-primary gap-2 hover:shadow-gray-base-2 transition-all duration-200 ease-in-out">
                                    <span>
                                        <x-svg.magnify-glass />
                                    </span>
                                    Browse Jobs
                                </a>
                            </div>
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-secondary-50 mt-[5rem]">
        <div class="container mx-auto flex flex-col lg:flex-row items-center py-[5rem] px-5 gap-[8.5rem] ">
            <div class="hidden lg:inline">
                <img src="{{ asset('frontend/assets/images/testimonial.png') }}" alt="" class="w-full object-cover">
            </div>

            <div class="flex-1 w-full swiper testimonialSlider pb-[3rem]" x-init>
                <h1 class="heading-01 text-gray-900 ">
                    {{__('lets_hear_from_candidates_and_companies')}}
                </h1>
                <div class="swiper-wrapper pb-12">
                    @foreach ($testimonials as $testimonial)
                        <div class="space-y-[2.5rem] swiper-slide">
                            <div class="space-y-[1.5rem]">
                                <p class="body-xxl-500 text-gray-900">
                                    “{{ $testimonial?->description }}”
                                </p>
                                <div class="space-y-[0.38rem]">
                                    <p class="body-xl-600 text-gray-900">
                                        {{ $testimonial?->name }}
                                    </p>
                                    <span class="text-[0.8rem] sm:text-[1rem] text-gray-700 font-normal">
                                        {{ $testimonial?->position }}
                                    </span>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination">

                </div>
            </div>

        </div>
    </section>
    <x-frontend.home.partners />
    <x-frontend.home.why-choose :overview="$overview"/>

    <x-frontend.home.cta :total_candidates="$total_candidates" />

@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush

@push('script')
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init();
        })
        $(document).ready(() => {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script defer>
        document.addEventListener('alpine:init', () => {
            Alpine.data('tabData', () => ({
                tabs: [{
                        title: "{{ __('featured_jobs') }}",
                        id: 1
                    },
                    {
                        title: "{{ __('top_companies') }}",
                        id: 2,
                    },
                    {
                        title: "{{ __('jobs_by_category') }}",
                        id: 3,
                    },
                    {
                        title: "{{ __('jobs_by_location') }}",
                        id: 4,
                    },
                    // {
                ],
                activeTab: 1
            }))
        })
        window.addEventListener("load", () => {
            new Swiper(".testimonialSlider", {
                autoplay: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '">' + '' + "</span>";
                    },
                },
            });
        });
    </script>
@endpush
