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
    <main class="space-y-[1.5rem] pb-[5rem]">
        <section>
            <div class="container">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-wrap justify-between items-center mt-9">
                        <div>
                            <h2 class="heading-05 mb-1.5">Settings</h2>
                        </div>
                    </div>
                    <div class="p-6 border border-gray-100 shadow-gray-base-1 rounded-xl">
                        <div class="flex justify-between items-center mb-4">
                            <h4 class="body-large-600">Set Job Alert</h4>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Turn Off Job
                                    Alerts</span>
                            </label>
                        </div>
                        <div class="mb-6">
                            <x-frontend.forms.input placeholder="Professions" />
                            <ul class="mt-2 flex gap-2 items-center">
                                <li
                                    class="bg-gray-50 rounded-md text-sm text-gray-800 inline-flex items-center gap-1 py-0.5 ps-2.5 pe-1.5">
                                    <span>Figma</span>
                                    <i class="text-gray-400">
                                        <x-svg.x-close />
                                    </i>
                                </li>
                                <li
                                    class="bg-gray-50 rounded-md text-sm text-gray-800 inline-flex items-center gap-1 py-0.5 ps-2.5 pe-1.5">
                                    <span>UI Design</span>
                                    <i class="text-gray-400">
                                        <x-svg.x-close />
                                    </i>
                                </li>
                                <li
                                    class="bg-gray-50 rounded-md text-sm text-gray-800 inline-flex items-center gap-1 py-0.5 ps-2.5 pe-1.5">
                                    <span>UX Research</span>
                                    <i class="text-gray-400">
                                        <x-svg.x-close />
                                    </i>
                                </li>
                                <li
                                    class="bg-gray-50 rounded-md text-sm text-gray-800 inline-flex items-center gap-1 py-0.5 ps-2.5 pe-1.5">
                                    <span>Website Design</span>
                                    <i class="text-gray-400">
                                        <x-svg.x-close />
                                    </i>
                                </li>
                            </ul>
                        </div>
                        <button class="btn-primary">Save Update</button>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl bg-gradient-to-r from-[#E6F5EB] to-white">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">I am available for
                                hiring...</span>
                        </label>
                    </div>
                    <div>
                        <h4 class="body-large-600 mb-4">Notification</h4>
                        <ul class="grid grid-cols-3 gap-4">
                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12] as $item)
                                <li>
                                    <div class="flex items-center">
                                        <input id="default-checkbox{{ $item }}" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                        <label for="default-checkbox{{ $item }}"
                                            class="ms-2 cursor-pointer text-sm font-medium text-gray-900 ">Receive
                                            notification when company message me.</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="h-[1px] bg-gray-100"></div>
                    <div>
                        <h4 class="body-large-600 mb-4">Notification</h4>
                        <div class="grid grid-cols-3 gap-6">
                            <div>
                                <x-frontend.forms.label for='password' name='Current Password' />
                                <x-frontend.forms.password id='password' placeholder='' />
                            </div>
                            <div>
                                <x-frontend.forms.label for='npassword' name='New Password' />
                                <x-frontend.forms.password id='npassword' placeholder='' />
                            </div>
                            <div>
                                <x-frontend.forms.label for='cpassword' name='Confirm Password' />
                                <x-frontend.forms.password id='cpassword' placeholder='' />
                            </div>
                        </div>
                        <div class="mt-6">
                            <button class="btn-primary">Change Password</button>
                        </div>
                    </div>
                    <div>
                        <span class="inline-block p-4 rounded-full border border-gray-100 shadow-gray-base-3">
                            <x-svg.alert-triangle />
                        </span>
                        <h3 class="body-large-600 text-gray-900 mt-5">Deactivate Candidate Profile</h3>
                        <p class="body-base-400 mt-2 text-gray-700">Deactivating your Jobpilot candidate account means losing access to valuable features and
                            services. Once your account is deactivated, you will no longer receive information about matched
                            jobs, updates from your latest jobs, or have access to your candidate profile and other
                            associated benefits. Deactivating your account means bidding farewell to all the services
                            provided by Jobpilot.com.</p>
                        <button class="text-red-500 mt-5">Deactivate Profile</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('css')
    <style>
    </style>
@endpush

@push('script')
@endpush
