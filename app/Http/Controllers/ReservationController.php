<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Reservation;
use App\Models\Stade;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $stade = Stade::all();
        return Reservation::selectRaw("reservations.id,reservations.stade_id,reservations.dateReservation,reservations.heureReservation, reservations.prix, reservations.joueur_id, stades.nom as nomStade")
        ->join("stades","stades.id","reservations.stade_id")
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $reservation = new Reservation();
        $reservation->stade_id= $request->stade_id;
        $reservation->joueur_id= $request->joueur_id;
        $reservation->dateReservation= $request->dateReservation;
        $reservation->heureReservation = $request->heureReservation;
        $reservation->prix = $request->prix;
        $reservation->save();
      return response($reservation, Response::HTTP_CREATED);
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
        
        $reservation= Reservation::find($id);
        $reservation->stade_id= $request->stade_id;
        $reservation->dateReservation= $request->dateReservation;
        $reservation->heureReservation = $request->heureReservation;
        $reservation->prix = $request->prix;
        $reservation->update();
        return response($reservation, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
