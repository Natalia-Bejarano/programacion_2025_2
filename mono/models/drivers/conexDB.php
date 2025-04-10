<?php

namespace app\models\drivers;
//ABSTRACCION PARA CONECTARNOS A DB

use mysqli; //importacion de esa libreria 

class conexDB { //PROCESO DE ABSTRACCIÓN Y ENCAPSULAMIENTO

    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $nameDB = 'examen_pr2';

    private $conex = null;


public function __construct()    //SE PONE DENTRO DEL CONSTRUCTOR PARA QUE CADA VEZ QUE SE CREE UN OBJETO SE ABRA LA CONEXION A LA BASE DE DATOS
{ 

  $this->conex = new mysqli( //centralizar la conexión 
    $this -> host,
    $this -> user,
    $this -> pwd,
    $this -> nameDB
  );
  

}

    public function exeSQL($sql){
       return $this -> conex -> query($sql); //ejecutamos sentencias sql

    }

    public function close(){
        $this -> conex->close(); //cerrar la conexión
    }
}



