<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicationGroup extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function applications()
    {
        return $this->hasMany(AppliedJob::class, 'application_group_id');
    }
}
