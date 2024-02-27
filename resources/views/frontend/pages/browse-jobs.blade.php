@extends('frontend.layouts.app')
@section('title', __('brows_job'))
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

    $isListView = true;
    $jobs = [
        [
            'company_name' => 'Data Science Innovations',
            'job_title' => 'Data Scientist',
            'job_description' => 'Analyze large datasets to extract insights and build predictive models. Utilize machine learning and statistical techniques to solve real-world problems.',
            'job_location' => 'Remote',
            'job_posted_at' => '5 min ago',
            'job_salary' => "$90,000 - $120,000",
            'job_skills' => ['Python', 'R', 'Machine Learning', 'Statistics', 'Big Data'],
            'company_logo' => 'https://logo.example.com/data_scientist_logo.png', // Replace with company logo URL
            'required_experience' => '2-4 years',
            'job_type' => 'Full-time',
            'urgent' => true,
            'featured' => true,
            'similar_jobs' => [['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.'], ['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.']],
        ],
        [
            'company_name' => 'WebTech Solutions',
            'job_title' => 'Full Stack Web Developer',
            'job_description' => 'Design, develop, and maintain web applications from frontend to backend, using modern technologies and frameworks.',
            'job_location' => 'San Francisco, CA',
            'job_posted_at' => '1 Day ago',
            'job_salary' => "$70,000 - $90,000",
            'job_skills' => ['JavaScript', 'PHP', 'React', 'Node.js', 'MySQL', 'HTML/CSS'],
            'company_logo' => 'https://logo.example.com/web_developer_logo.svg', // Replace with company logo URL
            'required_experience' => '3-5 years',
            'job_type' => 'Full-time',
            'urgent' => true,
            'featured' => false,
            'similar_jobs' => [['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.'], ['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.']],
        ],
        [
            'company_name' => 'Digital Marketing Hub',
            'job_title' => 'Content Marketing Manager',
            'job_description' => 'Create and implement content strategies to attract and engage audiences, driving website traffic and brand awareness.',
            'job_location' => 'New York, NY',
            'job_posted_at' => '3 Days ago',
            'job_salary' => "$60,000 - $80,000",
            'job_skills' => ['SEO', 'Copywriting', 'Social Media Marketing', 'Content Analysis', 'Email Marketing', 'Analytics'],
            'company_logo' => 'https://logo.example.com/marketing_manager_logo.jpg', // Replace with company logo URL
            'required_experience' => '1-3 years',
            'job_type' => 'Full-time',
            'urgent' => false,
            'featured' => true,
            'similar_jobs' => [['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.'], ['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.']],
        ],
        [
            'company_name' => 'Creative Designs Co.',
            'job_title' => 'UX/UI Designer',
            'job_description' => 'Craft user-friendly and visually appealing interfaces for web and mobile applications, prioritizing user experience and accessibility.',
            'job_location' => 'Austin, TX',
            'job_posted_at' => '7 Days ago',
            'job_salary' => "$65,000 - $85,000",
            'job_skills' => ['Figma', 'Sketch', 'Adobe XD', 'UX Research', 'UI Design', 'Accessibility'],
            'company_logo' => 'https://logo.example.com/ux_designer_logo.png', // Replace with company logo URL
            'required_experience' => '2-5 years',
            'job_type' => 'Part-time',
            'urgent' => false,
            'featured' => false,
            'similar_jobs' => [['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.'], ['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.']],
        ],
        [
            'company_name' => 'TechSprint Innovations',
            'job_title' => 'Software Engineer',
            'job_description' => 'Build and maintain scalable software applications using the latest technologies and best practices.',
            'job_location' => 'Chicago, IL',
            'job_posted_at' => '10 Days ago',
            'job_salary' => "$80,000 - $100,000",
            'job_skills' => ['Python', 'Java', 'C++', 'Linux', 'Cloud Computing', 'Agile Methodologies'],
            'company_logo' => 'https://logo.example.com/software_engineer_logo.svg', // Replace with company logo URL
            'required_experience' => '3-7 years',
            'job_type' => 'Contract',
            'urgent' => true,
            'featured' => true,
            'similar_jobs' => [['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.'], ['title' => 'Machine Learning Engineer', 'description' => 'Develop and deploy machine learning models to solve complex business problems. Collaborate with cross-functional teams to implement solutions.'], ['title' => 'Data Analyst', 'description' => 'Perform data analysis to generate actionable insights for business decision-making. Develop and maintain data pipelines and dashboards.']],
        ],
    ];

@endphp

@section('main')
    <main class="pb-[4rem]">
        <x-frontend.app-breadcumb />
        <section class="mt-[2rem]">
            <div class="container mx-auto flex items-start gap-4 lg:divide-x divide-gray-100">
                <div class="flex-1 min-w-[300px] hidden lg:inline">
                    <x-frontend.jobfilter />
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
                            <x-frontend.drawers.jobfilter-drawer />
                        </div>
                        <div class="flex-1 text-gray-600 w-full">
                            <x-frontend.forms.input class="hover:border-primary-500" :icon="true"
                                placeholder="Search jobs">
                                <x-svg.search-md stroke="currentColor" />
                            </x-frontend.forms.input>
                        </div>
                        <div @click="showSearchMenu=!showSearchMenu" role="button"
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
                    @if ($isListView)
                        <div class="  divide-gray-100 divide-y">
                            @foreach ($jobs as $job)
                                <x-frontend.jobs.job-list-card :job="$job" />
                            @endforeach

                        </div>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                            @foreach ($jobs as $job)
                                <x-frontend.jobs.job-card />
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
        <section class="mt-[2.5rem]">
            <div class="container mx-auto shadow-gray-base-2 p-[2.5rem] rounded-[1rem] space-y-[1.5rem]"
                style="background: linear-gradient(180deg, #FFF0E6 0%, rgba(255, 240, 230, 0.00) 70.04%);">
                <h5 class="heading-05 text-gray-900">Set job alerts & stay informed</h5>
                <div class="space-y-[0.5rem]">
                    <label for="skill">Skills</label>
                    <input type="text "
                        class="shadow-gray-base-2 w-full rounded-[0.5rem] py-[0.62rem] px-[1.2rem] placeholder:body-base-400 placeholder:text-gray-500 outline-none border border-gray-100">
                    <div class="flex items-center flex-wrap gap-[0.5rem]">
                        <span class="badge-gray-transparent gap-1">
                            Figma
                            <i class="text-gray-400" role="button">
                                <x-svg.x-small />
                            </i>
                        </span>
                        <span class="badge-gray-transparent gap-1">
                            Figma
                            <i class="text-gray-400" role="button">
                                <x-svg.x-small />
                            </i>
                        </span>
                        <span class="badge-gray-transparent gap-1">
                            Figma
                            <i class="text-gray-400" role="button">
                                <x-svg.x-small />
                            </i>
                        </span>
                        <span class="badge-gray-transparent gap-1">
                            Figma
                            <i class="text-gray-400" role="button">
                                <x-svg.x-small />
                            </i>
                        </span>
                    </div>
                </div>
                <div>
                    <button class="btn-primary font-semibold">Set Alert</button>
                </div>
            </div>
        </section>

    </main>
@endsection
