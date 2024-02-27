@extends('frontend.account-setup.layouts.account-setup')
@section('content')
    <div class="container">
        <div class="max-w-[984px] min-h-screen mx-auto">
            <x-frontend.account-setup.steps company="complete" detail_info="complete" social_media="complete"
                contact="complete" />
            <div class="py-6">
                <div class="text-center flex flex-col justify-center items-center max-w-[690px] mx-auto">

                    <img src="{{ asset('frontend/assets/images/check-animation.gif') }}" alt="">
                    <h2 class="body-xl-600 text-gray-900 mb-3">🎉 Congratulation, Your company account setup is
                        successfully completed!</h2>
                    <p class="body-base-400 text-gray-700 mb-6">Make your job listing shine with our Highlight Job feature.
                        By highlighting your job, it grabs
                        immediate attention and stands out from the rest. This prominent placement increases visibility and
                        attracts the right candidates to your opportunity. Don't let your job get lost in the crowd -
                        highlight it and make it unmissable to qualified applicants.</p>
                    <div class="flex justify-center items-center gap-3">
                        <a href="#" class="btn-white">View Dashboard</a>
                        <a href="#" class="btn-primary">
                            <x-svg.circle-plus />
                            <span>Post Job</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush
