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
    <main>
        <x-frontend.app-breadcumb />
        <section class="py-20">
            <div class="container">
                <div class="flex flex-col md:flex-row gap-8 justify-center items-center">
                    <div class="w-full float">
                        <img src="{{ asset('frontend/assets/images/404.svg') }}" alt="">
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <div class="max-w-[536px] space-y-6">
                            <h2 class="heading-02">{{ __('opps_page_not_found') }}</h2>
                            <p class="body-large-400">{{ __('something_went_wrong_its_look_like_the_link_is_broken_or_the_page_is_removed') }}</p>
                            <div class="flex items-center gap-3">
                                <a href="#" class="btn-primary"> {{ __('go_back_to') }} {{ __('home') }} </a>
                                <a href="{{ url()->previous() }}" class="btn-white">
                                    <x-svg.flip-backward />
                                    <span>{{ __('go_back') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('css')
@endpush

@push('script')
@endpush
