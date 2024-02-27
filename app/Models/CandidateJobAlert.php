<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateJobAlert extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function jobRole()
    {
        return $this->belongsTo(JobRole::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
