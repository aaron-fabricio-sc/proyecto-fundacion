<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\User;
use App\Http\Requests\StoreEstudiantes;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.estudiantes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gestionkey = [];
        $gestionvalue = [];
        for ($i = 2020; $i < 2050; $i++) {
            array_push($gestionkey, $i);
            array_push($gestionvalue, $i);
        }

        $gestion = array_combine($gestionvalue, $gestionkey);

        $semestre = [1 => "Primero", 2 => "Segundo"];


        $user = User::pluck('primer_ap', 'id');
        $cursos = Curso::where('estado', 1)->get();
        $cursosList = [];
        $key = [];
        $value = [];
        foreach ($cursos as $curso) {

            array_push($key, $curso->id);
            array_push($value, $curso->nombre);
        }
        $cursosList = array_combine($key, $value);


        return view('admin.estudiantes.create', compact("gestion", "semestre", "user", "cursosList"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstudiantes $request)
    {


        $estudiante = Estudiante::create($request->all());
        return redirect()->route('admin.estudiantes.index', compact('estudiante'))->with('info', "Se creó es estudiante");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        return view('admin.estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        $gestionkey = [];
        $gestionvalue = [];
        for ($i = 2020; $i < 2050; $i++) {
            array_push($gestionkey, $i);
            array_push($gestionvalue, $i);
        }

        $gestion = array_combine($gestionvalue, $gestionkey);
        $cursos = Curso::where('estado', 1)->get();
        $cursosList = [];
        $key = [];
        $value = [];
        foreach ($cursos as $curso) {

            array_push($key, $curso->id);
            array_push($value, $curso->nombre);
        }
        $cursosList = array_combine($key, $value);



        $semestre = [1 => "Primero", 2 => "Segundo"];
        $user = User::pluck('primer_ap', 'id');
        return view('admin.estudiantes.edit', compact('estudiante', 'gestion', 'semestre', 'user', 'cursosList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'user_id' => "required", 'gestion' => "required", 'semestre' => "required"

        ]);
        $estudiante->update($request->all());

        return redirect()->route('admin.estudiantes.index')->with('info', 'Se actualizó el estudiante con exito');
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
        return view('admin.estudiantes.inactivos');
    }
    public function desactivar(Estudiante $estudiante)
    {
        $estudiante->estado = 0;
        $estudiante->save();
        return redirect()->route('admin.estudiantes.inactivos')->with('info', 'Se inhabilitó el estudiante');
    }
    public function activar(Estudiante $estudiante)
    {
        $estudiante->estado = 1;
        $estudiante->save();
        return redirect()->route('admin.estudiantes.index')->with('info', 'Se activó el estudiante');
    }
}
