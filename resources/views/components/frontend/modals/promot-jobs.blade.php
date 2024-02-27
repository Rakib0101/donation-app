<!-- Main modal -->
<div id="promot-job-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative  w-full max-w-[58.5rem] max-h-full p-4 lg:p-0">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow p-8">
            <!-- Modal header -->
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="heading-04 text-gray-900">
                        Promote Job
                    </h3>

                </div>

                <button type="button"
                    class="h-[2.75rem] w-[2.75rem] text-gray-700 hover:text-gray-900 rounded-lg bg-gray-50 flex items-center justify-center hover:bg-gray-100 transition duration-200 ease-linear"
                    data-modal-hide="promot-job-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <div>
                <span class="body-large-500 text-gray-600">Job: UI/UX Design Engineer</span>
            </div>
            <!-- Modal body -->
            <div class="grid grid-cols-1 md:grid-cols-2 py-6 gap-6">
                <div>
                    <input type="radio" id="featured-jobs" name="job-type" value="featured-jobs" class="hidden peer">
                    <label for="featured-jobs"
                        class="block w-full p-[1.5rem] rounded-xl border bg-gray-50 hover:bg-primary-50 border-transparent cursor-pointer  peer-checked:border-primary-500 peer-checked:bg-primary-50 hover:border  hover:border-primary-500 transition-all duration-200 ease-linear space-y-[1rem]">
                        <div class="block">
                            <img src="{{ asset('frontend/assets/images/featured-job.png') }}" alt="featured-job-img"
                                class="w-full">
                        </div>
                        <div class="space-y-[0.5rem]">
                            <h4 class="body-xl-400 text-gray-900">Featured Job</h4>
                            <p class="body-base-400 text-gray-700">Boost your job listing's visibility and attract
                                top
                                talent. Increase your chances of finding the perfect candidate by showcasing your
                                job
                                prominently on our platform. </p>
                        </div>
                        <div>
                            <span
                                class="border border-gray-100 body-small-500 text-gray-800 bg-gray-white rounded-md py-[0.38rem] px-[0.75rem] text-center shadow-gray-base-1">3
                                Featured available</span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="highlight-jobs" name="job-type" value="highlight-jobs"
                        class="hidden peer">
                    <label for="highlight-jobs"
                        class="block w-full p-[1.5rem] rounded-xl border bg-gray-50 hover:bg-primary-50 border-transparent  cursor-pointer  peer-checked:border-primary-500 peer-checked:bg-primary-50 hover:border  hover:border-primary-500 transition-all duration-200 ease-linear space-y-[1rem]">
                        <div class="block">
                            <img src="{{ asset('frontend/assets/images/highlight-job.png') }}" alt="featured-job-img"
                                class="w-full">
                        </div>
                        <div class="space-y-[0.5rem]">
                            <h4 class="body-xl-400 text-gray-900">Highlight Job</h4>
                            <p class="body-base-400 text-gray-700">Make your job listing shine highlighting your
                                job, it
                                grabs immediate attention and stands out from the rest. This prominent placement
                                increases visibility and attracts the right candidates to your opportunity. </p>
                        </div>
                        <div>
                            <span
                                class="border border-gray-100 body-small-500 text-gray-800 bg-gray-white rounded-md py-[0.38rem] px-[0.75rem] text-center shadow-gray-base-1">2
                                Highlight available</span>
                        </div>
                    </label>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-between items-center">
                <button data-modal-hide="promot-job-modal" type="button"
                    class="bg-transparent text-gray-500 heading-07">
                    Cancel</button>
                <button data-modal-hide="promot-job-modal" type="button" class="btn-primary">Promote Job
                    <x-svg.arrow-circle-right /></button>
            </div>
        </div>
    </div>
</div>
