<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Club>
 */
class ClubFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['OM', 'DS', 'SH', 'RBF'])
        ];
    }
}
