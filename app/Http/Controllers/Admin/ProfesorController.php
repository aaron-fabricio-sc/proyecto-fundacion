<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesore;
use App\Models\User;
use App\Models\Curso;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\StoreProfesores;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.profesores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = User::pluck('primer_ap', 'id');
        $listaCursos = Curso::where('estado', 1)->get();

        $keyCurso = [];
        $valueCurso = [];
        foreach ($listaCursos as $listaCurso) {
            array_push($keyCurso, $listaCurso->id);
            array_push($valueCurso, $listaCurso->nombre);
        }
        $cursos = array_combine($keyCurso, $valueCurso);



        return view('admin.profesores.create', compact('cursos', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfesores $request)
    {


        $profesores = Profesore::create($request->all());
        return redirect()->route('admin.profesores.index', compact('profesores'))->with('info', 'El Profesor/a se creo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profesore $profesore)
    {
        return view('admin.profesores.show', compact('profesore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesore $profesore)
    {
        $user = User::pluck('primer_ap', 'id');
        $cursos = Curso::pluck('nombre', 'id');
        return view('admin.profesores.edit', compact('profesore', 'cursos', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesore $profesore)
    {
        $request->validate([
            'user_id' => 'required', 'curso_id' => 'required', 'especialidad' => 'required', 'descripcion_especialidad' => 'required'
        ]);
        $profesore->update($request->all());

        return redirect()->route('admin.profesores.index')->with('info', 'Se actualizó el profesor correactamente');
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


        return view('admin.profesores.inactivos');
    }
    public function desactivar(Profesore $profesor)
    {
        $profesor->estado = 0;
        $profesor->save();

        return redirect()->route('admin.profesores.inactivos')->with('info', 'Se inhabilitó el profesor');
    }
    public function activar(Profesore $profesor)
    {
        $profesor->estado = 1;
        $profesor->save();

        return redirect()->route('admin.profesores.index')->with('info', 'Se activó el profesor');
    }
}
