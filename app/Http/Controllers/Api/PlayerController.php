<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Player\PlayerListResource;
use App\Services\PlayerService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PlayerController extends Controller
{
    private PlayerService $playerService;

    public function __construct(PlayerService $playerService)
    {
        $this->playerService = $playerService;
    }

    public function index(): AnonymousResourceCollection
    {
        return PlayerListResource::collection($this->playerService->all());
    }
}
