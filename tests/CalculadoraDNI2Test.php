<?php


use PHPUnit\Framework\TestCase;
use App\CalculadoraDNI2;

class CalculadoraDNI2Test extends TestCase
{
    public function testObtenerLetra()
    {
        $dniSinLetra = 12345678;
        $calc = new CalculadoraDNI2($dniSinLetra);

        $letraEsperada = 'Z';
        $letraObtenida = substr($calc->getDNIConLetra(), -1); // sacamos la letra final

        $this->assertEquals($letraEsperada, $letraObtenida);
    }

    public function testDNIConLetraCompleto()
    {
        $dniSinLetra = 12345678;
        $calc = new CalculadoraDNI2($dniSinLetra);

        $dniConLetraEsperado = '12345678Z';

        $this->assertEquals($dniConLetraEsperado, $calc->getDNIConLetra());
    }
}
