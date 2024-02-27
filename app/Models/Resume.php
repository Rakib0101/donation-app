<?php

namespace App\Models;

use App\Models\ResumeTool;
use App\Models\ResumeHobby;
use App\Models\ResumeSkill;
use Illuminate\Support\Str;
use App\Models\ResumeLanguage;
use App\Models\ResumeTemplate;
use App\Models\ResumeEducation;
use App\Models\ResumeExperience;
use App\Models\ResumeAchievement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resume extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $appends = ['photo_url','photo_path'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getPhotoUrlAttribute()
    {
        if (!$this->photo) {
            return asset('backend/image/default.png');
        }

        return asset($this->photo);
    }

    public function getPhotoPathAttribute()
    {
        $has_full_path = Str::contains($this->photo, ['https', 'http']) ? true : false;

        if (!$this->photo || $has_full_path) {
            return 'backend/image/default.png';
        }

        return $this->photo;
    }

    public function template()
    {
        return $this->belongsTo(ResumeTemplate::class);
    }

    public function experiences()
    {
        return $this->hasMany(ResumeExperience::class);
    }

    public function skills()
    {
        return $this->hasMany(ResumeSkill::class);
    }

    public function tools()
    {
        return $this->hasMany(ResumeTool::class);
    }

    public function languages()
    {
        return $this->hasMany(ResumeLanguage::class);
    }

    public function hobbies()
    {
        return $this->hasMany(ResumeHobby::class);
    }

    public function educations()
    {
        return $this->hasMany(ResumeEducation::class);
    }

    public function achievements()
    {
        return $this->hasMany(ResumeAchievement::class);
    }

    public function projects()
    {
        return $this->hasMany(ResumeProject::class);
    }

    public function socialMedia()
    {
        return $this->hasMany(ResumeSocialMedia::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
