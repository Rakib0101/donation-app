<?php

use App\Models\MenuSettings;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();

            $table->string('dark_logo')->nullable();
            $table->string('light_logo')->nullable();

            $table->string('favicon_image')->nullable();
            $table->text('header_css')->nullable();
            $table->text('header_script')->nullable();
            $table->text('body_script')->nullable();
            $table->string('sidebar_color')->nullable();
            $table->string('nav_color')->nullable();
            $table->string('sidebar_txt_color')->nullable();
            $table->string('nav_txt_color')->nullable();
            $table->string('main_color')->nullable();
            $table->string('accent_color')->nullable();
            $table->string('frontend_primary_color')->nullable();
            $table->string('frontend_secondary_color')->nullable();
            $table->string('working_process_step1_title')->nullable();
            $table->text('working_process_step1_description')->nullable();
            $table->string('working_process_step2_title')->nullable();
            $table->text('working_process_step2_description')->nullable();
            $table->string('working_process_step3_title')->nullable();
            $table->text('working_process_step3_description')->nullable();
            $table->string('working_process_step4_title')->nullable();
            $table->text('working_process_step4_description')->nullable();
            $table->boolean('dark_mode')->default(false);

            $table->boolean('search_engine_indexing')->default(1);
            $table->boolean('google_analytics')->default(0);

            $table->boolean('default_layout')->default(true);

            $table->unsignedInteger('default_plan')->default(1);
            $table->unsignedInteger('job_limit')->default(1);
            $table->unsignedInteger('featured_job_limit')->default(1);
            $table->unsignedInteger('highlight_job_limit')->default(1);
            $table->string('timezone')->default('UTC');
            $table->boolean('language_changing')->default(true);
            $table->boolean('email_verification')->default(false);

            $table->boolean('employer_auto_activation')->default(true);

            $table->boolean('per_job_active')->default(1);
            $table->float('per_job_price')->nullable()->default(100);
            $table->float('highlight_job_price')->nullable()->default(50);
            $table->float('featured_job_price')->nullable()->default(50);

            $table->integer('highlight_job_days')->nullable()->default(0);
            $table->integer('featured_job_days')->nullable()->default(0);

            $table->integer('job_deadline_expiration_limit')->default(30);

            $table->boolean('candidate_account_auto_activation')->default(true);

            $table->boolean('job_auto_approved')->default(false);
            $table->boolean('edited_job_auto_approved')->default(true);

            $table->string('app_pwa_icon')->default('/logo.png');
            $table->boolean('pwa_enable')->default(false);

            $table->boolean('currency_switcher')->default(true);

            $table->enum('default_map', ['google-map', 'leaflet'])->default('leaflet');

            $table->string('google_map_key')->nullable();
            $table->double('default_long')->nullable();
            $table->double('default_lat')->nullable();
            $table->enum('app_country_type', ['single_base', 'multiple_base'])->default('multiple_base');
            $table->unsignedBigInteger('app_country')->nullable();
            $table->foreign('app_country')->references('id')->on('countries')->onDelete('casCade');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('address');
            $table->text('map_address');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('title');
            $table->string('sub_title');
            $table->text('description');
            $table->text('live_job');
            $table->text('companies');
            $table->text('candidates');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('menu_settings', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->boolean('status')->default(true);
            $table->boolean('default')->default(false);
            $table->text('for')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('menu_settings_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MenuSettings::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('locale');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('timezones', function (Blueprint $table) {
            $table->id();
            $table->string('value');
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
        Schema::dropIfExists('settings');
        Schema::dropIfExists('website_settings');
        Schema::dropIfExists('menu_settings');
        Schema::dropIfExists('menu_settings_translations');
        Schema::dropIfExists('theme_settings');
        Schema::dropIfExists('timezones');
    }
}
