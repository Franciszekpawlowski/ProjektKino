<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $fakeImagePath = $this->faker->image(storage_path('app/public/moviePicture'),200,200, fullPath: false);

        return [
            'title' => fake() -> words(2, true),
            'description' => fake() -> sentence(),
            'length' => fake() -> time('H:i:s'),
            'imagePath' => "storage/moviePicture/" . basename($fakeImagePath),
        ];
    }
}
