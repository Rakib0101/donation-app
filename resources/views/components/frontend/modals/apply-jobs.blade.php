<!-- Main modal -->
<div id="apply-jobs-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative  w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow p-6 space-y-[1rem]">
            <div class="flex items-center justify-between">
                <h3 class="body-xl-600  text-gray-900 ">
                    Apply Jobs
                </h3>
                <button type="button"
                    class="text-gray-500  hover:text-gray-700  inline-flex justify-center items-center "
                    data-modal-hide="apply-jobs-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="divide-y divide-gray-100 ">
                <div class="py-[1rem] space-y-4">
                    <div class="space-y-[0.5rem]">
                        <label for="resume" class="body-small-500 text-gray-900">Resume</label>
                        <select id="resume"
                            class="w-full outline-0 rounded-[0.5rem] border border-gray-100 shadow-gray-base-1 px-[1.12rem] py-[0.62rem] body-base-400 text-gray-500">
                            <option selected disabled>Choose resume...</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                    <div class="space-y-[0.5rem]">
                        <label for="cover-letter" class="body-small-500 text-gray-900">Resume</label>
                        <textarea name="cover-letter" id="cover-letter" rows="5" placeholder="Write down your experience description..."
                            class="w-full outline-0 rounded-[0.5rem] border border-gray-100 shadow-gray-base-1 placeholder:body-base-400 placeholder:text-gray-500 px-[1.2rem] py-[0.62rem]"></textarea>
                    </div>
                </div>

                <div class="py-[1rem] ">
                    <h4 class="text-primary-500 caption-02">SCREENING QUESTIONS</h4>
                    <div class="space-y-[1rem]">
                        <div class="space-y-[0.5rem]">
                            <label for="q-1" class="body-small-500 text-gray-900">What is UX?</label>
                            <input id="q-1" name="q-1"
                                class="w-full outline-0 rounded-[0.5rem] border border-gray-100 shadow-gray-base-1 px-[1.12rem] py-[0.62rem] body-base-400 placeholder:text-gray-500"
                                placeholder="Write your answer...">
                        </div>
                        <div class="space-y-[0.5rem]">
                            <label for="q-2" class="body-small-500 text-gray-900">Difference between UI &
                                UX?</label>
                            <input id="q-2" name="q-2"
                                class="w-full outline-0 rounded-[0.5rem] border border-gray-100 shadow-gray-base-1 px-[1.12rem] py-[0.62rem] body-base-400 placeholder:text-gray-500"
                                placeholder="Write your answer...">
                        </div>
                        <div class="space-y-[0.5rem]">
                            <label for="q-2" class="body-small-500 text-gray-900">Ho to conduct user interview and
                                research?</label>
                            <input id="q-2" name="q-2"
                                class="w-full outline-0 rounded-[0.5rem] border border-gray-100 shadow-gray-base-1 px-[1.12rem] py-[0.62rem] body-base-400 placeholder:text-gray-500"
                                placeholder="Write your answer...">
                        </div>
                    </div>

                </div>

            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-between">
                <button data-modal-hide="apply-jobs-modal" type="button" class="btn-text-dark">Cancel</button>
                <button data-modal-hide="default-modal" type="button" class="btn-secondary capitalize">apply now
                    <x-svg.arrow-circle-right /></button>
            </div>
        </div>
    </div>
</div>
