@extends("layouts.plantilla")

@section("principal")
  
<h1>Hola {{ $nombre }}</h1>
<a href="{{ route("saludo.show") }}">Ir a Show</a>

@endsection
