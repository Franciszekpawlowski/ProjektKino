<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;

class CinemaController extends Controller
{
    public function index()
    {
        $cinemas = Cinema::all();

        if (request()->wantsJson()) {
            return $cinemas;
        }

        return view('cinemas.index', [
            'cinema' => $cinemas
        ]);
    }
    public function ajaxIndex()
    {
        return Cinema::all();
    }


    public function show($id)
    {
        $cinema = Cinema::with('seances')->findOrFail($id);

        if (request()->expectsJson()) {
            return response()->json($cinema);
        }

        return view('cinemas.show', ['cinema' => $cinema]);
    }

    public function create()
    {
        $this->authorize('create', App\Models\Cinema::class);
        return view('cinemas.create');
    }

    public function store()
    {
        $this->authorize('create', App\Models\Cinema::class);
        $data = request()->validate([
            'name' => 'required',
            'location' => '',
        ]);

        cinema::create([
            'name' => $data['name'],
            'location' => $data['location'],
        ]);

        return redirect('/cinema');
    }

    public function edit(Cinema $cinema)
    {
        $this->authorize('create', App\Models\Cinema::class);
        return view('cinemas.edit', compact('cinema'));
    }

    public function update(Cinema $cinema)
    {
        $this->authorize('create', App\Models\Cinema::class);

        $data = request()->validate([
            'name' => '',
            'location' => '',
        ]);

        $cinema->update($data);
        return redirect("/cinema/{$cinema->id}");
    }

    public function destroy(Cinema $cinema)
    {
        $this->authorize('create', App\Models\Cinema::class);

        foreach ($cinema->seances() as $seances) {
            $seances->delete();
        }

        $cinema->delete();

        return redirect('/cinema');
    }


}