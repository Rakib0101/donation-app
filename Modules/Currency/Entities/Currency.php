<?php

namespace Modules\Currency\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Currency extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function setCodeAttribute($code)
    {
        $this->attributes['code'] = Str::upper(str_replace(' ', '', $code));
    }

    protected static function newFactory()
    {
        return \Modules\Currency\Database\factories\CurrencyFactory::new();
    }
}
