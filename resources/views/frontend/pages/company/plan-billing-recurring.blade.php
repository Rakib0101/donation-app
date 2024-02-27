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
        <x-frontend.app-breadcumb />
        <section class="py-4 space-y-6">
            <div class="container">
                <h1 class="heading-05 text-gray-900">Plans & Billing</h1>
            </div>
            <div class="container grid grid-cols-1 md:grid-cols-2 items-center gap-6">
                <div class="border border-gray-100 shadow-gray-base-1 p-[1.5rem] rounded-xl w-full space-y-[1.12rem]">
                    <div
                        class="h-[3rem] w-[3rem] rounded-full inline-flex items-center justify-center bg-primary-50 text-primary-500">
                        <x-svg.zap stroke="currentColor" />
                    </div>
                    <div>
                        <small class="body-base-600 text-gray-900">Current Plan</small>
                        <h3 class="heading-03 text-primary-500">Standard Plus</h3>
                        <p class="text-base text-gray-700 tracking-[-0.02rem]">
                            Phasellus pulvinar condimentum tellus. Integer nisl lorem, vestibulum id arcu in, tincidunt
                            interdum tellus.
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="btn-label-primary" type="button">Upgrade</button>
                        <button class="btn-dark-transparent gap-2">
                            <span>
                                <x-svg.alert-triangle />
                            </span>
                            Cancel Plan
                        </button>
                    </div>
                </div>
                <div class="border border-gray-100 shadow-gray-base-1 p-[1.5rem] rounded-xl w-full space-y-[1.5rem]">
                    <div class="grid grid-cols-1  md:grid-cols-2 gap-3">
                        <div class="space-y-3">
                            <p class="body-base-600 text-gray-900">Remaining Feature</p>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2 body-base-500 text-gray-700">
                                    <span class="text-primary-500">
                                        <x-svg.check />
                                    </span>
                                    3 Active Jobs
                                </li>
                                <li class="flex items-center gap-2 body-base-500 text-gray-700">
                                    <span class="text-primary-500">
                                        <x-svg.check />
                                    </span>
                                    1 Featured Jobs
                                </li>
                                <li class="flex items-center gap-2 body-base-500 text-gray-700">
                                    <span class="text-primary-500">
                                        <x-svg.check />
                                    </span>
                                    1 Highlight Jobs
                                </li>
                                <li class="flex items-center gap-2 body-base-500 text-gray-700 opacity-[0.4]">
                                    <span class="text-primary-500">
                                        <x-svg.check />
                                    </span>
                                    1 Highlight Jobs
                                </li>
                                <li class="flex items-center gap-2 body-base-500 text-gray-700 opacity-[0.4]">
                                    <span class="text-primary-500">
                                        <x-svg.check />
                                    </span>
                                    1 Highlight Jobs
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-3">
                            <p class="body-base-600 text-gray-900">Feature Used</p>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2 body-base-500 text-gray-700">
                                    <span class="text-red-500">
                                        <x-svg.x />
                                    </span>
                                    3 Active Jobs
                                </li>
                                <li class="flex items-center gap-2 body-base-500 text-gray-700">
                                    <span class="text-red-500">
                                        <x-svg.x />
                                    </span>
                                    1 Featured Jobs
                                </li>
                                <li class="flex items-center gap-2 body-base-500 text-gray-700">
                                    <span class="text-red-500">
                                        <x-svg.x />
                                    </span>
                                    1 Highlight Jobs
                                </li>
                                <li class="flex items-center gap-2 body-base-500 text-gray-700 opacity-[0.4]">
                                    <span class="text-red-500">
                                        <x-svg.x />
                                    </span>
                                    1 Highlight Jobs
                                </li>
                                <li class="flex items-center gap-2 body-base-500 text-gray-700 opacity-[0.4]">
                                    <span class="text-red-500">
                                        <x-svg.x />
                                    </span>
                                    1 Highlight Jobs
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-start gap-2 body-base-400 text-gray-700">
                        <span class="text-primary-500">
                            <x-svg.info-circle />
                        </span>
                        The reset is scheduled for 19 Jun, 2023. Once the reset occurs, all features will become accessible
                        again.
                    </div>
                </div>
            </div>
            <div class="container flex flex-wrap   gap-6">
                <div
                    class="border border-gray-100 shadow-gray-base-1 p-[1.5rem] rounded-xl max-w-full lg:!max-w-[26.5rem] space-y-[1.12rem]">

                    <div class="space-y-[0.63rem]">
                        <p class="body-base-600 text-gray-900">Next Billing</p>
                        <div class="flex items-center gap-2 heading-05 ">
                            <span class="text-primary-500">$64.99</span>
                            <span class="text-gray-400 line-through">$69.00</span>
                        </div>
                        <div class="flex items-center gap-2 body-large-500 text-gray-900">
                            <span class="text-primary-500">
                                <x-svg.calender />
                            </span>
                            17 Jul, 2023
                        </div>
                    </div>
                    <div class="text-sm text-gray-600">
                        Poetesque habitant morbi critique senectus et netus et malesuada fames ac turpis egestas.
                        Quisque convallis nisl lorem, ut interdum lorem imperdiet.
                    </div>
                    <div>
                        <button class="btn-white-primary">
                            <span>
                                <x-svg.credit-card-02 />
                            </span>
                            Pay now
                        </button>
                    </div>
                </div>
                <div
                    class="border border-gray-100 shadow-gray-base-1 p-[1.5rem] rounded-xl min-w-full lg:min-w-[33.5rem]  space-y-[1.12rem] flex-1">

                    <div class="space-y-[0.63rem] flex items-center justify-between">
                        <h3 class="text-gray-900 body-base-600">Payment Method</h3>
                        <button class="btn-text-primary">
                            <x-svg.edit-05 />
                            Edit Card
                        </button>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap w-full">
                        <div class="w-[4rem] h-[4rem] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/bank-logo.png') }}" alt="bank logo"
                                class="w-full object-cover">
                        </div>
                        <div class="flex-1">
                            <span class="body-xs-400 text-gray-500">Name on card</span>
                            <p class="body-base-500 text-gray-900">Esther Howard</p>
                        </div>
                        <div class=" mr-auto sm:ml-auto text-left min-w-[7.75rem]">
                            <span class="body-xs-400 text-gray-500">Expire date</span>
                            <p class="body-base-500 text-gray-900">12/29</p>
                        </div>
                    </div>
                    <div class="text-gray-900 text-[1.5rem]">
                        **** **** **** 5219
                    </div>
                    <div class="body-small-400 text-gray-700">
                        On the due date, the payment amount will be deducted automatically from the linked account. or you
                        have the option to pay now in order to reset the package feature.
                    </div>
                </div>
                <div class="border border-gray-100 shadow-gray-base-1 p-[1.5rem] rounded-xl max-w-full  space-y-[1.12rem] flex-1  lg:!max-w-[19.75rem] "
                    style="background: url('{{ asset('frontend/assets/images/Help.png') }}')">
                    <p class="text-gray-900 body-xl-600">Are you dissatisfied with your current plan?</p>
                    <p class="body-base-400 text-gray-800">
                        Are you dissatisfied with your current plan? Feel free to engage in a conversation with us or
                        consider upgrading your plan for a better experience.
                    </p>
                    <div class="flex items-center gap-3">
                        <a href="#" class="btn-text-primary">
                            Book Consultant
                        </a>
                        <a href="#" class="heading-07 text-gray-700">Upgrade Plan</a>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="border border-gray-100 shadow-gray-base-1 rounded-xl">
                    <div class="body-base-600 text-gray-900 p-[1.5rem]">
                        Recent Invoice
                    </div>
                    <div class="relative overflow-x-auto mt-0">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        DATE
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        PACKAGE
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        AMOUNT
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        PAYMENT METHOD
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        INVOICE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        #ID-4522978
                                    </th>
                                    <td class="px-6 py-4">
                                        17 Jan, 2023 at 10:07 pm
                                    </td>
                                    <td class="px-6 py-4">
                                        Standard Plus
                                    </td>
                                    <td class="px-6 py-4">
                                        $2547.00
                                    </td>
                                    <td class="px-6 py-4">
                                        Bank Payment (EBL)
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="btn-text-primary">
                                            <span>
                                                <x-svg.download-cloud-01 />
                                            </span>
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        #ID-4522978
                                    </th>
                                    <td class="px-6 py-4">
                                        17 Jan, 2023 at 10:07 pm
                                    </td>
                                    <td class="px-6 py-4">
                                        Standard Plus
                                    </td>
                                    <td class="px-6 py-4">
                                        $2547.00
                                    </td>
                                    <td class="px-6 py-4">
                                        Bank Payment (EBL)
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="btn-text-primary">
                                            <span>
                                                <x-svg.download-cloud-01 />
                                            </span>
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        #ID-4522978
                                    </th>
                                    <td class="px-6 py-4">
                                        17 Jan, 2023 at 10:07 pm
                                    </td>
                                    <td class="px-6 py-4">
                                        Standard Plus
                                    </td>
                                    <td class="px-6 py-4">
                                        $2547.00
                                    </td>
                                    <td class="px-6 py-4">
                                        Bank Payment (EBL)
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="btn-text-primary">
                                            <span>
                                                <x-svg.download-cloud-01 />
                                            </span>
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        #ID-4522978
                                    </th>
                                    <td class="px-6 py-4">
                                        17 Jan, 2023 at 10:07 pm
                                    </td>
                                    <td class="px-6 py-4">
                                        Standard Plus
                                    </td>
                                    <td class="px-6 py-4">
                                        $2547.00
                                    </td>
                                    <td class="px-6 py-4">
                                        Bank Payment (EBL)
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="btn-text-primary">
                                            <span>
                                                <x-svg.download-cloud-01 />
                                            </span>
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr class="  hover:bg-gray-50 group ">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-700 group-hover:text-gray-900 transition duration-200 ease-linear whitespace-nowrap ">
                                        #ID-4522978
                                    </th>
                                    <td class="px-6 py-4">
                                        17 Jan, 2023 at 10:07 pm
                                    </td>
                                    <td class="px-6 py-4">
                                        Standard Plus
                                    </td>
                                    <td class="px-6 py-4">
                                        $2547.00
                                    </td>
                                    <td class="px-6 py-4">
                                        Bank Payment (EBL)
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="btn-text-primary">
                                            <span>
                                                <x-svg.download-cloud-01 />
                                            </span>
                                            Download
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="py-[2.5rem]">
                        <ul class="flex items-center gap-[0.75rem] justify-center" x-init x-data="{ activeTab: 1 }">
                            <li
                                class="h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-[rgba(240,234,251,0.40)] text-primary-100">
                                <a href="#">
                                    <x-svg.arrow-circle-left />
                                </a>
                            </li>
                            <template x-for="n in 5" :key="n">
                                <li class="h-[2.75rem] w-[2.75rem] rounded-full flex items-center justify-center  hover:shadow-gray-base-2 border border-transparent  transition-all duration-200 ease-in-out"
                                    :class="activeTab === n ? 'bg-primary-500 text-gray-white' :
                                        'hover:border-gray-100 hover:text-gray-900 text-gray-700'">
                                    <a href="#" x-text="`0${n}`"></a>
                                </li>
                            </template>

                            <li
                                class="h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-primary-50 text-primary-500 hover:bg-primary-500 hover:text-gray-white transition-all duration-200 ease-in-out">
                                <a href="#">
                                    <x-svg.arrow-circle-right />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
        </section>

    </main>
@endsection
