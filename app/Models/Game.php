<?php

namespace App\Models;

use App\Traits\ModelTableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $name
 * @property int $tournament_id
 * @property bool $is_final
 */
class Game extends Model
{
    use HasFactory;
    use ModelTableTrait;

    protected $fillable = [
        'name',
        'tournament_id',
        'is_final'
    ];

    public function tournament(): BelongsTo
    {
        return $this->belongsTo(Tournament::class, 'tournament_id', 'id');
    }
}
