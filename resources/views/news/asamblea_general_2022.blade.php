@extends('layouts.app')
@section('title', 'Noticias')
@section('main_content')
    <section class="news-detail section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-10 mx-auto">
                    <h2 class="mb-3" data-aos="fade-up">Llevamos a cabo la Asamblea General de Diciembre</h2>

                    <h5>Introducción</h5>
                    <p class="me-4" data-aos="fade-up">
                        La asamblea general de una cooperativa de trabajo es mucho más que una simple reunión de socios. 
                        Es el corazón palpitante de la democracia interna y la esencia misma de la toma de decisiones colectivas. 
                        En este artículo, exploraremos el significado y la importancia de la asamblea general en una cooperativa de trabajo, y contaremos cómo transcurrió la Asamblea General 2022 desarrollada el 31 de Diciembre pasado.
                    </p>

                    <h5>Preparativos y Espíritu de Comunidad</h5>    
                    <p data-apps="fade-up">
                        Las semanas previas a la asamblea fueron un torbellino de actividad. Los Asociados de la cooperativa se reunieron en grupos de trabajo para preparar informes financieros,
                         presentaciones de proyectos y propuestas de nuevos emprendimientos. El aire estaba cargado de anticipación y emoción, ya que los miembros compartían ideas y trabajaban juntos en 
                         pos del éxito colectivo.        
                    </p>
                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/asam_general_2022.png') }}" class="img-fluid news-image" alt="">
                            </figure>
                    </div>
                    
                    <h5>Apertura con Palabras de Bienvenida y Valores Cooperativos</h5>
                    <p data-aos="fade-up">
                        La asamblea comenzó con una cálida bienvenida por parte del presidente, Gustavo Romero. 
                        En su discurso, Gustavo destacó los valores fundamentales de la cooperativa: la solidaridad, la equidad y la participación. 
                        Esta apertura estableció el tono para la jornada y recordó a todos los presentes el propósito y la misión que los unía.
                    </p>
                    
                    
                    <h5>Presentación de Informes y Logros del Año</h5>
                    <p data-aos="fade-up">
                        Una serie de presentaciones siguieron a la apertura. Los líderes de los diferentes departamentos presentaron informes detallados sobre los logros y desafíos del año anterior. 
                        Se destacaron los crecimientos en ventas, las iniciativas de responsabilidad social y las colaboraciones exitosas con otras organizaciones. 
                        Los miembros asintieron en aprobación y algunos aplaudieron los éxitos alcanzados.
                    </p>

                    
                    <h5>Conclusión</h5>
                    <p>
                        La asamblea general en una cooperativa de trabajo es el reflejo de la verdadera esencia del trabajo colectivo y la solidaridad. 
                        Es un espacio en el que las voces convergen, las ideas se entrelazan y las decisiones se toman con el bienestar de todos en mente. 
                        En un mundo donde la toma de decisiones a menudo está centralizada, la asamblea general sigue siendo un faro de participación, empoderamiento y construcción 
                        de un futuro en común. Desde la Redacción festejamos poder haber terminado un año muy duro y exigente y encarar nuevos proyectos para el año que está llegando.
                        </p>
                    </div>

                 

                    <div class="social-share d-flex mt-5">
                        <span class="me-4" data-aos="zoom-in">Comparta este artículo:</span>

                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.cooperativadelcentro.coop.ar/noticias/20221231"
                            class="social-share-icon bi-facebook" data-aos="zoom-in"></a>

                        <a href="https://twitter.com/intent/tweet?url=https://www.cooperativadelcentro.coop.ar/noticias/20221231&text="
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
