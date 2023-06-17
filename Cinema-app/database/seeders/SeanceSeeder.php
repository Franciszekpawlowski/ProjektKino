<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models;

class SeanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Models\Seance::factory(30) -> make() -> each(function ($seance) {
            $seance -> cinema() -> associate(Models\Cinema::inRandomOrder() -> first());
            $seance -> movie() -> associate(Models\Movie::inRandomOrder() -> first());
            $seance -> save();
        });
    }
}
