<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    //Un solo controlador para 3 rutas
    public function index()
    {
        //Almacenamos todos los registros de los cursos en páginas
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        //Pasamos la coleccion a la vista
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(/*Request*/StoreCurso $request)
    {

        /*$curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();*/

        $curso = Curso::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category
        ]);
        return redirect()->route('cursos.show', $curso);
    }

    public function show(/*$curso*/Curso $curso)
    {
        //$curso = Curso::find($curso);
        //compact('curso'); == ['curso'] => $curso
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Curso $curso, StoreCurso $request)
    {

        /*$curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();*/
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
