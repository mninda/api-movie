<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
</head>
<body>
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            @yield('content')

        </div>
    </div>

    @livewireScripts
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    @yield('scripts')
</body>
</html>
