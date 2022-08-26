@extends('layouts.app')

@section('title')
    <h1>I miei film preferiti</h1>
@endsection

@section('movies')

<div class="movies-container">   
    @foreach ($movies as $movie)
        <div class="movie">
            <div class="movie_title">{{ $movie->title }}</div>
            <div class="movie_vote">Voto: {{ $movie->vote }}</div>
            <div class="movie_release">Uscito nel {{ $movie->date }}</div>
        </div>
        <br>
    @endforeach
</div> 

@endsection