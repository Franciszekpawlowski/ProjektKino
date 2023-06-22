<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Configuration\Group;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seance = Seance::all()->sortBy('movie_id')->GroupBy('movie_id');
        // dd($seance);
        return view('seance.index', [
            'seancesListGroup' => $seance
        ]);
    }

    /**
     * Seance the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $seance = Seance::findOrFail($id);

        if (request()->expectsJson()) {
            return response()->json($seance);
        }

        return view('seances.show', ['seance' => $seance]);
    }


    /**
     * Seance the form for editing the specified resource.
     */
    public function edit(Seance $Seance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seance $Seance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seance $Seance)
    {
        //
    }

}