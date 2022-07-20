<?php

use App\Models\City;
use App\Models\Club;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create(Club::getTableName(), static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('city_id');
            $table->timestamps();

            $table->foreign('city_id')
                ->references('id')
                ->on(City::getTableName())
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Club::getTableName());
    }
};
