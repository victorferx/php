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
	public function GetLugarNacimiento()
	{
		return $this->lugarNacimiento;
	}
	public function SetLugarNacimiento($lugar_p)
	{
		$this->lugarNacimiento = $lugar_p;
	}
	public function GetSexo()
	{
		return $this->sexo;
	}
	public function SetSexo($sexo_p)
	{
		$this->sexo = $sexo_p;
	}

	public function GetEdad()
	{
		$nacimiento = $this->fechaNacimiento;
		$hoy = new DateTime();
		$años = $nacimiento->diff($hoy);
		printf('%d años.', $años->y);
	}

	public function AumentarEdad($incrementoAños_p)
	{
		$nacimiento = $this->fechaNacimiento;
		$hoy = new DateTime();
		$tiempo = $nacimiento->diff($hoy);
		$edad = $tiempo->y;
		return $edad + $incrementoAños_p;
	}
}

$victor = new Persona('victor123');

echo('Lugar de nacimiento : ') , $victor->GetLugarNacimiento();
echo "<br>";
echo 'El sexo es : ', $victor->GetSexo();
echo "<br>";
echo 'Su edad es de : '; 
$victor->GetEdad();
echo "<br>";
echo "================================", "<br>";
echo "Aumentamos la edad 3 años y cambiamos el lugar de nacimiento.", "<br>";
$victor->SetLugarNacimiento('El Tambo');
echo "Nuevo lugar de nacimiento : " , $victor->GetLugarNacimiento(), "<br>";
echo "La edad aumentada en 3 años es : ", $victor->AumentarEdad(3);
 ?>


