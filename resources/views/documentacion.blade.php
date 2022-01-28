@extends('layouts.app')
@section('title', 'Documentación')
@section('main_content')
    <section class="section-padding pb-0" id="about">
        <div class="container mb-5 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3" data-aos="fade-up">Documentación</h2>
                </div>
                <strong><u>Inscripciones</u></strong>
                <div class="col-lg-9 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                        <ul>
                            <li><a href="{{ asset('descargas/Matricula_INAES.pdf') }}">Matricula INAES.</a></li>
                            <li><a href="#">Inscripción SIPRO, Ex 2021-99526120-APN "COMPRAR".</a></li>
                            <li><a href="{{ asset('descargas/Constancia_RIN.pdf') }}">Registro Industrial de la Nación.</a></li>
                            <li><a href="{{ asset('descargas/HABILITACION.pdf') }}">Habilitación de Local.</a></li>
                            <li><a
                                href="{{ asset('descargas/INSCRIPCION_EN_REGISTRO_DE_PROVEEDORES_PROVINCIA_DE_ENTRE_RIOS.pdf') }}">Registro
                                de Proveedores de la Provincia de Entre Ríos Nº 4685</a></li>
                            <li><a href="#">Registro de Efectores de la Economía Social Nº 3000030</a></li>
                            <li><a
                                href="{{ asset('descargas/INSCRIPCION_EN_REGISTRO_DE_PROVEEDORES_MUNICIPALIDAD_DE_CORDOBA.pdf') }}">R.O.P.
                                y C.E. Proveedores de la Municipalidad de Córdoba.</a></li>
                            <li><a
                                href="{{ asset('descargas/INSCRIPCION_EN_REGISTRO_DE_PROVEEDORES_PROVINCIA_SANTA_FE.pdf') }}">Registro
                                de Proveedores Provincia de Santa Fe.</a></li>
                            <li><a href="#">Registro de Proveedores Municipalidad de Santa Fe Nº 36774</a></li>
                            <li><a href="#">Registro de Proveedores Provincia de Corrientes Nº 3435</a></li>
                        <ul>
                    </p>

                </div>
                <strong><u>Certificaciones</u></strong>
                <div class="col-lg-9 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                        <ul>
                            <li><a href="{{ asset('descargas/Constancia_Adhesión_INTI.pdf') }}">Compromiso Social Compartido para empresas de Indumentaria. INTI</a></li>
                            <li><a href="#">Certificación INTI Pac KAIZEN 2020</a></li>
                            <li><a href="#">Certificado MIPyME Nº 784281042</a></li>
                            <li><a href="#">Certificación "Procedimiento de trabajo seguro" Colegio de Ingenieros especialistas
                                de Entre Ríos</a></li>
                        <ul>
                    </p>
                </div>

                <strong><u>Reconocimientos</u></strong>
                <div class="col-lg-9 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                        <ul>
                            <li><a href="{{ asset('descargas/declaracion_diputados.pdf') }}">Declarado de interés legislativo
                                el desempeño productivo laboral y social por la Honorable Cámar de Diputados de Entre Ríos.
                                Declaración Nº 59/21</a></li>
                            <li><a href="#">Decretado de Interés social y laboral por el Honorable Consejo Deliberante de la
                                ciudad de Paraná. Decreto H.C.D. Nº 09/21</a></li>                        
                        <ul>
                    </p>
                </div>                
            </div>
        </div>
    </section>
@endsection
