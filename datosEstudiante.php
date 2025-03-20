<?php
include 'clases.php';
$estudiante = new Estudiante($_POST['nombre'], $_POST['apellido']);
$estudiante->set('email', $_POST['correo']);
$edad=null;
if($edad>=18){
    echo "es mayor de edad";
}else{
    echo "No es mayor de edad, es menor";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Estudiante</title>
</head>
<body>
    <h1>Los datos del estudiante son: </h1>
    <div>
        <?php
    echo $estudiante->nombreCompleto();
    ?>
    <br>
    </div>
</body>
</html>