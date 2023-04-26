@extends("layouts.plantilla")

@section("principal")
    <h1>Detalles de {{ $alumno->nombre }}</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $alumno->nombre }}</h5>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $alumno->edad }}</h6>
            <p class="card-text">{{ $alumno->direccion }}</p>
            <a class="btn btn-primary" href="{{ route("alumnos.index") }}" class="card-link">Volver al inicio</a>

        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Clase</th>
            <th scope="col">Nota</th>
        </tr>
        </thead>
        <tbody>

        @forelse($alumno->clases as $clase)
            <tr>
                <th scope="row"> {{$clase->id}}</th>
                <td>{{ $clase->nombre }}</td>
                <td> {{ $clase->nota }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">  Este alumno no ha aprobado ninguna clase</td>
            </tr>

        @endforelse


        </tbody>
    </table>@endsection
