@extends('frontend.auth.layouts.auth')
@section('title', __('registration'))
@section('content')
    <section>
        <div class="container">
           @livewire('auth.register')
        </div>
    </section>
@endsection
