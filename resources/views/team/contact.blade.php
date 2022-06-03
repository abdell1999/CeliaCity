@extends('layouts.frontpage')
@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/contact.css">



<div class="contacto">
<form class="form">
        <h2>Contacta con nosotros</h2>
        <p type="Nombre:"><input placeholder="Escribe tu nombre aqui"></input></p>
        <p type="Email:"><input placeholder="Tu correo electronico"></input></p>
        <p type="Mensaje:"><input placeholder="Mensaje de por que te pones en contacto con nosotros"></input></p>
        <button>Enviar</button>
    </form>
</div>





@endsection