<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! config('templatecookie.testing_mode')) {
            $educations = [
                'High School', 'Intermediate', 'Bachelor Degree', 'Master Degree', 'Graduated', 'PhD', 'Any',
            ];
        } else {
            $educations = [
                'Bachelor Degree', 'Graduated',
            ];
        }

        // inserting industry types & translations
        $languages = loadLanguage();

        foreach ($educations as $data) {
            $education = Education::create([
                'slug' => \Str::slug($data),
            ]);

            foreach ($languages as $language) {
                $education->translateOrNew($language->code)->name = $data;
            }

            $education->save();
        }
    }
}
