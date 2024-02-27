<a href="#"
    class="relative p-6 border flex flex-col gap-[18px] border-gray-100 transition-all duration-300 hover:shadow-gray-base-4 shadow-gray-base-2 rounded-xl">
    <div class="flex gap-3 items-center">
        <img class="w-10 h-10 rounded-[5px]" src="{{ asset('frontend/assets/images/company-logo-orange.png') }}"
            alt="">
        <div class="space-y-0.5">
            <h4 class="body-base-600 text-gray-900">Job Title</h4>
            <p class="body-small-400 text-gray-700">Company Name</p>
        </div>
    </div>
    <div class="space-y-3">
        <div class="flex items-center gap-2">
            <i>
                <x-svg.cash-icon />
            </i>
            <p class="body-small-400 text-gray-700">$2500 - $4000 / Monthly</p>
        </div>
        <div class="flex items-center gap-2">
            <i>
                <x-svg.locate-icon />
            </i>
            <p class="body-small-400 text-gray-700">Dhaka 1207, Bangladesh</p>
        </div>
    </div>
    <div class="flex gap-2 items-center">
        <span class="badge-green-transparent">Full-Time</span>
        <span class="badge-secondary-transparent">Remote</span>
    </div>
    <button class="absolute bottom-6 right-6 text-primary-500 inline-flex p-2.5 rounded-lg bg-primary-50">
        <x-svg.bookmark />
    </button>
</a>
