@extends("layout")
@section("title", "Hola")
@section("contenedor")
      <DIV class="row g-3">
        <div class="col-sm-4 offset-4">
          <h1>Diferencia de Temperatura</h1>
        
      

        <form action="/" method="POST">
        <DIV class="row g-3">
          <div class="col">
          <div class="form-floating mb-3">
            <input type="number" id="temp1"name="temp1" class="form-control" placeholder="Temperatura 1" aria-label="Username">      
            <label for="temp1">Temperatura 1</label>
          </div>
        </div>
        <DIV class="row g-3">
          <div class="col">
          <div class="form-floating mb-3">
            <input type="number" id="temp2"name="temp2" class="form-control" placeholder="Temperatura 2" aria-label="Username">      
            <label for="temp1">Temperatura 2</label>
          </div>
        </div>

        <div class="row g-3">
          <div class="col">
            <div class="form-floating mb-3">
              <input id="farenheit" readonly type="text" name="farenheit" class="form-control" placeholder="Ingrese grados cenrigrados" aria-label="Username">      
              <label for="farenheit">Diferencia</label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
        </DIV>
        

        
       
            
        </form>
    </div>
  </div>
  </DIV>
@endsection