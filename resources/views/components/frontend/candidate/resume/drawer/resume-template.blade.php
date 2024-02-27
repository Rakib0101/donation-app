<div id="drawer-resume-template"
    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-full max-w-xl"
    tabindex="-1" aria-labelledby="drawer-resume-template">

    <h2 class="heading-04">Choose Template</h2>
    <button type="button" data-drawer-hide="drawer-resume-template" aria-controls="drawer-resume-template"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-6 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <div class="grid grid-cols-2 gap-6 mt-12">
        <label class="p-3 bg-white rounded shadow-sm border border-gray-100">
            <div class="flex gap-3 items-center border-b border-gray-100 pb-3">
                <input type="radio" class="tc-radio">
                <h3>Classic</h3>
            </div>
            <img src="{{ asset('frontend/assets/images/resume/resume-1.png') }}" alt="">
        </label>
        <label class="p-3 bg-white rounded shadow-sm border border-gray-100">
            <div class="flex gap-3 items-center border-b border-gray-100 pb-3">
                <input type="radio" class="tc-radio">
                <h3>Modern</h3>
            </div>
            <img src="{{ asset('frontend/assets/images/resume/resume-2.png') }}" alt="">
        </label>
        <label class="p-3 bg-white rounded shadow-sm border border-gray-100">
            <div class="flex gap-3 items-center border-b border-gray-100 pb-3">
                <input type="radio" class="tc-radio">
                <h3>Creative</h3>
            </div>
            <img src="{{ asset('frontend/assets/images/resume/resume-3.png') }}" alt="">
        </label>
        <label class="p-3 bg-white rounded shadow-sm border border-gray-100">
            <div class="flex gap-3 items-center border-b border-gray-100 pb-3">
                <input type="radio" class="tc-radio">
                <h3>Professional</h3>
            </div>
            <img src="{{ asset('frontend/assets/images/resume/resume-4.png') }}" alt="">
        </label>
    </div>
</div>
