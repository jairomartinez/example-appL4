<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemperaturaFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_paginaRaiz()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSeeText("Convertir a Farenheit");
        $response->assertSeeText("Convertir");

        // Verificar que se muestra el menú
        $response->assertSee("A Farenheit");
        $response->assertSee("A Kelvin");
        $response->assertSee("Diferencia");
        
    }

    public function test_cent2Kel() {
        $respuesta = $this->get('/cent_2_kel');
        $respuesta->assertStatus(200);

        $respuesta->assertSee("Convertir a Kelvin");
        $respuesta->assertSeeText("*");

         // Verificar que se muestra el menú
         $respuesta->assertSee("A Farenheit");
         $respuesta->assertSee("A Kelvin");
         $respuesta->assertSee("Diferencia");


    }

    public function test_getDiferencia(){
        $respuesta = $this->get("/diferencia");
        $respuesta->assertStatus(200);
        
        $respuesta->assertSee("Diferencia de Temperatura");

        $respuesta->assertSee("Temperatura 1");
        $respuesta->assertSee("Temperatura 2");
        $respuesta->assertSee("Calcular");

         // Verificar que se muestra el menú
         $respuesta->assertSee("A Farenheit");
         $respuesta->assertSee("A Kelvin");
         $respuesta->assertSee("Diferencia");
    }

    public function test_postConvertirAFarenheitValido() {
        // hacer el post
        $response = $this->post("/", ["centigrados" => 20]);
        $response->assertSee("68°F");
    }

    public function test_postConvertirAFarenheitInvalido() {
        $response = $this->post("/", ["centigrados"=>-500]);
        $response->assertSessionHasErrors(["centigrados"]);

        
        $response->assertSeeText("Convertir a Farenheit");
        $response->assertSeeText("Convertir");

    }

    public function test_postConvertirAFarenheitInvalido2() {
        $response = $this->post("/", ["centigrados"=>"cien"]);
        $response->assertSeeText("Temperatura inválida");
        $response->assertSee("class='error'");

        $response->assertSeeText("Convertir a Farenheit");
        $response->assertSeeText("Convertir");

    }

    public function test_postKelvin() {
        $response = $this->post("/cent_2_kel", ["centigrados"=>10]);
        $response->assertSeeText("283K");
    }

    public function test_postKelvinInvalido() {

        $response = $this->post("/cent_2_kel", ["centigrados"=>-500]);
        $response->assertSeeText("Temperatura inválida");
        $response->assertSee("class='error'");
        $respuesta->assertSeeText("Convertir a Kelvin");

    }

    public function test_postKelvinInvalido2() {

        $response = $this->post("/cent_2_kel", ["centigrados"=>"diez"]);
        $response->assertSeeText("Temperatura inválida");
        $response->assertSee("class='error'");
        $respuesta->assertSeeText("Convertir a Kelvin");

    }

    public function test_postDiferencia()
    {
        $response = $this->post("/diferencia", ["temp1"=>10, "temp2"=>20]);
        $response->assertSeeText("10");

    }

    public function test_postDiferencia2()
    {
        $response = $this->post("/diferencia", ["temp1"=>20, "temp2"=>10]);
        $response->assertSeeText("10");

    }

    public function test_postDiferenciaInvalidos()
    {
        $response = $this->post("/diferencia", ["temp1"=>-280, "temp2"=>20]);
        $response->assertSeeText("Temperatira Inválida");
        $response->assertSee("class='error'");


    }

    public function test_postDiferenciaInvalidos2()
    {
        $response = $this->post("/diferencia", ["temp1"=>-20, "temp2"=>-280]);
        $response->assertSeeText("Temperatira Inválida");
        $response->assertSee("class='error'");


    }
    public function test_postDiferenciaInvalidos3()
    {
        $response = $this->post("/diferencia", ["temp1"=>-280, "temp2"=>-280]);
        $response->assertSeeText("Temperatira Inválida");
        $response->assertSee("class='error'");


    }
    public function test_postDiferenciaInvalidos4()
    {
        $response = $this->post("/diferencia", ["temp1"=>"CIEN", "temp2"=>-280]);
        $response->assertSeeText("Temperatira Inválida");
        $response->assertSee("class='error'");


    }
    public function test_postDiferenciaInvalidos5()
    {
        $response = $this->post("/diferencia", ["temp1"=>20, "temp2"=>"CIEN"]);
        $response->assertSeeText("Temperatira Inválida");
        $response->assertSee("class='error'");


    }

    public function test_postDiferenciaInvalidos6()
    {
        $response = $this->post("/diferencia", ["temp1"=>"DIEZ", "temp2"=>"CIEN"]);
        $response->assertSeeText("Temperatira Inválida");
        $response->assertSee("class='error'");


    }
     
}
