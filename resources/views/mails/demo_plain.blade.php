Hola <i>Administrador}</i>,
Este es un correo enviado desde la página www.cooperativadelcentro.coop.ar

Detalles del correo:

Nombre:{{ $demo->nombre }}
Email:{{ $demo->email }}
Mensaje:{{ $demo->message }}
@isset($demo->servicios))
    Servicios:{{ $demo->servicios }}</p>
@endisset


Gracias,