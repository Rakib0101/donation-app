<div class="relative inline-flex" x-data="{ messagePanel: false }" @click.outside="messagePanel = false">
    <button @click="messagePanel = !messagePanel"
        class="p-2 hover:bg-white rounded-full transition-all duration-300 text-white hover:text-primary-500">
        <x-svg.chat />
    </button>
    <!-- Dropdown menu -->
    <div class="absolute z-50 right-0 top-full w-full min-w-[270px] md:min-w-[536px]" x-cloak x-transition
        x-show="messagePanel">
        <div class="py-6 bg-white rounded-md border border-gray-50 shadow-gray-base-1 ">
            <div class="flex justify-between items-center sm:px-6 px-3">
                <h4 class="text-gray-900 body-xl-600">Message</h4>
                <button
                    class="inline-flex gap-2 items-center body-small-600 text-gray-500 hover:text-primary-500 transition-all duration-300">
                    <x-svg.double-check />
                    <span>{{ __('mark_as_read') }}</span>
                </button>
            </div>
            <ul class="flex flex-col py-3">
                <li>
                    <a href="#"
                        class="notification-list flex gap-3 items-center justify-between sm:px-6 px-3 py-3 hover:bg-gray-50">
                        <div class="flex gap-3 items-center">
                            <img class="w-10 h-10 rounded-full object-cover"
                                src="{{ asset('frontend/assets/images/avatar.png') }}" alt="">
                            <div>
                                <p class="body-base-600 text-gray-900">{{__('full_name')}}</p>
                                <p class="body-small-400 text-gray-800 mt-0.5">{{ __('job_name') }}</p>
                            </div>
                        </div>
                        <div class="w-12 h-12 flex items-end flex-col gap-1.5">
                            <span
                                class="w-[22px] h-5 rounded-full inline-flex justify-center items-center bg-red-500 text-white body-small-500">5</span>
                            <span class="body-small-400 text-gray-400">5d</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="notification-list flex gap-3 items-center justify-between sm:px-6 px-3 py-3 hover:bg-gray-50 unread">
                        <div class="flex gap-3 items-center">
                            <img class="w-10 h-10 rounded-full object-cover"
                                src="{{ asset('frontend/assets/images/avatar.png') }}" alt="">
                            <div>
                                <p class="body-base-600 text-gray-900">{{__('full_name')}}</p>
                                <p class="body-small-400 text-gray-800 mt-0.5">{{ __('job_name') }}</p>
                            </div>
                        </div>
                        <div class="w-12 h-12 flex items-end flex-col gap-1.5">
                            <span
                                class="w-[22px] h-5 rounded-full inline-flex justify-center items-center bg-red-500 text-white body-small-500">5</span>
                            <span class="body-small-400 text-gray-400">5d</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="notification-list flex gap-3 items-center justify-between sm:px-6 px-3 py-3 hover:bg-gray-50 unread">
                        <div class="flex gap-3 items-center">
                            <img class="w-10 h-10 rounded-full object-cover"
                                src="{{ asset('frontend/assets/images/avatar.png') }}" alt="">
                            <div>
                                <p class="body-base-600 text-gray-900">{{__('full_name')}}</p>
                                <p class="body-small-400 text-gray-800 mt-0.5">{{ __('job_name') }}</p>
                            </div>
                        </div>
                        <div class="w-12 h-12 flex items-end flex-col gap-1.5">
                            <span
                                class="w-[22px] h-5 rounded-full inline-flex justify-center items-center bg-red-500 text-white body-small-500">5</span>
                            <span class="body-small-400 text-gray-400">5d</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="notification-list flex gap-3 items-center justify-between sm:px-6 px-3 py-3 hover:bg-gray-50 unread">
                        <div class="flex gap-3 items-center">
                            <img class="w-10 h-10 rounded-full object-cover"
                                src="{{ asset('frontend/assets/images/avatar.png') }}" alt="">
                            <div>
                                <p class="body-base-600 text-gray-900">Full Name</p>
                                <p class="body-small-400 text-gray-800 mt-0.5">Job Name</p>
                            </div>
                        </div>
                        <div class="w-12 h-12 flex items-end flex-col gap-1.5">
                            <span
                                class="w-[22px] h-5 rounded-full inline-flex justify-center items-center bg-red-500 text-white body-small-500">5</span>
                            <span class="body-small-400 text-gray-400">5d</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="notification-list flex gap-3 items-center justify-between sm:px-6 px-3 py-3 hover:bg-gray-50">
                        <div class="flex gap-3 items-center">
                            <img class="w-10 h-10 rounded-full object-cover"
                                src="{{ asset('frontend/assets/images/avatar.png') }}" alt="">
                            <div>
                                <p class="body-base-600 text-gray-900">Full Name</p>
                                <p class="body-small-400 text-gray-800 mt-0.5">Job Name</p>
                            </div>
                        </div>
                        <div class="w-12 h-12 flex items-end flex-col gap-1.5">
                            <span
                                class="w-[22px] h-5 rounded-full inline-flex justify-center items-center bg-red-500 text-white body-small-500">5</span>
                            <span class="body-small-400 text-gray-400">5d</span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="flex justify-center items-center">
                <a href="" class="btn-text-primary">
                    <x-svg.loading />
                    <span>{{__('load_more')}}</span>
                </a>
            </div>
        </div>
    </div>
</div>
