@extends('frontend.layouts.app')
@section('title', __('job_application'))
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
        <section class="py-8 space-y-6">
            <div class="container space-y-[0.75rem]">
                <div class="flex items-center gap-1 flex-wrap">
                    <p class="text-[1.5rem] font-medium text-gray-700 tracking-[-0.03rem]">“Executive Business Manager”</p>
                    <h1 class="text-[1.5rem] font-bold text-gray-900 tracking-[-0.03rem]">Job Application</h1>
                </div>
                <div>
                    <ul class="flex items-center body-base-500 flex-wrap">
                        <li
                            class="body-base-500 text-gray-600 hover:text-primary-500 transition-all duration-200 ease-in-out">
                            <a href="#">Home </a>
                        </li>
                        <li
                            class="body-base-500 text-gray-600 hover:text-primary-500 transition-all duration-200 ease-in-out before:text-gray-300 before:content-['/'] before:px-[0.38rem]">
                            <a href="#">Job List</a>
                        </li>
                        <li
                            class="body-base-500 text-gray-600 hover:text-primary-500 transition-all duration-200 ease-in-out before:text-gray-300 before:content-['/'] before:px-[0.38rem]">
                            <a href="#">Executive Business Manager</a>
                        </li>

                        <li
                            class="body-base-500 text-primary-500 transition-all duration-200 ease-in-out before:content-['/'] before:text-gray-300 before:px-[0.38rem]">
                            <a href="#">Application</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="container flex items-center gap-4 flex-wrap">
                <div class="relative min-w-full lg:min-w-[380px]">
                    <x-frontend.forms.input icon="true" placeholder="Search by name" />
                    <span class="inline-flex absolute left-[18px] top-1/2 -translate-y-1/2">
                        <x-svg.search-md />
                    </span>
                </div>
                <div class="min-w-full md:min-w-[19.4rem]">
                    <select name="job-type" id="job-type"
                        class="px-[1.12rem] py-[0.62rem]  shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition-all duration-200 ease-linear text-gray-700 body-base-400 outline-0 focus:ring-0 rounded-lg w-full">
                        <option selected disabled>5+ Years of experience</option>
                        <option value="#" class="body-small-500 text-gray-800">Option1</option>
                        <option value="#" class="body-small-500 text-gray-800">Option2</option>
                        <option value="#" class="body-small-500 text-gray-800">Option3</option>
                        <option value="#" class="body-small-500 text-gray-800">Option4</option>
                    </select>
                </div>
                <div class="flex items-center gap-2">
                    <input id="meets-requirements" type="checkbox" value=""
                        class="w-4 h-4 text-primary-500 bg-gray-50 border border-gray-100 rounded focus:border-primary-500 focus:ring-0 cursor-pointer">
                    <label for="meets-requirements" class="body-base-500 text-gray-900 cursor-pointer">
                        Candidates who meet the job requirements.
                    </label>
                </div>

            </div>
            <div class="container md:hidden">
                <button class="btn-white-dark gap-2 w-full" type="button" data-modal-target="add-column-modal"
                    data-modal-toggle="add-column-modal">
                    <span>
                        <x-svg.plus-circle />
                    </span>
                    Add Column
                </button>
            </div>
        </section>
        <section>
            <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="space-y-[0.75rem]">
                    <div class="flex items-center justify-between" x-init x-data="{ showMenu: false }">
                        <h6 class="body-base-500 text-gray-900">All Application</h6>
                        <div class="relative">
                            <span @click="showMenu=!showMenu" role="button"
                                class="text-gray-900 hover:bg-gray-50 h-[30px] w-[30px] rounded-md inline-flex items-center justify-center p-1">
                                <x-svg.dots-horizontal />
                            </span>
                            <div class="min-w-[9.75rem] z-[999] rounded-[0.5rem] border border-gray-100 bg-white shadow-gray-base-3 py-1 absolute right-0 top-6"
                                @click.outside="showMenu=false" x-show="showMenu" x-transition x-cloak>
                                <ul>
                                    <li class="flex items-center gap-2 px-[1.12rem] py-2 hover:bg-gray-50 transition duration-200 ease-linear"
                                        role="button">
                                        <span>
                                            <x-svg.edit-05 />
                                        </span>
                                        Edit Name
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="space-y-3">
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />

                        {{-- <x-frontend.jobs.job-card />
                        <x-frontend.jobs.job-card />
                        <x-frontend.jobs.job-card />
                        <x-frontend.jobs.job-card />
                        <x-frontend.jobs.job-card /> --}}
                    </div>

                </div>
                <div class="space-y-[0.75rem]">
                    <div class="flex items-center justify-between" x-init x-data="{ showMenu: false }">
                        <h6 class="body-base-500 text-gray-900">Shortlisted</h6>
                        <div class="relative">
                            <span @click="showMenu=!showMenu" role="button"
                                class="text-gray-900 hover:bg-gray-50 h-[30px] w-[30px] rounded-md inline-flex items-center justify-center p-1">
                                <x-svg.dots-horizontal />
                            </span>
                            <div class="min-w-[9.75rem] z-[999] rounded-[0.5rem] border border-gray-100 bg-white shadow-gray-base-3 py-1 absolute right-0 top-6"
                                @click.outside="showMenu=false" x-show="showMenu" x-transition x-cloak>
                                <ul>
                                    <li class="flex items-center gap-2 px-[1.12rem] py-2 hover:bg-gray-50 transition duration-200 ease-linear"
                                        role="button">
                                        <span>
                                            <x-svg.edit-05 />
                                        </span>
                                        Edit Name
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="space-y-3">
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                        <x-frontend.jobs.job-card isMatched="true" showLink="true" />
                    </div>

                </div>
                <div class="hidden md:inline">
                    <button class="btn-white-dark gap-2 w-full" type="button" data-modal-target="add-column-modal"
                        data-modal-toggle="add-column-modal">
                        <span>
                            <x-svg.plus-circle />
                        </span>
                        Add Column
                    </button>
                </div>
            </div>
        </section>
        <x-frontend.modals.add-column-modal />
    </main>
@endsection
