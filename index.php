<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Formulario</title>
</head>
<body>
    <?php
    include("claseformulario.php");
    //$Productos = array("camisetas", "pantalones", "tenis", "rodilleras");
    //$Genero = array("femenino", "masculino", "prefiero no decir");
    $Cajas = array("Cedula");
    $Checkboxes = array("Prestamos","Trasferencia", "Atencion Personalizada");
    ?>
    <form action="recibevariables.php" method="post">
    <?php
    $ElementosFrm = new OBJElementosFrm();
    //echo $ElementosFrm->CrearLista($Productos, "producto");
    //echo "<br>";
    //echo $ElementosFrm->CrearInputRadio($Genero, "genero");
    //echo "<br>";
    echo $ElementosFrm->CrearLabelBox($Cajas, "Usuario", "lightgreen");
    echo $ElementosFrm->CrearInputCheckBox($Checkboxes, "Servicios", "elija el servicio que busca en el banco:");
    ?> 
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>