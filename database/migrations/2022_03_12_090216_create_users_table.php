<?php

use App\Models\City;
use App\Models\Club;
use App\Models\File;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(User::getTableName(), function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->string('name');
            $table->string('login');
            $table->string('email')->unique();
            $table->unsignedBigInteger('club_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('avatar_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('club_id')
                ->references('id')
                ->on(Club::getTableName())
                ->cascadeOnDelete();

            $table->foreign('city_id')
                ->references('id')
                ->on(City::getTableName())
                ->cascadeOnDelete();

            $table->foreign('avatar_id')
                ->references('id')
                ->on(File::getTableName())
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(User::getTableName());
    }
};
