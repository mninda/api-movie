@extends('layouts.main')
@section('content')
    <div class="container bg-black">
        <div class="row">
            <div class= 'container-box'>
                <div class="container_content">
                    <div class="container_content_inner">
                        <div class="title">
                            <h1>{{$movie['title']}}</h1>
                            <div class="d-flex">
                                <p>
                                    <box-icon type='solid' name='star' color="yellow"></box-icon>
                                    <span>{{$movie['vote_average'] * 10 . '%'}}
                                <span class="mx-2">|</span>
                                {{\Carbon\Carbon::parse($movie['release_date'])->format('d,m,y')}}
                                <span class="mx-2">|</span>
                                 @foreach($movie['genres'] as $genre)
                                            {{$genre['name']}}
                                            @if(!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                            </span>
                                </p>
                            </div>
                        </div>
                        <div class="par">
                            <p> {{$movie['overview']}}</p>
                        </div>
                        <div class="my-3">
                            <h3 class="mb-3">Feature Crew</h3>
                            <div class="d-flex">
                                @foreach($movie['credits']['crew'] as $crew)
                                    @if($loop->index < 2)
                                        <div class="me-5">
                                            <h4>{{$crew['name']}}</h4>
                                            <p class="fw-bolder">{{$crew['job']}}</p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="btns">
                            @if(count($movie['videos']['results']) > 0)
                                <a href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" target="_blank" class='btns_more'>
                                    <box-icon name='play-circle' animation='tada' color="white"></box-icon>
                                    Play Trailer
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="container_outer_img">
                    <div class="img-inner">
                        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['backdrop_path']}}"  alt="" class="container_img"/>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-white">
        <!-- cast -->
        <div class="row my-3 py-5 justify-content-center">
            <h1 class="text-white text-center">Cast</h1>
            @foreach($movie['credits']['cast'] as $cast)
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
            @foreach($movie['images']['backdrops'] as $image)
                @if($loop->index < 9)
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card bg-dark text-white border-0">
                            <div class="card-body">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}" alt="Shooting Scene" class="img-fluid" style="width: 100%">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <hr class="text-white">
    </div>
@endsection
