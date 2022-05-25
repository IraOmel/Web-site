@extends('layouts.layouts_lab6')
@section('content')
    <body>

    <div class="info">
        <div class="director_film">
                <h2 class="director"> Director: {{$obj['name']}} - {{$obj['country']}}, {{$obj['date_birth']}} <br></h2>
                <h3 class="movies">Diretor's movies:</h3>
                @foreach ($obj->films as $film)
                    <li><a href="/film/{{$film['id']}}" style="color: black;background: none;">{{$film['title']}}</li>
                @endforeach
        </div>
    </div>
    </body>
    </html>
@endsection
