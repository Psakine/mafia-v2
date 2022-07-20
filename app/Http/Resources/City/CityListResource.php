<?php

namespace App\Http\Resources\City;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityListResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var City $this */
        return parent::toArray($request);
    }
}
