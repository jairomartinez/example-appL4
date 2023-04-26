@extends("layouts.plantilla")
@section("titulo", "Titulo de la primera hija")

@section("principal")
    <h1>Hola {{ $nombre }}</h1>
    La edad es {{ $edad }}
@endsection
