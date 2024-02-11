<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Reservation::all();
    }

    /**
     * @param Reservation $reservation
     * @return Reservation
     */
    public function show(Reservation $reservation): Reservation
    {
        return $reservation;
    }

    /**
     * @throws Exception
     */
    public function store(Request $request): Reservation
    {
        Reservation::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation): Reservation
    {
        $reservation->update($request->all());
        return $reservation;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation): ?bool
    {
        return $reservation->delete();

    }
}
