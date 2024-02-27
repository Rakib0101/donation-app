<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Plan\Entities\Plan;
use Modules\Plan\Entities\PlanDescription;

class PlanDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Plans creating
        $plans = [
            [
                'label' => 'Free Plan',
                'price' => '0',
                'job_limit' => '1',
                'featured_job_limit' => '1',
                'highlight_job_limit' => '1',
                'candidate_cv_view_limitation' => 'limited',
                'candidate_cv_view_limit' => '3',
                'profile_verify' => false,
                'recommended' => false,
                'frontend_show' => true,
            ],
            [
                'label' => 'Basic Plan',
                'price' => '20',
                'job_limit' => '5',
                'featured_job_limit' => '3',
                'highlight_job_limit' => '2',
                'candidate_cv_view_limitation' => 'limited',
                'candidate_cv_view_limit' => '10',
                'profile_verify' => false,
                'recommended' => false,
                'frontend_show' => true,
            ],
            [
                'label' => 'Standard Plan',
                'price' => '50',
                'job_limit' => '20',
                'featured_job_limit' => '8',
                'highlight_job_limit' => '4',
                'candidate_cv_view_limitation' => 'limited',
                'candidate_cv_view_limit' => '20',
                'profile_verify' => false,
                'recommended' => true,
                'frontend_show' => true,
            ],
        ];

        collect($plans)->each(function ($planData) {
            $plan = Plan::firstOrCreate(['label' => $planData['label']], $planData);

            // Create PlanDescription for each language
            $languages = DB::table('languages')->get();
            foreach ($languages as $language) {
                PlanDescription::firstOrCreate([
                    'plan_id' => $plan->id,
                    'locale' => $language->code,
                    'description' => $language->code,
                ],
                );
            }
        });

        // Plan descriptions creating
        $languages = DB::table('languages')->get();
        $plans = DB::table('plans')->get();

        if ($plans && count($plans) && count($plans) != 0) {
            foreach ($plans as $data) {
                if ($languages && count($languages) && count($languages) != 0) {
                    foreach ($languages as $language) {
                        PlanDescription::create([
                            'plan_id' => $data->id,
                            'locale' => $language->code,
                            'description' => $data->description ?? "{$language->code} description",
                        ]);
                    }
                } else {
                    $default_language = env('APP_DEFAULT_LANGUAGE') ?? 'en';

                    PlanDescription::create([
                        'plan_id' => $data->id,
                        'locale' => $default_language,
                        'description' => $data->description ?? "{$default_language} description",
                    ]);
                }
            }
        }
    }
}
