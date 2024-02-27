<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobCategoryTranslation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
}
