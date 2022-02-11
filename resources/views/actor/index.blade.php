@extends('layouts.main')
@section('content')
    <div class="container bg-black">
        <div class="row my-3 py-5 justify-content-center actor-row">
            <h1 class="text-white text-center">Popular Actors</h1>
            @foreach($popularActors as $actor)
                <div class="col-lg-3 col-md-6 col-sm-12 my-3 actor">
                    <div class="card bg-dark text-white border-0">
                        <div class="card-body">
                            <a href="{{route('actors.show',$actor['id'])}}">
                                <img src="{{ $actor['profile_path'] }}" alt="" class="img-fluid" style="width: 100%">
                            </a>
                            <h3 class="my-2">{{$actor['name']}}</h3>
                            <strong>{{$actor['known_for']}}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <div class="page-load-status d-flex justify-content-center my-5 text-white">
                <h3 class=" infinite-scroll-request spinner">Loading ...</h3>
                <h3 class="infinite-scroll-last">End of content</h3>
                <h3 class="infinite-scroll-error">No more pages to load</h3>
            </div>
{{--            <nav aria-label="Page navigation example">--}}
{{--                <ul class="pagination">--}}
{{--                    <li class="page-item">--}}
{{--                        @if($previous)--}}
{{--                            <a class="page-link" href="/actors/page/{{$previous}}">Previous</a>--}}
{{--                        @endif--}}
{{--                    </li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                    <li class="page-item">--}}
{{--                        @if($next)--}}
{{--                            <a class="page-link" href="/actors/page/{{$next}}">Next</a>--}}
{{--                        @endif--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
        </div>
        <hr class="text-white">
    </div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        let elem = document.querySelector('.actor-row');
        let infScroll = new InfiniteScroll( elem, {
            // options
            path: '/actors/page/@{{#}}',
            append: '.actor',
            status : '.page-load-status'
            // history: false,
        });
    </script>
@endsection
