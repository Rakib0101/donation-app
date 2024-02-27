@props(['total_candidates'])
<section class="pb-20">
    <div class="container">
        <div class="flex flex-col lg:flex-row gap-6">
            <div class="md:p-10 p-6 pb-32 md:pb-[164px] relative w-full rounded-2xl bg-primary-50 text-center">
                <h2 class="mb-3 heading-05 text-gray-900">{{ __('home_cta_build_resume_title') }}</h2>
                <p class="mb-4 body-base-400 max-w-[448px] mx-auto text-gray-700">{{ __('home_cta_build_resume_content') }}</p>
                <div>
                    <a href="{{ route('candidate.resumeBuilder') }}" class="btn-primary">
                        <x-svg.circle-user />
                        <span>{{ __('build_resume') }}</span>
                    </a>
                </div>
                <img class="absolute bottom-0 left-1/2 -translate-x-1/2" src="{{ asset('frontend/assets/images/cta-01.png') }}" alt="">
            </div>
            <div class="md:p-10 p-6 pb-32 md:pb-[164px] relative w-full rounded-2xl bg-secondary-50 text-center">
                <h2 class="mb-3 heading-05 text-gray-900">{{ __('home_cta_hire_talent_title') }}</h2>
                <p class="mb-4 body-base-400 max-w-[448px] mx-auto text-gray-700">{{ __('home_cta_hire_talent_content') }}</p>
                <div>
                    <a href="#" class="btn-secondary">
                        <x-svg.circle-plus />
                        <span>{{ __('post_job') }}</span>
                    </a>
                </div>
                <img class="absolute bottom-0 left-0" src="{{ asset('frontend/assets/images/cta-02.png') }}" alt="">
                <div class="w-[188px] md:absolute static my-3 mx-auto bottom-5 right-5">
                    <h2 class="md:text-left text-secondary-500 heading-04">{{ $total_candidates }}+</h2>
                    <p class="md:text-left body-large-500 text-gray-600">{{ __('candidates_available_for_hiring') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
