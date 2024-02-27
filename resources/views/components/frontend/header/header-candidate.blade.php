<div class="border-b border-gray-100 overflow-x-auto no-scrollbar">
    <div class="container -mb-[1px]">
        <div class="flex justify-between items-center">
            <ul class="flex">
                <li><a href="/candidate/dashboard" wire:navigate class="user-menu__link {{ request()->is('candidate/dashboard') ? 'active' : '' }}">{{__('dashboard')}}</a></li>
                <li><a href="/candidate/applied-jobs" wire:navigate class="user-menu__link {{ request()->is('candidate/applied-jobs') ? 'active' : '' }}">{{__('applied_jobs')}}</a></li>
                <li><a href="/candidate/saved-jobs" wire:navigate class="user-menu__link {{ request()->is('candidate/saved-jobs') ? 'active' : '' }}">{{__('saved_jobs')}}</a></li>
                <li><a href="/candidate/job-alert" wire:navigate class="user-menu__link {{ request()->is('candidate/job-alert') ? 'active' : '' }}">{{__('job_alert')}}</a></li>
                <li><a href="/candidate/message" wire:navigate class="user-menu__link {{ request()->is('candidate/message') ? 'active' : '' }}">{{__('message')}}</a></li>
                <li><a href="/candidate/resume-builder" wire:navigate class="user-menu__link {{ request()->is('candidate/resume-builder') ? 'active' : '' }}">{{ __('my_resume') }}</a></li>
            </ul>
            <ul class="flex">
                <li><a href="/candidate/settings" wire:navigate class="user-menu__link {{ request()->is('candidate/settings') ? 'active' : '' }}">{{__('settings')}}</a></li>
            </ul>
        </div>
    </div>
</div>
