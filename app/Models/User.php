<?php

namespace App\Models;

use App\Traits\ModelTableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $nickname
 * @property string $login
 * @property int $club_id
 * @property int $city_id
 * @property int $avatar_id
 * @property Club $club
 * @property City $city
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use ModelTableTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
        'nickname',
        'login',
        'club_id',
        'city_id',
        'avatar_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class, 'club_id', 'id');
    }

    public function avatar(): BelongsTo
    {
        return $this->belongsTo(File::class, 'avatar_id', 'id');
    }
}
