<?php

namespace App\Http\Requests\Tournament;

use App\Models\City;
use App\Models\Club;
use Illuminate\Foundation\Http\FormRequest;

class TournamentUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['string', 'max:64'],
            'city_id' => ['int', 'exists:' . City::getTableName() . ',id'],
            'club_id' => ['int', 'exists:' . Club::getTableName() . ',id']
        ];
    }
}
