@extends('frontend.account-setup.layouts.account-setup')
@section('content')
    <div class="container">
        <div class="max-w-[984px] min-h-screen mx-auto">
            <x-frontend.account-setup.steps company="complete" detail_info="complete" social_media="complete"
                contact="active" />
            <div class="py-6">
                <form action="" class="flex flex-col gap-6">
                    <h2 class="heading-05">Contact</h2>
                    <div class="flex flex-col gap-3">
                        <div>
                            <x-frontend.forms.label name="Location" required="false" />
                            <x-frontend.forms.input icon="true" placeholder="Company location" class="text-gray-700">
                                <x-svg.map-01 />
                            </x-frontend.forms.input>
                        </div>
                        <div id="map" class="min-h-[248px]"></div>
                        <p class="text-gray-600">Set your company location by clicking on the map</p>
                    </div>
                    <div class="h-[1px] bg-gray-100"></div>
                    <div>
                        <x-frontend.forms.label name="Primary Contact Mail" required="false" />
                        <x-frontend.forms.input icon="true" placeholder="Email address" class="text-gray-700">
                            <x-svg.mail-02 />
                        </x-frontend.forms.input>
                    </div>
                    <div>
                        <x-frontend.forms.label name="Phone Number" required="false" />
                        <x-frontend.forms.input icon="true" placeholder="Phone number" class="text-gray-700">
                            <x-svg.phone-call-01 />
                        </x-frontend.forms.input>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@push('js')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([51.5, -0.09]).addTo(map);
        var circle = L.circle([51.508, -0.11], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(map);
    </script>
@endpush
