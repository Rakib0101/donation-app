@extends('frontend.layouts.app')
@section('title', __('terms_condition'))
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
                        <h2 class="heading-02">{{__('terms_condition')}}</h2>
                        {!! $terms_page == null ? $termscondition->terms_page : $terms_page !!}
                    </div>
                    <ul class="sticky top-12 flex-grow flex flex-col gap-3 text-gray-500 list-disc list-inside w-full max-w-[312px]">
                        <h2 class="body-small-500">Table of content</h2>
                        <li>
                            <a href="" class="text-gray-800 hover:text-gray-900">User Obligations</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-800 hover:text-gray-900">Job Postings</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-800 hover:text-gray-900">User Content</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-800 hover:text-gray-900">Privacy</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-800 hover:text-gray-900">Intellectual Property</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-800 hover:text-gray-900">Limitation of Liability</a>
                        </li>
                        <li>
                            <a href="" class="text-gray-800 hover:text-gray-900">Termination</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
