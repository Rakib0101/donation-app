<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateExperience extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'candidate_id',
        'company',
        'department',
        'start',
        'end',
        'designation',
        'responsibilities',
        'currently_working',
    ];

    protected $appends = ['formatted_start', 'formatted_end'];

    public function getFormattedStartAttribute()
    {
        return formatTime($this->start, 'd M Y');
    }

    public function getFormattedEndAttribute()
    {
        return formatTime($this->end, 'd M Y');
    }
}
