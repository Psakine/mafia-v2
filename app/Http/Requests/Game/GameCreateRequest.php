<?php

namespace App\Http\Requests\Game;

use App\Models\Tournament;
use Illuminate\Foundation\Http\FormRequest;

class GameCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:64'],
            'tournament_id' => ['required', 'int', 'exists:' . Tournament::getTableName() . 'id'],
            'is_final' => ['boolean']
        ];
    }
}
