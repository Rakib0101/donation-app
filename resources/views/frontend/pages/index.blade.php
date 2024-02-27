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
    <h2>Hello</h2>

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
