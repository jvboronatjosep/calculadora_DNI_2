<?php

use PHPUnit\Framework\TestCase;
use CalculadoraDNI2\DNI;

class CalculadoraDNI2Test extends TestCase
{
    public function testObtenerLetra()
    {
        $dniSinLetra = 12345678;  // Ejemplo
        $calc = new DNI($dniSinLetra);

        $letraEsperada = 'Z'; // 12345678 % 23 = 14 => 'Z'

        $this->assertEquals($letraEsperada, $calc->obtenerLetra());
    }

    public function testDNIConLetraCompleto()
    {
        $dniSinLetra = 12345678;
        $calc = new DNI($dniSinLetra);

        $dniConLetraEsperado = '12345678Z';

        $this->assertEquals($dniConLetraEsperado, $calc->getDNIConLetra());
    }
}
