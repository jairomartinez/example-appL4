@extends("layouts.plantilla")
@section("principal")
    @if(isset($alumno))
        <h1>Editar un alumno</h1>
    @else
        <h1>Crear un nuevo alumno</h1>
    @endif
     @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
        @endforeach
     @endif
    </ul>
    <form method="post" action=" {{ isset($alumno) ? route("alumnos.update", ["alumno"=> $alumno->id]): route("alumnos.store") }}" >
        @csrf
        @if(isset($alumno))
            @method('put')
        @endif

        <div class="row">
            <div class="col-8">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nombre_text" placeholder="nombre" name="nombre" value="{{ isset($alumno) ? $alumno->nombre: old("nombre") }}">
                    <label for="nombre_text">Nombre</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-floating">
                    <input type="number" class="form-control" id="edad_text" placeholder="Edad" name="edad" value="{{ isset($alumno) ? $alumno->edad: old("edad") }}" >
                    <label for="edad_text">Edad</label>
                </div>
            </div>
        </div>
        <br>
        <div class="form-floating">
            <input type="text" class="form-control" id="identidad_text" placeholder="DNI" name="identidad" value="{{ isset($alumno) ? $alumno->identidad: old("identidad") }}" >
            <label for="identidad_text">Número de identidad</label>
        </div>
        <br>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Dirección" id="direccion_textarea" style="height: 100px" name="direccion"> {{ isset($alumno) ? $alumno->direccion:old("direccion") }}</textarea>
            <label for="direccion_textarea">Dirección</label>
        </div>
        <br>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            <a href="{{ route("alumnos.index") }}" class="btn btn-warning">Atrás</a>
        </div>

    </form>
@endsection
