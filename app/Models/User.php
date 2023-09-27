<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'email_verified_at', 'bio', 'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // on create, create cart
    protected static function booted()
    {
        static::creating(function ($user) {
            $user->cart()->create([
                'amount' => 0
            ]);
        });

        static::deleting(function ($user) {
            $user->cart()->delete();
        });
    }

    public function traffics()
    {
        return $this->hasMany(RateLimit::class);
    }

    public function logs()
    {
        return $this->hasMany(RateLimitDetail::class, 'user_id');
    }

    public function report_errors()
    {
        return $this->hasMany(ReportError::class);
    }

    public function cart()
    {
        return $this->HasOne(Cart::class);
    }

    public function wishlist()
    {
        return $this->HasMany(Wishlist::class);
    }

    public function addresses()
    {
        return $this->HasMany(Address::class);
    }
}
