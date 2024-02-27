<?php

use App\Models\Candidate;
use App\Models\Company;
use App\Models\Job;
use App\Models\MessengerUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messenger_users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Candidate::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Job::class)->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('messengers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MessengerUser::class)->nullable()->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('from')->comment('sender');
            $table->unsignedBigInteger('to')->comment('receiver');
            $table->longText('body');
            $table->boolean('read')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('from')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('to')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messenger_users');
        Schema::dropIfExists('messengers');
    }
};
