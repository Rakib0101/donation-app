@extends('frontend.layouts.app')

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

@php
    $isListview = true;
    $companies = [
        [
            'name' => 'TechSolutions Ltd.',
            'industry' => 'Technology',
            'size' => 'Medium',
            'location' => 'San Francisco, USA',
            'description' => 'TechSolutions Ltd. is a technology company that specializes in developing innovative software solutions for businesses worldwide.',
            'logo' => 'techsolutions_logo.png',
            'website' => 'https://www.techsolutions.com',
            'email' => 'info@techsolutions.com',
            'phone' => '+1 (415) 123-4567',
            'jobs' => [
                [
                    'title' => 'Full Stack Developer',
                    'description' => 'We are looking for a skilled full stack developer to join our dynamic team and contribute to the development of our cutting-edge software products.',
                    'requirements' => 'Bachelor\'s degree in Computer Science or related field, 2+ years of experience in full stack development, proficiency in JavaScript, React, and Node.js.',
                    'salary' => '$90,000 - $110,000 per year',
                    'location' => 'San Francisco, USA',
                    'posted_at' => '2024-02-08',
                ],
            ],
            'varified' => true,
            'openposition' => 3,
        ],
        [
            'name' => 'GlobalFinance Inc.',
            'industry' => 'Finance',
            'size' => 'Large',
            'location' => 'London, UK',
            'description' => 'GlobalFinance Inc. is a leading financial services provider offering a wide range of investment and wealth management solutions to clients worldwide.',
            'logo' => 'globalfinance_logo.png',
            'website' => 'https://www.globalfinance.com',
            'email' => 'careers@globalfinance.com',
            'phone' => '+44 (0) 20 9876 5432',
            'jobs' => [
                [
                    'title' => 'Financial Analyst',
                    'description' => 'We are seeking a talented financial analyst to join our team and assist with financial planning, analysis, and reporting.',
                    'requirements' => 'Bachelor\'s degree in Finance or related field, strong analytical skills, proficiency in financial modeling and Excel.',
                    'salary' => '£50,000 - £60,000 per year',
                    'location' => 'London, UK',
                    'posted_at' => '2024-02-08',
                ],
                // Additional jobs for GlobalFinance Inc. can be added here
            ],
            'varified' => false,
            'openposition' => 3,
        ],
        [
            'name' => 'EcoTech Solutions',
            'industry' => 'Environmental',
            'size' => 'Small',
            'location' => 'Berlin, Germany',
            'description' => 'EcoTech Solutions is dedicated to providing environmentally friendly solutions for sustainable living. Our products range from renewable energy systems to waste management solutions.',
            'logo' => 'ecotech_logo.png',
            'website' => 'https://www.ecotechsolutions.com',
            'email' => 'info@ecotechsolutions.com',
            'phone' => '+49 30 1234 5678',
            'jobs' => [
                [
                    'title' => 'Environmental Engineer',
                    'description' => 'We are looking for an environmental engineer to help develop and implement eco-friendly solutions to environmental challenges.',
                    'requirements' => 'Bachelor\'s degree in Environmental Engineering or related field, experience with environmental impact assessments, knowledge of regulatory requirements.',
                    'salary' => '€45,000 - €55,000 per year',
                    'location' => 'Berlin, Germany',
                    'posted_at' => '2024-02-08',
                ],
                // Additional jobs for EcoTech Solutions can be added here
            ],
            'varified' => false,
            'openposition' => 3,
        ],
        [
            'name' => 'HealthFirst Hospitals',
            'industry' => 'Healthcare',
            'size' => 'Large',
            'location' => 'Chicago, USA',
            'description' => 'HealthFirst Hospitals is a leading healthcare provider offering a wide range of medical services to patients in the Chicago area. Our mission is to provide compassionate care and promote wellness.',
            'logo' => 'healthfirst_logo.png',
            'website' => 'https://www.healthfirsthospitals.com',
            'email' => 'careers@healthfirsthospitals.com',
            'phone' => '+1 (312) 987-6543',
            'jobs' => [
                [
                    'title' => 'Registered Nurse',
                    'description' => 'We are seeking compassionate and skilled registered nurses to join our team and provide quality care to patients.',
                    'requirements' => 'Bachelor of Science in Nursing (BSN) degree, current RN license, CPR certification, excellent communication and interpersonal skills.',
                    'salary' => '$60,000 - $80,000 per year',
                    'location' => 'Chicago, USA',
                    'posted_at' => '2024-02-08',
                ],
                // Additional jobs for HealthFirst Hospitals can be added here
            ],
            'varified' => true,
            'openposition' => 3,
        ],
        [
            'name' => 'Foodie Express',
            'industry' => 'Food & Beverage',
            'size' => 'Small',
            'location' => 'Paris, France',
            'description' => 'Foodie Express is a boutique food and beverage company specializing in gourmet catering services for events and private functions in Paris and surrounding areas.',
            'logo' => 'foodieexpress_logo.png',
            'website' => 'https://www.foodieexpress.com',
            'email' => 'info@foodieexpress.com',
            'phone' => '+33 1 2345 6789',
            'jobs' => [
                [
                    'title' => 'Sous Chef',
                    'description' => 'We are seeking a talented and experienced sous chef to assist in the preparation and execution of high-quality dishes for our catering events.',
                    'requirements' => 'Culinary degree or equivalent experience, 3+ years of experience in a professional kitchen, strong leadership and organizational skills.',
                    'salary' => '€35,000 - €45,000 per year',
                    'location' => 'Paris, France',
                    'posted_at' => '2024-02-08',
                ],
                // Additional jobs for Foodie Express can be added here
            ],
            'varified' => false,
            'openposition' => 3,
        ],
    ];

