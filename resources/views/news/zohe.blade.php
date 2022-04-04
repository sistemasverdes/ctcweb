@extends('layouts.app')
@section('title', 'Noticias')
@section('main_content')
    <section class="news-detail section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-10 mx-auto">
                    <h2 class="mb-3" data-aos="fade-up">Incorporamos nuevo equipamiento para el Taller</h2>

                    <p class="me-4" data-aos="fade-up">El día 28 de Febrero del corriente pudimos darnos el gusto
                        de incorporar una nueva máquina para el Taller.
                        Se trata de una Máquina automatica programable para patrones <a
                            href="https://casaruere.com.ar/producto/maquina-automatica-zoje-zj-am5-ah-rk800/"><strong>ZOJE
                                ZJ-AM5-AH-RK800</strong></a>, tiene la
                            particularidad de utilizarse en diferentes procesos de costura como la fabricacion de cuellos,
                            puños, pegado de bolsillo, pegado de cierres, pegado de apliques, matelaseado, pinzas, bordado,
                            etc.</p>

                    <p data-apps="fade-up">Para ilustrar al lector que no está al tanto de esta tecnología, 
                        la ventaja que provee la Zohe es que se pueden cortar patrones de manera idéntica y exacta al diseño creado.</p>
                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/zohe2.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>

                        <p data-aos="fade-up">
                            "La máquina al tener un trabajo programado por computadora, en todas las prendas se realiza el mismo proceso de manera milimétrica, 
                             limpia, prolija y exacta" señala el asociado
                            <strong>Juan José Elizalde</strong>, Encargado de Mantenimiento de Máquinas en el Taller.
                        </p>

                        <p data-aos="fade-up">
                           Adicionalmente la máquina tiene un panel táctil, pudiendose crear el diseño desde el mismo. Estás máquinas funcionan como bordadoras si fuera necesario. 
                           En este último caso un software especial crea el bordado y lo exporta a la Zohe con el fin de cargar el diseño con el que la prenda debe salir.
                        </p>

                        <p>
                            Todas estas aplicaciones se logran de forma facil pudiendo realizar varias piezas en un solo
                            proceso de costura, como ejemplo se pueden realizar 6 puños de camisa de una sola vez, además la máquina
                            incluye un laser inferior para el proceso de corte.
                        </p>
                    </div>

                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/zohe3.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>

                        <p data-aos="fade-up">
                            Para finalizar, desde la Redacción nos preguntamos que tanto incrementa la producción como para tener una representación de la importancía de la nueva adquisición.
                            Nos detallan que "es dificil especificar un número ya que hay muchas variables involucradas,  ya que no es lo mismo coser una tapita de 10x5 que un chaleco de 50x70cm
                            pero podemos afirmar que la máquina está haciendo entre 700 y 800 prendas por día".
                        </p>

                    </div>

                    <div class="social-share d-flex mt-5">
                        <span class="me-4" data-aos="zoom-in">Comparta este artículo:</span>

                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.cooperativadelcentro.coop.ar/noticias/zohe"
                            class="social-share-icon bi-facebook" data-aos="zoom-in"></a>

                        <a href="https://twitter.com/intent/tweet?url=https://www.cooperativadelcentro.coop.ar/noticias/zohe&text="
                            target="_blank" class="social-share-icon bi-twitter mx-3" data-aos="zoom-in"></a>
                        <!--
                                <a href="#" class="social-share-icon bi-envelope" data-aos="zoom-in"></a>
                                -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
