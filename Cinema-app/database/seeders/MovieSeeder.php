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
            [
                'title' => 'Igrzyska śmierci: W pierścieniu ognia',
                'imagePath' => 'https://wallpaperswide.com/download/the_hunger_games_catching_fire_movie-wallpaper-2400x1350.jpg',
                'length' => $this->minutesToTime(150),
                'description' => 'Description of the movie 4',
            ],
            [
                'title' => 'Legion samobójców',
                'imagePath' => 'https://a-static.besthdwallpaper.com/the-suicide-squad-harley-quinn-wallpaper-2560x1440-87232_51.jpg',
                'length' => $this->minutesToTime(120),
                'description' => 'Description of the movie 5',
            ],
            [
                'title' => 'Creed: Narodziny legendy',
                'imagePath' => 'https://images.alphacoders.com/691/691868.jpg',
                'length' => $this->minutesToTime(130),
                'description' => 'Description of the movie 6',
            ],
            [
                'title' => 'Władca Pierścieni: Powrót króla',
                'imagePath' => 'https://www.testergier.pl/wp-content/uploads/2021/01/powrot-krola.jpg',
                'length' => $this->minutesToTime(200),
                'description' => 'Description of the movie 7',
            ],
            [
                'title' => 'Zwierzogród',
                'imagePath' => 'https://fwcdn.pl/nph/867323/2020/25927_1.11.jpg',
                'length' => $this->minutesToTime(110),
                'description' => 'Description of the movie 8',
            ],
            [
                'title' => 'Split',
                'imagePath' => 'https://images6.alphacoders.com/800/800835.jpg',
                'length' => $this->minutesToTime(120),
                'description' => 'Description of the movie 9',
            ],
            [
                'title' => 'Joker',
                'imagePath' => 'https://images.hdqwalls.com/wallpapers/joker-2019-76.jpg',
                'length' => $this->minutesToTime(120),
                'description' => 'Description of the movie 10',
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
