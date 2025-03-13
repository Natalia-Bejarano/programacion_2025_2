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
//repaso de condicionales

$numeros =[1,2,3,4,5,6,7,8,9,10,11,12]; //Crear array de números

for($i = 0; $i < 12; $i++){
    $parImpar = "";
    if(($numeros[$i] % 2)==0){
        $parImpar= "Par";
    }else{
        $parImpar = "Impar";
    }
    echo "<br>$numeros[$i] es $parImpar";
}
//i=contador n-1 cantidad de elementos que tiene el array
$i=0;
$estado = true;
while($estado){
    if($i==1){
        $i++;
        continue;
    }
    
    $parImpar = "";
    if(($numeros[$i] % 2)==0){
        $parImpar= "Par";
    }else{
        $parImpar = "Impar";
    }
    echo "<br>$numeros[$i] es $parImpar";
    $i++;
    if  ($i==12){
        //$estado = false;
        break;
    }
    
} 
$i = 0;
do {
    $parImpar = "";
    if(($numeros[$i] % 2)==0){
        $parImpar= "Par";
    }else{
        $parImpar = "Impar";
    }
    echo "<br>$numeros[$i] es $parImpar";
    $i++;
}while($i<12); // BOOLEAN primero ejecuta y luego pregunta - cuando queremos que haya al menos una iteracion

foreach($numeros as $n){
    $parImpar = "";
    if(($n % 2)==0){
        $parImpar= "Par";
    }else{
        $parImpar = "Impar";
    }
    echo "<br>$n es $parImpar";



}//sí o sí recorre toda una lista, coge cada elemento y la agrega a una variabler
foreach($numeros as $i => $n){
    $parImpar = "";
    if(($n % 2)==0){
        $parImpar= "Par";
    }else{
        $parImpar = "Impar";
    }
    echo "<br>$i :$n es $parImpar";
}

        /*&& AND
        ll or
        !negacion
        >mayor
        <menor
        >= mayor o igual que
        <= menor o igual que
        != diferente
        == igual que
        */ 

        if($numeros[0]==0 && $numeros[0]<10){
            /////
        }elseif($numeros[0]==10 || $numeros[0] < 20){
            ///
        }elseif(!($numeros==20 && $numeros[0] <= 30)){
            ////
        }else{

        }
        $catg = 'a';
        switch($catg){
            case 'a':
                ///
                break;
            case'b':
                ////
            break;
                case 'c':
                    ////
                break;
            default:
            ////
            break;

                
        }
// switch cndo hay 4-5 casos para buena práctica.

function saludar($nombre){
    echo "<br>Hola $nombre";
}

saludar("pepe");

function getSaludo($nombre)
{
    return "<br>Hola $nombre";
}
echo getSaludo("ana");

function saludarDos(String $nombre, $apellido){
    echo"<br>Hola $nombre $apellido";
}
saludarDos("pepe", 'gomez');
function saludarTres(String $nombre, $apellido=null)
{
    echo"<br>Hola $nombre $apellido";
}
saludarTres("Ana");
saludarTres("Ana", "Gómez");

function saludarCuatro(...$args)//
{
    $nombre = $args[0];
    $apellido = empty($args[1]) ? '': $args[1];//simplificar un if
    echo "<br>Hola $nombre $apellido";

}
saludarCuatro("pedro");
saludarCuatro('pedro', 'picapiedra', 40);
saludarCuatro('pedro', 'picapiedra', 40, [1,2,3,4]);
saludarCuatro('pedro', 'picapiedra', 40, [1,2,3,4], true);
//Hay que ser cuidadosos con la estructura, no desorden
define("CONSTANTE", "Prueba");
echo CONSTANTE;
//CLASE
class Persona{
    private $nombre = null;//propiedades de la clase Persona
    private $apellido;

    function getNombre(){
        return $this->nombre;
    }
    function setNombre($val){
        $this-> nombre= $val;
        
    }
}
$persona = new Persona();
$persona->setNombre("Pablo");
echo "<br>".$persona->getNombre();

?>