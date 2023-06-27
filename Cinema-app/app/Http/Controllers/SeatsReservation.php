<?php

namespace App\Http\Controllers;

class SeatsReservation extends Controller
{
    public function index()
    {
        // Pass them to the view
        return view('reservation.reservation');
    }
}