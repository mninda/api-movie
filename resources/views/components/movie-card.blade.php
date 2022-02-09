<div class="col-lg-2 col-md-6 my-2">
    <div class="card bg-black border-0 text-white">
        <div class="card-body">
            <a href="{{route('movies.show',$movie['id'])}}">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['backdrop_path']}}" alt="" class="img-fluid">
            </a>
            <h3>{{$movie['title']}}</h3>
            <div class="d-flex">
                <box-icon type='solid' name='star' color="yellow"></box-icon>
                <strong>{{$movie['vote_average'] * 10 . '%'}}</strong> |
                <strong>{{\Carbon\Carbon::parse($movie['release_date'])->format('d,m,y')}}</strong>
            </div>
            <div class="d-flex">
                @foreach($movie['genre_ids'] as $genre)
                    {{$genres->get($genre)}}
                    @if(!$loop->last)
                        ,
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
