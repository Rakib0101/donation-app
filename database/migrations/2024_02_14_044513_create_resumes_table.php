<?php

use App\Models\Resume;
use App\Models\Candidate;
use App\Models\ResumeTemplate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resume_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('preview')->nullable();
            $table->string('file_name');
            $table->timestamps();
        });

        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ResumeTemplate::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Candidate::class)->constrained()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('resume_no')->unique();
            $table->string('photo')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('profession')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->mediumText('description')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced'])->nullable();
            $table->boolean('is_active')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('resume_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->mediumText('description');
            $table->string('link');
            $table->timestamps();
        });

        Schema::create('resume_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('company');
            $table->string('position');
            $table->mediumText('description');
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->boolean('currently_working');
            $table->timestamps();
        });

        Schema::create('resume_education', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('institute');
            $table->string('degree');
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->boolean('currently_studying');
            $table->timestamps();
        });

        Schema::create('resume_social_media', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('type')-> comment('facebook, twitter, linkedin, github, etc.');
            $table->string('link');
            $table->timestamps();
        });

        Schema::create('resume_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('resume_tools', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('resume_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('resume_hobbies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('resume_achievements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Resume::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
        Schema::dropIfExists('resume_templates');
        Schema::dropIfExists('resume_projects');
        Schema::dropIfExists('resume_experiences');
        Schema::dropIfExists('resume_education');
        Schema::dropIfExists('resume_social_media');
        Schema::dropIfExists('resume_skills');
        Schema::dropIfExists('resume_tools');
        Schema::dropIfExists('resume_languages');
        Schema::dropIfExists('resume_hobbies');
    }
};
