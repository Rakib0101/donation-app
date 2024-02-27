@extends('frontend.layouts.app')
@section('title', __('my_resume'))
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
    <main class="space-y-[1.5rem] pb-[5rem]">
        <section>
            <div class="container">
                <div class="flex flex-wrap justify-between items-center mb-6 mt-9">
                    <div>
                        <h2 class="heading-05 mb-1.5">{{ __('my_resume') }}</h2>
                    </div>
                    <a href="{{ route('candidate.createResume') }}" class="btn-white text-primary-500 gap-2">
                        <x-svg.plus-circle />
                        <span>{{ __('add_new_resume') }}</span>
                    </a>
                </div>
                <div class="flex flex-col gap-6">
                    @foreach ([1, 2, 3] as $i)
                        <x-frontend.candidate.resume-builder-card />
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@push('script')
@endpush
