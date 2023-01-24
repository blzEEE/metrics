<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "region_id" => Region::get()->random()->id,
            "city" => $this->faker->city(),
            "name" => $this->faker->sentence(5),
            "address" => $this->faker->streetAddress(),
            "director_position" => $this->faker->sentence(3),
            "director_name" => $this->faker->userName(),
            "competitive" => 1
        ];
    }
}
