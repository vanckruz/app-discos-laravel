<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jhonny Vasquez</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('resources/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link type="image/png" rel="icon" href="{{ asset('img/favicon.png') }}" />
</head>


<body>
<div class="header fullwidth purple">
    <div class="container">
        <div class="col-xs-2">
            <img src="{{ url('img/music-album.png') }}" alt="App Logo" class="img-img-responsive">
        </div>
        <div class="col-xs-10"><h1 class="white-text">Jhonny Vasquez - Test</h1></div>
    </div>
</div>

@yield('content')

    <script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
    <script src="{{ asset('resources/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resources/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>