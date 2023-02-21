<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use \App\Helper\ConverterHelper;
class TemperaturaUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_CentigradosAFarenheitValido()
    {
        $farenheit = ConverterHelper::centigradosAFarenheit(25);
        $this->assertTrue($farenheit == 77);
    }

    public function test_centigradosAFarenheitDecimales() {
        $farenheit = ConverterHelper::centigradosAFarenheit(21);
        $this->assertTrue($farenheit == 70);
    }

    public function test_CentigradosAFarenheitFueraDeRango() {
        $farenheit = ConverterHelper::centigradosAFarenheit(-275);
        $this->assertFalse($farenheit == -463, "Trata de convertir una temperatura por debajo del cero absoluto");
        $this->assertTrue($farenheit == false, "No devuelve false al encontrar un error");
    }

    public function test_centigradosAKelvin() {
        $kelvin = ConverterHelper::centigradosAKelvin(-100);
        $this->assertTrue($kelvin == 173);
    }

    public function test_centigradosAKelvinFueraDeRango() {
        $kelvin = ConverterHelper::centigradosAKelvin(-275);
        $this->assertTrue($kelvin == false);
    }

    public function test_centigradosAKelvinLetras() {
        $kelvin = ConverterHelper::centigradosAKelvin("cien");
        $this->assertTrue($kelvin == false);
    }

    public function test_centigradosAKelvinNumeroEnCadena() {
        $kelvin = ConverterHelper::centigradosAKelvin("200");
        $this->assertTrue($kelvin == 473);
    }

    public function test_centigradosAKelvinNumeroEnCadenaInvalido() {
        $kelvin = ConverterHelper::centigradosAKelvin("-275");
        $this->assertTrue($kelvin == false);
    }

    public function test_centigradosAKelvinConArreglo() {
        $kelvin = ConverterHelper::centigradosAKelvin([2, 4 ,5]);
        $this->assertTrue($kelvin == false);
    }
}
