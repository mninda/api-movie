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
                                    <a class="nav-link">Actors</a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center">
                                <form>
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                </form>
                                <img src="https://www.kindpng.com/picc/m/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png" alt="" style="width: 38px;height: 38px;border-radius: 50%" class="mx-2">
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
