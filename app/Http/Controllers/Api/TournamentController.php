<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tournament\TournamentCreateRequest;
use App\Http\Requests\Tournament\TournamentUpdateRequest;
use App\Http\Resources\Tournament\TournamentDetailResource;
use App\Http\Resources\Tournament\TournamentListResource;
use App\Services\TournamentService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TournamentController extends Controller
{
    private TournamentService $tournamentService;

    public function __construct(TournamentService $tournamentService)
    {
        $this->tournamentService = $tournamentService;
    }

    public function index(): AnonymousResourceCollection
    {
        return TournamentListResource::collection($this->tournamentService->all());
    }

    public function player(int $tournamentId): TournamentDetailResource
    {
        //TODO:IMPLEMENT
        return new TournamentDetailResource($this->tournamentService->getById($tournamentId));
    }

    public function create(TournamentCreateRequest $request): TournamentDetailResource
    {
        //TODO:IMPLEMENT
        return new TournamentDetailResource([]);
    }

    public function update(TournamentUpdateRequest $request): TournamentDetailResource
    {
        //TODO:IMPLEMENT
        return new TournamentDetailResource([]);
    }

    public function delete(int $tournamentId): bool
    {
        //TODO:IMPLEMENT
        return true;
    }
}
