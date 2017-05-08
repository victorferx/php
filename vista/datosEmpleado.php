<?php 
	include('../persona.php');
	include('../empleado.php');
	include('../util.php');

	if (isset($_POST['txtNombre']) && isset($_POST['txtSueldo'])  && isset($_POST['txtDiaNoLaborados'])) 
	{
		if ($_POST['txtNombre'] == "" || $_POST['txtSueldo'] == '' || $_POST['txtDiaNoLaborados'] == '') {
			$mensaje = 'Registre todos los datos';
		}
		else
		{
			$tieneHijo = isset($_POST['rdbHijo']) ? true : false;


			$mensaje = 'Estimado(a) ' . Util::ObtenerParteNombre($_POST['txtNombre'], 'no') . '<br>';
			$mensaje = $mensaje . 'Su sueldo se calculó en S/ '  . Util:: CalculaSueldo($_POST['txtSueldo'], $_POST['txtDiaNoLaborados'], $tieneHijo);			
		}

	}
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos de empleado</title>
</head>
<body>
	<form action="datosEmpleado.php" method="POST">
		<label for="">Nombre del empleador</label>
		<input type="text" name="txtNombre" maxlength="80">
		<br>
		<label for="">Sueldo Basico</label>
		<input type="text" name="txtSueldo" placeholder="####.##" maxlength="9">
		<br>
		<label for="">Días no laborados</label>
		<input type="text" name="txtDiaNoLaborados" maxlength="2">
		<br>
		<label for="">Tiene hijos</label>
		<input type="checkbox" name="rdbHijo" value="true">
		<br><br>
		<input type="submit" name="btnCalcular" value="Calcular Sueldo">
	</form>
	<?php 
		if (isset($mensaje)) {
			echo '<h3>', $mensaje, '</h3>';
		}
	 ?>
</body>
</html>