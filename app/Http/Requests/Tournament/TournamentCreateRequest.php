<?php

namespace App\Http\Requests\Tournament;

use App\Models\City;
use App\Models\Club;
use Illuminate\Foundation\Http\FormRequest;

class TournamentCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:64'],
            'city_id' => ['required', 'int', 'exists:' . City::getTableName() . ',id'],
            'club_id' => ['required', 'int', 'exists:' . Club::getTableName() . ',id']
        ];
    }
}
