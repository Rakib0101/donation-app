<div class="p-8">
    <h2 class="heading-02">Add Information</h2>
    <div x-data="{ activeAccordion: 'profile' }" class="max-w-[872px] mx-auto">
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