@endphp

@section('main')
    <main class="pb-[4rem]">
        <x-frontend.app-breadcumb />
        <section class="mt-[2rem]">
            <div class="container mx-auto space-y-[1.5rem] lg:divide-x divide-gray-100 flex items-start gap-4">
                <div class="flex-1 min-w-[300px] hidden lg:inline">
                    <x-frontend.company.company-filters />
                </div>
                <div class="space-y-[1.5rem] w-full px-6">
                    <div class="flex items-center gap-4 body-base-400 text-gray-700 flex-col sm:flex-row" x-init
                        x-data="{ showSearchMenu: false }">
                        <div class="lg:hidden mr-auto">
                            <button type="button" class="icon-btn-white" title="show-sidebar"
                                data-drawer-target="jobfilter-drawer" data-drawer-show="jobfilter-drawer"
                                aria-controls="jobfilter-drawer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                                </svg>
                            </button>
                            <x-frontend.drawers.candidatefilter-drawer />
                        </div>
                        <div class="flex-1 text-gray-600 w-full">
                            <x-frontend.forms.input class="hover:border-primary-500" :icon="true"
                                placeholder="Search candidates...">
                                <x-svg.search-md stroke="currentColor" />
                            </x-frontend.forms.input>
                        </div>
                        <div role="button" @click="showSearchMenu=!showSearchMenu"
                            class="w-full relative p-2.5 flex items-center sm:w-auto border border-gray-100 transition duration-200 ease-linear hover:border-primary-500 focus-within:border-primary-500 rounded-lg  px-3 shadow-gray-base-1 min-w-max sm:min-w-[15rem] ">
                            <span
                                class="body-base-400 text-gray-900 bg-chevron-down bg-right bg-no-repeat top-0 left-0 w-full z-10">Sort
                                by:
                                Newest</span>

                            @php
                                $searchItems = ['Experience', 'Expected Salary', 'Location'];
                            @endphp
                            <ul x-show="showSearchMenu" x-cloak x-transition @click.outside="showSearchMenu=false"
                                class="rounded-lg border border-gray-100 shadow-gray-base-1 bg-gray-white py-3  absolute w-full z-10 top-12 right-0">
                                @foreach ($searchItems as $item)
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-[18px] py-3 gap-3 text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition duration-200 ease-linear">
                                            <span>
                                                <x-svg.search-md stroke="currentColor" />
                                            </span>
                                            {{ $item }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    @if ($isListview)
                        <div class="divide-gray-100 divide-y">
                            @foreach ($companies as $company)
                                <x-frontend.company.companylist-card :company="$company" />
                            @endforeach
                        </div>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                            @foreach ($companies as $company)
                                <x-frontend.company.company-card :company="$company"/>
                            @endforeach
                            {{-- <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card />
                            <x-frontend.company.company-card /> --}}
                        </div>
                    @endif

                    <div class="mt-[2.5rem]">
                        <ul class="flex items-center gap-[0.75rem] justify-center" x-init x-data="{ activeTab: 1 }">
                            <li
                                class="h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-[rgba(240,234,251,0.40)] text-primary-100">
                                <a href="#">
                                    <x-svg.arrow-circle-left />
                                </a>
                            </li>
                            <template x-for="n in 5" :key="n">
                                <li class="h-[2.75rem] w-[2.75rem] rounded-full flex items-center justify-center  hover:shadow-gray-base-2 border border-transparent  transition-all duration-200 ease-in-out"
                                    :class="activeTab === n ? 'bg-primary-500 text-gray-white' :
                                        'hover:border-gray-100 hover:text-gray-900 text-gray-700'">
                                    <a href="#" x-text="`0${n}`"></a>
                                </li>
                            </template>

                            <li
                                class="h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-primary-50 text-primary-500 hover:bg-primary-500 hover:text-gray-white transition-all duration-200 ease-in-out">
                                <a href="#">
                                    <x-svg.arrow-circle-right />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection
