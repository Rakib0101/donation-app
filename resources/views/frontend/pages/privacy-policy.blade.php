@extends('frontend.layouts.app')
@section('title', __('privacy_policy'))
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
                <div class="flex items-start justify-between gap-6">
                    <div class="flex flex-col gap-4 flex-grow w-full max-w-[872px]">
                        <h2 class="heading-02">{{ __('privacy_policy') }}</h2>
                        <p class="body-base-400">{!! $privacy_page == null ? $privacy_page_default->privary_page : $privacy_page !!}</p>
                       
                    </div>
                    <ul class="sticky top-12 flex-grow flex flex-col gap-3 text-gray-500 list-disc list-inside w-full max-w-[312px]">
                        <h2 class="body-small-500 !text-gray-800">Table of content</h2>
                        <li>User Obligations</li>
                        <li>Job Postings</li>
                        <li>User Content</li>
                        <li>Privacy</li>
                        <li>Intellectual Property</li>
                        <li>Limitation of Liability</li>
                        <li>Termination</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
