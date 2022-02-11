<div class="col-lg-2 col-md-6 my-2">
    <div class="card bg-black border-0 text-white">
        <div class="card-body">
            <a href="{{route('tv.show',$tvshow['id'])}}">
                <img src="{{$tvshow['poster_path']}}" alt="Poster" class="img-fluid">
            </a>
            <h4 class="my-3">{{$tvshow['name']}}</h4>
            <div class="d-flex my-3">
                <box-icon type='solid' name='star' color="yellow"></box-icon>
                <strong>{{$tvshow['vote_average']}}</strong> <span class="mx-3">|</span>
                <strong>{{$tvshow['first_air_date']}}</strong>
            </div>
            <div class="d-flex">
{{--                {{$tvshow['genres']}}--}}
                @foreach($tvshow['genre_ids'] as $genre)
                    {{$genres->get($genre)}}
                    @if(!$loop->last)
                        ,
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
