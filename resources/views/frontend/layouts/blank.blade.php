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
    @yield('ld-data')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
</head>

<body dir="{{ langDirection() }}" class="flex flex-col min-h-[100vh]">
    <header>
        <div class="container">
            <div class="flex justify-center items-center pt-[50px]">
                <a href="">
                    <img src="{{ asset('frontend/assets/images/jobflix-logo.png') }}" alt="">
                </a>
            </div>
        </div>
    </header>

    {{-- Main --}}
    @yield('main')


    <footer style="background: linear-gradient(270deg, #007BFF 0%, #004A99 47.4%, #66B0FF 100%);">
        <div class="container">
            <div class="flex flex-wrap gap-4 justify-between items-center py-4">
                <p class="body-base text-white">© 2023 Jobpilot - Job Portal. All rights Reserved</p>
                <ul class="flex gap-6 items-center">
                    <li>
                        <a href="">
                            <img src="{{ asset('frontend/assets/images/facebook.svg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('frontend/assets/images/youtube.svg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('frontend/assets/images/instagram.svg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('frontend/assets/images/twitter.svg') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    @stack('script')
</body>

</html>
