<section class="py-20">
    <div class="container">
        <div class="flex flex-col gap-6">
            <p class="body-xl-500 text-center text-gray-700">{{ __('top_companies_find_talent') }}</p>
            <div class="flex sm:gap-6 gap-3 items-center span-x overflow-x-auto no-scrollbar">
                <img data-aos="zoom-in" src="{{ asset('frontend/assets/images/brand/brand-01.png') }}" alt="">
                <img data-aos="zoom-in" src="{{ asset('frontend/assets/images/brand/brand-02.png') }}" alt="">
                <img data-aos="zoom-in" src="{{ asset('frontend/assets/images/brand/brand-03.png') }}" alt="">
                <img data-aos="zoom-in" src="{{ asset('frontend/assets/images/brand/brand-04.png') }}" alt="">
                <img data-aos="zoom-in" src="{{ asset('frontend/assets/images/brand/brand-05.png') }}" alt="">
                <img data-aos="zoom-in" src="{{ asset('frontend/assets/images/brand/brand-06.png') }}" alt="">
            </div>
            <div class="flex items-center gap-3 justify-center">
                <a href="" class="btn-primary">
                    <x-svg.circle-plus class="w-4 h-4 sm:w-6 sm:h-6" />
                    <span>{{ __('post_job') }}</span>
                </a>
                <a href="" class="btn-secondary">
                    <x-svg.circle-user class="w-4 h-4 sm:w-6 sm:h-6" />
                    <span>{{ __('build_resume') }}</span>
                </a>
            </div>
        </div>
    </div>
</section>
