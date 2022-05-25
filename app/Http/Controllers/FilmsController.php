<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\Director;
use App\Models\Genre;
use App\Models\FilmGenre;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function insert_info()
    {
        $director = Director::firstOrNew(
            ['name' => "Christopher Nolan",
                'country' => "England",
                'date_birth' => '1970-07-30']
        );
        $director->save();

        $director_2 = Director::firstOrNew(
            ['name' => "Steven Spielberg",
                'country' => "USA",
                'date_birth' => '1946-12-18']
        );
        $director_2->save();

        $director_3 = Director::firstOrNew(
            ['name' => "Guy Ritchie",
                'country' => "England",
                'date_birth' => '1968-09-10']
        );
        $director_3->save();

        $film = Film::firstOrNew(
            ['title' => "Tenet",
                'director_id' => 1]
        );
        $film->save();

        $film_2 = Film::firstOrNew(
            ['title' => "Inception",
                'director_id' => 1]
        );
        $film_2->save();

        $film_3 = Film::firstOrNew(
            ['title' => "Inception",
                'director_id' => 1]
        );
        $film_3->save();

        $film_4 = Film::firstOrNew(
            ['title' => 'Dunkirk', 'director_id' => 1]
        );
        $film_4->save();

        $film_5 = Film::firstOrNew(
            ['title' => 'Schindler\'s List', 'director_id' => 2]
        );
        $film_5->save();

        $film_6 = Film::firstOrNew(
            ['title' => 'Ready Player One', 'director_id' => 2]
        );
        $film_6->save();
        $film_7 = Film::firstOrNew(
            ['title' => 'The Gentlemen', 'director_id' => 3]
        );
        $film_7->save();

        $film_8 = Film::firstOrNew(
            ['title' => 'Wrath of Man', 'director_id' => 3]
        );
        $film_8->save();

        $film_9 = Film::firstOrNew(
            ['title' => 'RocknRolla', 'director_id' => 3]
        );
        $film_9->save();

        $genre = Genre::firstOrNew(
            ['name' => "Crime"]
        );
        $genre->save();

        $genre_2 = Genre::firstOrNew(
            ['name' => "Action movie"]
        );
        $genre_2->save();

        $genre_3 = Genre::firstOrNew(
            ['name' => "War film"]
        );
        $genre_3->save();
        $genre_4 = Genre::firstOrNew(
            ['name' => "Science Fiction"]
        );
        $genre_4->save();
        $genre_5 = Genre::firstOrNew(
            ['name' => "Adventure"]
        );
        $genre_5->save();

        $genre_6 = Genre::firstOrNew(
            ['name' => "Drama"]
        );
        $genre_6->save();
        $genre_film = FilmGenre::firstOrNew(
            ['film_id' => 1, 'genre_id' => 2]
        );
        $genre_film->save();

        $genre2_film = FilmGenre::firstOrNew(
            ['film_id' => 1, 'genre_id' => 4]
        );
        $genre2_film->save();

        $genre_film2 = FilmGenre::firstOrNew(
            ['film_id' => 2, 'genre_id' => 2]
        );
        $genre_film2->save();

        $genre2_film2 = FilmGenre::firstOrNew(
            ['film_id' => 2, 'genre_id' => 4]
        );
        $genre2_film2->save();

        $genre_film3 = FilmGenre::firstOrNew(
            ['film_id' => 3, 'genre_id' => 2]
        );
        $genre_film3->save();

        $genre2_film3 = FilmGenre::firstOrNew(
            ['film_id' => 3, 'genre_id' => 3]
        );
        $genre2_film3->save();

        $genre_film4 = FilmGenre::firstOrNew(
            ['film_id' => 4, 'genre_id' => 3]
        );
        $genre_film4->save();

        $genre2_film4 = FilmGenre::firstOrNew(
            ['film_id' => 4, 'genre_id' => 6]
        );
        $genre2_film4->save();

        $genre_film5 = FilmGenre::firstOrNew(
            ['film_id' => 5, 'genre_id' => 4]
        );
        $genre_film5->save();

        $genre2_film5 = FilmGenre::firstOrNew(
            ['film_id' => 5, 'genre_id' => 5]
        );
        $genre2_film5->save();

        $genre_film6 = FilmGenre::firstOrNew(
            ['film_id' => 6, 'genre_id' => 1]
        );
        $genre_film6->save();

        $genre2_film6 = FilmGenre::firstOrNew(
            ['film_id' => 6, 'genre_id' => 2]
        );
        $genre2_film6->save();
        $genre_film7 = FilmGenre::firstOrNew(
            ['film_id' => 7, 'genre_id' => 2]
        );
        $genre_film7->save();
        $genre2_film7 = FilmGenre::firstOrNew(
            ['film_id' => 7, 'genre_id' => 6]
        );
        $genre2_film7->save();
        $genre_film8 = FilmGenre::firstOrNew(
            ['film_id' => 8, 'genre_id' => 1]
        );
        $genre_film8->save();
        $genre2_film8 = FilmGenre::firstOrNew(
            ['film_id' => 8, 'genre_id' => 1]
        );
        $genre2_film8->save();
    }

    public function show_info()
    {
        return view('lab6', ['directors' => Director::all(), 'films' =>Film::all(),
            'genres' =>Genre::all()]);
    }

    public function info_director($id){
        $director= Director::find($id);
        return view('lab6_directors',['obj'=>$director,'directors' => Director::all(), 'films' =>Film::all(),
            'genres' =>Genre::all()]);
    }

    public function info_film($id_film){
        $film= Film::find($id_film);
        return view('lab6_films',['obj'=>$film,'directors' => Director::all(), 'films' =>Film::all(),
            'genres' =>Genre::all()]);
    }

    public function info_genre($name,$id_genre){
        $genre= Genre::find($id_genre);
        return view('lab6_genres',['obj'=>$genre,'directors' => Director::all(), 'films' =>Film::all(),
            'genres' =>Genre::all()]);
    }
}
