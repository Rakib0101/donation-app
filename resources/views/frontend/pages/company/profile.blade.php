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
    $isLocked = true;
@endphp
@section('main')
    <main>
        <x-frontend.app-breadcumb />
        <section>
            <div class="container mx-auto py-[2.5rem] flex items-center justify-between flex-wrap gap-4">
                <div class="flex flex-wrap items-center gap-[1.5rem]">
                    <div class="w-[7.75rem] h-[7.75rem]">
                        <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company image" class="w-full">
                    </div>
                    <div class="space-y-[1rem]">
                        <div>
                            <h4 class="heading-04 text-gray-900">Stripe Inc.</h4>
                            <p class="body-base-400 text-gray-900">Financial services company</p>
                        </div>
                        <div class="flex items-center gap-[0.5rem]">
                            <span
                                class="bg-green-50 text-gray-900 body-small-500 inline-flex items-center py-[0.25rem] pl-[0.125rem] pr-[0.75rem] rounded-[0.375rem] gap-[0.25rem]">
                                <i
                                    class="h-[1.25rem] w-[1.25rem] rounded-[0.2rem] inline-flex items-center justify-center bg-green-500 text-gray-white">
                                    <x-svg.check />
                                </i>
                                Verified
                            </span>
                            <span class="badge-primary-transparent">
                                3 Open Position
                            </span>
                        </div>
                    </div>
                </div>
                <div class="space-y-[0.75rem]">
                    <div class="flex items-center gap-[0.5rem]">
                        @if ($isLocked)
                            <div>
                                <button type="button" href="#" class="btn-label-primary">
                                    <x-svg.lock-02 />
                                    Unlock Profile
                                </button>
                            </div>
                        @else
                            <div>

                                <a href="#" class="btn-white"><x-svg.link />Visit Website</a>
                            </div>

                            <div>
                                <a href="#" class="btn-primary" data-modal-target="apply-jobs-modal"
                                    data-modal-toggle="apply-jobs-modal">
                                    View jobs
                                    <x-svg.arrow-circle-right />
                                </a>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto lg:grid flex flex-col lg:grid-cols-3 gap-y-3 gap-x-[3rem] ">
                <div class="space-y-[1rem] col-span-2 ">
                    @if ($isLocked)
                        <x-frontend.section-placeholder title="About company" />
                        <x-frontend.section-placeholder title="Life at stripe" :skeletonQty="2" />
                        <x-frontend.section-placeholder title="Open position " :skeletonQty="2" />
                    @else
                        <x-frontend.company.company-profile-unlocked />
                    @endif
                </div>
                <div class="w-full lg:min-w-[26.5rem] space-y-[1.5rem]">

                    <div
                        class="p-[1.5rem] shadow-gray-base-2 border border-gray-100 rounded-[0.5rem]  divide-y divide-gray-100">
                        <div class="space-y-[1rem] pb-[1rem]">
                            <p class="caption-02 text-primary-500">Employers information</p>
                            <div class="space-y-[1rem]">
                                <div class="text-[1rem] font-normal text-gray-700">
                                    Year of establishment: <b class="text-gray-900">Jan, 1997</b>
                                </div>
                                <div class="text-[1rem] font-normal text-gray-700">
                                    Number of employees: <b class="text-gray-900">500 - 999</b>
                                </div>
                                <div class="text-[1rem] font-normal text-gray-700">
                                    Language: <b class="text-gray-900">English, Bangla</b>
                                </div>
                                <div class="text-[1rem] font-normal text-gray-700">
                                    Headquarters: <b class="text-gray-900">San Francisco</b>
                                </div>
                                <div class="text-[1rem] font-normal text-gray-700">
                                    Industry: <b class="text-gray-900">Financial services</b>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-[1rem] py-[1rem]">
                            <p class="caption-02 text-primary-500">Perks & Benefits</p>
                            <div class="flex flex-wrap gap-[0.5rem]">
                                <span class="badge-gray-transparent">Health insurance</span>
                                <span class="badge-gray-transparent">Health insurance</span>
                                <span class="badge-gray-transparent">Health insurance</span>
                                <span class="badge-gray-transparent">Health insurance</span>
                                <span class="badge-gray-transparent">Health insurance</span>
                                <span class="badge-gray-transparent">Health insurance</span>
                                <span class="badge-gray-transparent">Health insurance</span>
                                <span class="badge-gray-transparent">Health insurance</span>
                                <span class="badge-gray-transparent">Health insurance</span>

                            </div>
                        </div>
                        <div class="space-y-[1rem] py-[1rem]">
                            <p class="caption-02 text-primary-500">Contact Info</p>
                            <div class="w-full space-y-[1rem]">
                                <div class="flex items-start gap-[0.75rem]">
                                    <div class="text-gray-300 body-small-500">
                                        <x-svg.map />
                                    </div>
                                    <div class="space-y-[0.25rem]">
                                        <p class="text-gray-500 body-small-500 capitalize">Location:</p>
                                        <img src="{{ asset('frontend/assets/images/map.png') }}" class="w-full">
                                    </div>
                                </div>
                                <div class="flex items-start gap-[0.75rem]">
                                    <div class="text-gray-300 body-small-500">
                                        <x-svg.mail-02 />
                                    </div>
                                    <div class="space-y-[0.1rem]">
                                        <p class="text-gray-500 body-small-500 capitalize">Email:</p>
                                        <p class="body-base-600 text-gray-900">Recruiter@Zapier.com</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-[0.75rem]">
                                    <div class="text-gray-300 body-small-500">
                                        <x-svg.phone />
                                    </div>
                                    <div class="space-y-[0.1rem]">
                                        <p class="text-gray-500 body-small-500 capitalize">Phone:</p>
                                        <p class="body-base-600 text-gray-900">+8801632117522</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <p class="caption-02 text-primary-500">Social Profile</p>
                            <ul class="flex flex-wrap items-center gap-x-4 mt-4">
                                <li class="inline-flex">
                                    <a href="#"
                                        class="inline-flex items-center gap-2 heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.globe-03 />
                                        </i>
                                        Website
                                    </a>
                                </li>
                                <li class="inline-flex">
                                    <a href="#"
                                        class="inline-flex items-center gap-2 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.linkedin />
                                        </i>
                                    </a>
                                </li>
                                <li class="inline-flex">
                                    <a href="#"
                                        class="inline-flex items-center gap-2 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.facebook />
                                        </i>
                                    </a>
                                </li>
                                <li class="inline-flex">
                                    <a href="#"
                                        class="inline-flex items-center gap-2 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.twitter />
                                        </i>
                                    </a>
                                </li>
                                <li class="inline-flex">
                                    <a href="#"
                                        class="inline-flex items-center gap-2 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.pinterest />
                                        </i>
                                    </a>
                                </li>
                                <li class="inline-flex">
                                    <a href="#"
                                        class="inline-flex items-center gap-[0.5rem] heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.reddit />
                                        </i>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="space-y-[1.5rem]">
                        <div class="space-y-[0.5rem]">
                            <span class="body-small-400 text-gray-500"> Share</span>
                            <div class="flex items-center flex-wrap gap-[0.5rem]">
                                <button class="btn-white" type="button">
                                    <x-svg.paperclip />
                                    Copy Link
                                </button>
                                <a class="icon-btn-white h-[2.75rem] w-[2.75rem]" href="mailto: abc@example.com">
                                    <x-svg.mail-02 />
                                </a>
                                <a class="icon-btn-white h-[2.75rem] w-[2.75rem]" href="#">
                                    <x-svg.linkedin />
                                </a>
                                <a class="icon-btn-white h-[2.75rem] w-[2.75rem]" href="#">
                                    <x-svg.facebook />
                                </a>
                                <a class="icon-btn-white h-[2.75rem] w-[2.75rem]" href="#">
                                    <x-svg.twitter />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center flex-wrap gap-[0.5rem] links-url-small text-gray-500">
                            <i>
                                <x-svg.alert-triangle />
                            </i>
                            <a href="#">Report Employers</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            style="background: linear-gradient(0deg, rgba(255, 240, 230, 0.50) 0%, rgba(255, 240, 230, 0.50) 100%), #FFF;"
            class="py-[5rem] mt-[5rem]">
            <div class="container mx-auto">
                <div class="container mx-auto space-y-[2.5rem]">
                    <h4 class="heading-01 tex-gray-900 text-center">Other Companies</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                        <x-frontend.company.company-card />
                    </div>
                    <div class="text-center">
                        <a role="button" href="#" class="btn-white">
                            <x-svg.magnify-glass />
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
