@extends('frontend.layouts.app')
@section('title', __('contact_us'))
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
        <section class="py-[80px]">
            <div class="container flex items-start flex-wrap md:flex-nowrap gap-[120px]">
                <div class="space-y-6 flex-1">
                    <div class="space-y-3">
                        <span class="heading-07 text-secondary-500">Contact</span>
                        <h1 class="heading-01 text-gray-900">We care about customer services</h1>
                    </div>

                    <p>
                        Want to chat? We’d love to hear from you! Get in touch with our Customer Success Team to inquire
                        about speaking events, advertising rates, or just say hello.
                    </p>

                    <a href="#" class="btn-white-secondary">Support@jobpilot.com</a>
                </div>
                @php
                    $showForm = true;
                @endphp

                @if ($showForm)
                    <div
                        class="border broder-gray-100 shadow-gray-base-2 rounded-xl p-8 bg-gray-white xl:w-[640px] space-y-6 ">
                        <h5 class="heading-05 text-gray-900">Send message and get support</h5>
                        <form action="#" class="space-y-4">
                            <div class="flex items-center flex-wrap md:flex-nowrap gap-4 w-full">
                                <div class="flex flex-col gap-2 w-full">
                                    <label for="name" class="body-small-500 text-gray-800">Name</label>
                                    <input type="text" id="name" placeholder="Full name"
                                        class="body-base-400 border border-gray-100 shadow-gray-base-1 rounded-lg p-[10px] focus:ring-0 hover:border-primary-500 transiton duration-200 placeholder:text-gray-500 focus:border-primary-500 outline-none">
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <label for="email" class="body-small-500 text-gray-800">Email</label>
                                    <input type="email" id="email" placeholder="Email Address"
                                        class="body-base-400 border border-gray-100 shadow-gray-base-1 rounded-lg p-[10px] focus:ring-0 hover:border-primary-500 transiton duration-200 placeholder:text-gray-500 focus:border-primary-500 outline-none">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 w-full">
                                <label for="subject" class="body-small-500 text-gray-800">Subject</label>
                                <input type="text" id="subject" placeholder="Message subject..."
                                    class="body-base-400 border border-gray-100 shadow-gray-base-1 rounded-lg p-[10px] focus:ring-0 hover:border-primary-500 transiton duration-200 placeholder:text-gray-500 focus:border-primary-500 outline-none">
                            </div>
                            <div class="flex flex-col gap-2 w-full">
                                <label for="message" class="body-small-500 text-gray-800">Message</label>
                                <textarea type="text" id="message" placeholder="Write down your message......"
                                    class="body-base-400 border border-gray-100 shadow-gray-base-1 rounded-lg p-[10px] focus:ring-0 hover:border-primary-500 transiton duration-200 placeholder:text-gray-500 focus:border-primary-500 min-h-[220px] outline-none"
                                    row="5"></textarea>
                            </div>
                            <div class="flex items-center justify-end">
                                <button type="submit" class="btn-label-primary">
                                    Send Message
                                    <x-svg.send-01 />
                                </button>
                            </div>
                        </form>
                    </div>
                @else
                    <div
                        class="border broder-gray-100 shadow-gray-base-2 rounded-xl p-8 bg-gray-white  xl:w-[640px] space-y-6 flex-1">
                        <div class="flex items-center justify-center h-[148px] w-[148px] mx-auto">
                            <img src="{{ asset('frontend/assets/images/check-animation.gif') }}" alt="check mark gif">
                        </div>
                        <div class="space-y-3 text-center">
                            <h6 class="body-xl-600 text-gray-900">Message sent successfully</h6>
                            <p class="body-base-400 text-gray-700">
                                Congratulations! Your message has been successfully sent and is on its way to our team. We
                                appreciate your interest and look forward to reviewing your message. Whether it's a
                                question, feedback, or a partnership inquiry, we value your communication with us. Our
                                dedicated team will get back to you as soon as possible. Thank you for reaching out, and
                                we'll be in touch shortly!
                            </p>
                        </div>
                    </div>
                @endif

            </div>
        </section>
    </main>
@endsection
