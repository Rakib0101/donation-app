<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalaryType extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    use SoftDeletes;

    protected $guarded = [];

    public $translatedAttributes = ['name'];

    protected $with = ['translations'];

    public function job()
    {
        return $this->hasMany(Job::class, 'salary_type_id');
    }
}
