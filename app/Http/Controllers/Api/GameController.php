<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\GameCreateRequest;
use App\Http\Requests\Game\GameUpdateRequest;
use App\Http\Resources\Game\GameDetailResource;
use App\Http\Resources\Game\GameListResource;
use App\Services\GameService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GameController extends Controller
{
    private GameService $gameService;

    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    public function index(): AnonymousResourceCollection
    {
        return GameListResource::collection($this->gameService->all());
    }

    public function player(int $gameId): GameDetailResource
    {
        //TODO:IMPLEMENT
        return new GameDetailResource($this->gameService->getById($gameId));
    }

    public function create(GameCreateRequest $request): GameDetailResource
    {
        //TODO:IMPLEMENT
        return new GameDetailResource([]);
    }

    public function update(GameUpdateRequest $request): GameDetailResource
    {
        //TODO:IMPLEMENT
        return new GameDetailResource([]);
    }

    public function delete(int $gameId): bool
    {
        //TODO:IMPLEMENT
        return true;
    }
}
