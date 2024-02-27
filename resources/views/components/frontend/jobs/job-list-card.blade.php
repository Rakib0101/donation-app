@props(['job' => []])
<div href="#" data-drawer-target="jobdetails-drawer" data-drawer-placement="right"
    data-drawer-show="jobdetails-drawer" aria-controls="jobdetails-drawer"
    class="w-full hover:shadow-gray-base-2 transition duration-200 ease-linear hover:bg-primary-50  py-8 px-4 space-y-6"
    role="button">
    @if ($job['featured'])
        <div>
            <span class="badge-primary-fill gap-1">
                <x-svg.star-06 hight="18" width="18" />
                Featured
            </span>
        </div>
    @endif
    <div>

    </div>
    <div class="flex items-start flex-wrap">
        <div class=" flex items-start gap-2 flex-wrap">
            <div class="h-[50px] w-[50px] rounded-md overflow-hidden shrink-0">
                <img src="{{ asset('frontend/assets/images/company-logo-orange.png') }}" alt="company logo"
                    class="w-full object-cover">
            </div>
            <div class="space-y-2">
                <h5 class="heading-05 text-gray-900 leading-none">
                    {{ $job['job_title'] }}
                </h5>
                <div class="flex items-center gap-2 flex-wrap">
                    <a class="links-url-small text-primary-500 underline" href="#"
                        target="_blank">{{ $job['company_name'] }}</a>

                    <div
                        class="flex items-center gap-1 body-small-400 text-gray-600 before:content-['\2022'] before:mr-2">
                        <span class="badge-secondary-transparent">{{ $job['job_salary'] }}/ Month</span>
                    </div>
                    <div
                        class="flex items-center gap-1 body-small-400 text-gray-600 before:content-['\2022'] before:mr-2">
                        <span class="badge-green-transparent">{{ $job['job_type'] }}</span>
                    </div>
                    @if ($job['urgent'])
                        <div
                            class="flex items-center gap-1 body-small-400 text-gray-600 before:content-['\2022'] before:mr-2">
                            <span class="badge-red-fill ">Urgent</span>
                        </div>
                    @endif

                </div>
            </div>

        </div>
        <div class="flex items-center flex-wrap gap-3 ml-auto">
            <div class="flex items-center gap-2 body-small-400 text-gray-600">
                Posted : <strong>{{ $job['job_posted_at'] }}</strong>
            </div>
            <button type="button" title="Save job to favorite"
                class="h-10 w-10 rounded-md inline-flex items-center justify-center border border-gray-100 shadow-gray-base-2 text-gray-600 hover:border-gray-200 transition duration-200 ease-linear">
                <x-svg.book-mark />
            </button>

        </div>
    </div>
    <div class="space-y-2">

        <p class="body-base-400 text-gray-700 line-clamp-2">
            {{ $job['job_description'] }}
        </p>
    </div>
    <div class="flex flex-wrap gap-2">
        @foreach ($job['job_skills'] as $skill)
            <span class="badge-gray-transparent">
                {{ $skill }}
            </span>
        @endforeach
    </div>
    <div class="flex flex-wrap gap-3 items-center">
        <div class="flex items-center gap-1 body-small-400 text-gray-600">
            <x-svg.graduation-hat-02 height="20" widht="20" />
            <span>
                Required Experience: <strong>{{ $job['required_experience'] }}</strong>
            </span>
        </div>
        <div class="flex items-center gap-1 body-small-400 text-gray-600">
            <x-svg.marker-pin-01 height="20" widht="20" />
            <span>
                Location: <strong>{{ $job['job_location'] }}</strong>
            </span>
        </div>
        <div class="flex items-center gap-1 body-small-400 text-gray-600">
            <x-svg.users-02 height="20" widht="20" />
            <span>
                Applicants: <strong>10+</strong>
            </span>
        </div>
    </div>
</div>
<x-frontend.drawers.jobdeatils-drawer :job="$job" />
