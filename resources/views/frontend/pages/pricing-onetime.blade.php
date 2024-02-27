@extends('frontend.layouts.app')
@section('title', __('one_time_pricing'))
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
    <x-frontend.pricing.pricing-section />
    <x-frontend.pricing.onetime-cta />
    <x-frontend.pricing.cta />
    <x-frontend.pricing.faq />
    <x-frontend.home.cta />
@endsection

@push('css')

@endpush


@push('script')
    @stack('component_scripts')
@endpush
