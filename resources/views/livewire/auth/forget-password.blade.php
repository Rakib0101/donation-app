<div class="flex flex-col lg:flex-row">
    <div class="lg:w-1/2 w-full max-w-[536px] self-center">
        <div class="pt-6 flex justify-center">
            <a href="/">
                <img src="{{ asset('frontend/assets/images/logo/auth-logo.png') }}" alt="">
            </a>
        </div>
        <form wire:submit.prevent="sendPasswordResetLink" class="py-[114px] flex flex-col gap-6">
            <h2 class="heading-02 text-gray-900 text-center">{{__('forget_password') }}</h2>
            @if (session()->has('success'))
            <div class="flex items-center p-4 mb-4 text-sm text-white rounded-lg bg-green-500 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <x-svg.session-success-icon />
                <div>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            </div>
            @endif
            <div class="flex flex-col gap-4">
                <div>
                    <x-frontend.forms.label for='name' name='Email' />
                    <x-frontend.forms.input wire:model="email" type="email" id='name'
                        placeholder='Email address' />
                </div>
                <div>
                    <button wire:click.prevent="sendPasswordResetLink" type="submit" class="btn-primary w-full">
                        <span>{{__('reset_password') }}</span>
                        <span wire:loading wire:target="sendPasswordResetLink" class="animate-spin rtl:rotate-180">
                            <x-svg.loading/>
                        </span>
                        <span wire:loading.remove wire:target="sendPasswordResetLink" class="rtl:rotate-180">
                            <x-svg.arrow-circle-right />
                        </span>
                    </button>
                </div>
                <div class="body-base-400 text-gray-600 flex justify-center gap-2 items-center">
                    <p>{{__('go_back_to') }}!</p>
                    <a href="/login" class="btn-text-primary underline">{{__('login') }}</a>
                </div>
                <div class="body-base-400 text-gray-600 flex justify-center gap-2 items-center">
                    <p>{{__('dont_have_account') }}!</p>
                    <a href="/register" class="btn-text-primary underline">{{__('create_account') }}</a>
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
