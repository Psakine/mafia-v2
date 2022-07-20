<?php

namespace App\Http\Resources\Player;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlayerListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        /**
         * @var User $this
         */
        return [
            'id' => $this->id,
            'name' => $this->name,
            'nickname' => $this->nickname
        ];
    }
}
