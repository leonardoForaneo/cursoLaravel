<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Un solo controlador para 3 rutas
    public function index()
    {
        //Almacenamos todos los registros de los cursos
        $cursos = Curso::paginate();
        //Pasamos la coleccion a la vista
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($curso)
    {
        $curso = Curso::find($curso);
        //compact('curso'); == ['curso'] => $curso
        return view('cursos.show', compact('curso'));
    }
}
