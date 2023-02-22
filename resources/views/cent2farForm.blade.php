@extends("layout")
@section("title", "Hola")
@section("contenedor")
      <DIV class="row g-3">
        <div class="col-sm-4 offset-4">
          <h1> Convertir a Farenheit</h1>
        
      

        <form action="/" method="POST">
        <DIV class="row g-3">
          <div class="col">
          <div class="form-floating mb-3">
            <input type="number" id="centigrados"name="centigrados" class="form-control" placeholder="Ingrese grados cenrigrados" aria-label="Username">      
            <label for="centigrados">Grados centigrados</label>
          </div>
        </div>

        <div class="row g-3">
          <div class="col">
            <div class="form-floating mb-3">
              <input id="farenheit" readonly type="text" name="farenheit" class="form-control" placeholder="Ingrese grados cenrigrados" aria-label="Username">      
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