@extends('layouts.layouts_lab6')
@section('content')
    <body>

    <div class="info">
        <div class="director_film">
            <h2 class="director"> Genre: {{$obj['name']}} <br></h2>
            <h3 class="movies">{{$obj['name']}} movies:</h3>
            @foreach ($obj->movies as $movie)
                <li><a href="/film/{{$movie['id']}}" style="color: black;background: none;">{{$movie['title']}}</li>
            @endforeach
        </div>
    </div>
    </body>
    </html>
@endsection
