<?php

namespace App\Http\Requests\Club;

use App\Models\Club;
use Illuminate\Foundation\Http\FormRequest;

class ClubUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['string', 'max:64'],
            'club_id' => ['exists:' . Club::getTableName() . ',id']
        ];
    }
}
