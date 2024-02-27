@extends('frontend.layouts.app')
@section('title', __('browse_candidates'))
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
    $candidates = [
        [
            'name' => 'Alice Johnson',
            'bio' => 'A dedicated and detail-oriented full-stack developer with a passion for crafting efficient and user-friendly web applications.',
            'skills' => ['PHP', 'Laravel', 'JavaScript', 'React.js', 'MySQL', 'HTML', 'CSS'],
            'location' => 'Los Angeles, CA',
            'experiences' => [
                [
                    'title' => 'Senior Full-Stack Developer',
                    'company' => 'Tech Solutions Inc.',
                    'duration' => '2017 - Present',
                ],
                [
                    'title' => 'Software Engineer',
                    'company' => 'WebTech Corp',
                    'duration' => '2015 - 2017',
                ],
            ],
            'education' => [
                'degree' => 'Bachelor of Science in Computer Science',
                'university' => 'University of California, Los Angeles',
                'year' => '2015',
            ],
            'expected_salary' => '$110,000',
            'experience_level' => 'Senior',
            'language' => 'English',
            'varified' => true,
            'avaiable' => true,
        ],
        [
            'name' => 'David Kim',
            'bio' => 'An enthusiastic frontend developer with a strong eye for design and a knack for creating visually appealing and responsive websites.',
            'skills' => ['HTML', 'CSS', 'JavaScript', 'Vue.js', 'Bootstrap', 'SASS'],
            'location' => 'Seattle, WA',
            'experiences' => [
                [
                    'title' => 'Frontend Developer',
                    'company' => 'Design Dynamics LLC',
                    'duration' => '2018 - Present',
                ],
                [
                    'title' => 'Web Designer',
                    'company' => 'Creative Web Solutions',
                    'duration' => '2016 - 2018',
                ],
            ],
            'education' => [
                'degree' => 'Bachelor of Fine Arts in Web Design',
                'university' => 'Art Institute of Seattle',
                'year' => '2016',
            ],
            'expected_salary' => '$90,000',
            'experience_level' => 'Intermediate',
            'language' => 'English',
            'varified' => false,
            'avaiable' => false,
        ],
        [
            'name' => 'Maria Rodriguez',
            'bio' => 'A results-driven project manager with extensive experience leading cross-functional teams to deliver high-quality software products within budget and schedule constraints.',
            'skills' => ['Project Management', 'Agile Methodologies', 'Scrum', 'JIRA', 'Microsoft Project'],
            'location' => 'Chicago, IL',
            'experiences' => [
                [
                    'title' => 'Senior Project Manager',
                    'company' => 'Tech Innovations Ltd.',
                    'duration' => '2015 - Present',
                ],
                [
                    'title' => 'Project Coordinator',
                    'company' => 'Software Solutions Inc.',
                    'duration' => '2012 - 2015',
                ],
            ],
            'education' => [
                'degree' => 'Master of Business Administration',
                'university' => 'Kellogg School of Management, Northwestern University',
                'year' => '2012',
            ],
            'expected_salary' => '$120,000',
            'experience_level' => 'Senior',
            'language' => 'English, Spanish',
            'varified' => false,
            'avaiable' => true,
        ],
        [
            'name' => 'Mohammed Ahmed',
            'bio' => 'A detail-oriented quality assurance engineer with a passion for ensuring the reliability and functionality of software products through comprehensive testing strategies.',
            'skills' => ['Manual Testing', 'Automated Testing', 'Selenium', 'JUnit', 'Bug Tracking Systems'],
            'location' => 'Toronto, Canada',
            'experiences' => [
                [
                    'title' => 'Senior QA Engineer',
                    'company' => 'TechTesting Inc.',
                    'duration' => '2016 - Present',
                ],
                [
                    'title' => 'QA Analyst',
                    'company' => 'Software Quality Solutions',
                    'duration' => '2014 - 2016',
                ],
            ],
            'education' => [
                'degree' => 'Bachelor of Science in Computer Engineering',
                'university' => 'University of Toronto',
                'year' => '2014',
            ],
            'expected_salary' => '$100,000',
            'experience_level' => 'Senior',
            'language' => 'English',
            'varified' => true,
            'avaiable' => false,
        ],
        [
            'name' => 'Sophie Chen',
            'bio' => 'An innovative UX/UI designer with a keen understanding of user-centric design principles and a track record of creating intuitive and engaging digital experiences.',
            'skills' => ['User Experience Design', 'User Interface Design', 'Wireframing', 'Prototyping', 'Adobe Creative Suite'],
            'location' => 'San Francisco, CA',
            'experiences' => [
                [
                    'title' => 'Senior UX/UI Designer',
                    'company' => 'Digital Design Agency',
                    'duration' => '2016 - Present',
                ],
                [
                    'title' => 'UX Designer',
                    'company' => 'Tech Startup Inc.',
                    'duration' => '2014 - 2016',
                ],
            ],
            'education' => [
                'degree' => 'Bachelor of Fine Arts in Graphic Design',
                'university' => 'San Francisco Art Institute',
                'year' => '2014',
            ],
            'expected_salary' => '$110,000',
            'experience_level' => 'Senior',
            'language' => 'English, Mandarin',
            'varified' => false,
            'avaiable' => false,
        ],
    ];

@endphp

@section('main')
    <main class="pb-[4rem]">
        <x-frontend.app-breadcumb />
        <section class="mt-[2rem]">
            <div class="container mx-auto flex items-start gap-4 divide-x divide-gray-100">
                <div class="flex-1 min-w-[300px] hidden lg:inline">
                    <x-frontend.candidate.candidate-filters />
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
                            @foreach ($candidates as $candidate)
                                <x-frontend.candidate.candidatelist-card :candidate="$candidate" />
                            @endforeach
                        </div>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                            @foreach ($candidates as $candidate)
                                <x-frontend.candidate.candidate-card />
                            @endforeach

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
