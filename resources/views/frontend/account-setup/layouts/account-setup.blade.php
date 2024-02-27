<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta property="og:image" content="@yield('og:image')">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <title>@yield('title') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
</head>

<body dir="{{ langDirection() }}">
    <x-frontend.account-setup.header />
    @yield('content')
    <x-frontend.account-setup.footer />
    @stack('js')
</body>

</html>
