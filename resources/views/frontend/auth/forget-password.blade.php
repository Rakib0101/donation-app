@extends('frontend.auth.layouts.auth')
@section('title', __('forget_password'))
@section('content')
    <section>
        <div class="container">
          @livewire('auth.forget-password')
        </div>
    </section>
@endsection


