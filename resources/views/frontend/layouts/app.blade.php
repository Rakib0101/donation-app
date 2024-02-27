<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta property="og:image" content="@yield('og:image')">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('frontend.layouts.partials.styles')
    @stack('css')
    @yield('ld-data')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body dir="{{ langDirection() }}" class="flex flex-col min-h-[100vh]">

    <x-frontend.header.header />

    {{-- Main --}}
    @yield('main')


    <x-frontend.footer.footer />
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
    @stack('script')
</body>

</html>
