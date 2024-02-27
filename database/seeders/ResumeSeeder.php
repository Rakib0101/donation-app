<?php

namespace Database\Seeders;

use App\Models\Resume;
use App\Models\Template;
use App\Models\Candidate;
use App\Models\Education;
use Illuminate\Support\Arr;
use App\Models\ResumeTemplate;
use Illuminate\Database\Seeder;
use App\Models\CandidateLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating resume templates
        $this->createTemplates();

        // Creating resumes for candidates
        $candidates = Candidate::all();

        foreach ($candidates as $candidate) {
            if ($candidate->id == 1) {
               for ($i=0; $i < 15; $i++) {
                   $this->createResume($candidate);
               }
            }else{
                $this->createResume($candidate);
            }
        }
    }

    protected function createTemplates(){
        $templates = [
            [
                'name' => 'Classic',
                'preview' => 'frontend/assets/images/resume/resume-1.png',
                'file_name' => 'resume-1',
            ],
            [
                'name' => 'Modern',
                'preview' => 'frontend/assets/images/resume/resume-2.png',
                'file_name' => 'resume-2',
            ],
            [
                'name' => 'Creative',
                'preview' => 'frontend/assets/images/resume/resume-3.png',
                'file_name' => 'resume-3',
            ],
            [
                'name' => 'Professional',
                'preview' => 'frontend/assets/images/resume/resume-4.png',
                'file_name' => 'resume-4',
            ],
        ];

        foreach ($templates as $template) {
            ResumeTemplate::create($template);
        }


        // ResumeTemplate::create([
        //     'name' => 'Classic',
        //     'preview' => 'frontend/assets/images/resume/resume-1.png',
        //     'file_name' => 'resume-1',
        // ]);

        // ResumeTemplate::create([
        //     'name' => 'Modern',
        //     'preview' => 'frontend/assets/images/resume/resume-2.png',
        //     'file_name' => 'resume-2',
        // ]);

        // ResumeTemplate::create([
        //     'name' => 'Creative',
        //     'preview' => 'frontend/assets/images/resume/resume-3.png',
        //     'file_name' => 'resume-3',
        // ]);

        // ResumeTemplate::create([
        //     'name' => 'Professional',
        //     'preview' => 'frontend/assets/images/resume/resume-4.png',
        //     'file_name' => 'resume-4',
        // ]);
    }

    public function createResume($candidate){
        $templates = ResumeTemplate::all();
        $skills = ['html', 'css', 'javascript', 'php', 'laravel', 'vue', 'react', 'angular', 'mysql', 'mongodb', 'python', 'django', 'java', 'c#', 'c++', 'c', 'ruby', 'ruby on rails', 'swift', 'kotlin', 'flutter', 'dart', 'go', 'rust', 'scala', 'typescript', 'nodejs', 'expressjs', 'bootstrap', 'tailwind', 'jquery', 'git', 'github', 'gitlab', 'bitbucket', 'docker', 'kubernetes', 'aws', 'azure', 'google cloud', 'linux', 'windows', 'macos', 'ubuntu', 'debian', 'centos', 'redhat', 'fedora', 'suse', 'arch', 'gentoo', 'alpine', 'nginx', 'apache', 'microsoft iis', 'microsoft sql server', 'mysql', 'postgresql', 'oracle', 'mongodb', 'redis', 'memcached', 'elasticsearch', 'rabbitmq', 'apache kafka', 'apache cassandra', 'apache hadoop', 'apache spark', 'apache flink', 'apache storm', 'apache hive', 'apache pig', 'apache zeppelin', 'apache superset', 'apache airflow', 'apache druid', 'apache pinot', 'apache tika', 'apache solr', 'apache nifi', 'apache atlas', 'apache ranger', 'apache ambari', 'apache bookkeeper', 'apache dubbo', 'apache flume', 'apache kylin', 'apache mahout', 'apache pulsar', 'apache sharding sphere', 'apache shiro', 'apache skywalking', 'apache tez', 'apache zookeeper', 'apache camel', 'apache ignite', 'apache jena', 'apache kafka', 'apache nutch', 'apache opennlp', 'apache parquet', 'apache pig', 'apache ranger', 'apache solr', 'apache spark', 'apache storm', 'apache tika', 'apache zookeeper', 'apache hadoop', 'apache hive', 'apache mahout', 'apache nutch', 'apache opennlp', 'apache parquet', 'apache pig', 'apache ranger', 'apache solr', 'apache spark', 'apache storm', 'apache tika', 'apache zookeeper', 'apache hadoop', 'apache hive', 'apache'];

        $tools = ['git', 'github', 'gitlab', 'bitbucket', 'docker', 'kubernetes', 'aws', 'azure', 'google cloud', 'linux', 'windows', 'macos', 'ubuntu', 'debian', 'centos', 'redhat', 'fedora', 'suse', 'arch', 'gentoo', 'alpine', 'nginx', 'apache', 'microsoft iis', 'microsoft sql server', 'mysql', 'postgresql', 'oracle', 'mongodb', 'redis', 'memcached', 'elasticsearch', 'rabbitmq', 'apache kafka', 'apache cassandra', 'apache hadoop', 'apache spark', 'apache flink', 'apache storm', 'apache hive', 'apache pig', 'apache zeppelin', 'apache superset', 'apache airflow', 'apache druid', 'apache pinot', 'apache tika', 'apache solr', 'apache nifi', 'apache atlas', 'apache ranger', 'apache ambari', 'apache bookkeeper', 'apache dubbo', 'apache flume', 'apache kylin', 'apache mahout', 'apache pulsar', 'apache sharding sphere', 'apache shiro', 'apache skywalking', 'apache tez', 'apache zookeeper', 'apache camel', 'apache ignite', 'apache jena', 'apache kafka', 'apache nutch', 'apache opennlp', 'apache parquet', 'apache pig', 'apache ranger', 'apache solr', 'apache spark', 'apache storm', 'apache tika', 'apache zookeeper', 'apache hadoop', 'apache hive', 'apache mahout', 'apache nutch', 'apache opennlp', 'apache parquet', 'apache pig', 'apache ranger', 'apache solr', 'apache spark', 'apache storm', 'apache tika', 'apache zookeeper', 'apache hadoop', 'apache hive', 'apache'];

        $hobbies = ['reading', 'writing', 'travelling', 'cooking', 'gardening', 'swimming', 'dancing', 'singing', 'playing', 'gaming', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series', 'watching movies', 'watching tv shows', 'watching sports', 'watching news', 'watching documentaries', 'watching cartoons', 'watching anime', 'watching web series'];

        $languages = CandidateLanguage::all()->pluck('name')->toArray();
        $educations = Education::all()->pluck('name')->toArray();

        $template = $templates->random();
        $resume = Resume::factory()->create([
            'resume_template_id' => $template->id,
            'candidate_id' => $candidate->id,
        ]);

        // Skills
        $resume_skills = collect($skills)->random(3);
        $resume->skills()->createMany($resume_skills->map(function ($skill) {
            return ['name' => $skill];
        })->toArray());

        // Tools
        $resume_tools = collect($tools)->random(2);
        $resume->tools()->createMany($resume_tools->map(function ($tool) {
            return ['name' => $tool];
        })->toArray());

        // Languages
        $resume_languages = collect($languages)->random(2);
        $resume->languages()->createMany($resume_languages->map(function ($language) {
            return ['name' => $language];
        })->toArray());

        // Hobbies
        $resume_hobbies = collect($hobbies)->random(2);
        $resume->hobbies()->createMany($resume_hobbies->map(function ($hobby) {
            return ['name' => $hobby];
        })->toArray());

        // Experiences
        for ($i=0; $i < 3; $i++) {
            $resume->experiences()->create([
                'company' => fake()->company,
                'position' => fake()->jobTitle,
                'description' => fake()->paragraph(1),
                'start_date' =>'Feb 2019',
                'end_date' => 'Jan 2020',
                'currently_working' => fake()->boolean,
            ]);
        }

        // Educations
        for ($i=0; $i < 3; $i++) {
            $resume->educations()->create([
                'institute' => fake()->company,
                'degree' => Arr::random($educations),
                'start_date' => 'Feb 2019',
                'end_date' => 'Jan 2022',
                'currently_studying' => fake()->boolean,
            ]);
        }

        // Achievements
        for ($i=0; $i < 3; $i++) {
            $resume->achievements()->create([
                'name' => fake()->sentence(1),
                'date' => '2020-05-05',
            ]);
        }

        // Projects
        for ($i=0; $i < 3; $i++) {
            $resume->projects()->create([
                'name' => fake()->sentence(1),
                'description' => fake()->paragraph(1),
                'link' => fake()->url,
            ]);
        }

        // Social Links
        for ($i=0; $i < 3; $i++) {
            $resume->socialMedia()->create([
                'type' => Arr::random(['facebook', 'twitter', 'linkedin', 'github']),
                'link' => fake()->url,
            ]);
        }
    }
}
