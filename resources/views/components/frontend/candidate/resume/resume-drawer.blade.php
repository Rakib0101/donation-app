<div id="drawer-resume"
    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-full max-w-xl"
    tabindex="-1" aria-labelledby="drawer-resume">

    <h2 class="heading-02">Add Information</h2>
    <button type="button" data-drawer-hide="drawer-resume" aria-controls="drawer-resume"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div x-data="{ activeAccordion: '' }" class="max-w-[872px] mx-auto">
        <!-- profile -->
        <div>
            <button @click="activeAccordion = activeAccordion === 'profile' ? false : 'profile'"
                :class="activeAccordion === 'profile' ? 'pt-6 pb-4 border-0' :
                    'py-6 border-b border-gray-100'"
                class="body-large-600 text-gray-900 flex w-full justify-between gap-6 items-center">
                <p>Profile</p>
                <i x-show="activeAccordion !== 'profile'">
                    <x-svg.plus-circle stroke="#74787D" />
                </i>
                <i x-show="activeAccordion === 'profile'">
                    <x-svg.minus-circle />
                </i>
            </button>
            <div x-cloak x-collapse x-show="activeAccordion === 'profile'">
                <div class="body-base-400 text-gray-700 pb-6 border-b border-gray-100">
                    <x-frontend.candidate.resume.profile />
                </div>
            </div>
        </div>
        <!-- detailed-info -->
        <div>
            <button @click="activeAccordion = activeAccordion === 'detailed-info' ? false : 'detailed-info'"
                :class="activeAccordion === 'detailed-info' ? 'pt-6 pb-4 border-0' :
                    'py-6 border-b border-gray-100'"
                class="body-large-600 text-gray-900 flex w-full justify-between gap-6 items-center">
                <p>Detailed Info</p>
                <i x-show="activeAccordion !== 'detailed-info'">
                    <x-svg.plus-circle stroke="#74787D" />
                </i>
                <i x-show="activeAccordion === 'detailed-info'">
                    <x-svg.minus-circle />
                </i>
            </button>
            <div x-cloak x-collapse x-show="activeAccordion === 'detailed-info'">
                <div class="body-base-400 text-gray-700 pb-6 border-b border-gray-100">
                    <x-frontend.candidate.resume.detailed-info />
                </div>
            </div>
        </div>
        <!-- social-media -->
        <div>
            <button @click="activeAccordion = activeAccordion === 'social-media' ? false : 'social-media'"
                :class="activeAccordion === 'social-media' ? 'pt-6 pb-4 border-0' :
                    'py-6 border-b border-gray-100'"
                class="body-large-600 text-gray-900 flex w-full justify-between gap-6 items-center">
                <p>Social Media</p>
                <i x-show="activeAccordion !== 'social-media'">
                    <x-svg.plus-circle stroke="#74787D" />
                </i>
                <i x-show="activeAccordion === 'social-media'">
                    <x-svg.minus-circle />
                </i>
            </button>
            <div x-cloak x-collapse x-show="activeAccordion === 'social-media'">
                <div class="body-base-400 text-gray-700 pb-6 border-b border-gray-100">
                    <x-frontend.candidate.resume.social-media />
                </div>
            </div>
        </div>
        <!-- contact -->
        <div>
            <button @click="activeAccordion = activeAccordion === 'contact' ? false : 'contact'"
                :class="activeAccordion === 'contact' ? 'pt-6 pb-4 border-0' :
                    'py-6 border-b border-gray-100'"
                class="body-large-600 text-gray-900 flex w-full justify-between gap-6 items-center">
                <p>Contact Information</p>
                <i x-show="activeAccordion !== 'contact'">
                    <x-svg.plus-circle stroke="#74787D" />
                </i>
                <i x-show="activeAccordion === 'contact'">
                    <x-svg.minus-circle />
                </i>
            </button>
            <div x-cloak x-collapse x-show="activeAccordion === 'contact'">
                <div class="body-base-400 text-gray-700 pb-6 border-b border-gray-100">
                    <x-frontend.candidate.resume.contact />
                </div>
            </div>
        </div>
    </div>
</div>
