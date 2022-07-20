<?php

namespace App\Models;

use App\Traits\ModelTableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $name
 * @property int $city_id
 * @property int $club_id
 */
class Tournament extends Model
{
    use HasFactory;
    use ModelTableTrait;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'city_id',
        'club_id'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class, 'club_id', 'id');
    }
}
