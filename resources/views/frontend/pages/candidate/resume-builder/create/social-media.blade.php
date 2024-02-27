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
                        <form action="" class="flex flex-col gap-6">
                            <h2 class="heading-05">Social Media</h2>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-end">
                                    <div class="w-full">
                                        <x-frontend.forms.label name="Social Media 1" required="false" />
                                        <x-frontend.forms.select class="!rounded-r-none">
                                            <option value="" selected>option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </x-frontend.forms.select>
                                    </div>
                                    <div class="w-full">
                                        <x-frontend.forms.select class="!rounded-l-none">
                                            <option value="" selected>option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </x-frontend.forms.select>
                                    </div>
                                    <button class="text-gray-500 p-2.5">
                                        <x-svg.x-circle />
                                    </button>
                                </div>

                                <div class="flex items-end">
                                    <div class="w-full">
                                        <x-frontend.forms.label name="Social Media 1" required="false" />
                                        <x-frontend.forms.select class="!rounded-r-none">
                                            <option value="" selected>option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </x-frontend.forms.select>
                                    </div>
                                    <div class="w-full">
                                        <x-frontend.forms.select class="!rounded-l-none">
                                            <option value="" selected>option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </x-frontend.forms.select>
                                    </div>
                                    <button class="text-gray-500 p-2.5">
                                        <x-svg.x-circle />
                                    </button>
                                </div>
                                <div class="flex items-end">
                                    <div class="w-full">
                                        <x-frontend.forms.label name="Social Media 1" required="false" />
                                        <x-frontend.forms.select class="!rounded-r-none">
                                            <option value="" selected>option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </x-frontend.forms.select>
                                    </div>
                                    <div class="w-full">
                                        <x-frontend.forms.select class="!rounded-l-none">
                                            <option value="" selected>option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </x-frontend.forms.select>
                                    </div>
                                    <button class="text-gray-500 p-2.5">
                                        <x-svg.x-circle />
                                    </button>
                                </div>
                                <div class="flex items-end">
                                    <div class="w-full">
                                        <x-frontend.forms.label name="Social Media 1" required="false" />
                                        <x-frontend.forms.select class="!rounded-r-none">
                                            <option value="" selected>option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </x-frontend.forms.select>
                                    </div>
                                    <div class="w-full">
                                        <x-frontend.forms.select class="!rounded-l-none">
                                            <option value="" selected>option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </x-frontend.forms.select>
                                    </div>
                                    <button class="text-gray-500 p-2.5">
                                        <x-svg.x-circle />
                                    </button>
                                </div>
                                <div>
                                    <button class="w-full gap-2 btn-dark-transparent">
                                        <x-svg.plus-circle />
                                        <span>Add Social Media</span>
                                    </button>
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
