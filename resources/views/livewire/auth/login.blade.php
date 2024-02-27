<div class="flex flex-col lg:flex-row">
    <div class="lg:w-1/2 w-full max-w-[536px] self-center">
        <div class="pt-6 flex justify-center">
            <a href="/">
                <img src="{{ asset('frontend/assets/images/logo/auth-logo.png') }}" alt="">
            </a>
        </div>
        <form wire:submit.prevent="login" method="POST" class="py-[114px] flex flex-col gap-6">
            <h2 class="heading-02 text-gray-900 text-center">{{__('login') }}</h2>
            <div>
                <p class="text-center text-gray-500 body-small-400 mb-3">{{ __('login_with') }}</p>
                <div class="flex gap-4">
                    <a href="" class="btn-white justify-center w-full">
                        <img src="{{ asset('frontend/assets/images/logo/linkedin.png') }}" alt="">
                        <span>{{__('linkedin') }}</span>
                    </a>
                    <a href="" class="btn-white justify-center w-full">
                        <img src="{{ asset('frontend/assets/images/logo/google.png') }}" alt="">
                        <span>{{__('google') }}</span>
                    </a>
                </div>
            </div>
            <div class="h-[1px] bg-gray-100"></div>
            <div class="flex flex-col gap-4">
                <div>
                    <x-frontend.forms.label for='name' name='Email/Username' />
                    <x-frontend.forms.input wire:model="username" type="text" id='name' placeholder='Email Address or Username' name="username"/>
                </div>
                <div>
                    <x-frontend.forms.label for='password' name='Password' />
                    <x-frontend.forms.password wire:model="password" id='password' placeholder='Enter password' name="password"/>
                </div>
                <div class="flex flex-wrap justify-between items-center gap-3 py-3">
                    <div class="flex items-center gap-2 ">
                        <div class="flex items-center ">
                            <input wire:model="term_condition" id="term_condition" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 ">
                        </div>
                        <x-frontend.forms.label for='term_condition' :name="__('accept_terms')"  class="mb-0" /> <br>
                    </div>

                    <a href="/forget-password" class="btn-text-primary underline">{{__('forget_password') }}</a>
                </div>
                @error('term_condition')
                    <p class="text-red-500 -mt-2">{{ $message }}</p>
                @enderror

                <div>
                    <button type="submit" class="btn-primary w-full mb-3">
                        <span>{{ __('login') }}</span>
                        <span wire:loading wire:target="login" class="animate-spin rtl:rotate-180">
                            <x-svg.loading/>
                        </span>
                        <span wire:loading.remove wire:target="login" class="rtl:rotate-180">
                            <x-svg.arrow-circle-right />
                        </span>
                    </button>
                    <div class="body-base-400 text-gray-600 flex justify-center gap-2 items-center">
                        <p>{{ __('dont_have_account') }}</p>
                        <a href="/register" class="btn-text-primary underline">{{__('create_now') }}</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="auth-sidebar hidden lg:block lg:fixed static top-0 right-0 max-w-[784px] w-[47%] h-screen">
        <div class="w-full h-full relative">
            <div class="auth-sidebar__content absolute z-50 bottom-0 right-0 w-full">
                <div class="absolute bottom-16 left-16 right-16">
                    <div class="swiper authSlider">
                        <div class="swiper-wrapper pb-12">
                            @foreach ([1, 2, 3, 4] as $n)
                                <div class="space-y-10 swiper-slide">
                                    <div class="space-y-6">
                                        <p class="body-xxl-500 text-white">
                                            “Thanks to this job portal website, I quickly found my dream job!
                                            Easy to navigate, countless opportunities, and excellent results.
                                            Highly recommended!”
                                        </p>
                                        <div class="space-y-1.5">
                                            <p class="body-xl-600 text-white">
                                                Emily Kuper
                                            </p>
                                            <span
                                                class="text-[0.8rem] sm:text-[1rem] text-gray-100 font-normal">Dental
                                                hygienist -
                                                Satisfied
                                                Job Seeker</span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('css')
    <style>
        .auth-toggle {
            background: white;
            color: var(--gray-700);
        }

        .auth-toggle:has(input:checked) {
            background: var(--secondary-500);
            color: white;
        }

        .auth-sidebar {
            background-image: url('frontend/assets/images/auth-bg.png');
            background-repeat: no-repeat;
        }

        .auth-sidebar__content {
            background: linear-gradient(180deg, rgba(60, 70, 73, 0.00) 0%, #3C4649 79.17%);
            height: 450px;
        }

        .authSlider .swiper-pagination {
            text-align: left;
            bottom: 0;
        }

        .authSlider .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 2px solid white;
            opacity: 50%;
        }

        .authSlider .swiper-pagination-bullet-active {
            background-color: white;
            border-color: white;
            opacity: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush


@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        window.addEventListener("load", () => {
            new Swiper(".authSlider", {
                autoplay: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '">' + '' + "</span>";
                    },
                },
            });
        });
    </script>
@endpush
