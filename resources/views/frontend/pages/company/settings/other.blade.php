@extends('frontend.pages.company.settings.layout')

@section('page')
    <div class="flex-1">
        <h1 class="heading-05 text-gray-900">Change Password</h1>
        <div class="py-8">
            <form action="#" class="space-y-[24px]">
                <div class="flex flex-wrap xl:flex-nowrap justify-between gap-4 items-center w-full">
                    <div class="space-y-2 w-full" x-data="{ show: false }">
                        <label for="current_password" class="body-small-500 text-gray-800">Current Passowrd</label>
                        <div
                            class="focus-within:border-primary-500 hover:border-primary-500 relative border px-4 items-center border-gray-100 shadow-gray-base-1 rounded-lg overflow-hidden">
                            <input :type="show ? 'text' : 'password'" id="current_password"
                                class="focus:ring-0 outline-0 border-none">
                            <div
                                class="text-gray-700 h-full inline-flex items-center justify-center absolute right-2 top-[50%] transform translate-y-[-50%]">
                                <button type="button" @click="show=!show">
                                    <x-svg.eye stroke="currentColor" />
                                </button>
                            </div>

                        </div>

                    </div>
                    <div class="space-y-2 w-full" x-data="{ show: false }">
                        <label for="new_password" class="body-small-500 text-gray-800">New Password</label>
                        <div
                            class="focus-within:border-primary-500 hover:border-primary-500 relative border px-4 items-center border-gray-100 shadow-gray-base-1 rounded-lg overflow-hidden">
                            <input :type="show ? 'text' : 'password'" id="new_password"
                                class="focus:ring-0 outline-0 border-none">
                            <div
                                class="text-gray-700 h-full inline-flex items-center justify-center absolute right-2 top-[50%] transform translate-y-[-50%]">
                                <button type="button" @click="show=!show">
                                    <x-svg.eye stroke="currentColor" />
                                </button>
                            </div>

                        </div>

                    </div>
                    <div class="space-y-2 w-full" x-data="{ show: false }">
                        <label for="confirm_password" class="body-small-500 text-gray-800">Confirm Password</label>
                        <div
                            class="focus-within:border-primary-500 hover:border-primary-500 relative border px-4 items-center border-gray-100 shadow-gray-base-1 rounded-lg overflow-hidden">
                            <input :type="show ? 'text' : 'password'" id="confirm_password"
                                class="focus:ring-0 outline-0 border-none">
                            <div
                                class="text-gray-700 h-full inline-flex items-center justify-center absolute right-2 top-[50%] transform translate-y-[-50%]">
                                <button type="button" @click="show=!show">
                                    <x-svg.eye stroke="currentColor" />
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
                <div>
                    <button type="submit" class="btn-label-primary">Change password</button>
                </div>
            </form>
        </div>
        <div class="py-8 border-t border-t-gray-100">
            <h6 class="body-large-600 text-gray-900">Delete This Company</h6>
            <p class="body-base-400 text-gray-700 mt-3">Deleting your Jobpilot company means losing access to valuable
                features
                and services. Once your company is deleted, you will no longer receive information about matched candidate,
                updates from created jobs or have access to your candidates and other benefits. Deleting your account means
                bidding farewell to all the services provided by Jobpilot.com.</p>
            <a href="#" class="btn-label-danger mt-5">Delete Company</a>
        </div>
    </div>
@endsection
