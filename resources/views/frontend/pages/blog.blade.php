@extends('frontend.layouts.app')
@section('title', __('blog'))
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
        <section class="pt-[40px]">
            <div class="container space-y-6 pb-6 border-b border-b-gray-100">
                <h1 class="heading-01 text-gray-900">Blog, News, Updates, Tips & Trick</h1>
                <div class="flex flex-col sm:flex-row items-start justify-start lg:justify-start gap-4">
                    <div
                        class="border border-gray-100 shadow-gray-base-1 hover:border-primary-500 focus-within:border-primary-500 transition duration-200 ease-linear px-[18px]  rounded-lg flex items-center gap-3 w-full sm:w-[50%] lg:w-[424px]">
                        <span>
                            <x-svg.search-md />
                        </span>
                        <input type="search"
                            class="focus:ring-0 border-0 outline-none w-full py-[10px] body-base-400 text-gray-800"
                            placeholder="{{ __('job_search_criteria') }}">
                    </div>
                    <div
                        class="border border-gray-100 shadow-gray-base-1 hover:border-primary-500 focus-within:border-primary-500 transition duration-200 ease-linear px-[18px]  rounded-lg flex items-center gap-3 w-full sm:w-[50%] lg:w-[312px]">
                        <span class="text-primary-500">
                            <x-svg.layers3-01 />
                        </span>
                        <select type="text"
                            class="focus:ring-0 border-0 outline-none w-full py-[10px] body-base-400 text-gray-800">
                            <option value="#" selected disabled class="text-gray-600">Category</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-max">
                        <button type="button" class="btn-label-primary w-full">Search</button>
                    </div>
                </div>
                @php
                    $keywords = ['Job Search', 'Career Development', 'Resume Tips', 'Interview Preparation', 'Job Listings', 'Job Openings', 'Job Opportunities', 'Employment', 'Recruitment', 'Hiring', 'Job Application', 'Cover Letter', 'Networking', 'LinkedIn', 'Professional Growth', 'Remote Work'];
                @endphp
                <div class="flex items-center flex-wrap gap-[0.5rem] body-base-500 text-gray-500">
                    Keywords:
                    @foreach ($keywords as $key)
                        <a href="#" class="badge-link">{{ $key }}</a>
                    @endforeach

                </div>
            </div>
            <div class="container pt-6 space-y-6">
                <div class="flex items-center gap-4 body-base-400 text-gray-700">
                    <p class="whitespace-nowrap">Sort by:</p>
                    <div
                        class=" items-center gap-[0.75rem] focus:outline-none   rounded-lg border border-gray-100  focus-within:border-primary-500 hover:border-primary-500 transition duration-200 ease-linear flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 max-w-full sm:max-w-[14rem]">

                        <select name="job-type" id="job-type"
                            class="bg-transparent px-[1.12rem] focus:ring-0 outline-none border-0 appearance-none bg-chevron-down bg-no-repeat bg-right w-full text-gray-600">
                            <option disabled selected>Most Relavent</option>
                            <option>Job Type</option>
                            <option>Job Type</option>
                            <option>Job Type</option>
                        </select>
                    </div>
                </div>
                @php
                    $jobPortalData = [
                        [
                            'title' => 'Effective Resume Writing Tips for Job Seekers',
                            'description' => 'Craft a compelling resume that stands out to employers with these essential tips.',
                            'comments' => 15,
                            'post_date' => '2024-02-05',
                        ],
                        [
                            'title' => 'Navigating the Job Market in the Digital Age',
                            'description' => 'Explore how technology is influencing the job market and how to stay competitive.',
                            'comments' => 20,
                            'post_date' => '2024-02-10',
                        ],
                        [
                            'title' => 'Top In-Demand Skills for 2024 and Beyond',
                            'description' => 'Discover the skills employers are looking for and how to develop them for your career.',
                            'comments' => 12,
                            'post_date' => '2024-02-15',
                        ],
                        [
                            'title' => 'Remote Job Opportunities: Pros and Cons',
                            'description' => 'Evaluate the advantages and challenges of working remotely and find remote job opportunities.',
                            'comments' => 18,
                            'post_date' => '2024-02-20',
                        ],
                        [
                            'title' => 'How to Nail Your Virtual Job Interview',
                            'description' => 'Tips and strategies for acing virtual job interviews and making a positive impression.',
                            'comments' => 25,
                            'post_date' => '2024-02-25',
                        ],
                        [
                            'title' => 'The Importance of Networking in Your Job Search',
                            'description' => 'Learn why networking is crucial for finding job opportunities and advancing your career.',
                            'comments' => 14,
                            'post_date' => '2024-03-01',
                        ],
                        // Add more job portal entries as needed
                    ];
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($jobPortalData as $blog)
                        <x-frontend.blog-card :blog="$blog" />
                    @endforeach

                </div>

                {{-- @if ($jobs->total() > $jobs->count())
                    {{ $jobs->onEachSide(1)->links('vendor.pagination.frontend') }}
                @endif --}}

            </div>
        </section>
        <section class="py-[80px]">
            <div class="container py-[40px] rounded-[16px] border border-gray-100 shadow-gray-base-2 text-center space-y-4"
                style="background: linear-gradient(180deg, rgba(255, 240, 230, 0.50) 0%, rgba(230, 240, 250, 0.00) 70.04%);">
                <h3 class="heading-03 text-gray-900">Subscribe to our Blogs</h3>
                <p class="max-w-[652px] mx-auto body-base-400 text-gray-600">Join our growing community by subscribing to
                    our insightful and informative blogs. Get access to valuable career advice, job search tips, industry
                    insights, and much more.</p>

                <form class="flex items-center justify-center gap-4 flex-wrap pt-2">
                    <div
                        class="flex items-center gap-3 px-[18px] rounded-lg border border-gray-100 shadow-gray-base-1 hover:border-secondary-500 focus-within:border-secondary-500 transition duration-200 ease-linear min-w-full lg:min-w-[424px]">
                        <span class="text-secondary-500">
                            <x-svg.mail-05 />
                        </span>
                        <input type="email" placeholder="Email address"
                            class="w-full border-0 outline-none focus:ring-0 py-[10px]">
                    </div>
                    <div>
                        <button type="submit" class="btn-secondary">Subscribe</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
