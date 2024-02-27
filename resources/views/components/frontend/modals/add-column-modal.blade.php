<div id="add-column-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4  rounded-t ">
                <h3 class="body-base-600 text-gray-900 ">
                    Add New Column
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                    data-modal-hide="add-column-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="px-4 space-y-2">
                <label for="email" class=" mb-2 text-gray-800 body-small-500 ">Title/name</label>
                <input type="email" id="email"
                    class=" shadow-gray-base-1 border border-gray-100 text-gray-800 text-sm rounded-lg focus:ring-blue-500  block w-full p-2.5   "
                    placeholder="Column name..">
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-between p-4 rounded-b ">
                <button data-modal-hide="add-column-modal" type="button" class="btn-text-dark">Cancel</button>
                <button data-modal-hide="add-column-modal" type="button" class="btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
