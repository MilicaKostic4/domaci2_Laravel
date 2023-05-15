<?php

namespace Database\Factories;

use App\Models\Kategorija;
use App\Models\Predavac;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kurs>
 */
class KursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nazivKursa'=>$this->faker->unique()->sentence($nbWords=3, $variableNbWords=true),
            'trajanje'=>$this->faker->numberBetween($min=1, $max=50),
            'godina'=>$this->faker->numberBetween($min=2000, $max=2023),
            'ocena'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min=3, $max=5),
            'sadrzaj'=>$this->faker->sentence(),
            'cena'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min=1, $max=50),
            'predavac_id'=>function(){
                return Predavac::all()->random();
            },
            'kategorija_id'=>function(){
                return Kategorija::all()->random();
            },
            'user_id'=>User::factory()
        ];
    }
}
