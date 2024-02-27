@extends('frontend.layouts.app')

@section('description')
    @php
        $data = metaData('home');
    @endphp
    {{ $data->description }}
@endsection
@section('og:image')
    {{ asset($data->image) }}
@endsection
@section('title')
    {{ $data->title }}
@endsection

@section('main')
    <main>
        <section class="py-4 bg-gray-50 border-b border-gray-100">
            <div class="container">
                <div class="flex gap-4 justify-between items-center">
                    <div class="flex-grow flex items-center gap-3.5">
                        <a href="" class="transition-all duration-300 text-gray-600 hover:text-gray-900">
                            <x-svg.arrow-left />
                        </a>
                        <div>
                            <p class="body-large-600 text-gray-900">Save Resume</p>
                            <p class="body-base-400 text-gray-600">After providing your resume name, save the entered
                                information.</p>
                        </div>
                    </div>
                    <form action="" class="flex-grow flex items-center gap-4">
                        <x-frontend.forms.input placeholder="Resume name..." class="w-full max-w-[546px]" />
                        <button class="btn-primary whitespace-nowrap">Save Change</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="py-8">
            <div class="container">
                <div class="flex gap-6 items-start min-h-screen">
                    <div class="flex-grow w-full max-w-[274px]">
                        <p class="caption-03 text-gray-500">Resume</p>
                        <ul class="py-3">
                            <li>
                                <a href=""
                                    class="py-3 px-5 flex items-center gap-3 body-base-600 text-gray-600 transition-all duration-300 border-l-[3px] border-transparent hover:border-primary-500 hover:bg-primary-50">
                                    <x-svg.user-02 />
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="py-3 px-5 flex items-center gap-3 body-base-600 text-gray-600 transition-all duration-300 border-l-[3px] border-transparent hover:border-primary-500 hover:bg-primary-50">
                                    <x-svg.text-input />
                                    <span>Detailed Info</span>
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="py-3 px-5 flex items-center gap-3 body-base-600 text-gray-600 transition-all duration-300 border-l-[3px] border-transparent hover:border-primary-500 hover:bg-primary-50">
                                    <x-svg.globe-02 />
                                    <span>Social Media</span>
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="py-3 px-5 flex items-center gap-3 body-base-600 text-gray-600 transition-all duration-300 border-l-[3px] border-transparent hover:border-primary-500 hover:bg-primary-50">
                                    <x-svg.map-02 />
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                        <a href="" class="inline-flex gap-3 items-center text-secondary-500">
                            <x-svg.file-06 />
                            <span>Resume Guideline</span>
                        </a>
                    </div>
                    <div class="flex-grow w-full">
                        <form action="" class="flex flex-col gap-6">
                            <h2 class="heading-05">Detailed Info</h2>
                            <div>
                                <div class="space-y-4">
                                    <label class="body-large-600 text-gray-900" for="description-editor">Description</label>
                                    <textarea name="description" id="description-editor" name="description" rows="10" class="opacity-0"></textarea>
                                </div>

                            </div>
                            <div class="h-[1px] bg-gray-100"></div>
                            <div class="flex flex-col gap-4">
                                <h3 class="body-large-600">Education</h3>
                                <div
                                    class="flex gap-6 justify-between items-start p-6 border border-gray-100 rounded-lg shadow-gray-base-1">
                                    <div>
                                        <h2 class="body-base-600">Senior Software Engineer</h2>
                                        <div class="mt-1 body-small-500 flex gap-1.5 items-center">
                                            <span class="text-secondary-500">Jan, 2023 - Jan, 2023</span>
                                            <span>•</span>
                                            <span class="text-gray-500">Google</span>
                                        </div>
                                        <p class="body-small-400 mt-2.5 text-gray-700">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Praesent eget magna
                                            nibh. Ut eu ipsum finibus, feugiat justo sed, consequat lectus. Cras et commodo
                                            lorem, ac dictum massa. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                                            amet consectetur adipiscing.</p>
                                    </div>
                                    <div class="flex gap-6 items-center">
                                        <a href="" class="btn-text-primary">
                                            <x-svg.edit-05 />
                                            <span>Edit</span>
                                        </a>
                                        <a href="" class="btn-text-dark">
                                            <x-svg.trash-03 />
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" type="button" class="btn-text-primary"
                                        data-modal-target="default-modal" data-modal-toggle="default-modal">
                                        <x-svg.plus-circle />
                                        <span>Add New</span>
                                    </a>
                                </div>
                            </div>
                            <div class="h-[1px] bg-gray-100"></div>
                            <div class="flex flex-col gap-4">
                                <h3 class="body-large-600">Experinces</h3>
                                <div
                                    class="flex gap-6 justify-between items-start p-6 border border-gray-100 rounded-lg shadow-gray-base-1">
                                    <div>
                                        <h2 class="body-base-600">Senior Software Engineer</h2>
                                        <div class="mt-1 body-small-500 flex gap-1.5 items-center">
                                            <span class="text-secondary-500">Jan, 2023 - Jan, 2023</span>
                                            <span>•</span>
                                            <span class="text-gray-500">Google</span>
                                        </div>
                                        <p class="body-small-400 mt-2.5 text-gray-700">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Praesent eget magna
                                            nibh. Ut eu ipsum finibus, feugiat justo sed, consequat lectus. Cras et commodo
                                            lorem, ac dictum massa. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                                            amet consectetur adipiscing.</p>
                                    </div>
                                    <div class="flex gap-6 items-center">
                                        <a href="" class="btn-text-primary">
                                            <x-svg.edit-05 />
                                            <span>Edit</span>
                                        </a>
                                        <a href="" class="btn-text-dark">
                                            <x-svg.trash-03 />
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-6 justify-between items-start p-6 border border-gray-100 rounded-lg shadow-gray-base-1">
                                    <div>
                                        <h2 class="body-base-600">Senior Software Engineer</h2>
                                        <div class="mt-1 body-small-500 flex gap-1.5 items-center">
                                            <span class="text-secondary-500">Jan, 2023 - Jan, 2023</span>
                                            <span>•</span>
                                            <span class="text-gray-500">Google</span>
                                        </div>
                                        <p class="body-small-400 mt-2.5 text-gray-700">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Praesent eget magna
                                            nibh. Ut eu ipsum finibus, feugiat justo sed, consequat lectus. Cras et commodo
                                            lorem, ac dictum massa. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                                            amet consectetur adipiscing.</p>
                                    </div>
                                    <div class="flex gap-6 items-center">
                                        <a href="" class="btn-text-primary">
                                            <x-svg.edit-05 />
                                            <span>Edit</span>
                                        </a>
                                        <a href="" class="btn-text-dark">
                                            <x-svg.trash-03 />
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn-text-primary">
                                        <x-svg.plus-circle />
                                        <span>Add New</span>
                                    </a>
                                </div>
                            </div>
                            <div class="h-[1px] bg-gray-100"></div>
                            <div class="flex flex-col gap-4">
                                <h3 class="body-large-600">Portfolio</h3>
                                <div
                                    class="flex gap-6 justify-between items-start p-6 border border-gray-100 rounded-lg shadow-gray-base-1">
                                    <div class="flex-grow max-w-[148px] min-w-[148px] h-[116px]">
                                        <img class="w-full h-full object-cover"
                                            src="{{ asset('frontend/assets/images/portfolio-card.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h2 class="body-base-600">Senior Software Engineer</h2>
                                        <div class="mt-1 body-small-500">
                                            <span class="text-secondary-500">Jan, 2023 - Jan, 2023</span>
                                        </div>
                                        <p class="body-small-400 mt-2.5 text-gray-700">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Praesent eget magna
                                            nibh. Ut eu ipsum finibus, feugiat justo sed, consequat lectus. Cras et commodo
                                            lorem, ac dictum massa. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                                            amet consectetur adipiscing.</p>
                                        <a href="#" class="btn-text-primary mt-2.5">
                                            <span>View Project</span>
                                            <x-svg.link-external-01 />
                                        </a>
                                    </div>
                                    <div class="flex gap-6 items-center">
                                        <a href="" class="btn-text-primary">
                                            <x-svg.edit-05 />
                                            <span>Edit</span>
                                        </a>
                                        <a href="" class="btn-text-dark">
                                            <x-svg.trash-03 />
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-6 justify-between items-start p-6 border border-gray-100 rounded-lg shadow-gray-base-1">
                                    <div class="flex-grow max-w-[148px] min-w-[148px] h-[116px]">
                                        <img class="w-full h-full object-cover"
                                            src="{{ asset('frontend/assets/images/portfolio-card.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h2 class="body-base-600">Senior Software Engineer</h2>
                                        <div class="mt-1 body-small-500">
                                            <span class="text-secondary-500">Jan, 2023 - Jan, 2023</span>
                                        </div>
                                        <p class="body-small-400 mt-2.5 text-gray-700">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Praesent eget magna
                                            nibh. Ut eu ipsum finibus, feugiat justo sed, consequat lectus. Cras et commodo
                                            lorem, ac dictum massa. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                                            amet consectetur adipiscing.</p>
                                        <a href="#" class="btn-text-primary mt-2.5">
                                            <span>View Project</span>
                                            <x-svg.link-external-01 />
                                        </a>
                                    </div>
                                    <div class="flex gap-6 items-center">
                                        <a href="" class="btn-text-primary">
                                            <x-svg.edit-05 />
                                            <span>Edit</span>
                                        </a>
                                        <a href="" class="btn-text-dark">
                                            <x-svg.trash-03 />
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn-text-primary">
                                        <x-svg.plus-circle />
                                        <span>Add New</span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experiences modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-[872px] max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow p-6">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Add experience
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="default-modal">
                            <x-svg.x-close />
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="flex flex-col gap-6 mt-6">
                        <div>
                            <x-frontend.forms.label name="Title" required="false" />
                            <x-frontend.forms.input placeholder="Company website link/url..." />
                        </div>
                        <div class="flex lg:flex-row flex-col gap-6 items-center">
                            <div class="w-full">
                                <x-frontend.forms.label name="Experience" required="false" />
                                <div date-rangepicker class="flex items-center">
                                    <div class="w-full">
                                        <input name="start" type="text"
                                            class="focus:outline-none transition-all duration-300 py-2.5 px-[18px] rounded-s-lg border border-gray-100 hover:border-gray-200 focus:border-primary-500 focus:shadow-[0px_4px_8px_0px_rgba(107,45,210,0.12),0px_0px_0px_3px_rgba(107,45,210,0.24)] flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500"
                                            placeholder="Select date start">
                                    </div>
                                    <div class="w-full">
                                        <input name="end" type="text"
                                            class="focus:outline-none transition-all duration-300 py-2.5 px-[18px] rounded-e-lg border border-gray-100 hover:border-gray-200 focus:border-primary-500 focus:shadow-[0px_4px_8px_0px_rgba(107,45,210,0.12),0px_0px_0px_3px_rgba(107,45,210,0.24)] flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500"
                                            placeholder="Select date end">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <x-frontend.forms.label name="Name" required="false" />
                                <x-frontend.forms.input placeholder="Company name" />
                            </div>
                        </div>
                        <div>
                            <x-frontend.forms.label name="Description" required="false" />
                            <x-frontend.forms.textarea placeholder="description" />
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex justify-between items-center mt-6">
                        <button data-modal-hide="default-modal" type="button"
                            class="text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancel</button>
                        <button data-modal-hide="default-modal" type="button" class="btn-primary">
                            Save Changes
                        </button>

                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@push('css')
    <style>
        .ck.ck-editor {
            border-radius: 8px !important;
            overflow: hidden;
            border: 1px solid var(--Gray-100) !important;
            background: white;
            box-shadow: 0px 1px 4px 0px rgba(112, 122, 125, 0.12) !important;

        }

        .ck-toolbar {
            border-radius: 8px 8px 0px 0px !important;
        }

        .ck-rounded-corners {
            border-radius: 0px 0px 8px 8px !important;
        }

        .ck-editor__editable_inline {
            min-height: 300px;
        }
    </style>
@endpush

@push('script')
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js" defer></script>
    <script defer>
        document.addEventListener('DOMContentLoaded', (e) => {
            ClassicEditor
                .create(document.querySelector('#description-editor'), {

                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endpush
