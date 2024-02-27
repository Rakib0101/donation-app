<a href="/candidate/profile"
    class="rounded-[0.75rem] bg-white p-[1.25rem] shadow-gray-base-1 hover:shadow-gray-base-4 transition-all duration-300 border border-gray-100 space-y-[1rem]">
    <div class="flex items-center gap-[0.75rem]">
        <div class="w-[2.75rem] h-[2.75rem] rounded-full">
            <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="candidate img" class="w-full object-cover">
        </div>
        <div>
            <h4 class="body-base-600 text-gray-900">Kevin Gilbert</h4>
            <span class="body-small-400 text-gray-700">UI/UX Designer</span>
        </div>
    </div>
    <div class="space-y-[0.5rem]">
        <p class="flex items-center gap-[0.5rem] body-small-400 text-gray-900">
            <i class="text-gray-400">
                <x-svg.book-closed />
            </i>
            9 Years of Experience
        </p>
        <p class="flex items-center gap-[0.5rem] body-small-400 text-gray-900">
            <i class="text-gray-400">
                <x-svg.marker-pin-01 />
            </i>
            Dhaka 1207, Bangladesh
        </p>
    </div>
    <div class="flex items-center gap-[1rem]">
        <button class="btn-text-primary">
            View Detail
            <i>
                <x-svg.arrow-circle-right />
            </i>
        </button>
        <span class="btn-text-dark" role="button">
            Save
            <i>
                <x-svg.bookmark-fill />
            </i>
        </span>
    </div>
</a>
