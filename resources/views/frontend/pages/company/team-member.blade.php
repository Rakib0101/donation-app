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
        <section class="py-[2.5rem] space-y-[1.5rem]">
            <div class="container space-y-6">
                <h1 class="heading-05 text-gray-900">Team Member</h1>
                <div class="border border-gray-100 shadow-gray-base-1 p-6 rounded-xl space-y-4">
                    <div class="space-y-[0.5rem]">
                        <h5 class="body-xl-600 text-gray-900">Invite a new member</h5>
                        <p class="body-small-400 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas
                            vitae ornare urna. Sed eu ornare nisl, eu malesuada neque.</p>
                    </div>
                    <div class="flex items-center flex-wrap w-full gap-4">
                        <div class="min-w-full lg:min-w-[19.5rem]">
                            <input type="text" placeholder="Full name"
                                class="border w-full  border-gray-100 shadow-gray-base-1 rounded-lg outline-none focus:ring-0 focus:border-primary-500 hover:border-primary-500 placeholder:body-base-400 placeholder:text-gray-500">
                        </div>
                        <div class="relative min-w-full lg:min-w-[28.9rem]">
                            <div
                                class="absolute  top-[50%] transform translate-y-[-50%] left-1 flex items-center ps-3.5 pointer-events-none text-gray-700">
                                <x-svg.mail-02 />
                            </div>
                            <input type="text" id="phone-input" aria-describedby="helper-text-explanation"
                                class="pl-12 border border-gray-100 shadow-gray-base-1 w-full  rounded-lg outline-none focus:ring-0 focus:border-primary-500 hover:border-primary-500 placeholder:body-base-400 placeholder:text-gray-500"
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890">
                        </div>
                        <div class="min-w-full lg:min-w-[17.5rem]">
                            <select name="" id=""
                                class="border border-gray-100 shadow-gray-base-1 w-full rounded-lg outline-none focus:ring-0 focus:border-primary-500 hover:border-primary-500 placeholder:body-base-400 placeholder:text-gray-500 text-gray-700 body-base-400">
                                <option disabled selected class="text-gray-500">Select role..</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn-label-primary">Invite
                                Member</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="border border-gray-100 shadow-gray-base-2 rounded-xl ">
                    <div class="p-6 body-xl-600">
                        All Users
                    </div>
                    <div class="relative overflow-x-auto ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        USER
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        STATUS
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        JOIN DATE
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ROLE
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="h-12 w-12 rounded-full inline-flex items-center justify-center text-primary-500 bg-primary-50">
                                                OR
                                            </div>
                                            <div>
                                                <span class="body-base-400 text-gray-600">Full name</span>
                                                <p class="body-base-500 text-gray-900">Designerzafor@gmail.com</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="badge-green-transparent">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        17 Jul, 2023
                                    </td>
                                    <td class="px-6 py-4">
                                        Owner
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <a href="#" class="btn-text-primary">
                                                <span>
                                                    <x-svg.edit-05 />
                                                </span>
                                                Edit
                                            </a>
                                            <a href="#" class="btn-text-dark">
                                                <x-svg.trash-03 />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="h-12 w-12 rounded-full inline-flex items-center justify-center text-primary-500 bg-primary-50">
                                                OR
                                            </div>
                                            <div>
                                                <span class="body-base-400 text-gray-600">Full name</span>
                                                <p class="body-base-500 text-gray-900">Designerzafor@gmail.com</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="badge-green-transparent">Active</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        17 Jul, 2023
                                    </td>
                                    <td class="px-6 py-4">
                                        Owner
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <a href="#" class="btn-text-primary">
                                                <span>
                                                    <x-svg.edit-05 />
                                                </span>
                                                Edit
                                            </a>
                                            <a href="#" class="btn-text-dark">
                                                <x-svg.trash-03 />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="h-12 w-12 rounded-full inline-flex items-center justify-center text-primary-500 bg-primary-50">
                                                OR
                                            </div>
                                            <div>
                                                <span class="body-base-400 text-gray-600">Full name</span>
                                                <p class="body-base-500 text-gray-900">Designerzafor@gmail.com</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="badge-green-transparent">Active</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        17 Jul, 2023
                                    </td>
                                    <td class="px-6 py-4">
                                        Owner
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <a href="#" class="btn-text-primary">
                                                <span>
                                                    <x-svg.edit-05 />
                                                </span>
                                                Edit
                                            </a>
                                            <a href="#" class="btn-text-dark">
                                                <x-svg.trash-03 />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="h-12 w-12 rounded-full inline-flex items-center justify-center text-primary-500 bg-primary-50">
                                                OR
                                            </div>
                                            <div>
                                                <span class="body-base-400 text-gray-600">Full name</span>
                                                <p class="body-base-500 text-gray-900">Designerzafor@gmail.com</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="badge-green-transparent">Active</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        17 Jul, 2023
                                    </td>
                                    <td class="px-6 py-4">
                                        Owner
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <a href="#" class="btn-text-primary">
                                                <span>
                                                    <x-svg.edit-05 />
                                                </span>
                                                Edit
                                            </a>
                                            <a href="#" class="btn-text-dark">
                                                <x-svg.trash-03 />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="h-12 w-12 rounded-full inline-flex items-center justify-center text-primary-500 bg-primary-50">
                                                OR
                                            </div>
                                            <div>
                                                <span class="body-base-400 text-gray-600">Full name</span>
                                                <p class="body-base-500 text-gray-900">Designerzafor@gmail.com</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="badge-green-transparent">Active</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        17 Jul, 2023
                                    </td>
                                    <td class="px-6 py-4">
                                        Owner
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <a href="#" class="btn-text-primary">
                                                <span>
                                                    <x-svg.edit-05 />
                                                </span>
                                                Edit
                                            </a>
                                            <a href="#" class="btn-text-dark">
                                                <x-svg.trash-03 />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
