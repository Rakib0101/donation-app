@extends('frontend.layouts.blank')

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
    <main class="flex-grow">
        <section class="py-20">
            <div class="container">
                <div class="flex flex-col md:flex-row gap-8 justify-center items-center">
                    <div class="w-full float">
                        <img src="{{ asset($cms_setting->maintenance_image) }}" alt="">
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <div class="max-w-[536px] space-y-6">
                            <h2 class="heading-02">{{ __('our_website_is_under_construction') }}</h2>
                            <p class="body-large-400">{{ __('we_are_working_hard_to_make_our_website_ready_for_you_we_will_be_back_soon') }}</p>
                            <div class="bg-gray-100 h-[1px]"></div>
                            <div class="space-y-2">
                                <p class="body-base-600">{{ __('subscribe_our_newsletter') }}</p>
                                <div class="flex gap-3 items-center">
                                    <x-frontend.forms.input icon="true" placeholder="Email address">
                                        <x-svg.mail-02 />
                                    </x-frontend.forms.input>
                                    <button class="btn-primary">
                                        {{ __('subscribe') }}
                                    </button>
                                </div>
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
