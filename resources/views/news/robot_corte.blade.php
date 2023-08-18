@extends('layouts.app')
@section('title', 'Noticias')
@section('main_content')
    <section class="news-detail section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-10 mx-auto">
                    <h2 class="mb-3" data-aos="fade-up">Incorporamos nuevo equipamiento para el Taller</h2>

                    <p class="me-4" data-aos="fade-up">
                        En un rincón vanguardista de la industria textil, una nueva era de precisión y eficiencia ha tomado forma con la llegada del "Robot de Corte". 
                        Este prodigio tecnológico está transformando la manera en que se corta la tela, ofreciendo una precisión inigualable y un potencial para revolucionar 
                        la producción de prendas de vestir y textiles en general. En este artículo, exploraremos cómo este robot innovador está cambiando el juego y allanando el 
                        camino hacia un futuro más eficiente y sostenible en la fabricación textil.
                    </p>

                    <p data-apps="fade-up">
                        Este producto es el resultado de años de investigación y desarrollo por parte de un equipo interdisciplinario de ingenieros,
                         diseñadores y expertos en tecnología de materiales. Inspirados por la necesidad de superar los desafíos de corte de tela tradicionales, 
                         este equipo se propuso diseñar una solución que combinara precisión milimétrica con velocidad y automatización.
                    </p>
                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/robot_1.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>

                        <p data-aos="fade-up">
                        El Robot de Corte está equipado con tecnología de vanguardia que le permite llevar a cabo cortes precisos en una variedad de tejidos y materiales textiles.
                         Sus características clave incluyen:
                            <ol>
                                <li>
                                    Visión Artificial Avanzada: El robot utiliza cámaras y sensores de alta resolución para analizar la tela y determinar la mejor ubicación y ángulo para realizar el corte. 
                                    Esto garantiza que los patrones y diseños se mantengan intactos y se eviten errores costosos.
                                </li>
                                <li>
                                    Control de Corte por Láser: El corazón del Robot  es un sistema de corte láser de alta precisión. 
                                    Este láser puede realizar cortes limpios y precisos en una variedad de formas y patrones, 
                                    desde líneas rectas hasta curvas intrincadas.
                                </li>    
                                <li>
                                    Programación Personalizable: El robot se puede programar para adaptarse a una amplia gama de diseños y especificaciones.
                                    Los diseñadores pueden cargar patrones personalizados y ajustar los parámetros de corte según sea necesario.
                                </li>    
                                <li>
                                    Eficiencia y Reducción de Desechos: La precisión del Robot  minimiza el desperdicio de tela, lo que contribuye a la sostenibilidad y ahorra recursos. 
                                    Además, su velocidad de corte aumenta significativamente la producción en comparación con los métodos manuales.
                                </li>    
                            </ol>    
                        </p>

                        <p data-aos="fade-up">
                           "La automatización del corte de tela acelera el proceso de fabricación y reduce los tiempos de producción, 
                           lo que a su vez disminuye los costos operativos. Por otro lado, la precisión del corte láser garantiza que los patrones
                            y las formas sean consistentes y exactos en cada pieza, lo que resulta en productos de alta calidad" nos comenta
                            el asociado <strong>Juan José Elizalde</strong>.
                        </p>

                        <p>
                        La reducción de desperdicios de tela y la eficiencia en la producción contribuyen a una producción más sostenible y respetuosa con el medio ambiente
                        y permitiendo a los diseñadores tener más libertad para experimentar con patrones y formas intrincadas, sabiendo que el Robot de Corte puede reproducir sus creaciones con precisión.
                        </p>
                    </div>

                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/robot_2.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>

                        <p data-aos="fade-up">
                        Para finalizar, desde la Redacción creemos que este producto representa un hito en la evolución de la industria textil, 
                        demostrando cómo la tecnología puede transformar procesos tradicionales y 
                        conducir a mejoras significativas en eficiencia y calidad. A medida que esta tecnología continúa desarrollándose y 
                        siendo adoptada por empresas textiles de todo el mundo, se espera que el futuro de la fabricación de prendas de vestir 
                        y textiles sea más preciso, eficiente y sostenible que nunca.
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
