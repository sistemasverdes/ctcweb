@extends('layouts.app')
@section('title', 'Documentación')
@section('main_content')
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
@endsection