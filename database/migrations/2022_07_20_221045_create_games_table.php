<?php

use App\Models\Game;
use App\Models\Tournament;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Game::getTableName(), static function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->unsignedBigInteger('tournament_id');
            $table->boolean('is_final');
            $table->timestamps();

            $table->foreign('tournament_id')
                ->references('id')
                ->on(Tournament::getTableName())
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Game::getTableName());
    }
};
