<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobListing extends Model
{
    /** @use HasFactory<\Database\Factories\JobListingFactory> */
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_listings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'employment_type',
        'location_type',
        'location',
        'salary_range',
        'deadline',
        'is_active',
        'poster_type',
        'poster_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'deadline' => 'datetime',
        'is_active' => 'boolean',
    ];

    /**
     * Get the poster (User or Company) of this job.
     */
    public function poster(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the applications submitted for this job.
     */
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }
}
