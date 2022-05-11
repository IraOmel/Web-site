@extends('layouts.layout')

@section('title')
    Send Form
@endsection

@section('style')
    <link href={{asset('css/main.css')}} rel="stylesheet">
    <link href={{asset('css/info_page.css')}} rel="stylesheet">
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="formOkMsg">
            @php
                $ind=true
            @endphp
            @foreach (explode(" ", preg_replace('/\s+/', '', $name)) as $item)
                @if (!ctype_alpha($item) && !preg_match(("/^[\p{L}]+$/u"), $item))
                    @php
                        $ind=false
                    @endphp
                @endif
            @endforeach
                @if ($ind==false)
                    <h3>Неправильно введені дані:</h3>
                    <p> 'Будь ласка, вкажіть своє ім'я правильно'; </p>
                @else
                    <h3>Дякуємо! </h3>
                    <h3>Ми отримали від вас такі дані:</h3>
                    <p>Ваше ім'я: {{$name}} </p>
                @endif
            <p>Ваш email: {{$email}}</p>
            <p>Ваше повідомлення: {{$message}}</p>
            <p><a href="/about">Повернутись</a> до заповнення форми</p>
        </div>
        <div class="content">
            <div class="title m-b-md">
                Build Company
            </div>
            <img src={{asset('images/logo.png')}} , alt="build-company logo"/>
        </div>
    </div>
@endsection


