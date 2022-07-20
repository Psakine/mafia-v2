<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\City\CityCreateRequest;
use App\Http\Requests\City\CityUpdateRequest;
use App\Http\Resources\City\CityDetailResource;
use App\Http\Resources\City\CityListResource;
use App\Services\CityService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CityController extends Controller
{
    private CityService $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function index(): AnonymousResourceCollection
    {
        return CityListResource::collection($this->cityService->all());
    }

    public function player(int $cityId): CityDetailResource
    {
        //TODO:IMPLEMENT
        return new CityDetailResource($this->cityService->getById($cityId));
    }

    public function create(CityCreateRequest $request): CityDetailResource
    {
        //TODO:IMPLEMENT
        return new CityDetailResource([]);
    }

    public function update(CityUpdateRequest $request): CityDetailResource
    {
        //TODO:IMPLEMENT
        return new CityDetailResource([]);
    }

    public function delete(int $cityId): bool
    {
        //TODO:IMPLEMENT
        return true;
    }
}
