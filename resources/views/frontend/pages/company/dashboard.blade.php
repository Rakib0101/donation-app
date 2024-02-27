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
        <section class="pt-[2.25rem]">
            <div class="container ">
                <div class="flex items-center gap-1">
                    <div class="h-[2.5rem] w-[2.5rem] overflow-hidden rounded-md">
                        <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company-logo"
                            class="w-full object-cover">
                    </div>
                    <div class="flex items-center gap-2">
                        <h1 class="heading-03 text-gray-900">Miro</h1>
                        <p class="text-[2.25rem] text-gray-700"> Hiring Dashboard</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div class="p-[1.5rem] shadow-gray-base-1 border border-gray-100 rounded-xl">
                        <div class="flex items-center justify-between">
                            <p class="body-large-600 text-gray-900">Profile View</p>
                            <span class="body-small-400 text-gray-400">This month</span>
                        </div>
                        <div id="area-chart"></div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="p-[1.5rem] rounded-xl shadow-gray-base-1 border border-gray-100">
                            <div>
                                <div
                                    class="w-[2.8rem] h-[2.8rem] rounded-full inline-flex items-center justify-center p-[0.7rem] shadow-gray-base-2 border border-secondary-100 text-secondary-500">
                                    <x-svg.credit-card-02 />
                                </div>
                                <div class="py-[1rem] border-b border-b-gray-100">
                                    <p class="body-xs-600 text-gray-400">CURRENT PLAN</p>
                                    <h4 class="body-xl-600 text-gray-900">Standard Plus</h4>
                                </div>
                            </div>

                            <div class="py-[1rem] space-y-[0.75rem]">
                                <small class="body-small-400 text-gray-500">Remaining features</small>
                                <div class="flex items-center gap-2 body-base-500 text-gray-800">
                                    <i class="text-green-500">
                                        <x-svg.brief-case-01 />
                                    </i>
                                    <p>3 Jobs Post</p>
                                </div>
                                <div class="flex items-center gap-2 body-base-500 text-gray-800">
                                    <i class="text-green-500">
                                        <x-svg.pin-02 />
                                    </i>
                                    <p>1 Featured Job</p>
                                </div>
                                <div class="flex items-center gap-2 body-base-400 text-gray-500">
                                    <i class="text-gray-200">
                                        <x-svg.pallete />
                                    </i>
                                    <p>0 Highlight Job</p>
                                </div>
                                <div class="flex items-center gap-2 body-base-400 text-gray-500">
                                    <i class="text-gray-200">
                                        <x-svg.share-06 />
                                    </i>
                                    <p>0 Job Sharing/Campaign</p>
                                </div>
                                <div class="flex items-center gap-2 body-base-400 text-gray-500">
                                    <i class="text-gray-200">
                                        <x-svg.phonecall-01 />
                                    </i>
                                    <p>30 Min Consultant Call</p>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="btn-text-secondary">
                                    Upgrade Plan
                                    <i>
                                        <x-svg.arrow-circle-right />
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="space-y-[1.12rem]">
                            <div class="rounded-xl bg-gray-50 p-[1.25rem] flex items-center gap-4">
                                <div
                                    class=" rounded-full h-[3rem] w-[3rem] pading-[0.75rem] inline-flex items-center justify-center bg-gray-white border border-gray-200 shadow-gray-base-3">
                                    <x-svg.brief-case-02 />
                                </div>
                                <div>
                                    <p class="body-xl-600 text-gray-900">25</p>
                                    <small class="body-small-500 text-gray-900">Active Jobs</small>
                                </div>
                            </div>
                            <div class="rounded-xl bg-red-50 p-[1.25rem] flex items-center gap-4">
                                <div
                                    class=" rounded-full h-[3rem] w-[3rem] pading-[0.75rem] inline-flex items-center justify-center bg-gray-white border border-red-200 text-red-500 shadow-red-base-3">
                                    <x-svg.user-square />
                                </div>
                                <div>
                                    <p class="body-xl-600 text-gray-900">6,574</p>
                                    <small class="body-small-500 text-gray-900">Application Received</small>
                                </div>
                            </div>
                            <div class="rounded-xl bg-primary-50 p-[1.25rem] flex items-center gap-4">
                                <div
                                    class=" rounded-full h-[3rem] w-[3rem] pading-[0.75rem] inline-flex items-center justify-center bg-gray-white border border-primary-200 text-primary-500 shadow-primary-base-3">
                                    <x-svg.book-mark />
                                </div>
                                <div>
                                    <p class="body-xl-600 text-gray-900">187</p>
                                    <small class="body-small-500 text-gray-900">Application Received</small>
                                </div>
                            </div>
                            <div class="rounded-xl bg-green-50 p-[1.25rem] flex items-center gap-4">
                                <div
                                    class=" rounded-full h-[3rem] w-[3rem] pading-[0.75rem] inline-flex items-center justify-center bg-gray-white border border-green-200 text-green-500 shadow-green-base-3">
                                    <x-svg.check-square-broken />
                                </div>
                                <div>
                                    <p class="body-xl-600 text-gray-900">27</p>
                                    <small class="body-small-500 text-gray-900">Successful Hiring</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container space-y-[1rem]">
                <div class="flex items-center justify-between">
                    <h4 class="body-large-600 text-gray-900">Recent Job Applications</h4>
                    <a href="#" class="btn-text-primary">
                        View All
                        <x-svg.chevron-right-double />
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-frontend.candidate.candidate-card />
                    <x-frontend.candidate.candidate-card />
                    <x-frontend.candidate.candidate-card />
                </div>
            </div>
        </section>
        <section>
            <div class="container space-y-[1rem]">
                <div class="flex items-center justify-between">
                    <h4 class="body-large-600 text-gray-900">Latest Active Jobs</h4>
                    <a href="#" class="btn-text-primary">
                        View All
                        <x-svg.chevron-right-double />
                    </a>
                </div>
                <div class="space-y-4">
                    <x-frontend.company.my-job-card />
                </div>

            </div>
        </section>
    </main>
