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
    <section class="py-[1.75rem]">
        <div class="container md:h-[964px] h-[70vh] flex flex-wrap md:flex-nowrap relative gap-[1.5rem]" x-data="{showSidebar: false}">
            <aside
                class="rounded-xl bg-gray-white shadow-gray-base-1 border border-gray-100 py-[1.25rem] min-w-[26.5rem] space-y-4 overflow-y-auto">
                <div class="px-[1.125rem] space-y-4">
                    <h1 class="body-large-500 text-gray-900 ">All Message</h1>
                    <div class="space-y-[0.75rem]">
                        <div class="relative w-full">
                            <div
                                class="absolute left-0 top-[50%] transform translate-y-[-50%] inset-y-0 start-0 flex items-center ps-3 pointer-events-none text-gray-700">
                                <x-svg.search-md stroke="currentColor" />
                            </div>
                            <input type="search" id="default-search"
                                class="w-full border border-gray-100 shadow-gray-base-1 bg-gray-white focus:ring-1 focus:ring-primary-500 rounded-lg !pl-[47px]"
                                placeholder="Search messages">

                        </div>
                        <div class="flex items-center gap-3">
                            <div class="relative w-full">
                                <div
                                    class="absolute left-0 top-[50%] transform translate-y-[-50%] inset-y-0 start-0 flex items-center ps-3 pointer-events-none text-gray-700">
                                    <x-svg.brief-case-01 />
                                </div>
                                <select
                                    class="w-full border body-base-400 text-gray-500 border-gray-100 shadow-gray-base-1 bg-gray-white focus:ring-1 focus:ring-primary-500 rounded-lg !pl-[47px]">
                                    <option value="" selected disabled>Selec job....</option>
                                    <option value="">Selec job....</option>
                                    <option value="">Selec job....</option>
                                    <option value="">Selec job....</option>
                                </select>
                            </div>
                            <div>
                                <button class="icon-btn-white">
                                    <x-svg.filter-lines />
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <ul>
                        <li class="py-[0.62rem] px-[1.25rem] transition duration-200 ease-linear hover:bg-primary-100 flex items-center gap-3"
                            role="button">
                            <div class="h-[2.5rem] w-[2.5rem] rounded-full">
                                <img src="{{ asset('frontend/assets/images/avatar.png') }}" alt=""
                                    class="w-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="body-base-600 text-gray-900">Full name</h4>
                                <p class="body-small-400 text-gray-800 ">Job name</p>
                            </div>
                            <div class="h-full space-y-2">
                                <small class="body-small-400 text-gray-400 self-end">5d</small>
                            </div>
                        </li>
                        <li class="py-[0.62rem] px-[1.25rem] transition duration-200 ease-linear bg-red-50 hover:bg-primary-100 flex items-center gap-3"
                            role="button">
                            <div class="h-[2.5rem] w-[2.5rem] rounded-full">
                                <img src="{{ asset('frontend/assets/images/avatar.png') }}" alt=""
                                    class="w-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="body-base-600 text-gray-900">Full name</h4>
                                <p class="body-small-400 text-gray-800 ">Job name</p>
                            </div>
                            <div class="h-full space-y-2 flex flex-col">
                                <span
                                    class="h-[1.3rem] w-[1.3rem] rounded-full bg-red-500 body-small-500 text-gray-white inline-flex items-center justify-center">5</span>
                                <small class="body-small-400 text-gray-400 self-end">5d</small>
                            </div>
                        </li>
                        <li class="py-[0.62rem] px-[1.25rem] transition duration-200 ease-linear hover:bg-primary-100 flex items-center gap-3"
                            role="button">
                            <div class="h-[2.5rem] w-[2.5rem] rounded-full">
                                <img src="{{ asset('frontend/assets/images/avatar.png') }}" alt=""
                                    class="w-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="body-base-600 text-gray-900">Full name</h4>
                                <p class="body-small-400 text-gray-800 ">Job name</p>
                            </div>
                            <div class="h-full space-y-2">
                                <small class="body-small-400 text-gray-400 self-end">5d</small>
                            </div>
                        </li>
                        <li class="py-[0.62rem] px-[1.25rem] transition duration-200 ease-linear hover:bg-primary-100 flex items-center gap-3"
                            role="button">
                            <div class="h-[2.5rem] w-[2.5rem] rounded-full">
                                <img src="{{ asset('frontend/assets/images/avatar.png') }}" alt=""
                                    class="w-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="body-base-600 text-gray-900">Full name</h4>
                                <p class="body-small-400 text-gray-800 ">Job name</p>
                            </div>
                            <div class="h-full space-y-2">
                                <small class="body-small-400 text-gray-400 self-end">5d</small>
                            </div>
                        </li>
                        <li class="py-[0.62rem] px-[1.25rem] transition duration-200 ease-linear hover:bg-primary-100 flex items-center gap-3"
                            role="button">
                            <div class="h-[2.5rem] w-[2.5rem] rounded-full">
                                <img src="{{ asset('frontend/assets/images/avatar.png') }}" alt=""
                                    class="w-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="body-base-600 text-gray-900">Full name</h4>
                                <p class="body-small-400 text-gray-800 ">Job name</p>
                            </div>
                            <div class="h-full space-y-2">
                                <small class="body-small-400 text-gray-400 self-end">5d</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div
                class="rounded-xl bg-gray-white shadow-gray-base-1 border border-gray-100 min-w-[26.5rem] flex flex-col overflow-hidden w-full">
                {{-- chat header --}}
                <div
                    class=" z-20 w-full bg-gray-50 border-b border-b-gray-100 px-[1.5rem] py-[1.25rem] space-y-3 divide-y divide-gray-100">
                    <div class="flex items-center gap-[0.75rem]">
                        <h4 class="body-base-600 text-gray-900">Job Title</h4>
                        <p class="flex items-center">
                            <b class="body-small-600 text-green-600 flex items-center gap-1">
                                <x-svg.dot />
                                Active
                            </b>
                        </p>
                        <small class="body-xs-400 text-gray-700">Job expire in 28th July, 2023</small>
                    </div>
                    <div class="flex items-center gap-3 pt-3 w-full">
                        <div class="h-[2.75rem] w-[2.75rem] rounded-full shrink-0">
                            <img src="{{ asset('frontend/assets/images/avatar.png') }}" alt=""
                                class="w-full object-cover">
                        </div>
                        <div class=" w-full">
                            <h5 class="body-base-600 text-gray-900">Kevin Gilbert</h5>
                            <div class="flex items-center gap-3">
                                <a href="#" target="_blank"
                                    class="links-url-small hover:underline text-primary-500">View Profile</a>
                                <p class="flex items-center gap-1 body-small-400 text-gray-700">
                                    Candidate:
                                    <b class="text-gray-900"> Shortlisted</b>
                                </p>
                            </div>
                        </div>
                        <div class="shrink-0">
                            <a href="#" target="_blank"
                                class="links-url-small text-gray-500 hover:underline">Archive
                                Message</a>
                        </div>
                    </div>
                </div>

                {{-- chat body --}}
                <div class="flex-grow overflow-y-auto">
                    <div class="relative w-full  mt-[10.13rem]">
                        <hr class="border-b border-dashed border-gray-100">
                        <span
                            class="badge-gray-transparent  absolute top-[50%] left-[50%] transform translate-x-[-50%] translate-y-[-50%]">17
                            Dec, 2023</span>
                    </div>
                    <div class="px-6 pt-6">
                        <ul>
                            <li class="py-4">
                                <div class="max-w-[33.5rem] ml-auto">
                                    <p class="bg-secondary-500 text-gray-white rounded-lg py-2 px-4 inline-block ">
                                        Thank you for
                                        considering my application to join Lomeyo. I'm excited about the opportunity and
                                        look
                                        forward to discussing how I can contribute to your company's success.
                                    </p>
                                    <small class="text-gray-600 body-small-400 block text-right">
                                        10:56 PM
                                    </small>
                                </div>
                            </li>
                            <li class="py-4">
                                <div class="max-w-[33.5rem] ">
                                    <span class="body-small-500 text-gray-700">Name</span>
                                    <p class="bg-secondary-50 text-gray-850 rounded-lg py-2 px-4 inline-block ">
                                        Thank you for
                                        considering my application to join Lomeyo. I'm excited about the opportunity and
                                        look
                                        forward to discussing how I can contribute to your company's success.
                                    </p>
                                    <small class="text-gray-600 body-small-400 block text-left">
                                        10:56 PM
                                    </small>
                                </div>
                            </li>
                            <li class="py-4">
                                <div class="max-w-[33.5rem] ml-auto">
                                    <p class="bg-secondary-500 text-gray-white rounded-lg py-2 px-4 inline-block ">
                                        Thank you for
                                        considering my application to join Lomeyo. I'm excited about the opportunity and
                                        look
                                        forward to discussing how I can contribute to your company's success.
                                    </p>
                                    <small class="text-gray-600 body-small-400 block text-right">
                                        10:56 PM
                                    </small>
                                </div>
                            </li>
                            <li class="py-4">
                                <div class="max-w-[33.5rem] ">
                                    <span class="body-small-500 text-gray-700">Name</span>
                                    <p class="bg-secondary-50 text-gray-850 rounded-lg py-2 px-4 inline-block ">
                                        Thank you for
                                        considering my application to join Lomeyo. I'm excited about the opportunity and
                                        look
                                        forward to discussing how I can contribute to your company's success.
                                    </p>
                                    <small class="text-gray-600 body-small-400 block text-left">
                                        10:56 PM
                                    </small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- chat footer --}}
                <div class="p-4 z-20 mt-auto flex items-center gap-3">
                    <div class="relative w-full">
                        <div
                            class="absolute text-primary-500 left-0 top-[50%] transform translate-y-[-50%] inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
                            <x-svg.message-dots-square stroke="currentColor" />
                        </div>
                        <input type="text"
                            class="w-full border border-gray-100 shadow-gray-base-1 bg-gray-white focus:ring-1 focus:ring-primary-500 rounded-lg !pl-[47px]"
                            placeholder="Write Message...">

                    </div>
                    <div>
                        <button type="button" class="btn-dark gap-2">
                            Send
                            <span>
                                <x-svg.send-01 />
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
