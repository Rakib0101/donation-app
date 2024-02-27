<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! config('templatecookie.testing_mode')) {
            $professions = [
                'Physician', 'Engineer', 'Chef', 'Lawyer', 'Designer', 'Labourer', 'Dentist', 'Accountant', 'Dental Hygienist', 'Actor', 'Electrician', 'Software Developer', 'Pharmacist', 'Technician', 'Artist', 'Teacher', 'Journalist', 'Cashier', 'Secretary', 'Scientist', 'Soldier', 'Gardener', 'Farmer', 'Librarian', 'Driver', 'Fishermen', 'Police Officer ', 'Tailor',
            ];
        } else {
            $professions = ['Physician', 'Engineer'];
        }

        // inserting profession & translations
        $languages = loadLanguage();

        foreach ($professions as $data) {
            $profession = Profession::create([
                'slug' => \Str::slug($data),
            ]);

            foreach ($languages as $language) {
                $profession->translateOrNew($language->code)->name = $data;
            }

            $profession->save();
        }
    }
}
