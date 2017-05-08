<?php 
/*
NuestraEmpresa - © - Huancayo de 2017
Descripción	: Clase para agregar funciones comunes multiproposito.
Autor 		: Victor Fernández
Creación 	: 29/04/2017
Email/Telf	: victorferx@gmail.com / 977773430
Control de versiones:
ID 	fecha 		Descripción
VF 	07/04/2017	Se agrega la cabecera del archivo y se agrega la función ObtenerParteNombre
*/
define('SUELDO_MINIMO_VITAL', 850);

class Util
{
	public static function CalculaSueldo($sueldoBasico, $diasFalta, $tieneHijos)
	{
		$asignacionFamiliar = $tieneHijos ? (SUELDO_MINIMO_VITAL * 0.1) : 0.00;
		return ((($sueldoBasico / 30) * (30 - $diasFalta)) + $asignacionFamiliar);
	}


	public static function ObtenerParteNombre($_nombreCompleto, $_tipo)
	{
		$longitudTotal = strlen($_nombreCompleto);
		$partirApellido = strpos($_nombreCompleto, '-');
		$partirNombre = strpos($_nombreCompleto, ',');
		switch ($_tipo) {
			case 'no':
				return substr($_nombreCompleto, $partirNombre + 1, $longitudTotal - $partirNombre);
				break;
			case 'ap':
				return substr($_nombreCompleto, 0, $longitudTotal - $partirApellido);
				break;
			case 'am':
				return substr($_nombreCompleto, $partirApellido + 1, $partirNombre - 1);
				break;	
			default:
				return $_nombreCompleto;
				break;
		}
	}
}
 ?>