<?php 

/**
* 
*/
class Persona
{
	private $fechaNacimiento;
	private $nombreCompleto;
	private $sexo;
	private $usuario;
	private $lugarNacimiento;

	function __construct($usuario_p)
	{
		$this->sexo = 'Varón';
		$this->nombreCompleto = 'Victor';
		$this->fechaNacimiento = new DateTime('1986-11-18');
		$this->lugarNacimiento = 'huancayo';
		$this->usuario = $usuario_p;

	}

	public function GetSexo()
	{
		return $this->sexo;
	}
	public function SetSexo($sexo_p)
	{
		$this->sexo = $sexo_p;
	}


	public function AumentarEdad($incrementoAños)
	{
		$nacimiento = $this->fechaNacimiento;
		$hoy = new DateTime();
		$años = $nacimiento->diff($hoy);
		printf('%d años, %d meses', $años->y, $años->m);

		//return $edad + $incrementoAños;
	}
}

//$victor = new Persona();
$victor = new Persona('victor123');


//$victor.SetSexo('mujer');
echo 'El sexo es : ', $victor->GetSexo();
echo "<br>";
echo 'Su edad es de : '; 
$victor->AumentarEdad(2);


 ?>


