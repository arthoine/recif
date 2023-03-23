<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormAchat;
use Illuminate\Routing\Controller as BaseController;

class FormAchatController extends BaseController
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modele = new FormAchat;

        $modele->nom = $request->input('nom');
        $modele->prenom = $request->input('prenom');
        $modele->email = $request->input('email');
        $modele->id_produit = $request->input('id_produit');
        $modele->save();

        return response()->json(['message' => 'Enregistrement créé avec succès.']);
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
