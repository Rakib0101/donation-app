@props(['category'])

<a href="#" class="shadow-gray-base-2 hover:shadow-gray-base-4 p-[1.5rem] hover:-translate-y-1 transition-all duration-300 border border-gray-100 rounded-xl space-y-[1rem] group">
    <div class="job-card-header flex items-center justify-center flex-wrap gap-x-[0.75rem] ">
        <div class="h-[4rem] w-[4rem] rounded-md overflow-hidden bg-primary-50 text-primary-500 p-[0.75rem] group-hover:bg-primary-500 group-hover:text-gray-white transition-all duration-200 ease-in-out text-center">
            <i class="{{ $category?->icon }} fa-2x"></i>
        </div>
    </div>
    <div class="text-center">
        <p class="body-base-600 text-gray-900 capitalize">
            {{ $category?->name }}
        </p>
        <small class="body-small-400 text-gray-700">
            More than {{ $category?->jobs_count }}+ jobs
        </small>
    </div>
</a>
