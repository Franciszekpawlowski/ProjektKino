<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Storage::deleteDirectory("public/moviePicture");

        \App\Models\Movie::factory() -> count(10) -> create();
    }
}
