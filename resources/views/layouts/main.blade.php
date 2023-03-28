<!DOCTYPE html>
<html lang="en">

<head>
    <title>RENTCAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
        <img src="{{ asset('img/logo.png') }}" alt="RENTCARLOGO" style="border-style: none;" width="60" height="100%" class=" logo me-auto rounded" border-radius="3" viewBox="0 0 118 94"> 

            <a class="navbar-brand rounded-5" href="index.html">RENT<span>CAR</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('welcome') }}" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="{{ route('cars') }}" class="nav-link">Nos Véhicules</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contacts</a></li>
                    @if (!Auth::user())
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Connexion</a></li>
                        
                    @endif
                    @auth
                    <li class="nav-item"><a href="{{ route('user.locations') }}" class="nav-link">Mes locations</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    {{ $slot }}


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                    <img src="{{ asset('img/logo.png') }}" alt="RENTCARLOGO" style="border-style: none;" width="60" height="80%" class=" logo me-auto rounded" border-radius="3" viewBox="0 0 118 94"> 
                      <a href="#" class="logo">RENT<span>CAR</span></a>
                      <br> <br> 
                        <p>Rien ne vaut une promenade ou un voyage à l'intérieur d'un bon moyen de transport.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Informations</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Accueil</a></li>
                            <li><a href="#" class="py-2 d-block">Nos Véhicules</a></li>
                            <li><a href="#" class="py-2 d-block">Contacts</a></li>
                            <li><a href="#" class="py-2 d-block">Mes locations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Avez-vous des questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Atlantique, Abomey-Calavi,Arconville</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+229 97605478
                                             | 40518443</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">cedricabionan@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright | &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Réalisé par: ABIONAN Cédric && OKE Mirta </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
</body>

</html>
