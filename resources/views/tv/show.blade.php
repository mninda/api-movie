@extends('layouts.main')
@section('content')
    <div class="container bg-black min-vh-100 mt-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-12 p-5">
                <div class="img-inner">
                    <img src="{{$tvshow['poster_path']}}"  alt="" class="container_img"/>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 p-5">
                <div class="">
                    <div class="title">
                        <h1>{{$tvshow['name']}}</h1>
                        <div class="d-flex align-items-center text-white">
                            <p class="">
                                <box-icon type='solid' name='calendar' color="white"></box-icon>
                                {{$tvshow['vote_average']}}
                                <span class="mx-2">|</span>
                                ({{$tvshow['first_air_date']}}
{{--                                <span class="mx-2">|</span>--}}
                            </p>
                            <p class="fw-bolder"> &nbsp;
{{--                                @foreach($tvshow['genres'] as $genre)--}}
{{--                                    {{$genre['name']}}--}}
{{--                                    @if(!$loop->last)--}}
{{--                                        ,--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
                            </p>
                        </div>
                    </div>
                    <div class="text-white">
                        <p>
                            {{$tvshow['overview']}}
                        </p>
                    </div>
                    <div class="my-3 text-white">
                        <h3 class="mb-3">Feature Crew</h3>
                        <div class="d-flex">
                            @foreach($tvshow['created_by'] as $crew)
                                <div class="me-5">
                                    <h4>{{$crew['name']}}</h4>
                                    <p class="fw-bolder">Creator</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="btns">
                        @if(count($tvshow['videos']['results']) > 0)
                            <a href="https://youtube.com/watch?v={{$tvshow['videos']['results'][0]['key']}}" target="_blank" class='btns_more'>
                                <box-icon name='play-circle' animation='tada' color="white"></box-icon>
                                Play Trailer
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-white">
        <!-- cast -->
        <div class="row my-3 py-5 justify-content-center">
            <h1 class="text-white text-center">Cast</h1>
            @foreach($tvshow['credits']['cast'] as $cast)
                @if($loop->index < 5)
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="card bg-dark text-white border-0">
                            <div class="card-body">
                                <a href="{{route('actors.show',$cast['id'])}}">
                                    <img src="{{'https://image.tmdb.org/t/p/w300/'.$cast['profile_path']}}" alt="{{$cast['name']}}" class="img-fluid" style="width: 100%">
                                </a>
                                <h3 class="my-2">{{$cast['name']}}</h3>
                                <strong>{{$cast['character']}}</strong>
                            </div>
                        </div>
                    </div>
                @else
                    @break
                @endif
            @endforeach
        </div>
        <hr class="text-white">
        <!-- shooting -->
        <div class="row justify-content-center">
            <h1 class="text-center text-white">Shooting Scene</h1>
            @foreach($tvshow['images'] as $image)
                @if($loop->index < 9)
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card bg-dark text-white border-0">
                            <div class="card-body">
                                <img src="{{'https://image.tmdb.org/t/p/original/'.$image['file_path']}}" alt="Shooting Scene" class="img-fluid" style="width: 100%">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <hr class="text-white">
    </div>
@endsection
