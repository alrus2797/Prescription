<?php

namespace App\Http\Controllers;

use App\Medicamento;
use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Medicamento::all();
        return view('Medicamentos.todos',['todos'=>$todos]);
    }

    public function create()
    {
        return view('Medicamentos.create');
    }

    public function store(Request $request)
    {
        //dd($request);

        $nuevo = new Medicamento;
        $nuevo->nombre = $request->nombre;
        $nuevo->mg = $request->mg;
        $nuevo->receta = $request->receta;
        $nuevo->fechaVenc = $request->fechaVenc;
        $nuevo->efectoSecundarios = $request->efectoSecundarios;
        $nuevo->save();

        return response()->json(['true'=> true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show( Medicamento $medicamento )
    {
        return view('medicamentos.show',['medicamento'=>$medicamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit( Medicamento $medicamento )
    {
        return view('medicamentos.edit',['medicamento'=>$medicamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {

        $medicamento->nombre = $request->nombre;
        $medicamento->mg = $request->mg;
        $medicamento->receta = $request->receta;
        $medicamento->fechaVenc = $request->fecha_venc;
        $medicamento->efectoSecundarios = $request->efectoSecundarios;
        $medicamento->save();

        return redirect('medicamento/'.$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */

    public function deleteGet(Medicamento $medicamento)
    {
        if($medicamento == null)
            echo "No se encontró el medicamento";
        return view('medicamentos.destroy',['medicamento'=>$medicamento]);
    }

    public function destroy(Request $request)
    {
        $eliminado = Medicamento::find($request->id);
        $eliminado -> delete();
        return redirect('medicamentos');   
    }
}
