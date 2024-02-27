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

        <div class="container flex flex-wrap items-start py-[2.75rem] gap-[1.5rem]">
            <aside class="space-y-4 min-w-full md:min-w-[19.5rem] sticky top-12">
                <h1 class="heading-04 text-gray-900">Post a Job</h1>
                <p class="body-small-400 text-gray-500">Steps</p>
                <ul class="space-y-4 group border-b border-b-gray-100 pb-4">
                    <li>
                        <a href="#job" class="flex items-center gap-2">
                            <i>
                                <x-svg.check-circle-fill-blue />
                            </i>
                            <span class="body-base-500 text-gray-900">
                                Job
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#basic-info" class="flex items-center gap-2">
                            <i>
                                <x-svg.check-circle-fill-blue />
                            </i>
                            <span class="body-base-500 text-gray-900">
                                Basic Info
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#job-location" class="flex items-center gap-2">
                            <i>
                                <x-svg.circle-progress-blue />
                            </i>
                            <span class="heading-07 text-primary-500">
                                Job Location
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#salary" class="flex items-center gap-2">
                            <i>
                                <x-svg.circle-progress-gray />
                            </i>
                            <span class=" text-gray-600 body-base-500">
                                Salary
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#salary" class="flex items-center gap-2">
                            <i>
                                <x-svg.circle-progress-gray />
                            </i>
                            <span class=" text-gray-600 body-base-500">
                                Description
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#salary" class="flex items-center gap-2">
                            <i>
                                <x-svg.circle-progress-gray />
                            </i>
                            <span class=" text-gray-600 body-base-500">
                                Job benefits
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#salary" class="flex items-center gap-2">
                            <i>
                                <x-svg.circle-progress-gray />
                            </i>
                            <span class=" text-gray-600 body-base-500">
                                Apply with
                            </span>
                        </a>
                    </li>
                </ul>
                <a href="#"
                    class="flex items-center gap-2 heading-07 text-gray-700 hover:text-gray-900 transition-all duration-200 ease-linear">
                    <i>
                        <x-svg.file-06 />
                    </i>
                    Job Post Guideline
                </a>
            </aside>
            <div class="w-full flex-1 space-y-[2.5rem]">
                <section id="job">
                    <div class="space-y-4">
                        <h4 class="body-large-600 text-gray-900">Job title</h4>
                        <div class="space-y-2">
                            <label for="job-title" class="body-small-500 text-gray-800">Job Title</label>
                            <input type="text" id="job-title" name="job-title" placeholder="Job title, role, position"
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition duration-200 ease-linear text-gray-800 body-base-400 outline-0 focus:ring-0 rounded-lg w-full hover:border-primary-500">
                        </div>
                        <div class="space-y-2">
                            <label for="keyword" class="body-small-500 text-gray-800">Keyword</label>
                            <input type="text" id="keyword" name="keyword" placeholder="Write to add keywords"
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition duration-200 ease-linear text-gray-800 body-base-400 outline-0 focus:ring-0 rounded-lg w-full hover:border-primary-500">
                        </div>
                        <div class="space-y-2">
                            <label for="key-skills" class="body-small-500 text-gray-800">Key Skills</label>
                            <input type="text" id="key-skills" name="key-skills"
                                placeholder="Skills that candidate must have..."
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition duration-200 ease-linear text-gray-800 body-base-400 outline-0 focus:ring-0 rounded-lg w-full hover:border-primary-500">
                        </div>
                    </div>
                </section>
                <section id="basif-info">
                    <h4 class="body-large-600 text-gray-900">Basic info</h4>
                    <div class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 pt-4">
                        <div class="space-y-2">
                            <label for="expire-date" class="body-small-500 text-gray-800">Expire Date</label>
                            <input type="date" id="expire-date" name="expire-date"
                                placeholder="Job title, role, position"
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition  duration-200 ease-linear hover:border-primary-500 text-gray-800 body-base-400 outline-0 focus:ring-0 rounded-lg w-full">
                        </div>
                        <div class="space-y-2">
                            <label for="job-type" class="body-small-500 text-gray-800">Job Type</label>
                            <select name="job-type" id="job-type"
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition duration-200 ease-linear hover:border-primary-500 text-gray-800 body-base-400 outline-0 focus:ring-0 rounded-lg w-full">
                                <option selected disabled>Select...</option>
                                <option value="#" class="body-small-500 text-gray-800">Option1</option>
                                <option value="#" class="body-small-500 text-gray-800">Option2</option>
                                <option value="#" class="body-small-500 text-gray-800">Option3</option>
                                <option value="#" class="body-small-500 text-gray-800">Option4</option>
                            </select>

                        </div>
                        <div class="space-y-2" x-init x-data="{ vacancies: 0 }">
                            <label for="total-vacant" class="body-small-500 text-gray-800">Total Vacancies</label>
                            <div
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus-within:border-primary-500 transition duration-200 ease-linear text-gray-800 body-base-400 outline-0 rounded-lg w-full relative hover:border-primary-500">
                                <button type="button"
                                    class="text-gray-400 absolute left-3 top-[50%] transform translate-y-[-50%] hover:text-gray-900 transition-all duration-200 ease-linear"
                                    @click="vacancies > 0 && vacancies--;">
                                    <i>
                                        <x-svg.minus />
                                    </i>
                                </button>
                                <input type="text" id="total-vacant" name="total-vacant" :value="vacancies"
                                    class="outline-0 border-none focus:ring-0 p-0 text-center w-full h-full">
                                <button type="button"
                                    class="text-gray-400 absolute right-3 top-[50%] transform translate-y-[-50%] hover:text-gray-900 transition-all duration-200 ease-linear"
                                    @click="vacancies++">
                                    <i>
                                        <x-svg.plus />
                                    </i>
                                </button>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="exp-level" class="body-small-500 text-gray-800">Experience Level</label>
                            <select name="exp-level" id="exp-level"
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition duration-200 ease-linear text-gray-800 body-base-400 outline-0 focus:ring-0 rounded-lg w-full hover:border-primary-500">
                                <option selected disabled>Select...</option>
                                <option value="#" class="body-small-500 text-gray-800">Option1</option>
                                <option value="#" class="body-small-500 text-gray-800">Option2</option>
                                <option value="#" class="body-small-500 text-gray-800">Option3</option>
                                <option value="#" class="body-small-500 text-gray-800">Option4</option>
                            </select>
                        </div>
                        <div class="space-y-2" x-init x-data="{ experience: 10 }">
                            <label for="experience" class="body-small-500 text-gray-800">Required Experience
                                (Years)</label>
                            <div
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus-within:border-primary-500 transition-all duration-200 ease-linear text-gray-800 body-base-400 outline-0 rounded-lg w-full  relative hover:border-primary-500">
                                <button type="button"
                                    class="text-gray-400 absolute left-3 top-[50%] transform translate-y-[-50%] hover:text-gray-900 transition-all duration-200 ease-linear"
                                    @click="experience > 0 && experience--;">
                                    <i>
                                        <x-svg.minus />
                                    </i>
                                </button>
                                <input type="text" id="experience" name="experience" :value="experience"
                                    class="outline-0 border-none focus:ring-0 p-0 text-center w-full h-full">
                                <button type="button"
                                    class="text-gray-400 absolute right-3 top-[50%] transform translate-y-[-50%] hover:text-gray-900 transition-all duration-200 ease-linear"
                                    @click="experience++">
                                    <i>
                                        <x-svg.plus />
                                    </i>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="basif-info">
                    <h4 class="body-large-600 text-gray-900">Job location</h4>
                    <div class="grid gird-cols-1  gap-4 py-4">
                        <div class="space-y-4 border-b border-b-gray-100 pb-4">
                            <div class="space-y-2">
                                <label for="location" class="body-small-500 text-gray-800">Location</label>
                                <div
                                    class="flex items-center gap-[0.75rem] px-[1.12rem]  shadow-gray-base-1 border border-gray-100 focus-within:border-primary-500 transition-all duration-200 ease-linear  outline-0  rounded-lg w-full body-base-400 hover:border-primary-500">
                                    <span class="text-gray-700">
                                        <i>
                                            <x-svg.map-01 />
                                        </i>
                                    </span>
                                    <input type="text" id="location" name="location" placeholder="Job location"
                                        class="py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 text-gray-800  flex-1 border-none outline-0 focus:ring-0">
                                </div>
                            </div>

                            <figure class="w-full rounded-lg overflow-hidden space-y-[0.5rem]">
                                <div id="leaflet-map"></div>
                                <figcaption class="body-small-400 text-gray-500">Set your office location by clicking on
                                    the map</figcaption>
                            </figure>


                            @error('location')
                                <span class="ml-3 text-md text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center justify-between gap-4">
                            <div class="space-y-2">
                                <h6 class="body-small-500 text-gray-800">Job Type</h6>
                                <div class="flex flex-wrap items-center gap-8">
                                    <div class="flex items-center gap-2">
                                        <input type="radio" class="shadow-gray-base-2 text-primary-500 cursor-pointer"
                                            id="work-from-office" name="job-type">
                                        <label for="work-from-office" class="body-base-500 text-gray-700">Work from
                                            office</label>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <input type="radio" class="shadow-gray-base-2 text-primary-500 cursor-pointer"
                                            id="remote-job" name="job-type">
                                        <label for="remote-job" class="body-base-500 text-gray-700">Remote
                                            Job</label>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <input type="radio" class="shadow-gray-base-2 text-primary-500 cursor-pointer"
                                            id="hybrid" name="job-type">
                                        <label for="hybrid" class="body-base-500 text-gray-700">Hybrid</label>
                                        <i role="button">
                                            <x-svg.help-circle />
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <h6 class="body-small-500 text-gray-800">Location Type</h6>
                                <div class="flex flex-wrap items-center gap-8">
                                    <div class="flex items-center gap-2">
                                        <input type="radio" class="shadow-gray-base-2 text-primary-500 cursor-pointer"
                                            id="world-wide" name="location-type">
                                        <label for="world-wide" class="body-base-500 text-gray-700">Worldwide</label>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <input type="radio" class="shadow-gray-base-2 text-primary-500 cursor-pointer"
                                            id="near-job-location" name="location-type">
                                        <label for="near-job-location" class="body-base-500 text-gray-700">Near Job
                                            Location</label>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section id="salary" class="space-y-4">
                    <h4 class="body-large-600 text-gray-900">Salary range</h4>
                    <div class="grid gird-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        <div class="space-y-2 ">
                            <label for="salary-type" class="body-small-500 text-gray-800">Salary Type</label>
                            <select name="salary-type" id="salary-type"
                                class="px-[1.12rem] py-[0.62rem] placeholder:body-base-400 place-holder:text-gray-500 shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition duration-200 ease-linear text-gray-800 body-base-400 outline-0 focus:ring-0 rounded-lg w-full hover:border-primary-500 ">
                                <option selected disabled>Select...</option>
                                <option value="#" class="body-small-500 text-gray-800">Option1</option>
                                <option value="#" class="body-small-500 text-gray-800">Option2</option>
                                <option value="#" class="body-small-500 text-gray-800">Option3</option>
                                <option value="#" class="body-small-500 text-gray-800">Option4</option>
                            </select>
                        </div>
                        <div class="space-y-2 w-full md:col-span-2">
                            <label for="salary-range" class="body-small-500 text-gray-800">Salary</label>
                            <div
                                class=" divide border border-gray-100 rounded-lg bg-gray-white shadow-gray-base-1 grid grid-cols-2 divide-x w-full transition duration-200 ease-linear focus-within:border-primary-500 hover:border-primary-500">
                                <input type="number" min="0" id="salary-range" name="min-salary"
                                    placeholder="Min salary"
                                    class="py-[0.62rem] px-[1.12rem] focus:ring-0 outline-none bg-transparent border-none placeholder:text-base-400 placeholder:text-gray-500 body-small-500 text-gray-800">
                                <input type="number" min="0" id="salary-range" name="max-salary"
                                    placeholder="Max salary"
                                    class="py-[0.62rem] px-[1.12rem] focus:ring-0 outline-none bg-transparent border-none placeholder:text-base-400 placeholder:text-gray-500 body-small-500 text-gray-800 border-l border-l-gray-100">
                            </div>
                        </div>
                        <div class="space-y-2 ">
                            <label for="currency" class="body-small-500 text-gray-800">Currency</label>
                            <select name="currency" id="currency"
                                class="px-[1.12rem] py-[0.62rem]  shadow-gray-base-1 border border-gray-100 focus:border-primary-500 transition duration-200 ease-linear text-gray-800 body-base-400 outline-0 focus:ring-0 rounded-lg w-full hover:border-primary-500">
                                <option selected disabled>Select...</option>
                                <option value="#" class="body-small-500 text-gray-800">Option1</option>
                                <option value="#" class="body-small-500 text-gray-800">Option2</option>
                                <option value="#" class="body-small-500 text-gray-800">Option3</option>
                                <option value="#" class="body-small-500 text-gray-800">Option4</option>
                            </select>
                        </div>
                    </div>
                </section>
                <section id="description">
                    <div class="space-y-4">
                        <label class="body-large-600 text-gray-900" for="description-editor">Description</label>
                        <textarea name="description" id="description-editor" name="description" rows="10" class="opacity-0"></textarea>
                    </div>

                </section>
                <section id="job-benifites">
                    <h4 class="body-large-600 text-gray-900">Job Benefits</h4>
                    <div class="body-small-400 text-gray-600 py-2">Sync with company benefits, but you can customize this
                        for
                        each jobs</div>
                    <div class="flex gap-2 items-center flex-wrap" x-init>
                        <template x-for="n in 15" :key="n">
                            <span class="inline-flex items-center justify-center">
                                <input type="checkbox" :id="`check-${n}`" class="peer h-0 w-0 opacity-0">
                                <label :for="`check-${n}`"
                                    class="peer-checked:bg-primary-500 peer-checked:border peer-checked:border-primary-700 peer-checked:text-gray-white cursor-pointer bg-gray-50 rounded-md px-[0.75rem] py-[0.38rem] body-small-500 text-gray-700 border border-transparent transition-all duration-200 ease-linear hover:bg-primary-500 hover:text-gray-white">
                                    Adoption
                                    assistance </label>
                            </span>
                        </template>

                    </div>
                    <a href="#" class="btn-text-primary mt-4">Add more Benefits</a>
                </section>
                <section id="apply-with">
                    <div class="p-[1.5rem] space-y-4"
                        style="background: linear-gradient(0deg, rgba(255, 240, 230, 0.50) 0%, rgba(255, 240, 230, 0.50) 100%), #FFF;">
                        <h5 class="body-large-600">Apply Job on:</h5>

                        <div class="grid grid-cols-1 gap-1 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3">
                            <label for="jobpilot"
                                class="[&:has(input:checked)]:bg-gray-white [&:has(input:checked)]:border-gray-100 [&:has(input:checked)]:shadow-gray-base-2 bg-transparent hover:bg-gray-white p-4 flex items-start gap-2 rounded-md hover:shadow-gray-base-2 border border-transparent hover:border-gray-100 cursor-pointer transition-all duration-200 ease-linear">
                                <input type="radio" id="jobpilot" name="platform" checked
                                    class="app-radio text-secondary-500 focus:ring-secondary-500 leading-[0px] border border-gray-100">
                                <div class="w-full space-y-1">
                                    <p class="body-small-600 text-gray-900 leading-[17px]">On Jobpilot</p>
                                    <p class="body-xs-400 text-gray-600">Candidate will apply job using jobpilot & all
                                        application will show on your dashboard.</p>
                                </div>
                            </label>
                            <label for="external"
                                class="[&:has(input:checked)]:bg-gray-white [&:has(input:checked)]:border-gray-100 [&:has(input:checked)]:shadow-gray-base-2 bg-transparent hover:bg-gray-white p-4 flex items-start gap-2 rounded-md hover:shadow-gray-base-2 border border-transparent hover:border-gray-100 cursor-pointer transition-all duration-200 ease-linear">
                                <input type="radio" id="external" name="platform"
                                    class="app-radio text-secondary-500 focus:ring-secondary-500 leading-[0px] border border-gray-100">
                                <div class="w-full space-y-1">
                                    <p class="body-small-600 text-gray-900 leading-[17px]">External Platform</p>
                                    <p class="body-xs-400 text-gray-600">Candidate apply job on your website, all
                                        application on your own website.</p>
                                </div>
                            </label>
                            <label for="your-email"
                                class="[&:has(input:checked)]:bg-gray-white [&:has(input:checked)]:border-gray-100 [&:has(input:checked)]:shadow-gray-base-2 bg-transparent hover:bg-gray-white p-4 flex items-start gap-2 rounded-md hover:shadow-gray-base-2 border border-transparent hover:border-gray-100 cursor-pointer transition-all duration-200 ease-linear">
                                <input type="radio" id="your-email" name="platform"
                                    class="app-radio text-secondary-500 focus:ring-secondary-500 leading-[0px] border border-gray-100">
                                <div class="w-full space-y-1">
                                    <p class="body-small-600 text-gray-900 leading-[17px]">On Your Email</p>
                                    <p class="body-xs-400 text-gray-600">Candidate apply job on your email address, and all
                                        application in your email.</p>
                                </div>
                            </label>
                        </div>
                    </div>
                </section>
                <section class="bg-gray-50 rounded-md p-[1.5rem] space-y-4" x-data="dynamicInput" x-init>
                    <h4 class="body-large-600 text-gray-900">Screening Questions</h4>
                    <template x-for="(field, index) in fields" :key="index">
                        <div class="space-y-[0.5rem]">
                            <label :for="field.label" x-text="field.label"
                                class="body-small-500 text-gray-900"></label>
                            <div class="flex gap-2">
                                <input type="text" x-ref="fieldInput" x-init="field?.autoFocus && $refs?.fieldInput?.focus()" :value="field.value"
                                    class="shadow-gray-base-1 border border-gray-100 py-[0.62rem] px-[1.125rem] placeholder:body-base-400 placeholder:text-gray-500 w-full rounded-lg focus:right-1 focus:border-primary-500 focus:ring-0 hover:border-primary-500 transition duration-200 ease-linear outline-0">
                                <button type="button" @click="removeField(index)"
                                    class="w-[2.75rem] h-[2.75rem] rounded-md flex items-center justify-center text-gray-700 hover:bg-gray-white transition duration-200 ease-linear">
                                    <i>
                                        <x-svg.x />
                                    </i>
                                </button>
                            </div>
                        </div>
                    </template>
                    <button @click="addNewField" type="button"
                        class="flex items-center gap-2 justify-center w-full px-4 py-2 heading-07 text-gray-700 shadow-gray-base-2 bg-gray-white rounded-lg hover:bg-primary-500 hover:text-gray-white transition duration-200 ease-linear">
                        <x-svg.plus-circle />
                        Add Question

                    </button>
                    <div>

                    </div>
                </section>
            </div>
        </div>
        <div
            class="py-[1.5rem] px-10 lg:px-[30rem] xl:pl-[39.75rem] pr-10 lg:pr-[10rem] xl:pr-[18.75rem] border-t border-t-gray-100 flex items-center justify-between">
            <div>
                <button class="btn-dark-transparent" type="button">
                    Save on Draft
                </button>
            </div>
            <div>
                <button class="btn-primary" type="button">Post Job</button>
            </div>
        </div>
    </main>
@endsection

@push('css')
    <style>
        .ck.ck-editor {
            border-radius: 0.5rem;
            border: 1px solid #E3E4E6 !important;
            background: #FFF !important;
            box-shadow: 0px 1px 4px 0px rgba(112, 122, 125, 0.12);

        }

        .ck-editor__editable_inline {
            min-height: 300px;
        }
    </style>
    <!-- >=>Leaflet Map<=< -->
    <x-map.leaflet.map_links />
    <x-map.leaflet.autocomplete_links />

    @include('map::links')
@endpush

@push('script')
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

        document.addEventListener('alpine:init', () => {
            Alpine.data('dynamicInput', () => ({

                fields: [{
                    label: 'Question 1',
                    value: '',
                }, {
                    label: 'Question 2',
                    value: '',
                }, {
                    label: 'Question 3',
                    value: '',
                }],
                addNewField() {
                    this.fields.push({
                        label: `Question ${this.fields.length + 1}`,
                        value: '',
                        autoFocus: true
                    });

                },
                removeField(index) {
                    this.fields.splice(index, 1);
                }
            }))
        })
    </script>
    {{-- Leaflet  --}}
    @include('map::set-leafletmap')
    {{-- @include('map::set-googlemap') --}}
@endpush
