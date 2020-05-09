<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::get('public/movies.json');
        $data = json_decode($json);
        $movies = (array)$data;

        foreach ($movies as $movie) {
            $_movie = new Movie();
            $_movie->title = $movie->title;
            $_movie->synopsis = $movie->synopsis;
            $_movie->year = $movie->year;
            $_movie->duration = $movie->duration;
            $_movie->rating = $movie->rating;
            $_movie->certificate = $movie->certificate;
            $_movie->thumbnail = $movie->thumbnail;

            $_movie->save();
        }
    }
}
