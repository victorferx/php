<?php 
/**
* 
*/
class Empleado extends Persona
{
	private $codigoUsuario;
	private $sueldoBasico;

	public function GetCodigoUsuario()
	{
		return $this->codigoUsuario;
	}
	public function SetCodigoUsuario($nombre_p)
	{
		$this->SetNombreCompleto($nombre_p);
	}

	public function GetSueldoBasico()
	{
		return $this->sueldoBasico;
	}
	public function SetSueldoBasico($sueldo_p)
	{
		$this->sueldoBasico = $sueldo_p;
	}

	function __construct()
	{
	}
}

 ?>