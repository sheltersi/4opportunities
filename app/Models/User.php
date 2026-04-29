<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role', // candidate, precinct, super_admin
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the candidate profile associated with the user.
     * Only applicable if role = 'candidate'
     */
    public function candidateProfile(): HasOne
    {
        return $this->hasOne(CandidateProfile::class);
    }

    /**
     * Get the companies this user is a member of.
     */
    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'company_user')
            ->withPivot('role')
            ->withTimestamps();
    }

    /**
     * Get the precinct-user record for this user (stores precinct assignment).
     * Only applicable if role = 'precinct'
     */
    public function precinctUser(): HasOne
    {
        return $this->hasOne(PrecinctUser::class);
    }

    /**
     * Get the precinct name for this user (via precinct_user).
     */
    public function getPrecinctNameAttribute(): ?string
    {
        return $this->precinctUser?->precinct_name;
    }

    /**
     * Get the jobs posted by this user.
     */
    public function jobListings(): MorphMany
    {
        return $this->morphMany(JobListing::class, 'poster');
    }

    /**
     * Get the applications submitted by this user.
     */
    public function applications(): MorphMany
    {
        return $this->morphMany(Application::class, 'applicant');
    }

    /**
     * Check if user is a candidate.
     */
    public function isCandidate(): bool
    {
        return $this->role === 'candidate';
    }

    /**
     * Check if user is a precinct manager.
     */
    public function isPrecinct(): bool
    {
        return $this->role === 'precinct';
    }

    /**
     * Check if user is a super admin.
     */
    public function isSuperAdmin(): bool
    {
        return $this->role === 'super_admin';
    }

    /**
     * Get the user's full name.
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
