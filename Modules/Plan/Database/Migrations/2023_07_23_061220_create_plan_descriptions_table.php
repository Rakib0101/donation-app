<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Plan\Entities\Plan;

class CreatePlanDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Plan::class)->constrained()->onDelete('cascade');
            $table->string('locale', 4);
            $table->text('description');
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
        Schema::dropIfExists('plan_descriptions');
    }
}
