<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioModel;

class FormularioController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $dtHoje = new \DateTime();
        //dd($request);

        $chamado = new FormularioModel();

        $chamado->rm = $request->rm;
        $chamado->email = $request->email;
        $chamado->ocorrencias = $request->ocorrencias;
        $chamado->turma = $request->turma;
        $chamado->datahora = $dtHoje->format("y-m-d H:i:s");
        $chamado->status = "ABERTO";
        $chamado->idChamado = null;
        $chamado->catChamados = $request->catChamados;

        $chamado->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
