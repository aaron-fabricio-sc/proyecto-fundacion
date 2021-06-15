<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('admin.categorias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
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
            'nombre' => 'required',
            'slug' => "required|unique:categorias",
        ]);

        $categoria = Categoria::create($request->all());
        return redirect()->route('admin.categorias.index', $categoria)->with('info', 'La categoría se creo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {

        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:categorias,slug,$categoria->id",
        ]);

        $categoria->update($request->all());
        return redirect()->route('admin.categorias.edit', $categoria)->with('info', 'La categoría se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }

    public function desactivar(Categoria $categoria)
    {

        $categoria->estado = 0;
        $categoria->save();
        return redirect()->route('admin.categorias.inactivos')->with('info', 'Se desactivó la categoría.');
    }
    public function inactivos()
    {


        return view('admin.categorias.inactivos');
    }
    public function activar(Categoria $categoria)
    {
        $categoria->estado = 1;
        $categoria->save();

        return redirect()->route('admin.categorias.index')->with('info', 'Se ac activó la categoría.');
    }
}
