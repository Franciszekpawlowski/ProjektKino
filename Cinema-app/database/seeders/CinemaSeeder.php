<?php

namespace Database\Seeders;

use App\Models\Seance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cinema;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cinema::factory() -> count(10) -> create();
        // Cinema::factory(10) -> make() -> each(function ($cinema) {
        //     $cinema -> Seances() -> associate(Seance::inRandomOrder() -> first());
        //     $cinema -> save();
        // });

    }
}
