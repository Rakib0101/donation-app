@extends('frontend.layouts.app')
@section('title', __('help_center'))
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
    <main>
        <x-frontend.app-breadcumb />
        <section class="py-20 bg-linear">
            <div class="container">
                <div class="flex flex-col gap-6 text-center">
                    <h3 class="heading-06 text-secondary-500" data-aos="zoom-in">Help Center</h3>
                    <h2 class="heading-02 text-gray-900">Have any question? We’re here to assist you.</h2>
                    <div class="flex justify-center mt-4">
                        <form action="" class="w-full max-w-[648px]">
                            <x-frontend.forms.input icon="true" class="py-4" placeholder="Search here...">
                                <x-svg.search-md />
                            </x-frontend.forms.input>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20">
            <div class="container">
                <h2 class="heading-04 text-gray-900">All topics</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6" data-aos="zoom-in" data-delay="500">
                    @foreach ([1,2,3,4,5,6,7,8,9,10,11,12] as $item)
                        <a href="#" class="p-6 border group border-gray-100 bg-white rounded-lg shadow-gray-base-1 text-center flex flex-col justify-center items-center hover:shadow-gray-base-4 hover:-translate-y-1 transition-all duration-300">
                            <span class="transition-all duration-300 inline-flex bg-primary-50 group-hover:bg-primary-500 p-3 rounded-full text-primary-500 group-hover:text-white">
                                <x-svg.arrow-circle-right />
                            </span>
                            <h3 class="body-base-600 text-gray-900 mt-6">Getting Started</h3>
                            <p class="body-small-400 text-gray-600 mt-1.5">A guide on how to navigate and use the job portal website effectively.</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@push('css')
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
            console.log('ready')
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            })
        })
    </script>
@endpush
