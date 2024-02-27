<div class="responsive-menu fixed top-0 left-0 z-50 h-full w-full max-w-[300px] bg-white transition-all duration-300 -translate-x-full" :class="openMenu ? 'active':''">
    <div class="bg-primary-800 p-3 flex justify-between items-center">
        <a href="/">
            <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="">
        </a>
        <button class="inline-flex p-2 rounded-full bg-transparent text-white hover:bg-white hover:text-gray-500" @click="openMenu = false">
            <x-svg.close />
        </button>
    </div>
    <ul class="flex flex-col gap-1">
        <li><a href="/" class="user-menu__link w-full {{ request()->is('/') ? 'active' : '' }}">Find Jobs</a></li>
        <li><a href="" class="user-menu__link w-full">Employers</a></li>
        <li><a href="" class="user-menu__link w-full">Candidates</a></li>
        <li><a href="" class="user-menu__link w-full">Pricing Plan</a></li>
        <li><a href="" class="user-menu__link w-full">Help Center</a></li>
    </ul>
</div>
<div class="responsive-overlay invisible fixed top-0 w-full h-full bg-black/50 z-30" :class="openMenu ? 'active':''" @click="openMenu=false"></div>
