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
    <section class="py-[2.62rem] space-y-8">
        <div class="container flex flex-wrap items-center">
            <h1 class="heading-05 text-gray-900 w-full flex-1 ">Saved Application</h1>

            <div class="relative w-[22rem]">
                <div
                    class="absolute left-0 top-[50%] transform translate-y-[-50%] inset-y-0 start-0 flex items-center ps-3 pointer-events-none text-gray-700">
                    <x-svg.search-md />
                </div>
                <input type="search" id="default-search"
                    class="w-full border border-gray-100 shadow-gray-base-1 bg-gray-white focus:ring-1 focus:ring-primary-500 rounded-lg !pl-[47px]"
                    placeholder="Search by name or job role">

            </div>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
            <x-frontend.jobs.job-card showLink="true" />
            <x-frontend.jobs.job-card showLink="true" />
            <x-frontend.jobs.job-card showLink="true" />
            <x-frontend.jobs.job-card showLink="true" />
            <x-frontend.jobs.job-card showLink="true" />
            <x-frontend.jobs.job-card showLink="true" />
            <x-frontend.jobs.job-card showLink="true" />
            <x-frontend.jobs.job-card showLink="true" />
        </div>
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
    </section>
@endsection
