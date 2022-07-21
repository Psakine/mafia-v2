<?php

namespace App\Models;

use App\Traits\ModelTableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property Club $clubs
 */
class City extends Model
{
    use HasFactory;
    use ModelTableTrait;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];

    public function clubs(): HasMany
    {
        return $this->hasMany(Club::class, 'id', 'city_id');
    }
}
