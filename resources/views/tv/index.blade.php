@extends('layouts.main')
@section('content')
    <div class="container py-5 my-5 bg-dark ">
        <div class="row mb-3">
            <h3 class="text-white text-decoration-underline">POPULAR TV-shows</h3>
        </div>
        <!-- popular movies -->
        <div class="row">
            @foreach($popularTv as $tvshow)
                <x-tv-card :tvshow="$tvshow" :genres="$genres" />
            @endforeach
        </div>
        <hr class="text-white">
        <!-- now playing movies -->
        <div class="row my-3">
            <h3 class="text-white">Top Rated TV-show</h3>
        </div>
        <div class="row">
            @foreach($topRatedTv as $tvshow)
                <x-tv-card :tvshow="$tvshow" :genres="$genres" />
            @endforeach
        </div>
    </div>
@endsection
