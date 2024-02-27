<?php

namespace Database\Seeders;

use App\Models\OrganizationType;
use Illuminate\Database\Seeder;

class OrganizationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! config('templatecookie.testing_mode')) {
            $types = [
                'Government', 'Semi Government', 'Public', 'Private', 'NGO', 'International Agencies',
            ];
        } else {
            $types = [
                'Government', 'Semi Government',
            ];
        }

        // inserting industry types & translations
        $languages = loadLanguage();

        foreach ($types as $data) {
            $organization = OrganizationType::create([
                'slug' => \Str::slug($data),
            ]);

            foreach ($languages as $language) {
                $organization->translateOrNew($language->code)->name = $data;
            }

            $organization->save();
        }
    }
}
