<?php

namespace Modules\Testimonial\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Testimonial\Database\factories\TestimonialFactory::new();
    }

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            forgetCache('home_page_testimonials');
        });

        self::updated(function ($model) {
            forgetCache('home_page_testimonials');
        });

        self::deleted(function ($model) {
            forgetCache('home_page_testimonials');
        });
    }

    public function getImageAttribute($image)
    {
        if ($image) {
            return $image;
        } else {
            return 'backend/image/default.png';
        }
    }
}
