@extends('frontend.account-setup.layouts.account-setup')
@section('content')
    <div class="container">
        <div class="max-w-[984px] min-h-screen mx-auto">
            <x-frontend.account-setup.steps company="complete" detail_info="active" social_media="inactive"
                contact="inactive" />
            <div class="py-6">
                <form action="" class="flex flex-col gap-6" x-data="uploadProfile">
                    <h2 class="heading-05">Detailed Info</h2>
                    <div>
                        <x-frontend.forms.label name="Company Description" required="false" />
                        <x-frontend.forms.textarea value="Write a your company brief description. don’t forget to add your company vision, value and feature goals..." />
                    </div>
                    <div class="flex flex-col gap-4">
                        <div>
                            <h3 class="body-large-600 mb-2">Gallery Images (8/10)</h3>
                            <p class="body-small-400 text-gray-600">These images help the job seekers to understand how the
                                life is in your company.</p>
                        </div>
                        <div>
                            <input type="file" accept="image/*" class="filepond" name="images[]" multiple />
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h3 class="body-large-600">Perks and Benefits</h3>
                        <div class="flex items-center gap-2 flex-wrap">
                            <x-frontend.forms.badge-check name="Adoption assistance" id="adoption_assistance" checked="true" />
                            <x-frontend.forms.badge-check name="Casual dress code" id="casual_dress_code" />
                            <x-frontend.forms.badge-check name="Commuter benefits" id="commuter_benefits" />
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
                    <div>
                        <h3 class="mb-3 text-primary-500 heading-07">Add More Benefits</h3>
                        <div class="flex gap-3 items-center">
                            <x-frontend.forms.input placeholder="Write benefit" />
                            <button class="btn-dark inline-flex gap-2">
                                <x-svg.circle-plus />
                                <span>Add</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('css')
<style>
    .filepond--file,
    .filepond--list li {
        width: 120px !important;
        height: 120px !important;
    }
    .filepond--root .filepond--drop-label {
        min-height: 80px !important;
    }
    .filepond--panel-center {
        max-height: 100px !important;
    }
</style>
@endpush


@push('js')
    @vite('resources/js/filepond.js')
    <script defer>
        document.addEventListener('DOMContentLoaded', () => {
            const inputElement = document.querySelector('.filepond');
            console.log(inputElement);
            // Create a FilePond instance
            const pond = filepond.create(inputElement, {
                storeAsFile: true,
                allowMultiple: true,
                credits: false,
            });
        });
    </script>
@endpush
