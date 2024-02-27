<div class="bg-primary-800 py-[18px]">
    <div class="container">
        <div class="flex justify-between items-center">
            <div class="flex gap-6 items-center">
                <a href="/">
                    <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="">
                </a>

                {{-- Header Search --}}
                <x-frontend.header.header-search />
            </div>
            <div class="flex gap-4 items-center">
                <div class="inline-flex gap-2 items-center hover:text-white">
                    <x-frontend.header.notification-panel />
                    <x-frontend.header.message-panel />
                </div>
                <a href="#">
                    <img class="w-11 h-11 rounded-full object-cover"
                        src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="">
                </a>
                @if (Auth::check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn-white">{{ __('log_out') }}</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-white">{{ __('log_in') }}</a>
                @endif

                <a href="/company/post-job" class="btn-secondary sm:inline-flex hidden">
                    <x-svg.circle-plus />
                    <span>{{ __('post_job') }}</span>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- <x-frontend.header.header-search /> --}}
