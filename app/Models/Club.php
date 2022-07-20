<?php

namespace App\Models;

use App\Traits\ModelTableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $name
 * @property Club $city
 */
class Club extends Model
{
    use HasFactory;
    use ModelTableTrait;

    protected $fillable = [
        'name',
        'city_id'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
