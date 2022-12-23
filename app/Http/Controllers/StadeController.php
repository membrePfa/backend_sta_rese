<?php

namespace App\Http\Controllers;
use App\Models\Stade;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Http\Request;

class StadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Stade::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $stade = new Stade();
        $stade->nom= $request->nom;
        $stade->capacite= $request->capacite;
        $stade->disponibilite = $request->disponibilite;
        
        
        $stade->save();
      return response($stade, Response::HTTP_CREATED);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Stade::find($id);
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
        $stade= Stade::find($id);
        $stade->nom= $request->nom;
        $stade->capacite= $request->capacite;
        $stade->disponibilite = $request->disponibilite;
        $stade->update();
        return response($stade, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $stade = Stade::find($id);
       $stade->delete();
       return response(null,Response::HTTP_NO_CONTENT);
    }
}
