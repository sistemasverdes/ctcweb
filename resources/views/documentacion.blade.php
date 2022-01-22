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
                        <a class="nav-link" href="<?php echo route('inicio'); ?>#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="section-padding pb-0" id="about">
        <div class="container mb-5 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3" data-aos="fade-up">Documentación</h2>
                </div>

                <div class="col-lg-9 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                    <ul>
                        <li><a href="{{ asset('descargas/declaracion_diputados.pdf') }}">Declaración de Interés nª 59 de Cámara de Diputados</a></li>

                        <li><a href="{{ asset('descargas/Constancia_Adhesión_INTI.pdf') }}">Constancia de Adhesión INTI.</a></li>

                        <li><a href="{{ asset('descargas/Constancia_RIN.pdf') }}">Constancia RIN.</a></li>

                        <li><a href="{{ asset('descargas/Matricula_INAES.pdf') }}">Matricula INAES.</a></li>

                        <li><a href="{{ asset('descargas/HABILITACION.pdf') }}">Habilitación de Local.</a></li>

                        <li><a href="{{ asset('descargas/INSCRIPCION_EN_REGISTRO_DE_PROVEEDORES_MUNICIPALIDAD_DE_CORDOBA.pdf') }}">Inscripción en Registro de Proveedores de la Municipalidad de Córdoba.</a></li>

                        <li><a href="{{ asset('descargas/INSCRIPCION_EN_REGISTRO_DE_PROVEEDORES_PROVINCIA_DE_ENTRE_RIOS.pdf') }}">Inscripción en Registro de Proveedores de la Provincia de Entre Ríos.</a></li>

                        <li><a href="{{ asset('descargas/INSCRIPCION_EN_REGISTRO_DE_PROVEEDORES_PROVINCIA_SANTA_FE.pdf') }}">Inscripción en Regristro de Proveedores de la Provincia de Santa Fe.</a></li>
                        <ul>
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class=" contact section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12 mx-auto">

                    <h2 class="mb-4 text-center" data-aos="fade-up">Envíanos un mensaje</h2>

                    <form action="#" method="post" class="contact-form" role="form" data-aos="fade-up">

                        <div class="row">

                            <div class="col-lg-6 col-6">
                                <label for="name" class="form-label">Nombre <sup
                                        class="text-danger">*</sup></label>

                                <input type="text" name="name" id="name" class="form-control"
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
                                    <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input">

                                    <label class="form-check-label" for="checkbox1">Indumentaria</label>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 my-2 my-lg-0">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" class="form-check-input">

                                    <label class="form-check-label" for="checkbox2">Diseño</label>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" class="form-check-input">

                                    <label class="form-check-label" for="checkbox3">Bordado</label>
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
