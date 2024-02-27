<div>
    <div class="container">
        <div class="flex justify-between items-center">
            <ul class="lg:flex hidden">
                <li><a href="/jobs" class="top-menu__link {{ request()->is('jobs') ? 'active' : '' }}">{{ __('find_jobs') }}</a></li>
                <li><a href="/companies" class="top-menu__link {{ request()->is('/companies') ? 'active' : '' }}">{{__('employers')}}</a></li>
                <li><a href="/candidates" class="top-menu__link {{ request()->is('candidates') ? 'active' : '' }}">{{__('candidates')}}</a></li>
                <li><a href="/pricing-plan" class="top-menu__link {{ request()->is('pricing-plan') ? 'active' : '' }}">{{__('price_plan')}}</a></li>
                <li><a href="/help-center" class="top-menu__link {{ request()->is('help-center') ? 'active' : '' }}">{{__('help_center')}}</a></li>
            </ul>
            <button class="lg:hidden inline-flex" @click="openMenu = true">
                <x-svg.menu />
            </button>
            <div class="flex py-2 gap-6 items-center">
                <a href="" class="sm:inline-flex hidden gap-2 items-center body-base-400 text-gray-700">
                    <x-svg.headphone />
                    <span>+1-202-555-0178</span>
                </a>
                <x-frontend.header.language-dropdown />
                <x-frontend.header.currency-dropdown />
                <x-frontend.header.country-dropdown />
            </div>
        </div>
    </div>
</div>
