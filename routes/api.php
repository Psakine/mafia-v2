<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ClubController;
use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\TournamentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PlayerController::class)
    ->prefix('players')
    ->group(static function () {
        Route::get('/', 'index');
        Route::post('/', 'create');
        Route::put('/{playerId}', 'update');
        Route::delete('/{playerId}', 'delete');
        Route::get('/{playerId}', 'player');
    });

Route::controller(CityController::class)
    ->prefix('city')
    ->group(static function () {
        Route::get('/', 'index');
        Route::post('/', 'create');
        Route::put('/{cityId}', 'update');
        Route::delete('/{cityId}', 'delete');
        Route::get('/{cityId}', 'city');
    });

Route::controller(ClubController::class)
    ->prefix('club')
    ->group(static function () {
        Route::get('/', 'index');
        Route::post('/', 'create');
        Route::put('/{clubId}', 'update');
        Route::delete('/{clubId}', 'delete');
        Route::get('/{clubId}', 'club');
    });

Route::controller(FileController::class)
    ->prefix('file')
    ->group(static function () {
        Route::post('/', 'upload');
        Route::delete('/{clubId}', 'delete');
    });

Route::controller(GameController::class)
    ->prefix('game')
    ->group(static function () {
        Route::get('/', 'index');
        Route::post('/', 'create');
        Route::put('/{gameId}', 'update');
        Route::delete('/{gameId}', 'delete');
        Route::get('/{gameId}', 'game');
    });

Route::controller(TournamentController::class)
    ->prefix('tournament')
    ->group(static function () {
        Route::get('/', 'index');
        Route::post('/', 'create');
        Route::put('/{tournamentId}', 'update');
        Route::delete('/{tournamentId}', 'delete');
        Route::get('/{tournamentId}', 'tournament');
    });
