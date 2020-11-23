<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://kit.fontawesome.com/bf60f9e3e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('page-title')</title>
</head>
<body>
<header>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="@yield('header-src')" class="d-block w-100" alt="@yield('header-alt')">
            </div>
</header>

<nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark main-nav">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="/30seconds">30 seconds</a></li>
            <li class="nav-item"><a class="nav-link" href="/"><h4 class="font-weight-bold">| Spellen Winkel |</h4></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/carcassone">Carcassone</a></li>
        </ul>
    </div>
</nav>

<div class="container">

    <div class="text-center p-3">
        <h1>@yield('content-title')</h1>
        <p>@yield('content-desc')</p>
    </div>

    <div class="row mb-3">
        <div class="col-md-8 themed-grid-col">
            <h2 class="text-center">@yield('game-title')</h2>
            <p>@yield('game-desc')</p></div>
        <div class="col-6 col-md-4 themed-grid-co ">
            <h2 class="">@yield('sidebar-title')</h2>
            <ul class="list-unstyled games-sidebar p-2">
                <li><i class="fas fa-user"></i> @yield('user-icon') personen</li>
                <li><i class="fas fa-euro-sign"></i> @yield('euro-icon'),-</li>
                <li><i class="fas fa-gamepad"></i> @yield('gamepad-icon')</li>
                <li><i class="fas fa-birthday-cake"></i> @yield('birthday-icon') leeftijd</li>
                <li><i class="fas fa-stopwatch-20"></i> @yield('stopwatch-icon')</li>
            </ul>
        </div>
    </div>

</div>

{{--<div class="help-banner text-center p-3">--}}
{{--    <h3>We helpen u graag!</h3>--}}
{{--    <a class="btn btn-primary" href="#" role="button">Neem contact op!</a>--}}
{{--</div>--}}

<div class="container mt-4 mb-4">
    <div class="card-deck">
    <div class="card bg-dark text-white">
        <img class="card-img" src="@yield('game-picture-1')" alt="@yield('game-alt-1')" height="400" width="100">
    </div>

    <div class="card bg-dark text-white">
        <img class="card-img" src="@yield('game-picture-2')" alt="@yield('game-alt-1')" height="400" width="100">
    </div>
</div>
</div>
<footer class="footer bg-dark">
    <p class="text-center">&copy 2020 Spellen Winkel | Alle rechten voorbehouden</p>
</footer>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>
