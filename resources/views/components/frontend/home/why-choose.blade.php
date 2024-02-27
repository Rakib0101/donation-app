@props(['overview'])

<section>
    <div class="container">
        <div class="py-20 border-t border-t-gray-100">
            <h2 class="section-title text-center mb-6" data-aos="zoom-in">{{ __('why_choose_us') }}</h2>
            <p class="section-text text-center mb-6" data-aos="zoom-in">{{ __('why_choose_us_description') }}</p>
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6 mb-10">
                <div data-aos="zoom-in" class="choose-card p-4 rounded-md transition-all duration-300 flex flex-col gap-6 group shadow-gray-base-1 hover:shadow-gray-base-4">
                    <div class="text-center">
                        <span class="p-4 transition-all duration-300 text-primary-500 group-hover:text-white group-hover:bg-secondary-500 rounded-full bg-primary-50 inline-flex justify-center items-center">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                              </svg>

                        </span>
                    </div>
                    <div class="flex flex-col gap-3 items-center justify-center">
                        <h3 class="body-large-600 text-gray-900 text-center">
                            {{ __('why_choose_us_card_1_title') }}
                        </h3>
                        <p class="body-base-400 text-gray-600 text-center">
                            {{ __('why_choose_us_card_1_description') }}
                        </p>
                    </div>
                </div>
                <div data-aos="zoom-in" class="choose-card p-4 rounded-md transition-all duration-300 flex flex-col gap-6 group shadow-gray-base-1 hover:shadow-gray-base-4">
                    <div class="text-center">
                        <span class="p-4 transition-all duration-300 text-primary-500 group-hover:text-white group-hover:bg-secondary-500 rounded-full bg-primary-50 inline-flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                              </svg>
                        </span>
                    </div>
                    <div class="flex flex-col gap-3 items-center justify-center">
                        <h3 class="body-large-600 text-gray-900 text-center">
                            {{ __('why_choose_us_card_2_title') }}
                        </h3>
                        <p class="body-base-400 text-gray-600 text-center">
                            {{ __('why_choose_us_card_2_description') }}
                        </p>
                    </div>
                </div>
                <div data-aos="zoom-in" class="choose-card p-4 rounded-md transition-all duration-300 flex flex-col gap-6 group shadow-gray-base-1 hover:shadow-gray-base-4">
                    <div class="text-center">
                        <span class="p-4 transition-all duration-300 text-primary-500 group-hover:text-white group-hover:bg-secondary-500 rounded-full bg-primary-50 inline-flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                              </svg>
                        </span>
                    </div>
                    <div class="flex flex-col gap-3 items-center justify-center">
                        <h3 class="body-large-600 text-gray-900 text-center">
                            {{ __('why_choose_us_card_3_title') }}
                        </h3>
                        <p class="body-base-400 text-gray-600 text-center">
                            {{ __('why_choose_us_card_3_description') }}
                        </p>
                    </div>
                </div>
                <div data-aos="zoom-in" class="choose-card p-4 rounded-md transition-all duration-300 flex flex-col gap-6 group shadow-gray-base-1 hover:shadow-gray-base-4">
                    <div class="text-center">
                        <span class="p-4 transition-all duration-300 text-primary-500 group-hover:text-white group-hover:bg-secondary-500 rounded-full bg-primary-50 inline-flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                              </svg>
                        </span>
                    </div>
                    <div class="flex flex-col gap-3 items-center justify-center">
                        <h3 class="body-large-600 text-gray-900 text-center">
                            {{ __('why_choose_us_card_4_title') }}
                        </h3>
                        <p class="body-base-400 text-gray-600 text-center">
                            {{ __('why_choose_us_card_4_description') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-10 grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 p-6 gap-6 max-w-[824px] mx-auto border border-gray-100 shadow-gray-base-2 rounded-xl">
                <div class="flex flex-col gap-2">
                    <h2 class="counter text-center heading-05 text-gray-900">
                        {{ $overview['total_active_jobs'] }}
                    </h2>
                    <p class="text-center body-base-400 text-gray-700">{{ __('active_jobs') }}</p>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="counter text-center heading-05 text-gray-900">
                        {{ $overview['total_companies'] }}
                    </h2>
                    <p class="text-center body-base-400 text-gray-700">{{ __('companies') }}</p>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="counter text-center heading-05 text-gray-900">
                        {{ $overview['total_candidates'] }}
                    </h2>
                    <p class="text-center body-base-400 text-gray-700">{{ __('candidates') }}</p>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="counter text-center heading-05 text-gray-900">
                        {{ $overview['total_new_jobs'] }}
                    </h2>
                    <p class="text-center body-base-400 text-gray-700">{{ __('new_jobs') }}</p>
                </div>
            </div>
            <div class="flex gap-3 justify-center">
                <a href="{{ route('login') }}" class="btn-white-secondary w-[200px]">
                    {{ __('sign_in') }}
                </a>
                <a href="{{ route('register') }}" class="btn-primary w-[200px]">
                    <span>{{ __('register_now') }}</span>
                    <x-svg.arrow-right-circle stroke="white" />
                </a>
            </div>
        </div>
    </div>
</section>
