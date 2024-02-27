<div class="border-b border-gray-100">
    <div class="container -mb-[1px]">
        <div class="flex justify-between items-center overflow-x-auto no-scrollbar">
            <ul class="flex snap-x">
                <li class="snap-start"><a href="/company/dashboard" class="user-menu__link {{ request()->is('company/dashboard') ? 'active' : '' }}">{{__('dashboard')}}</a></li>
                <li class="snap-start"><a href="/company/post-job" class="user-menu__link {{ request()->is('company/post-job') ? 'active' : '' }}">{{__('post_a_job')}}</a></li>
                <li class="snap-start"><a href="{{ route('company.myjob') }}" class="user-menu__link {{ request()->is('my-jobs') ? 'active' : '' }}">{{__('my_jobs')}}</a></li>
                <li class="snap-start"><a href="/company/saved-application" class="user-menu__link {{ request()->is('company/saved-application') ? 'active' : '' }}">{{__('saved_candidate')}}</a></li>
                <li class="snap-start"><a href="/company/message" class="user-menu__link {{ request()->is('company/message') ? 'active' : '' }}">{{__('message')}}</a></li>
                <li class="snap-start"><a href="/company/plan-billing-recurring" class="user-menu__link {{ request()->is('company/plan-billing-recurring') ? 'active' : '' }}">{{__('plans_billing')}}</a></li>
                <li class="snap-start"><a href="/company/team-member" class="user-menu__link {{ request()->is('company/team-member') ? 'active' : '' }}">{{ __('team_member') }}</a></li>
                <li class="snap-start"><a href="/company/my-companies" class="user-menu__link {{ request()->is('company/my-companies') ? 'active' : '' }}">{{__('my_companies')}}</a></li>
            </ul>
            <ul class="flex">
                <li><a href="/company/settings" class="user-menu__link {{ request()->is('company/settings') ? 'active' : '' }}">{{__('settings')}}</a></li>
            </ul>
        </div>
    </div>
</div>
