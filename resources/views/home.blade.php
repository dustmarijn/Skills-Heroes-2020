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

    <title>Home</title>
</head>
<body>

{{-- banner slide--}}
<header>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/carcassone.png" class="d-block w-100" alt="carcassone banner">
            </div>
            <div class="carousel-item">
                <img src="/images/30seconds.png" class="d-block w-100" alt="30 seconds banner">
            </div>
        </div>
    </div>
</header>

{{-- Navbar met gecentreerde functie--}}
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

{{-- titiel en beschrijving van de pagina --}}
    <div class="text-center p-3">
        <h1>Goededag, Welkom bij Spellen Winkel!</h1>
        <p>Wij zijn een winkel die spelletjes verkopen, voor het aanbod van spellen bekijk de site.</p>
    </div>

{{--  eerste spel kaart met informatie en een foto en een kleine beschrijving  --}}
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-6 p-4">
                <div class="card mb-3 games">
                    <img src="/images/card-30seconds.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">30 seconden</h5>
                        <p class="card-text">Probeert binnen 30 seconden zoveel mogelijk van de 5 begrippen op een kaartje te omschrijven!</p>
                        <ul class="flex-container p-2">
                            <li class="flex-item"><i class="fas fa-user"></i> 3/24</li>
                            <li class="flex-item"><i class="fas fa-euro-sign"></i> 29,75</li>
                            <li class="flex-item"><i class="fas fa-gamepad"></i> Party</li>
                            <li class="flex-item"><i class="fas fa-birthday-cake"></i> 12-99</li>
                            <li class="flex-item"><i class="fas fa-stopwatch-20"></i> 30m</li>
                        </ul>
                        <a class="btn btn-success d-flex justify-content-center" href="/30seconds" role="button">Lees Meer!</a>
                    </div>
                </div>
            </div>

{{--  eerste spel kaart met informatie en een foto en een kleine beschrijving  --}}
            <div class="col-6 p-4">
                <div class="card mb-3 games">
                    <img src="/images/card-carcassone.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Carcassone</h5>
                        <p class="card-text">Zet je spelers slim in en word steeds rijker en machtiger!</p>
                        <ul class="flex-container p-2">
                            <li class="flex-item"><i class="fas fa-user"></i> 2/5</li>
                            <li class="flex-item"><i class="fas fa-euro-sign"></i> 24,95</li>
                            <li class="flex-item"><i class="fas fa-gamepad"></i> Leg</li>
                            <li class="flex-item"><i class="fas fa-birthday-cake"></i> 7-99</li>
                            <li class="flex-item"><i class="fas fa-stopwatch-20"></i> 35m</li>
                        </ul>
                        <a class="btn btn-success d-flex justify-content-center" href="/carcassone" role="button">Lees Meer!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- kleine banner met de vraag of klanten uit de keuze komen --}}
<div class="help-banner text-center p-3">
    <h3>We helpen u graag!</h3>
    <a class="btn btn-primary" href="mailto:info@spellenwinkel.nl" role="button">Neem contact op!</a>

</div>

{{-- Reviews van klanten --}}
<div class="container mt-4 mb-4">
    <h2 class="text-center">Klant reviews!</h2>
    <div class="d-flex justify-content-around mt-1">
        <div class="text-center p-1">
            <img class="rounded-circle" alt="60x60" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg"
                 data-holder-rendered="true" width="120" height="120">
            <h5>Clara</h5>
            <p>Erg genoten van 30 seconds, is echt een aanrader!</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>

        <div class="text-center p-1">
            <img class="rounded-circle" alt="60x60" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg"
                 data-holder-rendered="true" width="120" height="120">
            <h5>Flip</h5>
            <p>Erg genoten van carcassone, is echt leuk, vooral als je met vrienden speelt!</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
        </div>

        <div class="text-center p-1">
            <img class="rounded-circle" alt="60x60" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg"
                 data-holder-rendered="true" width="120" height="120">
            <h5>Ben</h5>
            <p>Erg genoten van 30 seconds, is echt een aanrader!</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>

    </div>
</div>

{{-- footer met copyright --}}
<footer class="footer bg-dark">
        <p class="text-center">&copy 2020 Spellen Winkel | Alle rechten voorbehouden</p>
</footer>



<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<script src="/api/content.js"></script>

</body>
</html>
