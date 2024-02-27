@extends('frontend.layouts.app')
@section('title', __('about'))
@section('description')
    @php
        $data = metaData('home');
    @endphp
    {{ $data->description }}
@endsection
@section('og:image')
    {{ asset($data->image) }}
@endsection
@section('title')
    {{ $data->title }}
@endsection

@section('main')
    <main>
        <x-frontend.app-breadcumb />
        <section>
            <div class="container mx-auto py-[5rem] border-b border-b-gray-100">
                <div class="flex flex-wrap  items-center gap-y-6 gap-x-[5rem] lg:gap-x-[8rem]">
                    <div class="max-w-full lg:max-w-[40.5rem]" data-aos="zoom-in">
                        <h1 class="md:display-01 max-[767px]:text-4xl font-bold text-gray-900">
                            We build bridges between <span class="text-secondary-500">company</span>
                            and <span class="text-secondary-500">candidate</span>
                        </h1>
                    </div>
                    <div class="space-y-[1.5rem] flex-1" data-aos="slide-left">
                        <p class="body-base-400 text-gray-700">At our platform, we specialize in building bridges between
                            companies and candidates. We
                            understand the importance of finding the right match, and we strive to facilitate seamless
                            connections. Our innovative approach and comprehensive tools enable employers to discover
                            qualified candidates while empowering job seekers to explore exciting opportunities.</p>
                        <div class="flex items-center gap-4">
                            <a href="#" class="btn-primary ">
                                Create account
                            </a>
                            <a href="#" class="btn-white">
                                View pricing
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-[56px]">
            <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="text-center space-y-4">
                    <span class="text-secondary-500 flex items-center justify-center">
                        <x-svg.brief-case-02 />
                    </span>
                    <div class="space-y-2">
                        <p class="text-gray-900 text-[2rem] font-medium tracking-[-0.64px] counter">689,715</p>
                        <small class="body-large-500 text-gray-700">Active Jobs</small>
                    </div>

                </div>
                <div class="text-center space-y-4">
                    <span class="text-secondary-500 flex items-center justify-center">
                        <x-svg.building-05 />
                    </span>
                    <div class="space-y-2">
                        <p class="text-gray-900 text-[2rem] font-medium tracking-[-0.64px] counter">689,715</p>
                        <small class="body-large-500 text-gray-700">Companies</small>
                    </div>

                </div>
                <div class="text-center space-y-4">
                    <span class="text-secondary-500 flex items-center justify-center">
                        <x-svg.user-02 />
                    </span>
                    <div class="space-y-2">
                        <p class="text-gray-900 text-[2rem] font-medium tracking-[-0.64px] counter">689,715</p>
                        <small class="body-large-500 text-gray-700">Candidates</small>
                    </div>

                </div>
                <div class="text-center space-y-4">
                    <span class="text-secondary-500 flex items-center justify-center">
                        <x-svg.users-02 />
                    </span>
                    <div class="space-y-2">
                        <p class="text-gray-900 text-[2rem] font-medium tracking-[-0.64px] counter">597</p>
                        <small class="body-large-500 text-gray-700">Team Member</small>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="zoom-in">
                <div class="w-full hover:scale-90 transition duration-200 ease-linear">
                    <img src="{{ asset('frontend/assets/images/about-img-1.png') }}" alt="img 1" class="w-full">
                </div>
                <div class="w-full hover:scale-90 transition duration-200 ease-linear">
                    <img src="{{ asset('frontend/assets/images/about-img-2.png') }}" alt="img 1" class="w-full">
                </div>
                <div class="w-full hover:scale-90 transition duration-200 ease-linear">
                    <img src="{{ asset('frontend/assets/images/about-img-3.png') }}" alt="img 1" class="w-full">
                </div>
            </div>
        </section>
        <section class="py-[30px] md:py-[60px] lg:py-[80px]">

            @php
                $images = ['frontend/assets/images/pipedrive-logo.png', 'frontend/assets/images/twitch-logo.png', 'frontend/assets/images/treehouse-logo.png', 'frontend/assets/images/discord-logo.png', 'frontend/assets/images/invision-logo.png', 'frontend/assets/images/notion-logo.png'];
            @endphp
            <div class="container space-y-6">
                <h4 class="body-xl-500 text-center text-gray-700">{{ __('top_companies_find_talent') }}</h4>
                <div class="flex justify-center flex-wrap lg:flex-nowrap  gap-x-6 gap-y-1">
                    @foreach ($images as $image)
                        <div data-aos="zoom-in" data-aos-delay="{{ 100 * $loop->index }}">
                            <img src="{{ asset($image) }}" alt=""
                                class="w-full object-cover hover:scale-105 transition duration-200 ease-linear">
                        </div>
                    @endforeach
                </div>

                <div class="flex items-center justify-center gap-3 flex-wrap">
                    <a href="#" class="btn-primary">
                        <x-svg.plus-circle />
                        Post Job
                    </a>
                    <a href="#" class="btn-secondary">
                        <x-svg.user-circle />
                        Build Resume
                    </a>
                </div>
            </div>
        </section>
        <section>
            <div class="container p-[30px] md:p-[60px] lg:p-[80px] divide-y divide-y-gray-100 shadow-gray-base-2 border border-gray-100 rounded-[24px]"
                style="background: linear-gradient(180deg, rgba(255, 240, 230, 0.50) 0%, rgba(255, 240, 230, 0.00) 30.21%);">
                <div class="text-center space-y-4 pb-[40px]">
                    <h2 class="heading-01 text-gray-900">Unveiling our journey</h2>
                    <p class="body-base-400 text-gray-600 max-w-[652px] mx-auto">Duis gravida libero rhoncus eleifend
                        laoreet. Nunc non tortor
                        metus. Fusce justo quam, sagittis ut ipsum a, varius iaculis ligula. Pellentesque viverra ultricies
                        ligula sed gravida.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[22px] pt-[40px]">
                    <div class="space-y-3" data-aos="zoom-in" data-aos-delay="100">
                        <span class="text-secondary-500">
                            <x-svg.calender-date />
                        </span>
                        <h6 class="heading-06 text-gray-900">
                            Years of intense research
                        </h6>
                        <p class="body-base-400 text-gray-600">
                            Fusce suscipit augue gravida purus sagittis finibus eget vitae mi. Morbi fermentum, augue non
                            dapibus pulvinar mauris veli.
                        </p>
                    </div>
                    <div class="space-y-3" data-aos="zoom-in" data-aos-delay="200">
                        <span class="text-secondary-500">
                            <x-svg.user-circle />
                        </span>
                        <h6 class="heading-06 text-gray-900">
                            Audience segmentation
                        </h6>
                        <p class="body-base-400 text-gray-600">
                            Nam vestibulum nibh at tellus posuere mollis. Donec in aliquet lacus. Suspendisse sem libero,
                            imperdiet ut maximus eget, lacinia non dui.
                        </p>
                    </div>
                    <div class="space-y-3" data-aos="zoom-in" data-aos-delay="300">
                        <span class="text-secondary-500">
                            <x-svg.line-chart-up-03 />
                        </span>
                        <h6 class="heading-06 text-gray-900">
                            Contact monitoring
                        </h6>
                        <p class="body-base-400 text-gray-600">
                            Aliquam aliquet commodo justo auctor malesuada. Curabitur lobortis, neque eget ultrices
                            sagittis, felis velit varius est, a ultrices odio lacus nec purus.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-[30px] md:py-[60px] lg:py-[80px]">
            <div class="container">
                <div class="flex items-center flex-col lg:flex-row gap-[64px]">
                    <div class="space-y-[40px] flex-1 order-2 lg:order-1">
                        <div>
                            <h2 class="heading-02 text-gray-900">Our culture</h2>
                            <span class="body-base-400 text-gray-700">Vestibulum ante ipsum primis in faucibus orci luctus
                                et ultrices posuere cubilia curae; Vivamus aliquam augue nec ipsum ornare, a tempus libero
                                elementum.</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2" data-aos="zoom-in" data-aos-delay="100*1">
                                <h6 class="heading-06 text-primary-500">Flexible & understanding</h6>
                                <p class="body-base-400 text-gray-700">Fusce suscipit augue gravida purus sagittis finibus
                                    eget vitae mi. </p>
                            </div>
                            <div class="space-y-2" data-aos="zoom-in" data-aos-delay="100*2">
                                <h6 class="heading-06 text-primary-500">Growth & development</h6>
                                <p class="body-base-400 text-gray-700">Morbi fermentum, augue non dapibus pulvinar, mauris
                                    velit gravida risus. </p>
                            </div>
                            <div class="space-y-2" data-aos="zoom-in" data-aos-delay="100*3">
                                <h6 class="heading-06 text-primary-500">Open & Transparent</h6>
                                <p class="body-base-400 text-gray-700">Donec in aliquet lacus. Suspendisse sem libero,
                                    imperdiet ut. </p>
                            </div>
                            <div class="space-y-2" data-aos="zoom-in" data-aos-delay="100*4">
                                <h6 class="heading-06 text-primary-500">Help & Supportive</h6>
                                <p class="body-base-400 text-gray-700">Curabitur lobortis, neque eget ultrices sagittis,
                                    felis velit varius est, a ultrices odio lacus nec purus. </p>
                            </div>

                        </div>
                    </div>
                    <div class=" ming-w-full lg:min-w-[536px] order-1 lg:order-2" data-aos="fade-in">
                        <img src="{{ asset('frontend/assets/images/Rectangle-117.png') }}" alt=""
                            class="w-full h-full">
                    </div>
                </div>
            </div>
        </section>
        <section class="py-[30px] md:py-[60px] lg:py-[80px]"
            style="background: linear-gradient(180deg, rgba(255, 232, 230, 0.30) 0%, rgba(255, 240, 230, 0.00) 100%);">
            <div class="container space-y-[40px]">
                @php
                    $members = [
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                        [
                            'name' => 'Kristin Watson',
                            'job' => 'Ceo & Founder',
                            'image' => 'frontend/assets/images/Avatar.png',
                        ],
                    ];
                @endphp
                <div class="text-center space-y-4">
                    <h2 class="heading-01 text-gray-900">Explore our team</h2>
                    <p class="body-base-400 text-gray-700">Quisque iaculis interdum velit. Vestibulum sollicitudin viverra
                        tempor. Donec viverra fermentum
                        posuere.
                        Cras sed neque pellentesque, euismod purus non, tristique nibh. Nulla vitae purus sed mi efficitur
                        tincidunt vel id augue.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($members as $member)
                        <div class="p-6 text-center space-y-[21px] border border-transparent hover:border-gray-100 transition duration-200 ease-linear hover:bg-gray-white hover:shadow-gray-base-2 rounded-xl"
                            data-aos="zoom-in" data-aos-delay="{{ 100 * $loop->index + 1 }}">
                            <div class="h-[124px] w-[124px] rounded-full mx-auto">
                                <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }} img"
                                    class="w-full object-cover">
                            </div>
                            <div>
                                <h6 class="body-large-600 text-gray-900">{{ $member['name'] }}</h6>
                                <small class="body-base-400 text-gray-700">{{ $member['job'] }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="pb-[80px]">
            <div data-aos="fade-in"
                class="max-w-[1096px] mx-auto p-[48px] rounded-[24px] border border-gray-100 shadow-gray-base-1 flex items-start gap-[40px] flex-col sm:flex-row"
                style="background: linear-gradient(180deg, rgba(255, 240, 230, 0.50) 0%, rgba(255, 240, 230, 0.00) 56.63%);">
                <div class="btn-secondary h-[64px] w-[64px] shrink-0 rounded-full">
                    <x-svg.cursor-04 />
                </div>
                <div class="space-y-4">
                    <h5 class="heading-05 text-gray-900">Join our team</h5>
                    <p>Join our exceptional team and be part of something extraordinary. Collaborate with talented
                        professionals, unleash your potential, and make a meaningful impact. Experience a culture of growth,
                        inclusivity, and innovation. Explore exciting opportunities and shape the future with us.</p>
                    <a href="#" class="btn-white-secondary gap-2">
                        View Jobs
                        <x-svg.arrow-circle-right />
                    </a>
                </div>
            </div>
        </section>p
    </main>
@endsection

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush

@push('script')
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init();
        })
        $(document).ready(() => {
            console.log('ready')
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            })
        })
    </script>
@endpush
