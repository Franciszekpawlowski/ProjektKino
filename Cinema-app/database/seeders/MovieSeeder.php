<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
            [
                'title' => 'Zemsta Salazara',
                'imagePath' => 'https://i.ytimg.com/vi/Zu_GMfOEfAU/maxresdefault.jpg',
                'length' => $this->minutesToTime(120),
                'description' => 'Description of the movie 1',
            ],
            [
                'title' => 'Avatar',
                'imagePath' => 'https://cdn1.naekranie.pl/wp-content/uploads/2022/09/13_632db396a9f31.jpeg',
                'length' => $this->minutesToTime(150),
                'description' => 'Description of the movie 2',
            ],
            [
                'title' => 'John Wick 4',
                'imagePath' => 'https://images.thedirect.com/media/article_full/john-wick-4.jpg',
                'length' => $this->minutesToTime(130),
                'description' => 'Description of the movie 3',
            ],
        ]);
    }

    private function minutesToTime($minutes)
    {
        $hours = floor($minutes / 60);
        $minutes = ($minutes % 60);
        return sprintf('%02d:%02d:00', $hours, $minutes);
    }
}
