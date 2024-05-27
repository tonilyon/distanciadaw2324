<?php

/**
*Script para la práctica de documentacion
*
* Este script contiene funciones de ejemplo con DOcBlocks para práctica de documentación
*@package Práctica
*@autor Dominguez
*@version 1.0
*/

/*
FUncion que suma dos números pasados por parámetro
*/

function sumar($a, $b){
	return $a + $b;
}

function multiplicar($p1, $p2){
        return $p1 * $p2;
}

/*
	Función sólo par auso interno, que no puede ser llamada desde fuera
*/
/*
* @internal
*/
function funcionInterna(){

}


//Ejemplo de uso:
echo "Suma de 3 y 4: " . sumar(3,4) . "\n";

