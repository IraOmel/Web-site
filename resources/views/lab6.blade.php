@extends('layouts.layouts_lab6')
@section('content')
<div class="info">
    <div class="director_film">
        @foreach ($directors as $director)
            <h2 class="director"> Director: {{$director['name']}} <br></h2>
            <h3 class="movies">Diretor's movies:</h3>
            @foreach ($director->films as $film)
                <li>{{$film['title']}}</li>
            @endforeach
        @endforeach
    </div>
    <div class="genre_film">
        @foreach ($genres as $genre)
            <h2 class="director">Genre: {{$genre['name'] }}<br></h2>
            <h3 class="movies">Movies: </h3>
            @foreach ($genre->movies as $movie)
                <li>{{$movie['title']}}</li>
            @endforeach
        @endforeach
    </div>
    <div class="film_genre">
    @foreach ($films as $film)
        <h2 class="director">Film: {{$film['title']}}<br></h2>
        <h3 class="movies">Genres:
        @foreach ($film->genres as $genre)
            {{$genre['name']}},
        @endforeach
        </h3>
    @endforeach
</div>
</div>
</body>
</html>
@endsection
