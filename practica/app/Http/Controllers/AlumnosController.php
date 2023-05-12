<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;

class AlumnosController extends Controller
{
    public function index(){
        $alumnos = Alumnos::all();
        return view ("index",compact("alumnos"));
    }

    public function crear(Request $request){
      return view("crear");
    }

    public function insertar(Request $request){
        $alumno = new Alumnos(
            [
                'nombre'=>$request->get('nombre'),
                'apellido'=>$request->get('apellido'),
                'edad'=>$request->get('edad'),
                'sexo'=>$request->get('sexo')
            ]);
        $alumno->save();
        return redirect('/alumnos');
    }

    public function editar(){
        return view("editar");
    }

    public function confirm_ed(){
        return view("crear");
    }

    public function borrar($id){
        $alumno= Alumnos::find($id);
        return view("borrar",compact("alumno"));
    }

    public function confirm_del(){
        return view("crear");
    }





}
