<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebsiteSetting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'phone',
        'address',
        'map_address',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'created_at',
        'updated_at',
    ];
}
