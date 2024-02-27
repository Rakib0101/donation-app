<div
    class="relative md:p-6 p-4 border border-gray-100 transition-all duration-300 hover:shadow-gray-base-4 shadow-gray-base-2 rounded-xl">
    <p class="caption-02 text-secondary-500 mb-4">First Resume</p>
    <div class="flex flex-col md:flex-row gap-4 md:gap-6 justify-between">
        <div class="flex flex-col md:flex-row justify-start md:items-center gap-4 md:gap-6">
            <img class="md:w-24 md:h-24 w-16 h-16" src="{{ asset('frontend/assets/images/candidate-avatar.png') }}"
                alt="">
            <div>
                <h2 class="body-xl-600">Kevin Gilbert</h2>
                <p class="body-base-400">Senior Product Designer</p>
                <div class="flex flex-wrap gap-1.5 items-center mt-2">
                    <span class="badge-gray-transparent">UX Design</span>
                    <span class="badge-gray-transparent">Web Design</span>
                    <span class="badge-gray-transparent">UI Design</span>
                    <span class="badge-gray-transparent">UX Research</span>
                    <span class="badge-gray-transparent">App Design</span>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <a href="" class="btn-white text-primary-500 gap-2">
                <x-svg.link-external-01 />
                <span>Preview</span>
            </a>
            <a href="" class="btn-white text-primary-500 gap-2">
                <x-svg.edit-05 />
                <span>Edit</span>
            </a>
            <a href="">
                <x-svg.trash-03 />
            </a>
        </div>
    </div>
</div>
