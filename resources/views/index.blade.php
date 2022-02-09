@extends('layouts.main')
@section('content')
    <div class="container py-5 my-5 bg-dark ">
        <div class="row mb-3">
            <h3 class="text-white text-decoration-underline">POPULAR MOVIES</h3>
        </div>
        <!-- popular movies -->
        <div class="row">
            @foreach($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>
            @endforeach
        </div>
        <hr class="text-white">
        <!-- now playing movies -->
        <div class="row my-3">
            <h3 class="text-white">Now Playing Movies</h3>
        </div>
        <div class="row">
            @foreach($nowPlayingMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>
            @endforeach
        </div>
    </div>
@endsection
