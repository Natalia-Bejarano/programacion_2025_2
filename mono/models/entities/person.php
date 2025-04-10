<?php

namespace app\models\entities;
use app\models\drivers\conexDB;

class Person extends Entity
{

    protected $id = null;
    protected $name = "";
    protected $email = "";
    protected $age = null;


    public function mayorEdad() {
        if ($this-> age >=18) {
            return 'si';
        } else {
            return 'no';
        }
    }

    public function all() { //all -> todos, trae todos los datos, lista elementos 
        $sql = "select * from personas"; //sql debe ser string varible que representa string y mnadarlo a la base de datos
        $conex = new conexDB(); //abre conexion a base de datos
        $resultDb = $conex->exeSQL($sql); //
        $persons = []; //creo un array de datos ya que all me trae todos los datos 
        if ($resultDb->num_rows>0){ //¿trajo resultados? recorremos resultados
            while ($rowDb = $resultDb->fetch_assoc()){ //rowDb columna de la base de datos - //ferch assoc -> 1. MIRA QUE ELEMENTO ES PRIMERO Y ÚLTIMO: y genera un array no indexado, para acceder a traves de claves, 2. asigna ese valor a rowDb
                $person = new Person(); //asignacion de valores:
                $person -> set('id', $rowDb['id']); 
                $person -> set('name', $rowDb['nombre']);
                $person -> set('email', $rowDb['email']);
                $person -> set('age', $rowDb['edad']);
                array_push($persons, $person); //array_push agrega elementos a un array, en orden de entrada
                 
            }
        }
        $conex->close(); //cerrar conezion a base de datos
        return $persons; //retornamos los datos

    }
    public function save(){}

    public function update(){}

    public function delete(){
        
    }

}