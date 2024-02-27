<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms', function (Blueprint $table) {
            $table->id();

            $table->string('about_brand_logo')->nullable();
            $table->string('about_brand_logo1')->nullable();
            $table->string('about_brand_logo2')->nullable();
            $table->string('about_brand_logo3')->nullable();
            $table->string('about_brand_logo4')->nullable();
            $table->string('about_brand_logo5')->nullable();
            $table->string('about_banner_img')->nullable();
            $table->string('about_banner_img1')->nullable();
            $table->string('about_banner_img2')->nullable();
            $table->string('about_banner_img3')->nullable();

            $table->string('candidate_image')->nullable();

            $table->string('employers_image')->nullable();

            $table->text('contact_map');
            $table->string('register_page_image')->nullable();
            $table->string('login_page_image')->nullable();

            $table->string('home_page_banner_image')->nullable();

            $table->string('page403_image')->nullable();

            $table->string('page404_image')->nullable();

            $table->string('page500_image')->nullable();

            $table->string('page503_image')->nullable();

            $table->string('comingsoon_image')->nullable();
            $table->string('footer_phone_no')->nullable();
            $table->string('footer_facebook_link')->nullable();
            $table->string('footer_instagram_link')->nullable();
            $table->string('footer_twitter_link')->nullable();
            $table->string('footer_youtube_link')->nullable();
            $table->longText('privacy_page')->nullable();
            $table->longText('terms_page')->nullable();

            $table->longText('refund_page')->nullable();

            $table->string('maintenance_image')->nullable();

            $table->string('payment_logo1')->nullable();
            $table->string('payment_logo2')->nullable();
            $table->string('payment_logo3')->nullable();
            $table->string('payment_logo4')->nullable();
            $table->string('payment_logo5')->nullable();
            $table->string('payment_logo6')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cms_contents', function (Blueprint $table) {
            $table->id();
            $table->string('page_slug')->nullable();
            $table->string('translation_code')->nullable();
            $table->longText('text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_title');
            $table->string('about_sub_title');
            $table->text('about_description');
            $table->string('about_brand_logo')->default('frontend/assets/images/all-img/brand-1.png');
            $table->string('about_brand_logo1')->default('frontend/assets/images/all-img/brand-2.png');
            $table->string('about_brand_logo2')->default('frontend/assets/images/all-img/brand-3.png');
            $table->string('about_brand_logo3')->default('frontend/assets/images/all-img/brand-1.png');
            $table->string('about_brand_logo4')->default('frontend/assets/images/all-img/brand-2.png');
            $table->string('about_brand_logo5')->default('frontend/assets/images/all-img/brand-3.png');
            $table->string('about_banner_img')->default('frontend/assets/images/banner/about-banner-1.jpg');
            $table->string('about_banner_img1')->default('frontend/assets/images/banner/about-banner-1.jpg');
            $table->string('about_banner_img2')->default('frontend/assets/images/banner/about-banner-1.jpg');
            $table->string('about_banner_img3')->default('frontend/assets/images/banner/about-banner-1.jpg');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('terms_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cookies', function (Blueprint $table) {
            $table->id();
            $table->boolean('allow_cookies')->default(true);
            $table->string('cookie_name')->default('gdpr_cookie');
            $table->tinyInteger('cookie_expiration')->default(30);
            $table->boolean('force_consent')->default(false);
            $table->boolean('darkmode')->default(false);
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
        Schema::dropIfExists('cms');
        Schema::dropIfExists('cms_contents');
        Schema::dropIfExists('abouts');
        Schema::dropIfExists('terms_categories');
        Schema::dropIfExists('cookies');
    }
}
