<?php

use App\Models\JobCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_categories', function (Blueprint $table) {
            $table->id();
            $table->longText('image')->nullable();
            $table->longText('icon')->nullable();
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('job_category_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(JobCategory::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('locale');
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
        Schema::dropIfExists('job_categories');
        Schema::dropIfExists('job_category_translations');
    }
}
