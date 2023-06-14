<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $path = "public/moviePicture";
        $fullPath = "app/$path";

        $fakeImagePath = $this->faker->image(storage_path($fullPath),200,200, fullPath: false);

        return [
            'title' => fake() -> words(2, true),
            'description' => fake() -> sentence(),
            'length' => fake() -> time('H:i:s'),
            'imagePath' => Storage::url("$path/$fakeImagePath"),
        ];
    }
}