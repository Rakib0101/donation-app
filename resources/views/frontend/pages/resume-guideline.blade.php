@extends('frontend.layouts.app')
@section('title', __('resume_guideline'))
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
        <section class="py-20 bg-linear">
            <div class="container">
                <div class="flex items-start justify-between gap-6">
                    <div class="flex flex-col gap-4 flex-grow w-full max-w-[872px]">
                        <h2 class="heading-02">Resume Guidelines</h2>
                        <p class="body-base-400">Creating an impactful resume is a crucial step in your job search journey. Our Resume Setup
                            Guidelines offer a comprehensive guide on how to showcase your professional achievements and
                            skills effectively. From crafting a compelling biography to adding relevant experience,
                            education, and projects, we've got you covered.</p>
                        <p class="body-base-400">Learn the art of writing a captivating biography that highlights your unique strengths and career aspirations. Discover the best practices for presenting your work experience, showcasing your key achievements, and tailoring it to the job you're applying for. Our guidelines also provide insights on how to showcase your educational background and any significant projects you've undertaken.</p>
                        <p class="body-base-400">Learn the art of writing a captivating biography that highlights your unique strengths and career aspirations. Discover the best practices for presenting your work experience, showcasing your key achievements, and tailoring it to the job you're applying for. Our guidelines also provide insights on how to showcase your educational background and any significant projects you've undertaken.</p>
                        <h3 class="body-xl-600">Decrease the amount of info and increase the</h3>
                        <p class="body-base-400">In addition to the professional aspects, we'll guide you on adding essential personal information while ensuring privacy and security. Learn how to strike the perfect balance between showcasing your strengths and maintaining confidentiality.</p>
                        <p class="body-base-400">In addition to the professional aspects, we'll guide you on adding essential personal information while ensuring privacy and security. Learn how to strike the perfect balance between showcasing your strengths and maintaining confidentiality.</p>
                        <p class="body-base-400">At our platform, we believe that a well-crafted resume is your ticket to standing out in a competitive job market. Let our Resume Setup Guidelines be your go-to resource for creating an impressive profile that opens doors to exciting opportunities. Elevate your resume and take the next step towards your dream career with confidence</p>
                    </div>
                    <ul class="sticky top-12 flex-grow flex flex-col gap-3 text-gray-500 list-disc list-inside w-full max-w-[312px]">
                        <h2 class="body-small-500 !text-gray-800">Table of content</h2>
                        <li>User Obligations</li>
                        <li>Job Postings</li>
                        <li>User Content</li>
                        <li>Privacy</li>
                        <li>Intellectual Property</li>
                        <li>Limitation of Liability</li>
                        <li>Termination</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection

