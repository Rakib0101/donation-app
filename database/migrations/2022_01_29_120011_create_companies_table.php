<?php

use App\Models\Company;
use App\Models\IndustryType;
use App\Models\OrganizationType;
use App\Models\TeamSize;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(IndustryType::class, 'industry_type_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(OrganizationType::class, 'organization_type_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(TeamSize::class, 'team_size_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->date('establishment_date')->nullable();
            $table->string('website')->nullable();
            $table->boolean('visibility')->default(1);
            $table->boolean('profile_completion')->default(0);
            $table->text('bio')->nullable();
            $table->text('vision')->nullable();
            $table->unsignedBigInteger('total_views')->default(0);

            $table->boolean('question_feature_enable')->default(true);

            $table->boolean('is_profile_verified')->default(false);
            $table->dateTime('document_verified_at')->nullable();

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

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('company_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->boolean('reuse')->default(true);
            $table->string('title');
            $table->boolean('required');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('company_question_job', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id');
            $table->foreignId('company_question_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('company_bookmark_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('application_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->smallInteger('order')->default(0);
            $table->boolean('is_deleteable')->default(true);
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
        Schema::dropIfExists('companies');
        Schema::dropIfExists('job_questions');
        Schema::dropIfExists('company_question_job');
        Schema::dropIfExists('company_bookmark_categories');
        Schema::dropIfExists('application_groups');
    }
}
