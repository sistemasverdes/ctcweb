@extends('layouts.app')
@section('title', 'Noticias')
@section('main_content')
    <section class="news-detail section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-10 mx-auto">
                    <h2 class="mb-3" data-aos="fade-up">Incorporamos nuevo equipamiento para el Taller</h2>

                    <p class="me-4" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Rerum corporis consequuntur reiciendis repudiandae explicabo debitis illo, aut suscipit tenetur
                        tempore iusto dolores nostrum deleniti culpa, cumque, quasi et reprehenderit expedita?</p>

                    <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate quos quia, et
                        neque praesentium minus officia dolor! Consectetur culpa blanditiis quibusdam maiores iure nisi
                        deserunt nesciunt a quam! Deserunt, ad.
                    </p>
                    <p data-apps="fade-up">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi labore maiores
                        ad eos quo. Tenetur, aliquam dicta commodi quae nam itaque, placeat sed doloremque provident ipsam
                        ab alias rerum fugiat.</p>
                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/zohe2.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>

                        <p data-aos="fade-up">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et magnam debitis eius,
                            explicabo in dolorum, nemo omnis ad repellendus, fuga aspernatur exercitationem praesentium
                            nihil necessitatibus sunt minima incidunt? Necessitatibus.
                        </p>

                        <p data-aos="fade-up">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi culpa omnis fugiat ea
                            quis dolorem doloremque asperiores natus, expedita temporibus totam et labore suscipit obcaecati
                            iure nobis, unde laborum.
                        </p>

                        <p data-aos="fade-up">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident explicabo eaque nam debitis
                            id! Eos nisi fugiat voluptatibus quisquam a officia animi amet dicta. Magnam harum fuga vitae
                            cum omnis?
                        </p>

                    </div>

                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="{{ asset('images/news/zohe3.jpg') }}" class="img-fluid news-image" alt="">
                            </figure>
                        </div>

                        <p data-aos="fade-up">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident explicabo eaque nam debitis
                            id! Eos nisi fugiat voluptatibus quisquam a officia animi amet dicta. Magnam harum fuga vitae
                            cum omnis?
                        </p>

                    </div>

                    <div class="social-share d-flex mt-5">
                        <span class="me-4" data-aos="zoom-in">Comparta este artículo:</span>

                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.cooperativadelcentro.coop.ar/noticias/reunion_ministro"
                            class="social-share-icon bi-facebook" data-aos="zoom-in"></a>

                        <a href="https://twitter.com/intent/tweet?text=Reunión%20con%20el%20Ministro%20de%20Defensa%20enlace%20para%20compartir%20en%20Twitter&url=http%3A%2F%2Fwww.cooperativadelcentro.coop.ar%2Fnoticias%2Freunion_ministro&via=CTC%20Indumentaria&hashtags=noticias"
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
