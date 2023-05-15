<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Predavac>
 */
class PredavacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ime'=>$this->faker->firstName(),
            'prezime'=>$this->faker->lastName(),
            'zanimanje'=>$this->faker->randomElement(['softver inzenjer', 'web dizajner', 'sistem administrator', 'SAP konsultant', 'JAVA programer', 'PHP programer']),
            'obrazovanje'=>$this->faker->randomElement(['visa skola', 'visoka strucna sprema', 'specijalista', 'magistratura', 'doktorat', 'akademik'])
        ];
    }
}
