@extends('layouts.plantilla')

@section('principal')

    <h1>Lista de alumnos</h1>

    @if(session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{ session('mensaje') }}
        </div>
    @endif


    <a href="{{ route("alumnos.create") }}" class="btn btn-primary">Nuevo</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">identidad</th>
            <th scope="col">nombre</th>
            <th scope="col">edad</th>
            <th scope="col">Clases Llevadas</th>
            <th scope="col">Acciones</th>


        </tr>
        </thead>
        <tbody>

        @foreach($alumnos as $alumno)
            <tr>
                <th scope="row">{{ $alumno->id }}</th>
                <td>{{ $alumno->identidad }}</td>
                <td> {{ $alumno->nombre }}</td>
                <td> {{ $alumno->edad }}</td>
                <td> {{ $alumno->clases->count() }}</td>
                <td> <a class="btn btn-success" href="{{ route("alumnos.show", ["alumno"=> $alumno->id]) }}">Ver</a>
                    <a class="btn btn-warning" href="{{ route("alumnos.edit", ["alumno"=> $alumno->id]) }}">Editar</a>

                    <!-- Modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalConfirmar{{$alumno->id}}">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalConfirmar{{$alumno->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Realmente quiere eliminar al alumno {{ $alumno->nombre }}?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <form method="post" action="{{ route("alumnos.destroy", ["alumno"=>$alumno->id]) }}">
                                        @method("delete")
                                        @csrf
                                        <input type="submit" value="Eliminar" class="btn btn-danger">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </td>
            </tr>

        @endforeach



        </tbody>

    </table>
    {{ $alumnos->links() }}

@endsection
