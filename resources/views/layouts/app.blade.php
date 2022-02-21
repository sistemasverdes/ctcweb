<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>CTC Indumentaria | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/logos/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logos/favicon.ico') }}" type="image/x-icon">

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

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
    @yield('video')

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
                        <a class="nav-link" href="<?php echo route('inicio'); ?>#news">Noticias</a>
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
    <!-- formulario de contacto -->
    <section class=" contact section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12 mx-auto">

                    <h2 class="mb-4 text-center" data-aos="fade-up">Envíanos un mensaje</h2>

                    <form class="contact-form" role="form" data-aos="fade-up" action="{{ route('sendemail') }}"
                        method="POST">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-lg-6 col-6">
                                <label for="nombre" class="form-label">Nombre <sup
                                        class="text-danger">*</sup></label>

                                <input type="text" name="nombre" id="name" class="form-control"
                                    placeholder="Nombre completo" required>
                            </div>

                            <div class="col-lg-6 col-6">
                                <label for="email" class="form-label">Email <sup
                                        class="text-danger">*</sup></label>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="Dirección de email" required>
                            </div>

                            <div class="col-12 my-4">
                                <label for="message" class="form-label">¿Cómo podemos ayudarte?</label>

                                <textarea name="message" rows="6" class="form-control" id="message"
                                    placeholder="Contanos acerca del proyecto" required></textarea>

                            </div>

                            <div class="col-12">
                                <label for="services" class="form-label">Servicios<sup
                                        class="text-danger">*</sup></label>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox1" name="indumentaria" class="form-check-input">

                                    <label class="form-check-label" for="indumentaria">Indumentaria</label>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 my-2 my-lg-0">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox2" name="diseño" class="form-check-input">

                                    <label class="form-check-label" for="diseño">Diseño</label>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox3" name="bordado" class="form-check-input">

                                    <label class="form-check-label" for="bordado">Bordado</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto mt-5">
                            <button type="submit" class="form-control">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- fin formulario de contacto -->
    <section class="google-map">
        <iframe
            src="https://maps.google.com/maps?q=Emilio+Carafa+2545,+Paraná,+Entre+Ríos+Argentina&t=&z=13&ie=UTF8&iwloc=&output=embed"
            class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5 class="text-white">
                        <i class="bi-geo-alt-fill me-2"></i>
                        Emilio Carafa 2545, Paraná</br>
                    </h5>
                    <h6 class="text-white">Entre Ríos - Argentina </h6>
                    <h6 class="text-white">
                        <span><a href="tel:+543434354568"><i class="bi bi-telephone"></i> (+54) 343 435 4568 interno
                                20</a></span>
                    </h6>
                    <a href="mailto:info@coooperativadelcentro.coop.ar" class="custom-link mt-3 mb-5">
                        <i class="bi bi-envelope"></i>
                        info@cooperativadelcentro.coop.ar
                    </a>
                </div>

                <div class="col-lg-4">
                    <img src="{{ asset('images/logos/cropped_logo.png') }}" class="mx-auto d-block" alt="">
                </div>

                <div class="col-lg-4 text-center mt-lg-0 mt-3">
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/cooperativadetrabajodelcentro/" style="font-size: 2rem;"
                                target="_blank" rel="noopener noreferrer" class="social-icon-link bi-facebook"></a></li>

                        <!-- <li><a href="#" class="social-icon-link bi-twitter"></a></li> -->
                        <!--        
                        <li><a href="https://api.whatsapp.com/send?phone=3435127861" style="font-size: 2rem;" target="_blank"
                                rel="noopener noreferrer" class="social-icon-link bi-whatsapp"></a></li>

                        -->

                        <li><a href="https://www.instagram.com/ctc_indumentaria" style="font-size: 2rem;"
                                target="_blank" rel="noopener noreferrer" class="social-icon-link bi-instagram"
                                alt="Instagram"></a></li>

                        <li><a href="https://www.youtube.com/channel/UC5S06nd1bi7Jhu6LB42OtwA" style="font-size: 2rem;"
                                target="_blank" rel="noopener noreferrer" class="social-icon-link bi-youtube"></a></li>
                    </ul>
                </div>

            </div>
            <div class="row text-center">
                <class="copyright-text mb-0 text-center">Copyright © CTC 2022
                    </class="copyright-text mb-0">
            </div>
            <div style="filter: grayscale(100%);">
                <img src="{{ asset('images/partners/sanluis_gobierno.png') }}" alt="">
                <img src="{{ asset('images/partners/santafe_capital.png') }}" alt="">
                <img src="{{ asset('images/partners/municipalidad_parana.png') }}" alt="">
                <img src="{{ asset('images/partners/crespo_muni.png') }}" alt="">
                <img src="{{ asset('images/partners/concordia_muni.png') }}" alt="">
            </div>
            <div style="filter: grayscale(100%);">
                <img src="{{ asset('images/partners/er_salud.png') }}" alt="">
                <img src="{{ asset('images/partners/gobierno_entrerios.png') }}" alt="">
                <img src="{{ asset('images/partners/municipalidad_cordoba.png') }}" alt="">
                <img src="{{ asset('images/partners/cnrt_control_transporte.png') }}" alt="">
                <img src="{{ asset('images/partners/vialidad_nacional.png') }}" alt="">
                <img src="{{ asset('images/partners/pfa.png') }}" alt="">
            </div>
            <div style="filter: grayscale(100%);">
                <img src="{{ asset('images/partners/stertz.png') }}" alt="">
                <img src="{{ asset('images/partners/vercosa-logo.png') }}" alt="">
                <img src="{{ asset('images/partners/tecnomet.png') }}" alt="">
                <img src="{{ asset('images/partners/deharbe.png') }}" alt="">
            </div>
            <div style="filter: grayscale(100%);">
                <img src="{{ asset('images/partners/elportal1.png') }}" alt="">
                <img src="{{ asset('images/partners/radio_online_parana.png') }}" alt="">
                <img src="{{ asset('images/partners/celmed.png') }}" alt="">
            </div>
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
