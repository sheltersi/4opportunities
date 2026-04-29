<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PrecinctUser extends Model
{
    /** @use HasFactory<\Database\Factories\PrecinctUserFactory> */
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'precinct_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'precinct_name',
    ];

    /**
     * Get the user that manages this precinct.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
