<?php

namespace app\controllers;

use app\models\entities\Person; //importar nuestras clases por los namespaces

class PersonsController {
    public function queryAllPersons(){ // queryAllPersons: se consultarán todos los datos de personas
        $person = new Person(); //llamar al metodo que consulta todos los datos y objeto de la misma clase 
        $data = $person->all(); // data es un array pq all decuelve un array -> all ir a la base de datos y formar array
        return $data; //CENTRALIZAR LA CONSULTA A DB
    }
}