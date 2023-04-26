@extends("layouts.plantilla")
@section('principal')

    @isset($estudiantes)
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Carrera</th>
        </tr>
        </thead>
        <tbody>
                @forelse($estudiantes as $estudiante)
                    <tr>
                        <th scope="row">{{ $estudiante->id }}</th>
                        <td> {{ $estudiante->nombre }}</td>
                        <td> {{ $estudiante->apellido }}</td>
                        <td> {{ $estudiante->carrera }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            No hay estudiantes
                        </td>
                    </tr>
                @endforelse

        </tbody>
    </table>
    @endisset

@endsection
