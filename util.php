<?php 
/**
* 
*/
class Util
{
	# Se define la constante de sueldo mínimo vital
	define('SUELDO_MINIMO_VITAL', 850.00);

	public static function CalculaSueldo($sueldoBasico, $diasFalta, $numeroHijos)
	{
		return ($sueldoBasico * (30 - $diasFalta)) + (SUELDO_MINIMO_VITAL * 0.1);
	}
}
 ?>