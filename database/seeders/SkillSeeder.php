<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = collect(require storage_path('skills.php'));
        $languages = loadLanguage();

        foreach ($skills as $data) {
            $skill = Skill::create([
                'slug' => \Str::slug($data),
            ]);

            foreach ($languages as $language) {
                $skill->translateOrNew($language->code)->name = $data;
            }

            $skill->save();
        }
    }
}
