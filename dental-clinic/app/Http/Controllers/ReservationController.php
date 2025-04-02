<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->valite([
          'reservation_date' => 'required|date',
          'reservation_time' => 'required',
          'patient_name' => 'required|string|max:255',

        ]);

        Reservation::create([
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
            'patient_name' => $request->patient_name,
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully')
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('$reservation'))
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->valite([
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'patient_name' => 'required|string|max:255',
  
          ]);
  
          Reservation::update([
              'reservation_date' => $request->reservation_date,
              'reservation_time' => $request->reservation_time,
              'patient_name' => $request->patient_name,
          ]);
          return redirect()->route('reservations.index')->with('success', 'Reservation updated succesfully.')
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully')
    }
}
