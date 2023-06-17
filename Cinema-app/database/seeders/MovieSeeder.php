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
        $path = "public/moviePicture";
        
        \Storage::deleteDirectory("public/moviePicture");
        sleep(0.5);
        \Storage::makeDirectory($path);

        \App\Models\Movie::factory() -> count(10) -> create();
    }
}
