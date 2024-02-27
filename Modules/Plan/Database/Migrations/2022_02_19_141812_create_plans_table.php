<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('label')->unique();
            $table->float('price');
            $table->integer('job_limit');
            $table->integer('featured_job_limit');
            $table->integer('highlight_job_limit');
            $table->enum('candidate_cv_view_limitation', ['unlimited', 'limited'])->default('limited');
            $table->integer('candidate_cv_view_limit')->default(0);
            $table->boolean('profile_verify')->default(false);
            $table->boolean('recommended')->default(false);
            $table->boolean('frontend_show')->default(false);
            $table->enum('payment_type', ['recurring', 'one_time', 'free', 'lifetime'])->default('one_time');
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
        Schema::dropIfExists('plans');
    }
}
