@extends('layouts.app')

@section('content')
    <h1 style="color:gold" class="my-5 text-center">Welcome to my first laravel-model-controller</h1>
    <div class="container">
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <img src="{{ $movie->image }}" alt="">
                    <h4 class="w-100"><span>Titolo: </span>{{ $movie->title }}</h4>
                    <h5 class="w-100"><span>Data: </span>{{ $movie->date }}</h5>
                    <h5 class="w-100"><span>Voto: </span>{{ $movie->vote }}</h5>
                    <h5 class="w-100"><span>Nazionalità: </span>{{ $movie->nationality }}</h5>
                </li>
            @endforeach
        </ul>
    </div>
@endsection