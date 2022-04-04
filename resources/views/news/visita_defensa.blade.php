@extends('layouts.app')
@section('title', 'Noticias')
@section('main_content')
    <section class="news-detail section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-10 mx-auto">
                    <h2 class="mb-3" data-aos="fade-up">Visita del Ministerio de Defensa</h2>

                     <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/visita3.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>
                        <p class="me-4" data-aos="fade-up">El día jueves , tuvimos el agrado de recibir la visita de
                            funcionarios nacionales pertenecientes a <a
                                href="https://www.instagram.com/mindefarg/"><strong>@mindefarg</strong></a> Ministerio de
                            defensa de la nación.
                            Daniela Castro (Secretaria de Investigación y Producción para la defensa)
                            El Lic. Lisandro Mondino. (Director de Vinculación Científico productiva)
                            Cnel Hector Tardio (Director de Fabricaciones Militares Fray Luis Beltrán) </p>
    
                        <p data-aos="fade-up">Fuimos acompañados por el Secretario de Industria de la Provincia de ER Cr.
                            Fernando Caviglia y el Dr. Ricardo Etchemendy, que resalta la importancia de las coopertivas
                            entrerrianas y su rol dentro de la economía regional como así también participa de temas varios.</p>
    
                    </div>

                    

                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/visita4.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>

                        <p data-apps="fade-up">Agradecemos el interés en nuestra cooperativa, también queremos hacer
                            extensivo el agradecimiento a funcionarios provinciales y municipales que se hicieron presentes
                            demostrando su compromiso con la economía social, apoyando al desarrollo productivo local:
                            Fernando Caviglia (Secretario de Industria y comercio), Jesús Pérez Mendoza (Vicerrector de
                            comercio Interior), <br>Dr Ricardo Etchemendy (Director de ipcymer) y el licenciado Jonatan Jauregui (Director
                            de Cooperativa y Mutuales de la municipalidad de Paraná)                            
                        </p>

                        <p data-apps="fade-up">
                            La comitiva también fue acompañada por diputado provincial Julio Solanas y la concejal Ana
                            Ruberto.
                        </p>
                    </div>


                    <div class="social-share d-flex mt-5">
                        <span class="me-4" data-aos="zoom-in">Comparta este artículo:</span>

                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.cooperativadelcentro.coop.ar/noticias/zohehttps://www.cooperativadelcentro.coop.ar/noticias/visita_defensa"
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
