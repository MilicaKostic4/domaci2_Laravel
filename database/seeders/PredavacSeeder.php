<?php

namespace Database\Seeders;

use App\Models\Predavac;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PredavacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Predavac::factory(6)->create();
    }
}
