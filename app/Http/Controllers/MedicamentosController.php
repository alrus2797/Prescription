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
        return view('Medicamentos.index',['todos'=>$todos]);
    }

    public function create()
    {
        return view('Medicamentos.create');
    }

    public function store(Request $request)
    {
        $nuevo = new Medicamento;
        $nuevo->nombre = $request->nombre;
        $nuevo->mg = $request->mg;
        $nuevo->receta = $request->receta;
        $nuevo->fechaVenc = $request->fecha_venc;
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
    public function show($id)  //Medicamento $medicamento
    {
        $medicamento = Medicamento::find($id);
        return view('Medicamentos.show',['medicamento'=>$medicamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento = Medicamento::find($id);
        $medicamentos = Medicamento::all();
        return view('Medicamento.edit',['medicamento'=>$medicamento,'medicamentos'=>$medicamentos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicamento = Medicamento::find($id);

        $medicamento->nombre = $request->nombre;
        $medicamento->mg = $request->mg;
        $medicamento->receta = $request->receta;
        $medicamento->fechaVenc = $request->fecha_venc;
        $medicamento->efectoSecundarios = $request->efectoSecundarios;
        $medicamento->save();

        return redirect('Medicamento/'.$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        //
    }
}
