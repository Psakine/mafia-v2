<?php

namespace App\Http\Resources\Player;

use App\Models\User;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;
use JsonSerializable;

class PlayerListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request $request
     * @return array|Arrayable|JsonSerializable
     */
    #[ArrayShape(['name' => 'string', 'nickname' => 'string'])]
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        /**
 * @var User $this
*/
        return [
            'name' => $this->name,
            'nickname' => $this->nickname
        ];
    }
}
