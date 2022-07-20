<?php

namespace App\Http\Resources\File;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FileDetailResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        /**@var File $this */
        return parent::toArray($request);
    }
}
