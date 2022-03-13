<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Club::factory()
            ->count(10)
            ->sequence(
                fn($sequence) => ['city_id' => City::all()->random()->id]
            )
            ->create();
    }
}
