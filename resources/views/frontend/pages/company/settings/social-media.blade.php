@extends('frontend.pages.company.settings.layout')

@section('page')
    <div class="flex-1 space-y-8">
        <h1 class="heading-05 text-gray-900">Social Media</h1>
        <div class="space-y-4" x-init x-data="dynamicInput">
            <template x-for="(field, index) in fields" :key="index">
                <div class="space-y-[8px]">
                    <span class="body-small-500 text-gray-800" x-text="field.title"></span>
                    <div class="flex items-center gap-2">
                        <div
                            class="flex flex-1 divide-x divide-x-gray-100 items-center border border-gray-100 shadow-gray-base-1 rounded-md overflow-hidden focus-within:border-primary-500 hover:border-primary-500 transition duration-200 ease-linear">
                            <div class="min-w-full lg:min-w-[320px]">
                                <select name="" id=""
                                    class="w-full border-none outline-none py-3 px-2 focus:ring-0 text-gray-700">
                                    <template x-for="option in field.options" :key="index">
                                        <option value="" x-text="option"></option>
                                    </template>
                                </select>
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="Link/URL" :value="field.link" x-ref="fieldInput"
                                    x-init="field.autofocus && $refs.fieldInput.focus()"
                                    class="border-0 focus:ring-0 py-3 px-2 placeholder:text-gray-700 w-full">
                            </div>
                        </div>
                        <div class="">
                            <button type="button" class="btn-text-dark" @click="removeField(index)">
                                <x-svg.x-circle />
                            </button>
                        </div>
                    </div>

                </div>
            </template>

            <button class="btn-dark-transparent w-full gap-2" type="button" @click="addNewField">
                <span>
                    <x-svg.plus-circle />
                </span>
                Add Social Media
            </button>
        </div>
    </div>
@endsection

@push('script')
    <script defer>
        document.addEventListener('alpine:init', () => {
            console.log('loaded')
            Alpine.data('dynamicInput', () => ({
                fields: [{
                        title: 'Social Media ',
                        options: ['Select media...', 'option1', 'option 2', 'option 3'],
                        link: ''
                    },
                    {
                        title: 'Social Media ',
                        options: ['Select media...', 'option 1', 'option 2', 'option 3'],
                        link: ''
                    },
                    {
                        title: 'Social Media ',
                        options: ['Select media...', 'option 1', 'option 2', 'option 3'],
                        link: ''
                    },
                    {
                        title: 'Social Media ',
                        options: ['Select media...', 'option 1', 'option 2', 'option 3'],
                        link: ''
                    }
                ],
                addNewField() {
                    this.fields.push({
                        title: `Social Media `,
                        options: ['Select media...', 'option 1', 'option 2', 'option 3'],
                        link: '',
                        autofocus: true
                    });
                },
                removeField(index) {
                    this.fields.splice(index, 1);
                }
            }))
        })
    </script>
@endpush
