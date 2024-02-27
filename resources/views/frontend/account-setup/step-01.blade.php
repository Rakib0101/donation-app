@extends('frontend.account-setup.layouts.account-setup')
@section('content')
    <div class="container">
        <div class="max-w-[984px] min-h-screen mx-auto">
            <x-frontend.account-setup.steps />
            <div class="py-6">
                <form action="" class="flex flex-col gap-6" x-data="uploadProfile">
                    <h2 class="heading-05">Company</h2>
                    <div class="flex flex-wrap md:flex-nowrap gap-6 items-center">
                        <div
                            class="min-w-[200px] min-h-[200px] inline-flex justify-center items-center p-3.5 border border-dashed border-gray-100 rounded-xl">
                            <template x-if="image?.src">
                                <div
                                    class="preview-container relative h-[200px] w-[200px] border border-gray-100 overflow-hidden group">
                                    <img :src="image?.src" :alt="`Uploaded Image`"
                                        class="w-full h-full  object-cover ">
                                </div>
                            </template>

                            <template x-if="!image?.src">
                                <label for="file-input">
                                    <img src="{{ asset('frontend/assets/images/company-logo-lerge.png') }}" alt="">
                                </label>
                            </template>
                        </div>
                        <div>
                            <h3 class="body-large-600 mb-2">Upload Profile Picture</h3>
                            <p class="body-base-400 text-gray-600 mb-4">Select a square image with a minimum size of 200x200
                                pixels, in JPEG or PNG format. Ensure
                                the logo is high-resolution, well-lit, and portrays a professional appearance while exuding
                                friendliness. Maintain a simple background and refrain from excessive filters.</p>
                            <div class="flex flex-wrap-reverse gap-6 items-center">
                                <label for="image"
                                    class="btn-white cursor-pointer border-primary-50 hover:bg-primary-50 hover:border-primary-500 text-primary-500">
                                    <x-svg.upload />
                                    <span>Replace Image</span>
                                    <input id="image" type="file" accept="image/*" hidden
                                        @change="handleImageUpload">
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
                        <h3 class="body-large-600">Company Name</h3>
                        <div>
                            <x-frontend.forms.label name="Name" required="false" />
                            <div class="flex">
                                <input class="py-2.5 rounded-l-lg border-r-0 px-[18px] border border-gray-100 bg-gray-50"
                                    type="text" value="https://Jobpilot.com/">
                                <x-frontend.forms.input placeholder="Company name" class="rounded-l-none" />
                            </div>
                        </div>
                        <div>
                            <x-frontend.forms.label name="Slogan" required="false" />
                            <x-frontend.forms.input placeholder="Write your company slogan" />
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
                        <h3 class="body-large-600">Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <x-frontend.forms.label name="Year of establishment" required="false" />
                                <x-frontend.forms.input placeholder="Write your company slogan" />
                            </div>
                            <div>
                                <x-frontend.forms.label name="Number of employees" required="false" />
                                <x-frontend.forms.select>
                                    <option value="" selected>option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </x-frontend.forms.select>
                            </div>
                            <div>
                                <x-frontend.forms.label name="Headquarters" required="false" />
                                <x-frontend.forms.input placeholder="Company based on country/state/city" />
                            </div>
                            <div>
                                <x-frontend.forms.label name="Industry" required="false" />
                                <x-frontend.forms.select>
                                    <option value="" selected>option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </x-frontend.forms.select>
                            </div>
                        </div>
                        <div>
                            <x-frontend.forms.label name="Spoken language in office" required="false" />
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
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('css')
@endpush


@push('js')
    <script defer>
        document.addEventListener('alpine:init', () => {
            Alpine.data('uploadProfile', () => ({
                image: {
                    src: '',
                    name: ''
                },
                handleImageUpload(event) {
                    const file = event.target.files[0];
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        this.image.src = event.target.result;
                        this.image.name = file?.name;
                    };
                    reader.readAsDataURL(file);
                },
                removeImage() {
                    this.image = {
                        src: "",
                        name: ""
                    };
                }
            }))
        })

        function removeElement(id) {
            const element = document.getElementById(`wrap_${id}`);
            element.remove();
        }
        document.addEventListener('DOMContentLoaded', function() {
            const addButton = document.querySelector('.btn-primary');
            addButton.addEventListener('click', function() {
                const dropdownInput = document.querySelector('#wrap_1');
                const clone = dropdownInput.children[0].cloneNode(true);
                dropdownInput.appendChild(clone);
            });
        });
    </script>
@endpush
