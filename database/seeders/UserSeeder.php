<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Club;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(50)
            ->sequence(
                fn($sequence) => [
                    'city_id' => City::all()->random()->id,
                    'club_id' => Club::all()->random()->id
                ]
            )
            ->create();
    }
}
