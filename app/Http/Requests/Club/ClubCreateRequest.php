<?php

namespace App\Http\Requests\Club;

use App\Models\Club;
use Illuminate\Foundation\Http\FormRequest;

class ClubCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:64'],
            'club_id' => ['required', 'exists:' . Club::getTableName() . ',id']
        ];
    }
}
