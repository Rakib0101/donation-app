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
    <main class="space-y-[1.5rem] pb-[5rem]">
        <section>
            <div class="container">
                <h2 class="heading-05 mb-6 mt-9">{{ __('applied_jobs') }}</h2>

                @livewire('candidate.applied-jobs')

            </div>
        </section>
    </main>
@endsection

@push('script')
@endpush
