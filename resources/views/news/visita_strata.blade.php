@extends('layouts.app')
@section('title', 'Noticias')
@section('main_content')
    <section class="news-detail section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-10 mx-auto">
                    <h2 class="mb-3" data-aos="fade-up">Una Visita Transformadora: <br>La Vicegobernadora Laura Stratta en la Fábrica</h2>

                    <h5>Introducción</h5>
                    <p class="me-4" data-aos="fade-up">
                        
                        En el marco de los 10 años de creación de la ley de Efectores Provinciales de la Economía Social, la Vicegobernadora Lic. Laura Stratta, conocida por su enfoque innovador y compromiso con el desarrollo económico sostenible, 
                        llegó a la fábrica con un sentido de anticipación. Durante esta visita, Laura experimentó de primera mano el poder 
                        transformador de la tecnología y la colaboración en la industria manufacturera.
                    </p>

                    <h5>Bienvenida y Presentación</h5>
                    <p data-apps="fade-up">
                        Laura Stratta fue recibida con aplausos y sonrisas por los asociados de la Cooperativa a su llegada. El presidente Gustavo Romero y Diego Gomez, 
                        le dieron una cálida bienvenida y le presentaron una visión general de los logros y avances de CTC. 
                        Acompañada por su comitiva integrada por funcionarios provinciales, Laura comenzó un recorrido por las instalaciones, donde pronto se sumergiría en un mundo de innovación y producción. 
                    </p>
                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/strata_9.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                    </div>

                    <h5>Exploración de la Innovación Tecnológica</h5>
                    <p data-aos="fade-up">
                        La primera parada del recorrido llevó a Vicegobernadora a una sala de producción donde robots avanzados trabajaban en perfecta sincronización con los asociados. 
                        Ella observó asombrada cómo la automatización mejoraba la precisión y la eficiencia de la producción, 
                        y cómo la interacción armoniosa entre humanos y máquinas creaba un ambiente de colaboración único.
                    </p>
                    <h5>Diálogo con los Asociados y la Comunidad</h5>
                    <p data-aos="fade-up">
                        Laura mostró un interés genuino en conocer las historias de los trabajadores. En una sala de descanso, 
                        compartió conversaciones informales con varios asociados, escuchando sus experiencias y 
                        perspectivas sobre el impacto de la fábrica en sus vidas y la comunidad.
                        Esta interacción le permitió comprender mejor los desafíos y las oportunidades que enfrentan las personas en la industria manufacturera.
                    </p>
                
                    <h5>Despedida<h/5>
                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/strata_5.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>

                        <p data-aos="fade-up">
                            La visita de la Vicegobernadora Laura Stratta a la Cooperativa dejó una impresión duradera en todos los presentes.
                            Desde la Redacción creemos que esta experiencia no solo resaltó los avances tecnológicos y la eficiencia en la producción, 
                            sino que también reforzó la importancia del liderazgo visionario y el compromiso con la sostenibilidad. 
                            En los días que siguieron, las palabras y las acciones de Laura inspiraron un sentido renovado de colaboración y 
                            progreso en la comunidad industrial y más allá.
                        </p>

                    </div>

                    <div class="social-share d-flex mt-5">
                        <span class="me-4" data-aos="zoom-in">Comparta este artículo:</span>

                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.cooperativadelcentro.coop.ar/noticias/20230615"
                            class="social-share-icon bi-facebook" data-aos="zoom-in"></a>

                        <a href="https://twitter.com/intent/tweet?url=https://www.cooperativadelcentro.coop.ar/noticias/20230615&text="
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
