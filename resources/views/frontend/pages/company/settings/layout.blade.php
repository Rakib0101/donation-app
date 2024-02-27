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
        <section class="py-[2.7rem]">
            <div class="container flex flex-wrap items-start gap-6">
                <aside class="min-w-full overflow-x-auto sm:min-w-[19.5rem] space-y-[0.75rem] ">
                    <small class="caption-03 text-gray-500">Settings</small>

                    <ul class="flex md:flex-col">
                        <li
                            class="transition duration-200 ease-linear hover:company-settings-active-link border-l-2 border-l-transparent  text-gray-600 body-base-600 hover:text-gray-900 {{ request()->is('company/settings') ? 'company-settings-active-link' : '' }}">
                            <a href="/company/settings">
                                <div
                                    class="flex items-center gap-2 whitespace-nowrap transition duration-200 ease-linear px-5 py-3">
                                    <span>
                                        <x-svg.building-02 />
                                    </span>
                                    Company
                                </div>
                            </a>
                        </li>
                        <li
                            class=" transition duration-200 ease-linear hover:company-settings-active-link border-l-2 border-l-transparent   text-gray-600 body-base-600 hover:text-gray-900 {{ request()->is('company/settings/detail-info') ? 'company-settings-active-link' : '' }}">
                            <a href="/company/settings/detail-info">
                                <div
                                    class="flex items-center gap-2 whitespace-nowrap transition duration-200 ease-linear px-5 py-3">
                                    <span>
                                        <x-svg.text-input />
                                    </span>
                                    Detailed Info
                                </div>
                            </a>
                        </li>
                        <li
                            class=" transition duration-200 ease-linear hover:company-settings-active-link border-l-2 border-l-transparent   text-gray-600 body-base-600 hover:text-gray-900 {{ request()->is('company/settings/social-media') ? 'company-settings-active-link' : '' }}">
                            <a href="/company/settings/social-media">
                                <div
                                    class="flex items-center gap-2 whitespace-nowrap transition duration-200 ease-linear px-5 py-3">
                                    <span>
                                        <x-svg.globe-02 />
                                    </span>
                                    Social Media
                                </div>
                            </a>
                        </li>
                        <li
                            class=" transition duration-200 ease-linear hover:company-settings-active-link border-l-2 border-l-transparent   text-gray-600 body-base-600 hover:text-gray-900 {{ request()->is('company/settings/contact') ? 'company-settings-active-link' : '' }}">
                            <a href="/company/settings/contact">
                                <div
                                    class="flex items-center gap-2 whitespace-nowrap transition duration-200 ease-linear px-5 py-3">
                                    <span>
                                        <x-svg.map-02 />
                                    </span>
                                    Contact
                                </div>
                            </a>
                        </li>
                        <li
                            class=" transition duration-200 ease-linear hover:company-settings-active-link border-l-2 border-l-transparent   text-gray-600 body-base-600 hover:text-gray-900 {{ request()->is('company/settings/other') ? 'company-settings-active-link' : '' }}">
                            <a href="/company/settings/other">
                                <div class="flex items-center gap-2  transition duration-200 ease-linear px-5 py-3">
                                    <span>
                                        <x-svg.pie-chart-02 />
                                    </span>
                                    Other
                                </div>
                            </a>
                        </li>
                    </ul>
                </aside>


                @yield('page')

            </div>

        </section>
        <section class="border-t border-t-gray-100 py-[24px]">
            <div class="container flex sm:pl-[22rem] justify-between">
                <button class="btn-white">Cancel</button>
                <button class="btn-label-primary">Cancel</button>
            </div>

        </section>
    </main>
@endsection
