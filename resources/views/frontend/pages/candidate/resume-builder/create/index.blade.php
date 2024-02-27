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
    {{ __('add_new_resume') }}
@endsection

@section('main')
    <main>
        <section>
            <div class="container">
                <div class="min-h-[600px] flex justify-center items-center">
                    <div class="py-6 max-w-3xl mx-auto">
                        <ul class="step-wrap relative grid sm:grid-cols-3 gap-0 text-center">
                            <li class="resume-step p-4 flex flex-col gap-3 items-center">
                                <span class="inline-flex p-2 rounded-full text-white bg-primary-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                </span>
                                <p class="heading-06">
                                    1. Choose Template
                                </p>
                                <p class="text-base text-gray-900">
                                    Choose your suitable resume from 40+ awesome well designed resume template.
                                </p>
                            </li>
                            <li class="resume-step p-4 flex flex-col gap-3 items-center">
                                <span class="inline-flex p-2 rounded-full text-white bg-primary-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                                    </svg>
                                </span>
                                <p class="heading-06">
                                    2. Edit Resume
                                </p>
                                <p class="text-base text-gray-900">
                                    Fill out your information in the resume. Especially your Experience, Education &
                                    Skills.
                                </p>
                            </li>
                            <li class="resume-step p-4 flex flex-col gap-3 items-center">
                                <span class="inline-flex p-2 rounded-full text-white bg-primary-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                                    </svg>
                                </span>
                                <p class="heading-06">
                                    3. Save & Apply for Job
                                </p>
                                <p class="text-base text-gray-900">
                                    Save your resume & find a perfect job that matches your skill and apply.
                                </p>
                            </li>
                        </ul>
                        <div class="mt-8 flex justify-center">
                            <a href="{{ route('candidate.chooseTemplate') }}" class="btn-primary">
                                <span>Let's Go</span>
                                <x-svg.arrow-right />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('css')
    <style>
        @media (min-width: 640px) {
            .resume-step {
                position: relative;
                z-index: 100;
                text-align: center;
            }

            .resume-step::before {
                content: '';
                display: block;
                position: absolute;
                top: 36px;
                right: calc(50% + 12px);
                height: 3px;
                width: calc(100% - 24px);
                background: var(--primary-500);
                z-index: -1;
            }

            .resume-step:first-child::before {
                display: none;
            }
        }
    </style>
@endpush
