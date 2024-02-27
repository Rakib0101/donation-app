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
        <section class="py-4 bg-gray-50 border-b border-gray-100">
            <div class="container">
                <div class="flex gap-4 justify-between items-center">
                    <div class="flex-grow flex items-center gap-3.5">
                        <a href="" class="transition-all duration-300 text-gray-600 hover:text-gray-900">
                            <x-svg.arrow-left />
                        </a>
                        <div>
                            <p class="body-large-600 text-gray-900">Save Resume</p>
                            <p class="body-base-400 text-gray-600">After providing your resume name, save the entered
                                information.</p>
                        </div>
                    </div>
                    <form action="" class="flex-grow flex items-center gap-4">
                        <x-frontend.forms.input placeholder="Resume name..." class="w-full max-w-[546px]" />
                        <button class="btn-primary whitespace-nowrap">Save Change</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="py-8">
            <div class="container">
                <div class="flex gap-6 items-start min-h-screen">
                    <div class="flex-grow w-full max-w-[274px]">
                        <p class="caption-03 text-gray-500">Resume</p>
                        <ul class="py-3">
                            <li>
                                <a href=""
                                    class="py-3 px-5 flex items-center gap-3 body-base-600 text-gray-600 transition-all duration-300 border-l-[3px] border-transparent hover:border-primary-500 hover:bg-primary-50">
                                    <x-svg.user-02 />
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="py-3 px-5 flex items-center gap-3 body-base-600 text-gray-600 transition-all duration-300 border-l-[3px] border-transparent hover:border-primary-500 hover:bg-primary-50">
                                    <x-svg.text-input />
                                    <span>Detailed Info</span>
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="py-3 px-5 flex items-center gap-3 body-base-600 text-gray-600 transition-all duration-300 border-l-[3px] border-transparent hover:border-primary-500 hover:bg-primary-50">
                                    <x-svg.globe-02 />
                                    <span>Social Media</span>
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="py-3 px-5 flex items-center gap-3 body-base-600 text-gray-600 transition-all duration-300 border-l-[3px] border-transparent hover:border-primary-500 hover:bg-primary-50">
                                    <x-svg.map-02 />
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                        <a href="" class="inline-flex gap-3 items-center text-secondary-500">
                            <x-svg.file-06 />
                            <span>Resume Guideline</span>
                        </a>
                    </div>
                    <div class="flex-grow w-full">
                        <form action="" class="w-1/2 flex flex-col gap-6">
                            <h2 class="heading-05">Contact</h2>
                                <div>
                                    <x-frontend.forms.label name="Location" required="false" />
                                    <x-frontend.forms.input icon="true" placeholder="Company website link/url...">
                                        <x-svg.map-01 />
                                    </x-frontend.forms.input>
                                </div>
                                <div class="h-[1px] bg-gray-100"></div>
                                <div class="flex flex-col gap-4">
                                    <div>
                                        <x-frontend.forms.label name="Primary Contact Mail" required="false" />
                                        <x-frontend.forms.input icon="true" placeholder="Company website link/url...">
                                            <x-svg.mail-02 />
                                        </x-frontend.forms.input>
                                    </div>
                                    <div>
                                        <x-frontend.forms.label name="Phone Number" required="false" />
                                        <x-frontend.forms.input icon="true" placeholder="Company website link/url...">
                                            <x-svg.phone-call-01 />
                                        </x-frontend.forms.input>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('css')
@endpush

@push('script')
@endpush
