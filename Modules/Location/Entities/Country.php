<?php

namespace Modules\Location\Entities;

use App\Http\Traits\Sluggable;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Location\Database\factories\CountryFactory::new();
    }

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            forgetCache('home_page_countries_jobs');
        });

        self::updated(function ($model) {
            forgetCache('home_page_countries_jobs');
        });

        self::deleted(function ($model) {
            forgetCache('home_page_countries_jobs');
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'country_id', 'id');
    }

    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class)->where('state_id', null);
    }

    public function statesWithCities()
    {
        return $this->states()->with('cities');
    }
}
