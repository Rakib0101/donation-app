<form action="" class="flex flex-col gap-6" x-init x-data="uploadProfile">
    <div class="flex flex-wrap items-center gap-6">
        <div
            class="w-[140px] h-[140px] inline-flex justify-center items-center p-3.5 border border-dashed border-gray-100 rounded-xl">
            <template x-if="image?.src">
                <div class="preview-container relative h-[140px] w-[140px] border border-gray-100 overflow-hidden group">
                    <img :src="image?.src" :alt="`Uploaded Image`" class="w-full h-full  object-cover ">
                </div>
            </template>

            <template x-if="!image?.src">
                <label for="file-input">
                    <img src="{{ asset('frontend/assets/images/company-logo-lerge.png') }}" alt="">
                </label>
            </template>
        </div>
        <div>
            <h3 class="body-md-500 mb-2">Upload Profile Picture</h3>
            <div class="flex gap-6 items-center">
                <label for="image"
                    class="btn-white cursor-pointer border-primary-50 hover:bg-primary-50 hover:border-primary-500 text-primary-500">
                    <x-svg.upload />
                    <span>Replace Image</span>
                    <input id="image" type="file" accept="image/*" hidden @change="handleImageUpload">
                </label>
                <button class="btn-text" @click="removeImage()">Remove Image</button>
            </div>
            <div>
                <input type="file" id="file-input" @change="handleImageUpload" name="image"
                    accept="image/png, image/jpg, image/jpeg" class="appearance-none w-0 h-0">

            </div>
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <h3 class="body-large-600">Candidate</h3>
        <div>
            <x-frontend.forms.label name="Name" required="false" />
            {{-- <x-frontend.forms.input placeholder="Name" wire:model.live="name"/> --}}

            <input wire:model.live="name"
            class="focus:ring-0 transition-all duration-300 py-2.5 pl-[54px] pr-[18px] rounded-lg border border-gray-100 hover:border-gray-200 flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500 outline-none"
            type="text">
        </div>
        <div>
            <x-frontend.forms.label name="Slogan" required="false" />
            <x-frontend.forms.input placeholder="Professions" />
        </div>
        <div>
            <x-frontend.forms.label name="Skills(4/5)" required="false" />
            <x-frontend.forms.input placeholder="Professions" />
            <ul class="mt-2 flex gap-2 items-center">
                <li
                    class="bg-gray-50 rounded-md text-sm text-gray-800 inline-flex items-center gap-1 py-0.5 ps-2.5 pe-1.5">
                    <span>Figma</span>
                    <i class="text-gray-400">
                        <x-svg.x-close />
                    </i>
                </li>
                <li
                    class="bg-gray-50 rounded-md text-sm text-gray-800 inline-flex items-center gap-1 py-0.5 ps-2.5 pe-1.5">
                    <span>UI Design</span>
                    <i class="text-gray-400">
                        <x-svg.x-close />
                    </i>
                </li>
                <li
                    class="bg-gray-50 rounded-md text-sm text-gray-800 inline-flex items-center gap-1 py-0.5 ps-2.5 pe-1.5">
                    <span>UX Research</span>
                    <i class="text-gray-400">
                        <x-svg.x-close />
                    </i>
                </li>
                <li
                    class="bg-gray-50 rounded-md text-sm text-gray-800 inline-flex items-center gap-1 py-0.5 ps-2.5 pe-1.5">
                    <span>Website Design</span>
                    <i class="text-gray-400">
                        <x-svg.x-close />
                    </i>
                </li>
            </ul>
        </div>
        <div>
            <x-frontend.forms.label name="Website" required="false" />
            <x-frontend.forms.input icon="true" placeholder="Company website link/url...">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 2C15 4 15.9228 8.29203 16 12C15.9228 15.708 15 20 12 22M12 2C9 4 8.07725 8.29203 8 12C8.07725 15.708 9 20 12 22M12 2C6.47715 2 2 6.47715 2 12M12 2C17.5228 2 22 6.47715 22 12M12 22C17.5229 22 22 17.5228 22 12M12 22C6.47716 22 2 17.5228 2 12M22 12C20 15 15.708 15.9228 12 16C8.29203 15.9228 4 15 2 12M22 12C20 9 15.708 8.07725 12 8C8.29203 8.07725 4 9 2 12"
                        stroke="#007BFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </x-frontend.forms.input>
        </div>
    </div>
    <div class="h-[1px] bg-gray-100"></div>
    <div class="flex flex-col gap-4">
        <h3 class="body-large-600">Profile Information</h3>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <x-frontend.forms.label name="Year of establishment" required="false" />
                <div class="flex">
                    <x-frontend.forms.input placeholder="Min Sallery" class="w-full rounded-none !rounded-s-lg" />
                    <x-frontend.forms.input placeholder="Max Sallery" class="w-full rounded-none !rounded-e-lg" />
                </div>
            </div>
            <div>
                <x-frontend.forms.label name="Experience" required="false" />
                <div date-rangepicker class="flex items-center">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="start" type="text"
                            class="focus:outline-none transition-all duration-300 py-2.5 px-[18px] ps-[44px] rounded-s-lg border border-gray-100 hover:border-gray-200 focus:border-primary-500 focus:shadow-[0px_4px_8px_0px_rgba(107,45,210,0.12),0px_0px_0px_3px_rgba(107,45,210,0.24)] flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500"
                            placeholder="Select date start">
                    </div>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="end" type="text"
                            class="focus:outline-none transition-all duration-300 py-2.5 px-[18px] ps-[44px] rounded-e-lg border border-gray-100 hover:border-gray-200 focus:border-primary-500 focus:shadow-[0px_4px_8px_0px_rgba(107,45,210,0.12),0px_0px_0px_3px_rgba(107,45,210,0.24)] flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500"
                            placeholder="Select date end">
                    </div>
                </div>
                <div class="flex items-center mt-2">
                    <input id="default-checkbox" type="checkbox" value=""
                        class="w-5 h-5 text-primary-500 bg-white focus:!outline-0 focus:!ring-0 border-gray-200 rounded">
                    <label for="default-checkbox"
                        class="ms-2 cursor-pointer text-sm font-medium text-gray-700 ">Currently
                        Working</label>
                </div>
            </div>
            <div>
                <x-frontend.forms.label name="Experience Level" required="false" />
                <x-frontend.forms.select>
                    <option value="" selected>option 1</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                </x-frontend.forms.select>
            </div>
            <div>
                <x-frontend.forms.label name="Date of Birth" required="false" />
                <div class="relative">
                    <div class="absolute inset-y-0 end-4 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="datepickerId" datepicker datepicker-title="Flowbite datepicker" type="text"
                        class="focus:outline-none transition-all duration-300 py-2.5 px-[18px] rounded-lg border border-gray-100 hover:border-gray-200 focus:border-primary-500 focus:shadow-[0px_4px_8px_0px_rgba(107,45,210,0.12),0px_0px_0px_3px_rgba(107,45,210,0.24)] flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500"
                        placeholder="Select date">
                </div>

            </div>
            <div>
                <x-frontend.forms.label name="Gender" required="false" />
                <div class="flex gap-6 items-center">
                    <div class="flex items-center mb-4">
                        <input id="default-radio-1" type="radio" value="" name="default-radio"
                            class="w-4 h-4 text-blue-600 bg-white border-gray-300 ">
                        <label for="default-radio-1"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-200">Male</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-radio-2" type="radio" value="" name="default-radio"
                            class="w-4 h-4 text-blue-600 bg-white border-gray-200">
                        <label for="default-radio-2"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-radio-3" type="radio" value="" name="default-radio"
                            class="w-4 h-4 text-blue-600 bg-white border-gray-200">
                        <label for="default-radio-3"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Others</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-[1px] bg-gray-100"></div>
    <div class="flex flex-col gap-4">
        <h3 class="body-large-600">Languages you speak.</h3>
        <div class="flex items-end gap-3">
            <div class="w-full">
                <x-frontend.forms.label name="Name" required="false" />
                <x-frontend.forms.select>
                    <option value="" selected>option 1</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                </x-frontend.forms.select>
            </div>
            <div class="w-full">
                <x-frontend.forms.label name="Speaking Level" required="false" />
                <x-frontend.forms.select>
                    <option value="" selected>option 1</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                </x-frontend.forms.select>
            </div>
            <button class="text-gray-500 p-2.5">
                <x-svg.x-circle />
            </button>
        </div>
        <div class="flex items-end gap-3">
            <div class="w-full">
                <x-frontend.forms.label name="Name" required="false" />
                <x-frontend.forms.select>
                    <option value="" selected>option 1</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                </x-frontend.forms.select>
            </div>
            <div class="w-full">
                <x-frontend.forms.label name="Speaking Level" required="false" />
                <x-frontend.forms.select>
                    <option value="" selected>option 1</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                </x-frontend.forms.select>
            </div>
            <button class="text-gray-500 p-2.5">
                <x-svg.x-circle />
            </button>
        </div>
        <div>
            <button class="w-full gap-2 btn-dark-transparent">
                <x-svg.plus-circle />
                <span>Add Language</span>
            </button>
        </div>
    </div>
    <div class="h-[1px] bg-gray-100"></div>
    <div>
        <x-frontend.forms.label name="Hobbies" required="false" />
        <div class="flex items-center gap-2 flex-wrap">
            <x-frontend.forms.badge-check name="English" id="english" checked="true" />
            <x-frontend.forms.badge-check name="Mandarin" id="mandarin" />
            <x-frontend.forms.badge-check name="Hindi" id="hindi" />
            <x-frontend.forms.badge-check name="Spanish" id="spanish" />
            <x-frontend.forms.badge-check name="French" id="french" checked="true" />
            <x-frontend.forms.badge-check name="Arabic" id="arabic" />
            <x-frontend.forms.badge-check name="Bengali" id="bengali" />
            <x-frontend.forms.badge-check name="Russian" id="russian" checked="true" />
            <x-frontend.forms.badge-check name="Urdu" id="urdu" />
            <x-frontend.forms.badge-check name="Indonesia" id="indonesia" />
            <x-frontend.forms.badge-check name="English" id="english" checked="true" />
            <x-frontend.forms.badge-check name="Mandarin" id="mandarin" />
            <x-frontend.forms.badge-check name="Hindi" id="hindi" />
            <x-frontend.forms.badge-check name="Spanish" id="spanish" />
            <x-frontend.forms.badge-check name="French" id="french" checked="true" />
            <x-frontend.forms.badge-check name="Arabic" id="arabic" />
            <x-frontend.forms.badge-check name="Bengali" id="bengali" />
            <x-frontend.forms.badge-check name="Russian" id="russian" checked="true" />
            <x-frontend.forms.badge-check name="Portuguese" id="portuguese" checked="true" />
            <x-frontend.forms.badge-check name="Urdu" id="urdu" />
            <x-frontend.forms.badge-check name="Indonesia" id="indonesia" />
        </div>
        <div class="mt-4">
            <p class="text-primary-500 heading-07">Add More Hobbies</p>
            <div class="flex gap-3 mt-3">
                <x-frontend.forms.input placeholder="Write hobbies" />
                <button class="btn-dark">
                    <x-svg.plus-circle />
                    <span>Add</span>
                </button>
            </div>
        </div>
    </div>

</form>
