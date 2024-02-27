<section class="pt-16 pb-[170px]" style="background: linear-gradient(90deg, #F3F4F5 0%, #FFF0E6 100%);">
    <div class="container px-6">
        <div class="flex flex-col lg:flex-row gap-10 items-center justify-between">
            <div class="w-full flex lg:justify-start justify-center">
                <div class="max-w-[648px]">
                    <h2 class="display-02 text-gray-900">{{ __('unlock_your_potential_embrace_your') }}<span
                            class="text-secondary-500 underline">Future!</span></h2>
                    <p class="body-xl-400 mt-4 text-gray-800">{{ __('discover_your_dream_job') }}</p>
                    <form action="" class="mt-6">
                        <div class="relative w-full" x-data="{ showSearchMenu: false }" x-init>
                            <div
                                class="focus-within:border-primary-500 hover:border-primary-500 rounded-b-none transition duration-200 ease-linear border border-gray-100 border-b-transparent hover:border-b focus-within:border-b lg:min-w-[380px] lg:flex items-center body-base-400 text-gray-700 hidden  bg-gray-white rounded-lg  py-[10px]">
                                <div class="relative items-center w-full pl-[18px] ">
                                    <span class="mr-3 absolute left-3 ">
                                        <x-svg.search-md />
                                    </span>
                                    <input type="search" @click="showSearchMenu= !showSearchMenu"
                                        placeholder="{{ __('job_search_criteria') }}"
                                        class="focus:ring-0  p-0 border-0 outline-none  ps-6 w-full">
                                </div>
                            </div>
                            @php
                                $searchItems = ['web developer', 'web design', 'website design', 'web development', 'web designer', 'website'];
                            @endphp
                            <ul x-transition x-show="showSearchMenu" x-cloak @click.outside="showSearchMenu=false"
                                class="rounded-lg border border-gray-100 shadow-gray-base-1 bg-gray-white py-3 hidden lg:inline absolute top-12 left-0 w-full z-30">
                                @foreach ($searchItems as $item)
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-[18px] py-3 gap-3 text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition duration-200 ease-linear">
                                            <span>
                                                <x-svg.search-md stroke="currentColor" />
                                            </span>
                                            {{ $item }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="flex">
                            <div class="relative w-full">
                                <x-frontend.forms.input icon="true" placeholder="Job location"
                                    class="rounded-t-none rounded-br-none hover:border-primary-500" />
                                <span class="absolute top-1/2 left-[18px] -translate-y-1/2 text-primary-500">
                                    <x-svg.map />
                                </span>
                            </div>
                            <div class="relative w-full">
                                <span class="absolute top-1/2 left-[18px] -translate-y-1/2 text-primary-500">
                                    <x-svg.layers />
                                </span>
                                <x-frontend.forms.select icon="true"
                                    class="rounded-t-none rounded-bl-none hover:border-primary-500 text-gray-600 border-l-0 hover:border-l focus:border-l pl-14">
                                    <option value="" selected disabled class="">Job Type</option>
                                    <option value="">option 02</option>
                                    <option value="">option 03</option>
                                    <option value="">option 04</option>

                                </x-frontend.forms.select>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button class="btn-primary w-full">
                                <x-svg.search-md stroke="white" />
                                <span>Find Job</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full  lg:justify-end justify-center hidden lg:flex">
                <img src="{{ asset('frontend/assets/images/hero-right.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
