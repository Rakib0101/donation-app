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
    {{ __('choose_template') }}
@endsection

@section('main')
    <main>
        <section>
            <div class="container">
                <div class="min-h-[600px] flex justify-center items-center">
                    <div class="py-6 max-w-5xl mx-auto">
                        <h3 class="heading-05 mb-6">{{ __('choose_your_resume') }}</h3>
                        <div class="grid grid-cols-2 gap-6">
                            @foreach ($templates as $template)
                                <label>
                                    <h1 class="text-2xl block text-[#18191C] font-medium mb-0 mt-2">
                                        {{ $template->name }}
                                    </h1>

                                    <div class="bg-primary-500 p-5 rounded-md relative group">
                                        <img src="{{ $template->preview_url }}" alt="{{ $template->name }} image">
                                        <div class="invisible group-hover:visible transition-all duration-500 h-full absolute left-0 bottom-0 overflow-hidden right-0">
                                            <div
                                                class="rounded-lg h-full bg-gradient-to-b from-transparent via-transparent to-black">
                                                <div
                                                    class="flex flex-col pb-8 opacity-100 sm:flex-row h-full px-8 justify-end sm:justify-normal sm:items-end gap-6 mt-auto">
                                                    <a href="{{ route('candidate.selectTemplate', ['template' => $template->slug]) }}"
                                                        class="w-full inline-flex whitespace-nowrap justify-center items-center text-base relative z-[999] font-semibold !opacity-100  !bg-white py-3 rounded-[3px]">
                                                        {{ __('choose_template') }}</a>
                                                    <a target="_blank" href="{{ route('candidate.resume.preview', $template->slug) }}"
                                                        class="w-full inline-flex whitespace-nowrap gap-3 justify-center items-center text-base relative z-[999] font-semibold !opacity-100  !bg-white py-3 rounded-[3px]">
                                                        <x-svg.link-external-01 /> {{ __('preview') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            @endforeach
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
                background: var(--primary-100);
                z-index: -1;
            }

            .resume-step:first-child::before {
                display: none;
            }
        }
    </style>
@endpush

@push('script')
@endpush
