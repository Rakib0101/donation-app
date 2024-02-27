<div>
    
    <div class="flex flex-col gap-5">

        @if ($jobs->count() > 0)
            @foreach ($jobs as $job)
                <x-frontend.candidate.applied-jobs-card :job="$job" />
            @endforeach
        @else
            <x-not-found :message="__('no_jobs_found')" />
        @endif

    </div>

    @if ($jobs->total() > $jobs->count())
        {{ $jobs->onEachSide(1)->links('vendor.pagination.frontend') }}
    @endif

</div>
