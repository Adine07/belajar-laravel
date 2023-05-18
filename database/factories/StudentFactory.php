<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nis' => $this->faker->randomNumber(),
            'address' => $this->faker->address(),
            'birth_date' => $this->faker->date(),
            'gender' => rand(0,1),
            'major' => $this->faker->randomElement(['IPA', 'IPS', 'Bahasa']),
        ];
    }
}
