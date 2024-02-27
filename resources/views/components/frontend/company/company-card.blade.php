@props(['company'])

<a href="/company/profile"
    class="block shadow-gray-base-2 p-[1.5rem] bg-white border border-gray-100 hover:shadow-gray-base-4 hover:-translate-y-1 transition-all duration-300 rounded-xl space-y-[1rem]">
    <div class="job-card-header flex items-center flex-wrap gap-x-[0.75rem]">
        <div class="h-[2.5rem] w-[2.5rem] rounded-md overflow-hidden">
            <img src="{{ $company->logo_url }}" alt="company logo"
                class="object-cover w-full" loading="lazy">
        </div>
        <div>
            <p class="body-base-600 text-gray-900 capitalize" title="{{ $company?->user?->name }}">
                {{ charLimit($company?->user?->name, 25) }}
            </p>
            <small class="body-small-400 text-gray-700" title="{{ $company?->industry?->name }}">
                {{ charLimit($company?->industry?->name) }}
            </small>
        </div>
    </div>
    {{-- <div class="job-card-footer flex items-center gap-[0.5rem]">
        <span class="badge-primary-transparent">
            Featured
        </span>
    </div> --}}
    <div>
        <button class="btn-text-secondary">
            {{ __('view_jobs') }}
            @if ($company?->jobs_count)
                ({{ $company?->jobs_count }})
            @endif
        </button>
    </div>
</a>
