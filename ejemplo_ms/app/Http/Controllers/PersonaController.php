<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource. INDEX: listar recursos
     */
    public function index()
    {
       $rows = Persona::all(); //llamamos model y consultamos
       return response()->json(['data'=> $rows], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newPersona = new Persona();
        $newPersona -> nombre = $data['name'];
        $newPersona -> email = $data['email'];
        $newPersona -> edad = $data['age'];
        $newPersona -> save();

        return response ()->json(['data'=>'Datos correctamente almacenados'], 201); //Se creó un nuevo recurso "201"
    }

    /**
     * Display the specified resource. detalle de un registro, enviar info de un registro
     */
    public function show(string $id)
    {
        $row = Persona::find($id);
        if(empty($row)){
            return response()->json(['data'=>'No existe'], 404);
        }
        return response()->json(['data'=> $row], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Persona::find($id);
        if(empty($row)){
            return response()->json(['data'=>'No existe'], 404);
        }
        $data = $request-> all();
        $row->nombre = $data['name'];
        $row->email = $data['email'];
        $row->edad = $data['age'];
        $row -> save();
        return response()->json(['data'=> 'Datos almacenados correctamente'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Persona::find($id);
        if(empty($row)){
            return response()->json(['data'=>'No existe'], 404);
        }
        $row -> delete();
        return response()->json(['data'=> 'Datos eliminados correctamente'], 200);


    }
}
