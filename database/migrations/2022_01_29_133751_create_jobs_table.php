<?php

use App\Models\Benefit;
use App\Models\Job;
use App\Models\Skill;
use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            // Company Information
            $table->foreignId('company_id')->constrained('companies')->nullable()->cascadeOnDelete();
            $table->string('company_name')->nullable();
            $table->unsignedBigInteger('parent_job_id')->nullable();

            // Job attributes
            $table->foreignId('category_id')->constrained('job_categories')->cascadeOnDelete();
            $table->foreignId('role_id')->constrained('job_roles')->cascadeOnDelete();
            $table->foreignId('experience_id')->constrained('experiences')->cascadeOnDelete();
            $table->foreignId('education_id')->constrained('education')->cascadeOnDelete();
            $table->foreignId('job_type_id')->constrained('job_types')->cascadeOnDelete();
            $table->foreignId('salary_type_id')->constrained('salary_types')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('vacancies');

            // Salary Information
            $table->integer('min_salary')->nullable()->default(0);
            $table->integer('max_salary')->nullable()->default(0);
            $table->string('custom_salary')->nullable();
            $table->enum('salary_mode', ['range', 'custom'])->default('range');

            // Job Information
            $table->date('deadline')->nullable();
            $table->longText('description');
            $table->enum('status', ['pending', 'active', 'expired'])->default('pending');

            // Apply Information
            $table->enum('apply_on', ['app', 'email', 'custom_url'])->default('app');
            $table->string('apply_email')->nullable();
            $table->string('apply_url')->nullable();

            // Promotion Information
            $table->boolean('featured')->default(0);
            $table->dateTime('featured_at')->nullable();
            $table->date('featured_till')->nullable();
            $table->boolean('highlight')->default(0);
            $table->dateTime('highlight_at')->nullable();
            $table->date('highlight_till')->nullable();
            $table->boolean('urgent')->default(0);
            $table->dateTime('urgent_at')->nullable();
            $table->dateTime('urgent_till')->nullable();
            $table->unsignedBigInteger('total_views')->default(0);

            // this field will delete
            $table->string('exact_location')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('locality')->nullable();
            $table->string('place')->nullable();
            $table->string('district')->nullable();
            $table->string('postcode')->nullable();
            $table->string('region')->nullable();

            // Location Information
            $table->boolean('is_remote')->default(0);
            $table->foreignId('country_id')->nullable();
            $table->foreignId('state_id')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->string('address')->nullable();
            $table->double('long')->nullable();
            $table->double('lat')->nullable();

            // Job Approval Information
            $table->boolean('waiting_for_edit_approval')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('job_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Job::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Skill::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('job_benefit', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Job::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Benefit::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Job::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_skills');
        Schema::dropIfExists('job_benefit');
        Schema::dropIfExists('job_tag');
    }
}
