<?php
echo "Hola mundo!!!";
echo '<br>';
echo "Hola mundo!!!";
$nombre = 'pepe';
$apellido = "Gomez";
echo '<br> Hola '.$nombre. ' '.$apellido;
echo "<br> Hola $nombre $apellido";
$edad = 25; 
$estatura = 1.75;
$mayorEdad = true; //false
/**Bloque de txt
 * heyy
 */
$prueba = null; //valores iniciales pero no sé qué valor
$prueba = array(1,2,3,4,5,6,7); //Array ordenados - cada elemento trae un index
$prueba = [[],2.6,3,true,5,"a",7]; //flexible con respecto a los tipos de datos
//$prueba = "pepe"; MALA PRÁCTICA
echo "<br>". $prueba[2];
//definicion de clave

$persona =[
    "nombre" => "pepe",
    "Apellido" => "perez",
    "edad" => 30,
    "numerosSuerte" => [20, 12, 6],
];
echo '<br>'. $persona['nombre'];

?>