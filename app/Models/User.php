<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email ',
        'age',
        'gender',
        'phoneNumber',
        'photo',
        'staff',
        'password',
        'city',
        'quarter',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function status(): HasOne
    {
        return $this->hasOne(UserStatut::class);
    }
    // Notes que l'utilisateur a données
    public function givenRatings(): HasMany
    {
        return $this->hasMany(Evaluation::class, 'evaluator_id');
    }

    // Notes que l'utilisateur a reçues
    public function receivedRatings(): HasMany
    {
        return $this->hasMany(Evaluation::class, 'evaluated_id');
    }

    // Calcul de la note moyenne reçue
    public function averageRating()
    {
        return $this->receivedRatings()->avg('note');
    }

    // Nombre total de notes reçues
    public function ratingsCount()
    {
        return $this->receivedRatings()->count();
    }
}
