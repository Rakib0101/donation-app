@extends('frontend.layouts.app')
@section('title', __('job_details'))
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
        <div class="container mx-auto py-[2.5rem] flex items-center justify-between flex-wrap gap-4">
            <div class="flex flex-wrap items-center gap-[1.5rem]">
                <div class="w-[7.75rem] h-[7.75rem]">
                    <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company image" class="w-full">
                </div>
                <div class="space-y-[0.75rem]">
                    <h4 class="heading-04 text-gray-900">Senior User Experience Designer</h4>
                    <div class="flex flex-wrap items-center gap-[0.44rem]">
                        <a href="#" class="links-url-large text-primary-500 underline" target="_blank">Stripe Inc.</a>
                        <small class="h-[6px] w-[6px] rounded-full bg-primary-200"></small>
                        <span class="body-base-500 text-primary-700">Design</span>
                        <small class="h-[6px] w-[6px] rounded-full bg-primary-200"></small>
                        <span class="body-base-500 text-primary-700">Full Time</span>
                        <small class="h-[6px] w-[6px] rounded-full bg-primary-200"></small>
                        <span class="body-base-500 text-primary-700">Hybrid</span>
                        <small class="h-[6px] w-[6px] rounded-full bg-primary-200"></small>
                        <small class="text-[rgba(0,74,153,0.70)] text-[1rem] font-normal">(Near office location Candidate
                            only)</small>
                    </div>
                    <div class="flex flex-wrap items-center gap-[0.5rem] body-base-500 text-gray-500">
                        Skills:
                        <span class="badge-gray-transparent">UX Design</span>
                        <span class="badge-gray-transparent">UX Design</span>
                        <span class="badge-gray-transparent">UX Design</span>
                        <span class="badge-gray-transparent">UX Design</span>
                        <span class="badge-gray-transparent">UX Design</span>
                        <span class="badge-gray-transparent">UX Design</span>
                    </div>
                </div>
            </div>
            <div class="space-y-[0.75rem]">
                @if ($isLocked)
                    <div>
                        <button type="button" href="#" class="btn-label-primary">
                            <x-svg.lock-02 />
                            Unlock Profile
                        </button>
                    </div>
                @else
                    <div class="flex items-center gap-[0.5rem]">
                        <div
                            class="bg-primary-50 text-primary-500 w-[2.75rem] h-[2.75rem] rounded-lg flex items-center justify-center">
                            <x-svg.book-mark />
                        </div>
                        <div>
                            <button class="btn-primary" data-modal-target="apply-jobs-modal"
                                data-modal-toggle="apply-jobs-modal">
                                Apply Now
                                <x-svg.arrow-circle-right />
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 body-small-400 text-gray-700">
                        Expire in:
                        <span class="text-red-500 body-small-600"> 19 Jul, 2023</span>
                    </div>
                @endif
            </div>
        </div>
        <div class="container mx-auto flex flex-col lg:grid lg:grid-cols-3 gap-[3rem] ">
            <div class="space-y-[1rem] col-span-2">
                @if ($isLocked)
                    <x-frontend.section-placeholder title="Job Description" :skeletonQty="2" />
                    <x-frontend.section-placeholder title="Key Responsibilities:" />
                    <x-frontend.section-placeholder title="Requirements:" />
                    <x-frontend.section-placeholder title="How to apply:" />
                @else
                    <x-frontend.job-unlocked />
                @endif
            </div>
            <div class="xl:min-w-[26.5rem] space-y-[1.5rem]">
                <div class="p-[1.5rem] shadow-gray-base-2 border border-gray-100 rounded-[0.5rem] space-y-[1.5rem]">
                    <div class="flex items-start gap-[0.75rem]">
                        <i class="text-primary-500">
                            <x-svg.credit-card-02 />
                        </i>
                        <div class="space-y-[0.25rem]">
                            <h6 class="body-large-600 text-gray-900">$100,000 - $120,000</h6>
                            <p class="body-base-400 text-gray-600">Annual Salary</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-[0.75rem]">
                        <i class="text-primary-500">
                            <x-svg.layers-two-01 />
                        </i>
                        <div class="space-y-[0.25rem]">
                            <h6 class="body-large-600 text-gray-900">Experienced</h6>
                            <p class="body-base-400 text-gray-600">Level of Seniority</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-[0.75rem]">
                        <i class="text-primary-500">
                            <x-svg.target-04 />
                        </i>
                        <div class="space-y-[0.25rem]">
                            <h6 class="body-large-600 text-gray-900">15 years</h6>
                            <p class="body-base-400 text-gray-600">Min experience need</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-[0.75rem]">
                        <i class="text-primary-500">
                            <x-svg.arrow-right-circle />
                        </i>
                        <div class="space-y-[0.25rem]">
                            <h6 class="body-large-600 text-gray-900">04</h6>
                            <p class="body-base-400 text-gray-600">Vacancy</p>
                        </div>
                    </div>
                </div>
                <div
                    class="p-[1.5rem] shadow-gray-base-2 border border-gray-100 rounded-[0.5rem]  divide-y divide-gray-100">
                    <div class="space-y-[1rem] pb-[1rem]">
                        <p class="caption-02 text-primary-500">Job Benefits</p>
                        <div class="flex flex-wrap gap-[0.5rem]">
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                            <span class="badge-gray-transparent">401k Salary</span>
                        </div>
                    </div>
                    <div class="space-y-[0.75rem] py-[1rem]">
                        <p class="caption-02 text-primary-500">Job location</p>
                        <div class="flex flex-wrap gap-[0.5rem]">
                            <img src="{{ asset('frontend/assets/images/map.png') }}" class="w-full">
                        </div>
                        <p class="caption-02 text-primary-500">Get Direction</p>
                    </div>
                    <div class="flex flex-col gap-4 py-[1rem]">
                        <p class="caption-02 text-primary-500">Job Company</p>
                        <div class="flex items-start gap-[0.75rem]">
                            <div class="w-[3rem] h-[3rem] rounded-md overflow-hidden">
                                <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company logo"
                                    class="w-full">
                            </div>
                            <div>
                                <h4 class="body-large-600 text-gray-900">Miro.Inc</h4>
                                <p class="body-small-400 text-gray-700">Foreign exchange company</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-[0.5rem] flex-wrap">
                            <span
                                class="bg-green-50 text-gray-900 body-small-500 inline-flex items-center py-[0.25rem] pl-[0.125rem] pr-[0.75rem] rounded-[0.375rem] gap-[0.25rem]">
                                <i
                                    class="h-[1.25rem] w-[1.25rem] rounded-[0.2rem] inline-flex items-center justify-center bg-green-500 text-gray-white">
                                    <x-svg.check />
                                </i>
                                Verified
                            </span>
                            <span class="badge-gray-transparent">
                                Finance
                            </span>
                        </div>
                    </div>
                    <div class="space-y-[1rem] py-[1rem]">
                        <p class="caption-02 text-primary-500">Keyword</p>
                        <div class="flex items-center gap-[0.5rem] flex-wrap">
                            <span class="badge-gray-transparent">
                                UI/UX Designer
                            </span>
                            <span class="badge-gray-transparent">
                                UX Designer
                            </span>
                            <span class="badge-gray-transparent">
                                Product Designer
                            </span>
                            <span class="badge-gray-transparent">
                                Product Designer
                            </span>
                        </div>

                    </div>
                </div>
                <div class="space-y-[1.5rem]">
                    <div class="space-y-[0.5rem]">
                        <span class="body-small-400 text-gray-500"> Share</span>
                        <div class="flex items-center gap-[0.5rem]">
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
                    <div class="flex items-center gap-[0.5rem] links-url-small text-gray-500">
                        <i>
                            <x-svg.alert-triangle />
                        </i>
                        <a href="#">Report Job</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="py-[5rem] mt-[5rem]"
            style="background: linear-gradient(0deg, rgba(255, 240, 230, 0.50) 0%, rgba(255, 240, 230, 0.50) 100%), #FFF;">
            <div class="container mx-auto space-y-[2.5rem]">
                <h4 class="heading-01 tex-gray-900 text-center">Related Jobs</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                    <x-frontend.jobs.job-card />
                    <x-frontend.jobs.job-card />
                    <x-frontend.jobs.job-card />
                    <x-frontend.jobs.job-card />
                    <x-frontend.jobs.job-card />
                    <x-frontend.jobs.job-card />
                </div>
                <div class="text-center">
                    <a role="button" href="#" class="btn-white">
                        <x-svg.magnify-glass />
                        View All
                    </a>
                </div>
            </div>
        </section>
        <x-frontend.modals.apply-jobs />
    </main>
@endsection
