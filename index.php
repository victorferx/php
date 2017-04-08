<?php

    $resultado = '';
    
    if (isset($_POST['txtNumero'])) {
        $resultado = ' ES PRIMO';
        for($x = 2; $x < $_POST['txtNumero']; $x++)
        {
            if ($_POST['txtNumero'] % $x == 0) {
                $resultado = ' NO ES PRIMO';
                break;
            }
        }
        $resultado = 'El número ' . $_POST['txtNumero'] . $resultado;
    }
?>
<html>
    <head>
        <title>Ejemplo PHP</title>
    </head>
    <body>
        <h1>Definición de estándares</h1>
        <p>Nombre de variables: </p>
        <ul>
            <li>
                Se utilizará la notación CamelCase Ejemplo:<br>
                NombreUsuarioExterno<br>
                NumeroDocumentoIdentidad<br>
                FechaNacimientoUsuario
            </li>
            <li>
                En caso de bucles se podrá usar variables de una letra. Ejemplo:<br>
                for(i=0;i>10;i++)
            </li>
            <li>Siempre antes y despues de un signo (+ * / < == ? % ...)
            se colocará un espacio</li>

        </ul>

        <h2>Determinar si es número primo.</h2>
        <form action="index.php" method="POST">
            <label>
                Ingresa número : 
                <input type="text" name="txtNumero" maxlength="5" placeholder="11" >
            </label>
            <br>
            <input type="submit" value="Verificar" />
        </form>
        <h3><?php echo $resultado; ?></h3>
    </body>
</html>


    
  
