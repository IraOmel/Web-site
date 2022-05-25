<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Films</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>

        body {
            font-family: "Didact Gothic", sans-serif;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }
        a {
            background-color: #ffffff;
            color: white;
            padding: -11em 1.5em;
            text-decoration: none;
            text-transform: uppercase;
        }
        .links{
            display: flex;
            align-items: center;
        }
        .info {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .director_film {
            display: flex;
            flex-direction: column;
        }

        .director {
            font-family: "Nunito", sans-serif;
            color: white;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .header_films{
            display: flex;
            flex-direction:row;
            justify-content: space-around;
        }

        :focus {
            outline: 0;
        }

        li {
            font-size: 22px;
        }

        h2 {
            margin-bottom: 16px;
        }
        nav {
            margin: auto;
            margin-top: 40px;
            position: relative;
            width: 223px;
            margin-right: 22px;
        }

        nav h2 {
            font-size: 1.5rem;
            border-radius: 2px;
            position: relative;
            background: #000000;
            padding-right: 25px;
            height: 40px;
            text-transform: uppercase;
            margin-bottom: 0;
            color: white;
            font-weight: 200;
            display: flex;
            flex: 1;
            justify-content: center;
            align-items: center;
            box-shadow: 4px 4px 20px -2px rgba(0, 0, 0, 0.35);
            transition: all 0.4s;
        }

        nav:hover h2 {
            transform: translateY(-2px);
            box-shadow: 2px 2px 5px -1px rgba(0, 0, 0, 0.35);
            transistion: all 0.4s;
        }
        #toggle {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            z-index: 1;
            opacity: 0;
            cursor: pointer;
            height: 40px;
        }

        h2::before{
            position: absolute;
            right: 0;
            top: 0;
            height: inherit;
            aspect-ratio: 1;
            background: currentColor;
            display: flex;
            align-items: center;
            padding-right: 1rem;
            content: "";
            clip-path: polygon(50% 25%, 20% 80%, 80% 80%);
            transform: rotate(180deg) scale(0.75);
        }

        #toggle:not(:checked) ~ h2::before {
            transform: rotate(0deg) scale(0.75);
        }

        #toggle:focus ~ h2{
            background: #000000;
            transition: background 0.45s;
        }

        #toggle:checked ~ ul {
            visibility: hidden;
            opacity: 0;
        }

        #toggle:not(:checked) ~ ul {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }


        nav ul {
            padding-left: 0;
            padding-top: 1rem;
            margin-top: 0;
            background: #ece5da;
            list-style: none;
            overflow: hidden;
            text-align: right;
            text-align: center;
            transition: all 0.4s ease-out;
            width: 100%;
            position: absolute;
        }
        nav ul li {
            border-radius: 2px;
            position: relative;
            display: inline-block;
            line-height: 1.5;
            width: 100%;
            margin: 0 0 0.25rem 0;
            background: #000000;
            transition: background 3s;
            box-shadow: 2px 2px 10px -2px rgba(0, 0, 0, 0.35);
        }

        nav ul li:hover,
        nav ul li a:focus {
            background: rgba(26, 26, 26, 0.92);
            transition: background 0.45s;
        }

        nav ul a {
            display: block;
            color: #000000;
            font-family: "Didact Gothic";
            font-weight: 200;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header class="header_films">
    <div class="links">
        <nav>
            <input id="toggle" type="checkbox" checked>
            <h2>Director</h2>
            <ul>
                @foreach($directors as $director)
                    <li><a href="/lab6/{{$director['id']}}">{{$director['name']}}</a></li>
                @endforeach
            </ul>
        </nav>
        <nav>
            <input id="toggle" type="checkbox" checked>
            <h2>Films</h2>
            <ul>
                @foreach($films as $film)
                    <li><a href="/film/{{$film['id']}}">{{$film['title']}}</a></li>
                @endforeach
            </ul>
        </nav>
        <nav>
            <input id="toggle" type="checkbox" checked>
            <h2>Genres</h2>
            <ul>
                @foreach($genres as $genre)
                    <li><a href="/genre/{{$genre['name']}}/{{$genre['id']}}">{{$genre['name']}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
@yield('content')
