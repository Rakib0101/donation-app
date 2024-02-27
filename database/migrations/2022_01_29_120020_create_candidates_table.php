<?php

use App\Models\Candidate;
use App\Models\CandidateLanguage;
use App\Models\Company;
use App\Models\JobRole;
use App\Models\Skill;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('role_id')->nullable()->constrained('job_roles')->cascadeOnDelete();
            $table->foreignId('profession_id')->nullable()->constrained('professions')->cascadeOnDelete();
            $table->foreignId('experience_id')->nullable()->constrained('experiences')->cascadeOnDelete();
            $table->foreignId('education_id')->nullable()->constrained('education')->cascadeOnDelete();

            $table->string('title')->nullable();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('website')->nullable();
            $table->string('photo')->nullable();
            $table->string('cv')->nullable();
            $table->text('bio')->nullable();

            $table->string('whatsapp_number')->nullable();

            $table->string('marital_status')->nullable();
            $table->datetime('birth_date')->nullable();
            $table->boolean('visibility')->default(1);
            $table->boolean('cv_visibility')->default(1);
            $table->boolean('received_job_alert')->default(1);
            $table->integer('profile_complete')->default(100);

            // this field will delete
            $table->string('exact_location')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('locality')->nullable();
            $table->string('place')->nullable();
            $table->string('district')->nullable();
            $table->string('postcode')->nullable();
            $table->string('region')->nullable();

            // Location Information
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->double('long')->nullable();
            $table->double('lat')->nullable();

            $table->enum('status', ['available', 'not_available', 'available_in'])->default('available');
            $table->date('available_in')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('candidate_languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('candidate_language', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(CandidateLanguage::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('candidate_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Skill::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('candidate_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class)->constrained()->cascadeOnDelete();
            $table->string('company');
            $table->string('department');
            $table->string('designation');
            $table->date('start');
            $table->date('end')->nullable();
            $table->text('responsibilities')->nullable();
            $table->boolean('currently_working')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('candidate_education', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class)->constrained()->cascadeOnDelete();
            $table->string('level');
            $table->string('degree');
            $table->integer('year');
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('candidate_job_alerts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(JobRole::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('candidate_cv_views', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->constrained();
            $table->foreignIdFor(Candidate::class)->constrained();
            $table->dateTime('view_date');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('candidate_resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('file');
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
        Schema::dropIfExists('candidates');
        Schema::dropIfExists('candidate_languages');
        Schema::dropIfExists('candidate_skill');
        Schema::dropIfExists('candidate_language');
        Schema::dropIfExists('candidate_experiences');
        Schema::dropIfExists('candidate_education');
        Schema::dropIfExists('candidate_job_alerts');
        Schema::dropIfExists('candidate_cv_views');
        Schema::dropIfExists('candidate_resumes');
    }
}
