<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'php',
            'laravel',
            'mysql',
            'job',
            'frontend',
            'backend',
            'bootstrap',
            'team',
            'testing',
            'database',
            'jobs',
            'remote',
            'others',
            'seeker',
            'candidate',
            'company',
            'technology',
            'work',
        ];

        $languages = loadLanguage();

        foreach ($tags as $data) {
            $tag = Tag::create([
                'slug' => \Str::slug($data),
            ]);

            foreach ($languages as $language) {
                $tag->translateOrNew($language->code)->name = $data;
            }

            $tag->save();
        }
    }
}
