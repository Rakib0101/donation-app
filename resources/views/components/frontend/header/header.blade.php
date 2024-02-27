@props(['company'])
<header x-data="{openMenu: false}">
    <x-frontend.header.header-top />
    <x-frontend.header.header-main />
    <x-frontend.header.responsive-header />

    @if (auth()->check() && auth()->user()->role == 'candidate')
        <x-frontend.header.header-candidate />
    @elseif (auth()->check() && auth()->user()->role == 'company')
        <x-frontend.header.header-company />
    @endif
</header>
