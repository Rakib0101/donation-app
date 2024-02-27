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
    <main class="py-[2.5rem] space-y-[1.5rem]">
        <section>
            <div class="container flex flex-wrap justify-between items-center">
                <div>
                    <h1 class="heading-05 text-gray-900">Job List</h1>
                </div>
                <div class="justify-end flex items-center gap-[1.5rem] flex-1">
                    <div class="relative lg:min-w-[380px] lg:block hidden">
                        <x-frontend.forms.input icon="true" placeholder="Search by title" />
                        <span class="inline-flex absolute left-[18px] top-1/2 -translate-y-1/2">
                            <x-svg.search-md />
                        </span>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <div class="flex items-center ps-3 gap-2">
                            <input id="active-jobs" type="radio" value="active-jobs" name="jobs"
                                class="w-5 h-5 text-primary-500 bg-gray-white border border-gray-200 focus:ring-primary-500  focus:ring-2 shadow-gray-base-1 peer">
                            <label for="active-jobs"
                                class="w-full py-3 body-base-500 text-gray-600 peer-checked:text-gray-900">
                                Active Jobs
                            </label>
                        </div>
                        <div class="flex items-center ps-3 gap-2">
                            <input id="archive-jobs" type="radio" value="archive-jobs" name="jobs"
                                class="w-5 h-5 text-primary-500 bg-gray-white border border-gray-200 focus:ring-primary-500  focus:ring-2 shadow-gray-base-1 peer">
                            <label for="archive-jobs"
                                class="w-full py-3 body-base-500 text-gray-600 peer-checked:text-gray-900">
                                Archived jobs
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container space-y-[1.5rem]">
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
                <x-frontend.company.my-job-card />
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
    </main>
@endsection
