@extends('layouts.main')
@section('content')
    <div class="container bg-black min-vh-100 mt-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-12 p-5">
                <div class="img-inner">
                    <img src="{{$actor['profile_path']}}"  alt="" class="container_img"/>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    @if($social['facebook'])
                        <a href="{{$social['facebook']}}" target="_blank" class="mx-2"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="" style="width: 38px;height: 38px;border-radius: 50%"></a>
                    @endif
                    @if($social['twitter'])
                        <a href="{{$social['twitter']}}" target="_blank" class="mx-2"><img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" alt="" style="width: 38px;height: 38px;border-radius: 50%"></a>
                    @endif
                    @if($social['instagram'])
                            <a href="{{$social['instagram']}}" target="_blank" class="mx-2"><img src="data:image/jpeg;base64,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" alt="" style="width: 38px;height: 38px;border-radius: 50%"></a>
                        @endif
                </div>
            </div>
            <div class="col-lg-8 col-md-12 p-5">
                <div class="">
                    <div class="title">
                        <h1>{{$actor['name']}}</h1>
                        <div class="d-flex align-items-center text-white">
                            <p class="">
                                <box-icon type='solid' name='calendar' color="white"></box-icon>
                                {{$actor['birthday']}} ({{$actor['age']}} years old) Born in
                            </p>
                            <p class="fw-bolder"> &nbsp; {{$actor['place_of_birth']}}</p>
                        </div>
                    </div>
                    <div class="text-white">
                        <p>
                            {{$actor['biography']}}
                        </p>
                    </div>
                    <div class="my-3 text-white">
                        <h3 class="mb-3">Know For</h3>
                    </div>
                    <div class="row pt-5">
                        @foreach($creditMovies as $movie)
                            <div class="col-lg-2 col-md-6 col-sm-12 my-3">
                                <a href="{{$movie['linkToPage']}}">
                                    <img src="{{$movie['poster_path']}}" alt="" class="img-fluid" style="width: 100%">
                                </a>
                                <h4 class="mt-2 text-white">{{$movie['title']}}</h4>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <h1 class="text-center">Credits</h1>
            <div class="col-md-8">
                <ul class="list-group list-group-flush">
                    @foreach($credits as $credit)
                        <li class="list-group-item list-group-item-action bg-black text-white">
                            {{$credit['release_year']}}  &middot;
                            <strong>{{$credit['title']}}</strong>
                            as {{$credit['character']}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
