<?php



namespace App;



use InvalidArgumentException;



class Suma

{

public static function sumar($num1, $num2)

{

if (!is_numeric($num1) || !is_numeric($num2)) {

throw new InvalidArgumentException("Valores no numéricos");

}



return $num1 - $num2;

}

}