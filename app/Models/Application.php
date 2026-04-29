<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Application extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicationFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'job_listing_id',
        'applicant_type',
        'applicant_id',
        'cover_letter',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => 'string',
    ];

    /**
     * Get the job that this application is for.
     */
    public function jobListing(): BelongsTo
    {
        return $this->belongsTo(JobListing::class);
    }

    /**
     * Get the applicant (User or Company) who submitted this application.
     */
    public function applicant(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the candidate profile resume if applicant is a user with a candidate profile.
     */
    public function applicantResume(): ?CandidateProfile
    {
        if ($this->applicant_type === User::class && $this->applicant) {
            return $this->applicant->candidateProfile;
        }
        return null;
    }
}
