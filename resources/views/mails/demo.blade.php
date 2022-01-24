Hola <i>Administrador</i>,
<p>Este es un correo enviado desde la página www.cooperativadelcentro.coop.ar</p>

<p><u>Detalles del correo:</u></p>

<div>
<p><b>Nombre:</b>&nbsp;{{ $demo->nombre }}</p>
<p><b>Email:</b>&nbsp;{{ $demo->email }}</p>
<p><b>Mensaje:</b>&nbsp;{{ $demo->message }}</p>
@isset($demo->servicios)
    <p><b>Servicios:</b>&nbsp;{{ $demo->servicios }}</p>
@endisset
</div>


Gracias,
<br/>
