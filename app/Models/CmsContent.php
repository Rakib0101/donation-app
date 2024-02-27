<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Language\Entities\Language;

class CmsContent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function language()
    {
        return $this->hasOne(Language::class, 'code', 'translation_code');
    }
}
