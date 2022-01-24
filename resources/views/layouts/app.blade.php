<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>CTC Indumentaria</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('css/templatemo-nomad-force.css') }}" rel="stylesheet">
    <!--

TemplateMo 567 Nomad Force

https://templatemo.com/tm-567-nomad-force

-->
</head>

<body>    
    <!-- area de notificacion flash -->
    @if (Session::has('success'))
        <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
            <strong>Exito! </strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (Session::has('fail'))
        <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Exito! </strong> {{ Session::get('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- fin de area notificación -->
    <section class="hero" id="hero">
        <div class="heroText">
            <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                Cooperativa de Trabajo del Centro
            </h1>

            <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                crea un gran producto para tu <strong class="custom-underline">empresa</strong>
            </p>
        </div>

        <div class="videoWrapper">
            <video autoplay="" loop="" muted="" class="custom-video" poster="{{ asset('videos/ctc_imagen.png') }}">
                <source src="{{ asset('videos/ctc_final.mp4') }}" type="video/mp4">

                Su navegador no soporta video tag.
            </video>
        </div>

        <div class="overlay"></div>
    </section>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">

            <a class="navbar-brand" href="<?php echo route('inicio'); ?>">
                <strong>CTC Indumentaria</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo route('inicio'); ?>">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo route('inicio'); ?>#about">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo route('documentacion'); ?>">Documentación</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#news">Noticias</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('main_content')
    </main>

    <section class="google-map">
        <iframe
            src="https://maps.google.com/maps?q=Emilio+Carafa+2445,+Paraná,+Entre+Ríos+Argentina&t=&z=13&ie=UTF8&iwloc=&output=embed"
            class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h5 class="text-white">
                        <i class="bi-geo-alt-fill me-2"></i>
                        Emilio Carafa 2545, Paraná</br>
                    </h5>
                    <h6 class="text-white">Entre Ríos - Argentina </h6>

                    <a href="mailto:info@coooperativadelcentro.coop.ar" class="custom-link mt-3 mb-5">
                        info@cooperativadelcentro.coop.ar
                    </a>
                </div>

                <div class="col-6">
                    <class="copyright-text mb-0">Copyright © CTC 2021

                        <br><br>Design: <a href="https://templatemo.com/page/1" target="_parent">TemplateMo</a><br><br>

                        </class="copyright-text mb-0">

                </div>

                <div class="col-lg-3 col-5 ms-auto">
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/cooperativadetrabajodelcentro/" target="_blank"
                                rel="noopener noreferrer" class="social-icon-link bi-facebook"></a></li>

                        <!-- <li><a href="#" class="social-icon-link bi-twitter"></a></li> -->

                        <li><a href="https://api.whatsapp.com/send?phone=3435127861" target="_blank"
                                rel="noopener noreferrer" class="social-icon-link bi-whatsapp"></a></li>

                        <li><a href="https://www.instagram.com/ctc_indumentaria" target="_blank"
                                rel="noopener noreferrer" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="https://www.youtube.com/channel/UC5S06nd1bi7Jhu6LB42OtwA" target="_blank"
                                rel="noopener noreferrer" class="social-icon-link bi-youtube"></a></li>
                    </ul>
                </div>

            </div>
            </section>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
