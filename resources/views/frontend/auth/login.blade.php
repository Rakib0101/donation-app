@extends('frontend.auth.layouts.auth')
@section('title', __('sign_in'))
@section('content')
    <section>
        <div class="container">
           @livewire('auth.login')
        </div>
    </section>
@endsection


