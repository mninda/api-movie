<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{route('movies.index')}}">
                            <box-icon name='movie' color="white"></box-icon>
                            Movie App
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{route('movies.index')}}">Movies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">TV-shows</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('actors.index')}}" class="nav-link">Actors</a>
                                </li>
                            </ul>
                            <livewire:search-dropdown />
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
