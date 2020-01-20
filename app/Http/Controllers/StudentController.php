<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    public  function index(){
        return view('welcome');
    }
    public function create(){
        //echo "Hola, voy a crear algo grande";
        return view('create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required'


        ]
    );

    $estudiante = new Students;
    $estudiante->nombre = $request->nombre;
    $estudiante->apellidos = $request->apellidos;
    $estudiante->email = $request->email;
    $estudiante->telefono = $request->telefono;
    $estudiante->save();
    return redirect (route ('home'));

    }
}
