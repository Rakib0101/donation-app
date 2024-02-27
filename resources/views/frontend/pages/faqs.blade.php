@extends('frontend.layouts.app')
@section('title', __('faqs'))
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
        <section class="py-20">
            <div class="container">
                <h2 class="text-center heading-01 mb-6">Frequently Asked Questions</h2>
                <div x-data="{ activeAccordion: 0 }" class="max-w-[872px] mx-auto">
                    @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $i)
                        <div>
                            <button
                                @click="activeAccordion = activeAccordion === {{ $i }} ? false : {{ $i }}"
                                :class="activeAccordion === {{ $i }} ? 'pt-6 pb-4 border-0' :
                                    'py-6 border-b border-gray-100'"
                                class="body-large-600 text-gray-900 flex w-full justify-between gap-6 items-center">
                                <p>How do I create an account on the job portal?</p>
                                <i x-show="activeAccordion !== {{ $i }}">
                                    <x-svg.plus-circle stroke="#74787D" />
                                </i>
                                <i x-show="activeAccordion === {{ $i }}">
                                    <x-svg.minus-circle />
                                </i>
                            </button>
                            <div x-cloak x-collapse x-show="activeAccordion === {{ $i }}">
                                <div class="body-base-400 text-gray-700 pb-6 border-b border-gray-100">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem non,
                                    sequi aliquam cumque quos sed tempora hic nisi repudiandae accusantium
                                    doloremque nihil sapiente explicabo? Ipsam autem repudiandae velit
                                    doloremque obcaecati facere ullam voluptates quasi architecto delectus
                                    quo laudantium qui, eos magni. Minus unde quam quasi mollitia nulla ab
                                    voluptatem consequatur?
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex justify-center mt-8">
                        <button class="btn-white">Load more</button>
                    </div>
                </div>
        </section>
        <section class="py-20">
            <div class="container">
                <div class="rounded-2xl border border-gray-100 py-12 flex justify-center items-center"
                    style="background: linear-gradient(0deg, rgba(240, 242, 242, 0.50) 0%, rgba(240, 242, 242, 0.50) 100%), #FFF">
                    <div class="max-w-[872px] text-center">
                        <span class="bg-white inline-flex rounded-full p-4">
                            <x-svg.calendar />
                        </span>
                        <h2 class="body-xxl-600 mt-6">Didn't find what you are looking for? Get help from Jobpilot support.</h2>
                        <p class="mt-3">If you can't find the answer you're looking for, don't worry! Our Jobpilot Support Center is here
                            to assist you. Simply reach out to our dedicated support team, and they will be happy to provide
                            you with the guidance and information you need. Contact our support center for any inquiries or
                            assistance regarding our platform, job search, or any other related concerns.</p>
                            <div class="flex justify-center gap-6 mt-6">
                                <a href="" class="btn-white">
                                    <x-svg.phone-call-01 />
                                    <span>16875</span>
                                </a>
                                <a href="" class="btn-primary">
                                    <span>Support Center</span>
                                    <x-svg.arrow-circle-right />
                                </a>
                            </div>
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
