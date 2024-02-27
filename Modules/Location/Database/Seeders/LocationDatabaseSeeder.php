<?php

namespace Modules\Location\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Modules\Location\Entities\City;
use Modules\Location\Entities\Country;
use Modules\Location\Entities\State;

class LocationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->makeCountry();
        $this->makeStates();
        $this->makeCities();
    }

    protected function makeCountry()
    {
        $countries_list = \File::json(resource_path('backend/dummy-data/country.json'));

        for ($i = 0; $i < count($countries_list); $i++) {
            $country_data[] = [
                'name' => $countries_list[$i]['name'],
                'sortname' => $countries_list[$i]['country_code'],
                'slug' => Str::slug($countries_list[$i]['name']),
                'image' => 'backend/image/flags/flag-of-'.str_replace(' ', '-', $countries_list[$i]['name'].'.jpg'),
                'icon' => 'flag-icon-'.Str::lower($countries_list[$i]['country_code']),
                'latitude' => $countries_list[$i]['latlng'][0],
                'longitude' => $countries_list[$i]['latlng'][1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        $country_chunks = array_chunk($country_data, ceil(count($country_data) / 3));

        foreach ($country_chunks as $country) {
            Country::insert($country);
        }
    }

    protected function makeStates()
    {
        $states_list = \File::json(resource_path('backend/dummy-data/states.json'));

        for ($i = 0; $i < count($states_list); $i++) {

            $country_data[] = [
                'id' => $states_list[$i]['id'],
                'name' => $states_list[$i]['name'],
                'slug' => \Str::slug($states_list[$i]['name']),
                'country_id' => $states_list[$i]['country_id'],
                'longitude' => $states_list[$i]['longitude'],
                'latitude' => $states_list[$i]['latitude'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        $country_chunks = array_chunk($country_data, ceil(count($country_data) / 100));

        foreach ($country_chunks as $country) {
            State::insert($country);
        }
    }

    protected function makeCities()
    {
        $cities_list = \File::json(resource_path('backend/dummy-data/cities.json'));

        for ($i = 0; $i < count($cities_list); $i++) {
            $country_data[] = [
                'id' => $cities_list[$i]['id'],
                'name' => $cities_list[$i]['name'],
                'slug' => \Str::slug($cities_list[$i]['name']),
                'longitude' => $cities_list[$i]['longitude'],
                'latitude' => $cities_list[$i]['latitude'],
                'state_id' => $cities_list[$i]['state_id'],
            ];
        }

        $country_chunks = array_chunk($country_data, ceil(count($country_data) / 1000));

        foreach ($country_chunks as $country) {
            City::insert($country);
        }
    }
}
