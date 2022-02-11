<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTvRequest;
use App\Http\Requests\UpdateTvRequest;
use App\Models\Tv;
use App\ViewModels\TvShowViewModel;
use App\ViewModels\TvViewModel;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularTv = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')
            ->json()['results'];

//        dd($popularMovies);
        $topRatedTv = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/top_rated')
            ->json()['results'];
//        dump($movies);
        ##generes array
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $tvModel = new TvViewModel($popularTv,$topRatedTv,$genres);
        return view('tv.index',$tvModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTvRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTvRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tvshow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/'.$id.'?append_to_response=credits,videos,images')
            ->json();

        $tvShowModel = new TvShowViewModel($tvshow);

        return view('tv.show',$tvShowModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function edit(Tv $tv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTvRequest  $request
     * @param  \App\Models\Tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTvRequest $request, Tv $tv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tv $tv)
    {
        //
    }
}
