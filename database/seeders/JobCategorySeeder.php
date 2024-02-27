<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Seeder;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! config('templatecookie.testing_mode')) {
            $categories = [
                'Engineer/Architects',
                'Garments/Textile',
                'Design/Creative',
                'Hospitality/ Travel/ Tourism',
                'IT & Telecommunication',
                'Medical/Pharma',
                'Driving/Motor Technician',
                'Law/Legal',
                'Others',
            ];
        } else {
            $categories = [
                'Engineer/Architects',
                'Garments/Textile',
            ];
        }

        $icons = [
            'fas fa-hammer',
            'fas fa-tshirt',
            'fas fa-pen',
            'fas fa-hospital',
            'fas fa-desktop',
            'fas fa-user-md',
            'fas fa-car',
            'fas fa-gavel',
            'fas fa-ellipsis-v',
        ];

        $languages = loadLanguage();

        foreach ($categories as $key => $data) {
            $translation = JobCategory::create([
                'image' => 'backend/image/default.png',
                'icon' => $icons[$key],
                'slug' => \Str::slug($data),
            ]);

            foreach ($languages as $language) {
                $translation->translateOrNew($language->code)->name = $data;
            }

            $translation->save();
        }
    }
}
