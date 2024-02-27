<?php

namespace Database\Seeders;

use App\Models\SalaryType;
use Illuminate\Database\Seeder;

class SalaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Monthly', 'Project Basis', 'Hourly', 'Yearly',
        ];

        $languages = loadLanguage();

        foreach ($types as $data) {
            $skill = SalaryType::create([
                'slug' => \Str::slug($data),
            ]);

            foreach ($languages as $language) {
                $skill->translateOrNew($language->code)->name = $data;
            }

            $skill->save();
        }
    }
}
