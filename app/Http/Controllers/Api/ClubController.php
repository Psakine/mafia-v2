<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Club\ClubCreateRequest;
use App\Http\Requests\Club\ClubUpdateRequest;
use App\Http\Resources\Club\ClubDetailResource;
use App\Http\Resources\Club\ClubListResource;
use App\Services\ClubService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ClubController extends Controller
{
    private ClubService $clubService;

    public function __construct(ClubService $clubService)
    {
        $this->clubService = $clubService;
    }

    public function index(): AnonymousResourceCollection
    {
        return ClubListResource::collection($this->clubService->all());
    }

    public function player(int $clubId): ClubDetailResource
    {
        //TODO:IMPLEMENT
        return new ClubDetailResource($this->clubService->getById($clubId));
    }

    public function create(ClubCreateRequest $request): ClubDetailResource
    {
        //TODO:IMPLEMENT
        return new ClubDetailResource([]);
    }

    public function update(ClubUpdateRequest $request): ClubDetailResource
    {
        //TODO:IMPLEMENT
        return new ClubDetailResource([]);
    }

    public function delete(int $clubId): bool
    {
        //TODO:IMPLEMENT
        return true;
    }
}