@endsection

@push('script')
    <script defer>
        window.addEventListener("load", function() {
            const options = {
                chart: {
                    height: 332,
                    maxWidth: "100%",
                    type: "area",
                    fontFamily: "'switzer', sans-serif",
                    dropShadow: {
                        enabled: false,
                    },
                    toolbar: {
                        show: false,
                    },
                    grid: {
                        show: true,
                    },
                },
                tooltip: {
                    enabled: true,
                    x: {
                        show: true,
                    },
                },
                fill: {
                    colors: ['red', '#B32824'],
                    type: "gradient",
                    gradient: {
                        opacityFrom: 0.55,
                        opacityTo: 0,
                        shade: "#E6F0FA",
                        gradientToColors: ["#E6F0FA00"],
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: 6,
                },
                grid: {
                    show: true,
                    strokeDashArray: 15,
                    position: 'back',
                    padding: {
                        left: 12,
                        right: 0,
                        top: 0
                    },
                    borderColor: '#000'
                },
                series: [{
                    name: "New users",
                    data: [0, 10, 15, 20],
                    color: "#1A56DB",
                }, ],
                xaxis: {
                    show: false,
                    categories: ['Jan 1', 'Jan 10', 'Jan 20', 'Jan 31'],
                    labels: {
                        show: true,
                        style: {
                            colors: "#C6C8CB",
                            fontSize: '12px',
                            fontWeight: 500,
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    }
                },
                yaxis: {
                    show: true,
                    labels: {
                        show: true,
                        style: {
                            colors: "#C6C8CB",
                            fontSize: '12px',
                            fontWeight: 500,
                        },
                        formatter: function(val, index) {
                            return `${val} k`;
                        }
                    },

                },
                colors: ['#546E7A', '#E91E63']
            }

            if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("area-chart"), options);
                chart.render();
            }
        });
    </script>
@endpush
