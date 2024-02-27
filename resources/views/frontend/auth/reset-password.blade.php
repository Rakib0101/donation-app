@extends('frontend.auth.layouts.auth')
@section('title', __('reset_password'))
@section('content')
    <section>
        <div class="container">
            @livewire('auth.reset-password', ['token' => $token])
        </div>
    </section>
@endsection
