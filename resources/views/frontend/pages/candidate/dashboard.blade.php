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
                <h2 class="heading-05 mb-6 mt-9">{{ __('candidate_dashboard') }}</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div class="p-[1.5rem] shadow-gray-base-1 border border-gray-100 rounded-xl">
                        <div class="flex items-center justify-between">
                            <p class="body-large-600 text-gray-900">{{ __('profile_view') }}</p>
                            <span class="body-small-400 text-gray-400">{{ __('this_month') }}</span>
                        </div>
                        <div id="area-chart"></div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-[1.12rem]">
                            <div class="rounded-xl bg-gray-50 p-[1.25rem] flex items-center gap-4">
                                <div
                                    class=" rounded-full h-[3rem] w-[3rem] pading-[0.75rem] inline-flex items-center justify-center bg-gray-white border border-gray-200 shadow-gray-base-3">
                                    <x-svg.brief-case-02 />
                                </div>
                                <div>
                                    <p class="body-xl-600 text-gray-900">{{ $appliedJobsCount }}</p>
                                    <small class="body-small-500 text-gray-900">{{ __('job_applied') }}</small>
                                </div>
                            </div>
                            <div class="rounded-xl bg-green-50 p-[1.25rem] flex items-center gap-4">
                                <div
                                    class=" rounded-full h-[3rem] w-[3rem] pading-[0.75rem] inline-flex items-center justify-center bg-gray-white border border-green-200 text-green-500 shadow-green-base-3">
                                    <x-svg.book-mark />
                                </div>
                                <div>
                                    <p class="body-xl-600 text-gray-900">{{ $favoriteJobs }}</p>
                                    <small class="body-small-500 text-gray-900">{{ __('favorite_jobs') }}</small>
                                </div>
                            </div>
                            <div class="rounded-xl bg-red-50 p-[1.25rem] flex items-center gap-4">
                                <div
                                    class=" rounded-full h-[3rem] w-[3rem] pading-[0.75rem] inline-flex items-center justify-center bg-gray-white border border-red-200 text-red-500 shadow-red-base-3">
                                    <x-svg.user-square />
                                </div>
                                <div>
                                    <p class="body-xl-600 text-gray-900">{{ $notifications }}</p>
                                    <small class="body-small-500 text-gray-900">{{ __('job_alert') }}</small>
                                </div>
                            </div>
                            <div class="rounded-xl bg-primary-50 p-[1.25rem] flex items-center gap-4">
                                <div
                                    class=" rounded-full h-[3rem] w-[3rem] pading-[0.75rem] inline-flex items-center justify-center bg-gray-white border border-primary-200 text-primary-500 shadow-primary-base-3">
                                    <x-svg.check-square-broken />
                                </div>
                                <div>
                                    <p class="body-xl-600 text-gray-900">187</p>
                                    <small class="body-small-500 text-gray-900">{{ __('profile_view') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-xl overflow-hidden shadow-gray-base-1 border border-gray-100">
                            <div class="relative cursor-pointer">
                                <img class="w-full max-w-full" src="{{ asset('frontend/assets/images/video-preview.png') }}" alt="">
                                <i class="p-2 border-[8px] bg-white rounded-full absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                    <x-svg.play />
                                </i>
                            </div>
                            <div class="p-6">
                                <h3 class="body-base-600 text-gray-900 mb-2">How to apply on jobs</h3>
                                <p class="body-small-400 text-gray-600">Identify your skills and interests: Determine your strengths, skills, and interests to
                                    focus your job search on positions that align with them.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container space-y-[1rem]">
                <div class="flex items-center justify-between">
                    <h4 class="body-large-600 text-gray-900">{{ __('recently_applied') }}</h4>
                    <a href="{{ route('candidate.appliedJobs') }}" class="btn-text-primary">
                        {{ __('view_all') }}
                        <x-svg.chevron-right-double />
                    </a>
                </div>
                
                @if ($jobs->count() > 0)
                    @foreach ($jobs as $job)
                        <x-frontend.candidate.applied-jobs-card :job="$job" />
                    @endforeach
                @else
                    <x-not-found :message="__('no_jobs_found')" />
                @endif

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
