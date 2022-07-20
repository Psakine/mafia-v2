<?php

namespace App\Http\Requests\Player;

use Illuminate\Foundation\Http\FormRequest;

class PlayerCreateRequest extends FormRequest
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
