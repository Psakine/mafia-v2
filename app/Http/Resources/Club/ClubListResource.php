<?php

namespace App\Http\Resources\Club;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClubListResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Club $this */
        return parent::toArray($request);
    }
}
