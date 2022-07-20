<?php

namespace App\Http\Requests\Player;

use Illuminate\Foundation\Http\FormRequest;

class PlayerUpdateRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
