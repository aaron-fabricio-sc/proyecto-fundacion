<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNotas;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Profesore;
use Illuminate\Http\Request;
use App\Models\Nota;
use Hamcrest\Type\IsInteger;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Estudiante $listaDeEstudiante)
    {

        return $listaDeEstudiante;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotas $request)
    {

        $notas = new Nota();
        $notas->estudiante_id = $request->estudiante_id;
        $notas->curso_id = $request->curso_id;
        $notas->profesore_id = $request->profesore_id;
        $notas->gestion = $request->gestion;
        $notas->semestre = $request->semestre;
        $notas->practica_1 = $request->practica_1;
        $notas->practica_2 = $request->practica_2;
        $notas->practica_3 = $request->practica_3;
        round($nota_final = ($request->practica_1 + $request->practica_2 + $request->practica_3) / 3);

        $notas->nota_final = $nota_final;
        if ($nota_final > 50) {
            $notas->aprobacion = 1;
        } else {
            $notas->aprobacion = 0;
        }
        $notas->save();

        return redirect()->route('admin.cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $nota)
    {
        $listaNota = $nota->nota;
        return view('admin.notas.show', compact('listaNota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    public function crear(Estudiante $listaDeEstudiante)
    {








        $gestionkey = [];
        $gestionvalue = [];
        for ($i = 2020; $i < 2050; $i++) {
            array_push($gestionkey, $i);
            array_push($gestionvalue, $i);
        }

        $gestion = array_combine($gestionvalue, $gestionkey);

        $semestre = [1 => "Primero", 2 => "Segundo"];
        return view('admin.notas.create', compact('listaDeEstudiante', 'gestion', 'semestre'));
    }
}
