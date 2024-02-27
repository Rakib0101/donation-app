<?php

namespace App\Models;

use App\Http\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeTemplate extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'preview',
        'file_name',
    ];

    protected $appends = ['preview_url'];

    public function getPreviewUrlAttribute()
    {
        return asset($this->preview);
    }
}
