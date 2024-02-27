<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cookies extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'allow_cookies', 'cookie_name', 'cookie_expiration', 'force_consent', 'darkmode', 'language', 'title', 'description', 'button_text',
    ];

    protected $casts = [
        'allow_cookies' => 'boolean',
        'force_consent' => 'boolean',
        'darkmode' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();

        self::updated(function ($model) {
            forgetCache('cookies');
        });
    }
}
