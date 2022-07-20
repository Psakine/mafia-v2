<?php

namespace App\Http\Resources\Tournament;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TournamentListResource extends JsonResource
{
    /**
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Tournament $this */
        return parent::toArray($request);
    }
}
