<?php

namespace Database\Seeders;

use App\Models\JobRole;
use Illuminate\Database\Seeder;

class JobRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! config('templatecookie.testing_mode')) {
            $job_roles = [
                'Team Leader', 'Manager', 'Assistant Manager', 'Executive', 'Director', 'Administrator',
            ];
        } else {
            $job_roles = [
                'Team Leader', 'Manager',
            ];
        }

        // inserting industry types & translations
        $languages = loadLanguage();

        foreach ($job_roles as $data) {
            $job_role = JobRole::create([
                'slug' => \Str::slug($data),
            ]);

            foreach ($languages as $language) {
                $job_role->translateOrNew($language->code)->name = $data;
            }

            $job_role->save();
        }
    }
}
