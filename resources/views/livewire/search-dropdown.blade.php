<div class="d-flex align-items-center">
    <input wire:model.debounce.500ms="search" type="text" class="form-control me-2" >
    <img src="https://www.kindpng.com/picc/m/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png" alt="" style="width: 38px;height: 38px;border-radius: 50%" class="mx-2">
</div>
@if(strlen($search) >= 2)
    <div class="position-absolute">
        <ul>
            @if($searchResults->count() > 0)
                @foreach($searchResults as $result)
                    <li class="border-2 ">
                        @if($result['poster_path'])
                            <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="poster_Path" class="img-fluid" width="30px">
                        @else
                            <img src="https://via.placeholder.com/50x75" alt="">
                        @endif
                        <a href="{{route('movies.show',$result['id'])}}" class="d-block nav-link border-1">{{ $result['title'] }}</a>
                    </li>
                @endforeach
            @else
                <div>No result for "{{$search}}"</div>
            @endif
        </ul>
    </div>

@endif
