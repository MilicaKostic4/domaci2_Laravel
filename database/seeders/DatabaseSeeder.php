<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategorija;
use App\Models\Kurs;
use App\Models\Predavac;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kategorija::truncate();
        Predavac::truncate();
        User::truncate();
        Kurs::truncate();

        $kategorija = new KategorijaSeeder;
        $kategorija->run();

        $predavac = new PredavacSeeder;
        $predavac->run();

        $kurs = new KursSeeder;
        $kurs->run();
    }
}
