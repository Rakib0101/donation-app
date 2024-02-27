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
        <section class="py-[2.5rem]">
            <div class="container space-y-[1.5rem]">
                <div class="flex items-center justify-between flex-wrap gap-3">
                    <h1 class="heading-05 text-gray-900">My Companies</h1>
                    <button class="btn-dark gap-2">
                        <x-svg.plus-circle />
                        New Company
                    </button>
                </div>
                <div class="space-y-[1.5rem]">
                    <div
                        class="flex gap-6 flex-wrap items-center border border-gray-100 rounded-xl p-6 shadow-gray-base-1 hover:shadow-gray-base-2 hover:ring-1 hover:border-primary-500">
                        {{-- image with text --}}
                        <div class="flex flex-wrap min-w-full lg:min-w-[26.5rem] gap-4 ">
                            <div class="h-[5.5rem] w-[5.5rem] rounded-md shrink-0">
                                <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company-logo"
                                    class="w-full object-cover">
                            </div>
                            <div>
                                <h6 class="heading-06 text-gray-900">Stripe Inc.</h6>
                                <small class="body-small-400  text-gray-900">Financial services company</small>
                                <div class="flex items-center gap-2 mt-2">
                                    <div
                                        class="rounded-md bg-green-50 body-small-500 text-gray-900 inline-flex items-center pl-1 py-1 gap-1  pr-3">
                                        <span
                                            class="bg-green-500 inline-flex items-center justify-center h-5 w-5 rounded text-white">
                                            <x-svg.check />
                                        </span>
                                        Varified
                                    </div>
                                    <span class="badge-primary-transparent">3 Open Position</span>
                                </div>
                            </div>
                        </div>

                        {{-- description --}}
                        <div class="text-gray-700 body-base-400 min-w-full lg:min-w-[42.25rem] flex-1">
                            Stripe builds financial infrastructure that ambitious companies use to launch their boldest
                            products. Our customers range from hours-old startups to complex global businesses.
                            Collectively, they are growing the GDP of the internet. You can help.
                        </div>

                        {{-- button --}}
                        <div>
                            <button class="btn-primary-transparent" type="button">
                                Current
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex gap-6 flex-wrap items-center border border-gray-100 rounded-xl p-6 shadow-gray-base-1 hover:shadow-gray-base-2 hover:ring-1 hover:border-primary-500">
                        {{-- image with text --}}
                        <div class="flex flex-wrap min-w-full lg:min-w-[26.5rem] gap-4 ">
                            <div class="h-[5.5rem] w-[5.5rem] rounded-md shrink-0">
                                <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company-logo"
                                    class="w-full object-cover">
                            </div>
                            <div>
                                <h6 class="heading-06 text-gray-900">Stripe Inc.</h6>
                                <small class="body-small-400  text-gray-900">Financial services company</small>
                                <div class="flex items-center gap-2 mt-2">
                                    <div
                                        class="rounded-md bg-green-50 body-small-500 text-gray-900 inline-flex items-center pl-1 py-1 gap-1  pr-3">
                                        <span
                                            class="bg-green-500 inline-flex items-center justify-center h-5 w-5 rounded text-white">
                                            <x-svg.check />
                                        </span>
                                        Varified
                                    </div>
                                    <span class="badge-primary-transparent">3 Open Position</span>
                                </div>
                            </div>
                        </div>

                        {{-- description --}}
                        <div class="text-gray-700 body-base-400 min-w-full lg:min-w-[42.25rem] flex-1">
                            Stripe builds financial infrastructure that ambitious companies use to launch their boldest
                            products. Our customers range from hours-old startups to complex global businesses.
                            Collectively, they are growing the GDP of the internet. You can help.
                        </div>

                        {{-- button --}}
                        <div>
                            <button class="btn-white" type="button">
                                Switch
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex gap-6 flex-wrap items-center border border-gray-100 rounded-xl p-6 shadow-gray-base-1 hover:shadow-gray-base-2 hover:ring-1 hover:border-primary-500">
                        {{-- image with text --}}
                        <div class="flex flex-wrap min-w-full lg:min-w-[26.5rem] gap-4 ">
                            <div class="h-[5.5rem] w-[5.5rem] rounded-md shrink-0">
                                <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company-logo"
                                    class="w-full object-cover">
                            </div>
                            <div>
                                <h6 class="heading-06 text-gray-900">Stripe Inc.</h6>
                                <small class="body-small-400  text-gray-900">Financial services company</small>
                                <div class="flex items-center gap-2 mt-2">
                                    <div
                                        class="rounded-md bg-green-50 body-small-500 text-gray-900 inline-flex items-center pl-1 py-1 gap-1  pr-3">
                                        <span
                                            class="bg-green-500 inline-flex items-center justify-center h-5 w-5 rounded text-white">
                                            <x-svg.check />
                                        </span>
                                        Varified
                                    </div>
                                    <span class="badge-primary-transparent">3 Open Position</span>
                                </div>
                            </div>
                        </div>

                        {{-- description --}}
                        <div class="text-gray-700 body-base-400 min-w-full lg:min-w-[42.25rem] flex-1">
                            Stripe builds financial infrastructure that ambitious companies use to launch their boldest
                            products. Our customers range from hours-old startups to complex global businesses.
                            Collectively, they are growing the GDP of the internet. You can help.
                        </div>

                        {{-- button --}}
                        <div>
                            <button class="btn-white" type="button">
                                Switch
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex gap-6 flex-wrap items-center border border-gray-100 rounded-xl p-6 shadow-gray-base-1 hover:shadow-gray-base-2 hover:ring-1 hover:border-primary-500">
                        {{-- image with text --}}
                        <div class="flex flex-wrap min-w-full lg:min-w-[26.5rem] gap-4 ">
                            <div class="h-[5.5rem] w-[5.5rem] rounded-md shrink-0">
                                <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company-logo"
                                    class="w-full object-cover">
                            </div>
                            <div>
                                <h6 class="heading-06 text-gray-900">Stripe Inc.</h6>
                                <small class="body-small-400  text-gray-900">Financial services company</small>
                                <div class="flex items-center gap-2 mt-2">
                                    <div
                                        class="rounded-md bg-green-50 body-small-500 text-gray-900 inline-flex items-center pl-1 py-1 gap-1  pr-3">
                                        <span
                                            class="bg-green-500 inline-flex items-center justify-center h-5 w-5 rounded text-white">
                                            <x-svg.check />
                                        </span>
                                        Varified
                                    </div>
                                    <span class="badge-primary-transparent">3 Open Position</span>
                                </div>
                            </div>
                        </div>

                        {{-- description --}}
                        <div class="text-gray-700 body-base-400 min-w-full lg:min-w-[42.25rem] flex-1">
                            Stripe builds financial infrastructure that ambitious companies use to launch their boldest
                            products. Our customers range from hours-old startups to complex global businesses.
                            Collectively, they are growing the GDP of the internet. You can help.
                        </div>

                        {{-- button --}}
                        <div>
                            <button class="btn-white" type="button">
                                Switch
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
