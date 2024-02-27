<?php

use App\Models\ApplicationGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->constrained('candidates')->cascadeOnDelete();
            $table->foreignId('job_id')->constrained('jobs')->cascadeOnDelete();

            $table->foreignId('candidate_resume_id')->constrained('candidate_resumes')->cascadeOnDelete();

            $table->longText('cover_letter')->nullable();
            $table->foreignIdFor(ApplicationGroup::class)->constrained()->cascadeOnDelete();
            $table->smallInteger('order')->default(0);

            $table->json('answers')->nullable();

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
        Schema::dropIfExists('applied_jobs');
    }
}
