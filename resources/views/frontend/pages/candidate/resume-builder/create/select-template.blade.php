@extends('frontend.layouts.resume')

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
    {{ $template->name }}
@endsection

@section('main')
    {{-- @livewire('resume.resume-one') --}}

    @if ($template->file_name == 'resume-1')
        @livewire('resume.resume-one', ['resume' => $resume, 'template' => $template, 'user' => $user])

        {{-- <x-frontend.candidate.resume.resume-01 :resume="$resume"/> --}}
    @elseif($template->file_name == 'resume-2')
        <x-frontend.candidate.resume.resume-02 :resume="$resume" />
    @elseif($template->file_name == 'resume-3')
        <x-frontend.candidate.resume.resume-03 :resume="$resume" />
    @elseif ($template->file_name == 'resume-4')
        <x-frontend.candidate.resume.resume-04 :resume="$resume" />
    @endif

    {{-- @if ($template->file_name == 'resume-1')
                <resume-one :resume="{{ $resume }}" :template="{{ $template }}" :user="{{ $user }}"/>
            @elseif ($template->file_name == 'resume-2')
                <resume-two :resume="{{ $resume }}" :template="{{ $template }}" :user="{{ $user }}"/>
            @elseif ($template->file_name == 'resume-3')
                <resume-three :resume="{{ $resume }}" :template="{{ $template }}" :user="{{ $user }}"/>
            @elseif ($template->file_name == 'resume-4')
                <resume-four :resume="{{ $resume }}" :template="{{ $template }}" :user="{{ $user }}"/>
            @endif --}}


    @if (!$resume->is_active)
        <x-frontend.candidate.resume.save-resume />
    @endif
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
