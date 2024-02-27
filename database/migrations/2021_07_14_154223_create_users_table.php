<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->default('backend/image/default.png');
            $table->enum('role', ['company', 'candidate'])->default('candidate');
            $table->boolean('recent_activities_alert')->default(true);
            $table->boolean('job_expired_alert')->default(true);
            $table->boolean('new_job_alert')->default(true);
            $table->boolean('shortlisted_alert')->default(true);
            $table->boolean('status')->default(true);
            $table->boolean('is_demo_field')->default(false);

            $table->string('auth_type')->default('email');
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();

            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('social_media', ['facebook', 'twitter', 'instagram', 'youtube', 'linkedin', 'pinterest', 'reddit', 'github', 'other']);
            $table->string('url');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('phone')->nullable();
            $table->string('secondary_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('secondary_email')->nullable();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('social_links');
        Schema::dropIfExists('contact_infos');
    }
}
