@extends("layout")
@section("title", "Hola")
@section("contenedor")
      <DIV class="row">
        <div class="col-md-4 offset-md-4">
          <h1> Convertir a Farenheit</h1>
        
      <!-- /resources/views/post/create.blade.php -->
  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class='error'>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->

        <form action="/" method="POST">
          @csrf
        <DIV class="row">
          <div class="col">
          <div class="form-floating mb-3">
            <input type="number" id="centigrados"name="centigrados" class="form-control @error("centigrados") is_invalid @enderror" placeholder="Ingrese grados cenrigrados" aria-label="Centigrados">
            <label for="centigrados">Grados centigrados *</label>
            @error("centigrados")
            Temperatura inválida
            @enderror

          </div>
        </div>

        <div class="row ">
          <div class="col">
            <div class="form-floating mb-3">
              <input id="farenheit" readonly type="text" name="farenheit" class="form-control" placeholder="Ingrese grados cenrigrados" aria-label="Username"
              @isset($farenheit)
                value="{{$farenheit}}°F"
              @endisset
              >      
              <label for="farenheit">Farenheit</label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Convertir</button>
        </DIV>
            
        </form>
    </div>
  </div>
  </DIV>
@endsection