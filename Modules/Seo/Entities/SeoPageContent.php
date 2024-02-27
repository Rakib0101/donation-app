<?php

namespace Modules\Seo\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeoPageContent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'page_id',
        'language_code',
        'title',
        'description',
        'image',
    ];

    protected static function newFactory()
    {
        return \Modules\Seo\Database\factories\SeoPageContentFactory::new();
    }
}
