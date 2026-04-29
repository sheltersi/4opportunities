<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CandidateProfile extends Model
{
    /** @use HasFactory<\Database\Factories\CandidateProfileFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'headline',
        'location',
        'summary',
        'photo_path',
        'city',
        'state',
        'country',
        'postal_code',
        'resume_title',
        'resume_file_path',
        'resume_file_type',
    ];

    /**
     * Get the user that owns the candidate profile.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the skills associated with the candidate profile.
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'candidate_skill')
            ->withTimestamps();
    }

    /**
     * Get the applications submitted by this candidate.
     */
    public function applications(): HasMany
    {
        return $this->user->applications();
    }

    /**
     * Check if candidate has a resume uploaded.
     */
    public function hasResume(): bool
    {
        return !is_null($this->resume_file_path);
    }

    /**
     * Get the full resume URL attribute.
     */
    public function getResumeUrlAttribute(): ?string
    {
        return $this->resume_file_path ? asset('storage/' . $this->resume_file_path) : null;
    }
}
