@extends('layouts.layouts_lab6')
@section('content')
    <body>

    <div class="info">
        <div class="director_film">
            <h2 class="director"> Film: {{$obj['title']}} - <a
                    href="/lab6/{{$obj['director_id']}}"
                    style="color: black;background: none;">{{$obj->director['name']}}</a><br></h2>
            <h3 class="movies">Genre:</h3>
            @foreach ($obj->genres as $genre)
                <li><a href="/genre/{{$genre['name']}}/{{$genre['id']}}" style="color: black;background: none;">{{$genre['name']}}</li>
            @endforeach
        </div>
    </div>
    </body>
    </html>
@endsection
