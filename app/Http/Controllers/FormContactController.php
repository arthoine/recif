<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormContact;
use Illuminate\Routing\Controller as BaseController;

class FormContactController extends BaseController
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
        $modele = new FormContact;

        $modele->nom = $request->input('nom');
        $modele->prenom = $request->input('prenom');
        $modele->email = $request->input('email');
        $modele->message = $request->input('message');
        $modele->creator_client = $request->input('creator_client');
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
