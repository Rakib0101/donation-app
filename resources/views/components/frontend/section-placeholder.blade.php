@props(['title' => '', 'skeletonQty' => 1])
<div class="space-y-3">
    <h5 class="heading-06 text-gray-400 flex items-center gap-2">
        <x-svg.lock-02 />
        <span>
            {{ $title }}
        </span>
    </h5>
    @for ($i = 1; $i <= $skeletonQty; $i++)
        <div class="rounded-[0.5rem]">
            <img src="{{ asset('frontend/assets/images/education-skeleton.png') }}" alt="skeleton image"
                class="w-full object-cover">
        </div>
    @endfor

</div>
