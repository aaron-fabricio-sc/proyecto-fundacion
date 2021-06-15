<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Categoria;
use App\Models\Estudiante;
use PhpParser\Node\Expr\Cast\Object_;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $cursos = Curso::where('estado', 1)->latest('id')->paginate(20); */

        return view('admin.cursos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::where('estado', 1)->get();
        $ids_categorias = [];
        $nombre_categorias = [];
        /*       $coleccion = [1 => "Comida", 2 => "Textiles", 3 => "Servicios"]; */
        $categoria = [];
        foreach ($categorias as $item) {
            array_push($ids_categorias, $item->id);
        }
        foreach ($categorias as $item) {
            array_push($nombre_categorias, $item->nombre);
        }

        $coleccion = array_combine($ids_categorias, $nombre_categorias);







        return view('admin.cursos.create', compact('coleccion'));
        /*  return view("admin.cursos.create", compact('coleccion')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required", "slug" => "required|unique:cursos", "categoria_id" => "required", "descripcion" => "required",

        ]);
        $curso = Curso::create($request->all());

        return redirect()->route('admin.cursos.index', compact('curso'))->with('info', 'El curso se creo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return view('admin.cursos.show', compact("curso"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        $categorias = Categoria::where('estado', 1)->get();
        $ids_categorias = [];
        $nombre_categorias = [];

        $categoria = [];
        foreach ($categorias as $item) {
            array_push($ids_categorias, $item->id);
        }
        foreach ($categorias as $item) {
            array_push($nombre_categorias, $item->nombre);
        }

        $coleccion = array_combine($ids_categorias, $nombre_categorias);

        return view('admin.cursos.edit', compact("curso", 'coleccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            "nombre" => "required", "slug" => "required|unique:cursos,slug,$curso->id", "categoria_id" => "required", "descripcion" => "required",

        ]);
        $curso->update($request->all());
        return redirect()->route('admin.cursos.index', $curso)->with('info', 'El curso se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function inactivos()
    {


        return view('admin.cursos.inactivos');
    }

    public function desactivar(Curso $curso)
    {
        $curso->estado = 0;
        $curso->save();

        return redirect()->route('admin.cursos.inactivos')->with('info', 'Se desactivó el curso.');
    }
    public function activar(Curso $curso)
    {
        $curso->estado = 1;
        $curso->save();

        return redirect()->route('admin.cursos.index')->with('info', 'Se activó el curso.');
    }
}
