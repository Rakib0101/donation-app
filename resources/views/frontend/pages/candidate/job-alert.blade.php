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
@section('loginHeader')
<x-frontend.header.header-candidate />
@endsection
@section('main')
    <main class="space-y-[1.5rem] pb-[5rem]">
        <section>
            <div class="container">
                <div class="flex justify-between items-center mb-6 mt-9">
                    <div>
                        <h2 class="heading-05 mb-1.5">Job Alert</h2>
                        <p class="text-primary-500 body-base-600">8 new jobs</p>
                    </div>
                    <a href="" class="btn-white gap-2">
                        <x-svg.edit-05 />
                        <span>Edit Alert</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12] as $i)
                        <x-frontend.candidate.job-alert-card />
                    @endforeach
                </div>
                
                {{-- @if ($jobs->total() > $jobs->count())
                    {{ $jobs->onEachSide(1)->links('vendor.pagination.frontend') }}
                @endif --}}

            </div>
        </section>
    </main>
@endsection

@push('script')
@endpush
