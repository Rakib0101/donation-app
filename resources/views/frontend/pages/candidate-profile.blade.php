@extends('frontend.layouts.app')
@section('title', __('candidate_profile'))
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
    $isProfileLocked = true;
@endphp

@section('main')
    <main>
        <x-frontend.app-breadcumb />
        <section>
            <div class="container mx-auto py-[2.5rem] flex items-center justify-between flex-wrap gap-4">
                <div class="flex flex-wrap items-center gap-[1.5rem]">
                    <div class="w-[12.5rem] h-[12.5rem]">
                        <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="company image" class="w-full">
                    </div>
                    <div class="space-y-[1rem]">
                        <div>
                            <h4 class="heading-04 text-gray-900">Zafor Iqbal</h4>
                            <p class="body-base-400 text-gray-900">Product Designer</p>
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
                                Available for hiring
                            </span>
                        </div>
                        <div class="flex items-center gap-[0.5rem]">
                            Key skills: <span class="badge-gray-transparent">UX Design</span> <span
                                class="badge-gray-transparent">UX Design</span> <span class="badge-gray-transparent">UX
                                Design</span> <span class="badge-gray-transparent">UX Design</span>
                        </div>
                    </div>
                </div>
                <div class="space-y-[0.75rem]">
                    <div class="flex items-center gap-[0.5rem]">
                        @if ($isProfileLocked)
                            <div>
                                <button type="button" href="#" class="btn-label-primary">
                                    <x-svg.lock-02 />
                                    Unlock Profile
                                </button>
                            </div>
                        @else
                            <div>
                                <button type="button" href="#" class="icon-btn-white h-[2.75rem] w-[2.75rem]">
                                    <x-svg.book-mark />
                                </button>
                            </div>
                            <div>
                                <button type="button" href="#" class="icon-btn-white h-[2.75rem] w-[2.75rem]">
                                    <x-svg.mail-02 />
                                </button>
                            </div>
                            <div>
                                <a href="#" class="btn-dark gap-2">Message <x-svg.send-01 /></a>
                            </div>

                            <div>
                                <a href="#" class="btn-primary heading-07">
                                    Hire Candidate
                                </a>
                            </div>
                        @endif

                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-[3rem] ">
                <div class="space-y-[2rem] col-span-2 ">
                    <div class="space-y-[0.75rem]">
                        <h5 class="heading-06 text-gray-900">Biography</h5>
                        <p class="text-[1rem] text-gray-700 font-normal">I've been passionate about graphic design and
                            digital
                            art from an early age with a keen interest in Website and Mobile Application User Interfaces. I
                            can
                            create high-quality and aesthetically pleasing designs in a quick turnaround time. Check out the
                            portfolio section of my profile to see samples of my work and feel free to discuss your
                            designing
                            needs. I mostly use Adobe Photoshop, Illustrator, XD and Figma. Website User Experience and
                            Interface (UI/UX) Design - for all kinds of Professional and Personal websites. Mobile
                            Application
                            User Experience and Interface Design - for all kinds of IOS/Android and Hybrid Mobile
                            Applications.
                        </p>
                    </div>



                    <div class="space-y-[2rem]">
                        @if ($isProfileLocked)
                            <x-frontend.candidate.profile-locked />
                        @else
                            <x-frontend.candidate.profile-unlocked />
                        @endif
                    </div>
                </div>
                <div class="flex-1 min-w-full  lg:min-w-[26.5rem] space-y-[1.5rem]">

                    <div
                        class="p-[1.5rem] shadow-gray-base-2 border border-gray-100 rounded-[0.5rem]  divide-y divide-gray-100">
                        <div class="space-y-[1rem] pb-[1rem]">
                            <p class="caption-02 text-primary-500">Profile information</p>
                            <div class="space-y-[1rem]">
                                <div class="text-[1rem] font-normal text-gray-700 flex items-center gap-2 body-base-400">
                                    <i class="text-gray-200">
                                        <x-svg.credit-card-01 />
                                    </i>
                                    Expected Salary: <b class="text-gray-900 body-base-600">$3200 - $6400 /annually</b>
                                </div>
                                <div class="text-[1rem] font-normal text-gray-700 flex items-center gap-2 body-base-400">
                                    <i class="text-gray-200">
                                        <x-svg.layers3-01 />
                                    </i>
                                    Experience: <b class="text-gray-900 body-base-600">7 Years</b>
                                </div>
                                <div class="text-[1rem] font-normal text-gray-700 flex items-center gap-2 body-base-400">
                                    <i class="text-gray-200">
                                        <x-svg.container />
                                    </i>
                                    Experience Level: <b class="text-gray-900 body-base-600">Fresher</b>
                                </div>
                                <div class="text-[1rem] font-normal text-gray-700 flex items-center gap-2 body-base-400">
                                    <i class="text-gray-200">
                                        <x-svg.calender />
                                    </i>
                                    Date of Birth: <b class="text-gray-900 body-base-600">12 Aug, 2003</b>
                                </div>
                                <div class="text-[1rem] font-normal text-gray-700 flex items-center gap-2 body-base-400">
                                    <i class="text-gray-200">
                                        <x-svg.book-closed />
                                    </i>
                                    Gender: <b class="text-gray-900 body-base-600">Male</b>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-[1rem] py-[1rem]">
                            <p class="caption-02 text-primary-500">Language</p>
                            <div class="text-[1rem] font-normal text-gray-900 flex items-center gap-1 body-base-600">
                                English <small class="text-gray-700 body-base-400">(Fluent)</small>
                            </div>
                            <div class="text-[1rem] font-normal text-gray-900 flex items-center gap-1 body-base-600">
                                Bangla <small class="text-gray-700 body-base-400">(Fluent)</small>
                            </div>
                            <div class="text-[1rem] font-normal text-gray-900 flex items-center gap-1 body-base-600">
                                Hindi <small class="text-gray-700 body-base-400">(Fluent)</small>
                            </div>
                        </div>
                        <div class="space-y-[1rem] py-[1rem]">
                            <p class="caption-02 text-primary-500">Hobbies</p>
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="badge-gray-transparent">Travelling</span>
                                <span class="badge-gray-transparent">Reading</span>
                                <span class="badge-gray-transparent">Painting</span>
                            </div>

                        </div>
                        <div class="space-y-[1rem] py-[1rem]">
                            <p class="caption-02 text-primary-500">Social Profile</p>
                            <ul class="flex flex-wrap items-center gap-[1rem]">
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center gap-[0.5rem] heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.globe-03 />
                                        </i>
                                        Website
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center gap-[0.5rem] heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.linkedin />
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center gap-[0.5rem] heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.facebook />
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center gap-[0.5rem] heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.twitter />
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center gap-[0.5rem] heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.pinterest />
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-flex items-center gap-[0.5rem] heading-07 text-gray-500 hover:text-primary-500 transition-all duration-200">
                                        <i>
                                            <x-svg.reddit />
                                        </i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="space-y-[1rem] py-[1rem]">
                            <p class="caption-02 text-primary-500">Contact Info</p>
                            <div class="w-full space-y-[1rem]">

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
                    <h4 class="heading-01 tex-gray-900 text-center">Similar Candidates</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.5rem]">
                        <x-frontend.candidate.candidate-card />
                        <x-frontend.candidate.candidate-card />
                        <x-frontend.candidate.candidate-card />
                        <x-frontend.candidate.candidate-card />
                        <x-frontend.candidate.candidate-card />
                        <x-frontend.candidate.candidate-card />
                        <x-frontend.candidate.candidate-card />
                        <x-frontend.candidate.candidate-card />
                        <x-frontend.candidate.candidate-card />

                    </div>
                    <div class="text-center">
                        <a role="button" href="#" class="btn-white">
                            <x-svg.magnify-glass />
                            View All job Application
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
