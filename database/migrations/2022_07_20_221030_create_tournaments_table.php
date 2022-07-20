<?php

use App\Models\City;
use App\Models\Club;
use App\Models\Tournament;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Tournament::getTableName(), static function (Blueprint $table) {
            $table->id();
            $table->string('name', '64');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('club_id');
            $table->timestamps();

            $table->foreign('city_id')
                ->references('id')
                ->on(City::getTableName())
                ->cascadeOnDelete();

            $table->foreign('club_id')
                ->references('id')
                ->on(Club::getTableName())
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Tournament::getTableName());
    }
};
