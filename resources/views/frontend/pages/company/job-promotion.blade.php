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

@section('main')
    <main>
        <section>
            <div class="container border-b border-b-gray-100 py-[2.5rem] ">
                <div class="flex flex-col md:flex-row items-center justify-center gap-6 w-full">
                    <div>
                        <img src="{{ asset('frontend/assets/images/check-animation.gif') }}" alt="check image">
                    </div>
                    <div class="flex-1 max-w-[43.5rem]">
                        <h4 class="body-xl-600 text-gray-900">🎉 Congratulation, Your Job is successfully posted!</h4>
                        <p class="body-base-400 text-gray-700 mt-[0.5rem]">Congratulations on successfully posting your job!
                            You
                            can easily
                            manage your job listing by accessing
                            the "My Jobs" section in your dashboard. From there, you can make any necessary updates, track
                            applications, and stay organized throughout the hiring process.</p>
                        <a href="#" class="btn-white-primary mt-[1rem]">
                            View Job Detail
                            <x-svg.link-external-01 />
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section class="py-[2.5rem]">
            <div class="max-w-[54.5rem] mx-auto space-y-[1.5rem] px-5 lg:px-0">
                <div class="space-y-[0.5rem]">
                    <h1 class="heading-04 text-gray-900">Promote Job</h1>
                    <p class="body-large-500 text-gray-600">Job: UI/UX Design Engineer</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-[1.5rem]">
                    <div>
                        <input type="radio" id="featured-jobs" name="job-type" value="featured-jobs" class="hidden peer">
                        <label for="featured-jobs"
                            class="block w-full p-[1.5rem] rounded-xl border bg-gray-50 hover:bg-primary-50 border-gray-200  cursor-pointer  peer-checked:border-primary-500 peer-checked:bg-primary-50 hover:border  hover:border-primary-500 transition-all duration-200 ease-linear space-y-[1rem]">
                            <div class="block">
                                <img src="{{ asset('frontend/assets/images/featured-job.png') }}" alt="featured-job-img"
                                    class="w-full">
                            </div>
                            <div class="space-y-[0.5rem]">
                                <h4 class="body-xl-400 text-gray-900">Featured Job</h4>
                                <p class="body-base-400 text-gray-700">Boost your job listing's visibility and attract top
                                    talent. Increase your chances of finding the perfect candidate by showcasing your job
                                    prominently on our platform. </p>
                            </div>
                            <div>
                                <span
                                    class="border border-gray-100 body-small-500 text-gray-800 bg-gray-white rounded-md py-[0.38rem] px-[0.75rem] text-center shadow-gray-base-1">3
                                    Featured available</span>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="highlight-jobs" name="job-type" value="highlight-jobs"
                            class="hidden peer">
                        <label for="highlight-jobs"
                            class="block w-full p-[1.5rem] rounded-xl border bg-gray-50 hover:bg-primary-50 border-gray-200  cursor-pointer  peer-checked:border-primary-500 peer-checked:bg-primary-50 hover:border  hover:border-primary-500 transition-all duration-200 ease-linear space-y-[1rem]">
                            <div class="block">
                                <img src="{{ asset('frontend/assets/images/highlight-job.png') }}" alt="featured-job-img"
                                    class="w-full">
                            </div>
                            <div class="space-y-[0.5rem]">
                                <h4 class="body-xl-400 text-gray-900">Highlight Job</h4>
                                <p class="body-base-400 text-gray-700">Make your job listing shine highlighting your job, it
                                    grabs immediate attention and stands out from the rest. This prominent placement
                                    increases visibility and attracts the right candidates to your opportunity. </p>
                            </div>
                            <div>
                                <span
                                    class="border border-gray-100 body-small-500 text-gray-800 bg-gray-white rounded-md py-[0.38rem] px-[0.75rem] text-center shadow-gray-base-1">2
                                    Highlight available</span>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <a href="#" class="heading-07 text-gray-500">Skip</a>
                    <a href="#" class="btn-primary">
                        Promote Job
                        <x-svg.arrow-circle-right />
                    </a>
                </div>
            </div>

        </section>
    </main>
@endsection
