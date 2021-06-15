<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        /*   $cursoActivo = Curso::where('estado', 1)->latest('id')->paginate(6); */
        return view('cursos.index');
    }

    public function show(Curso $curso)
    {

        $relacionados = Curso::where('categoria_id', $curso->categoria_id)
            ->latest('id')->where('estado', 1)->get();

        return view('cursos.show', compact('curso', 'relacionados'));
    }

    public function category(Categoria $category)
    {
        $cursoCategory = Curso::where('categoria_id', $category->id)->latest('id')->where('estado', 1)->paginate(8);
        return view('cursos.category', compact('cursoCategory', 'category'));
    }
}
