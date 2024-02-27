@props(['blog' => []])
<a href="#"
    class="border border-gray-100 shadow-gray-base-1 rounded-lg transition duration-200 hover:shadow-gray-base-4 ease-linear group overflow-hidden">


    <div class="w-full">
        <img src="{{ asset('frontend/assets/images/blog-image.png') }}" alt="blog image"
            class="w-full max-h-[216px] overflow-hidden object-cover group-hover:scale-105 transition-all duration-300">
    </div>
    <div class="p-6 space-y-4 block">
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2 body-base-500 text-gray-800">
                <span class="text-secondary-500">
                    <x-svg.message-text-circle-01 />
                </span>
                579 Comments
            </div>
            <div class="flex items-center gap-2 body-base-500 text-gray-800">
                <span class="text-secondary-500">
                    <x-svg.calender />
                </span>
                17 Jan, 2023
            </div>
        </div>
        <div class="space-y-2 mt-2">
            {{-- <h6 class="body-xl-600 text-gray-900 line-clamp-1">{{ $blog['title'] }}</h6> --}}
            <h6 class="body-xl-600 text-gray-900 line-clamp-1">Blog Details TItle here</h6>
            <p class="body-base-400 text-gray-700 line-clamp-2">
                {{-- {{ $blog['description'] }} --}}
                Blog details description here
            </p>
        </div>
        <div class="pt-2">
            <button type="button" class="btn-text-primary">
                Read More <x-svg.arrow-circle-right />
            </button>
        </div>
    </div>
</a>
