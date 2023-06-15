<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;

class CinemaController extends Controller
{
    public function index()
    {
        $cinema = Cinema::all();

        return view('cinemas.index', [
            'cinema' => $cinema
        ]);
    }

    public function show($id)
    {
        $cinema = Cinema::findOrFail($id);
        return view('cinemas.show', [
            'cinema' => $cinema
        ]);
    }

    public function create()
    {
        return view('cinemas.create');
    }

    public function store()
    {
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
        return view('cinemas.edit',compact('cinema'));
    }

    public function update(Cinema $cinema)
    {
        $data = request()->validate([
            'name' => '',
            'location' => '',
        ]);

        $cinema->update($data);
        return redirect("/cinema/{$cinema->id}");    
    }

    public function destroy(Cinema $cinema)
    {
        foreach ($cinema->seances() as $seances ) {
            $seances->delete();
        }

        $cinema->delete();

        return redirect('/cinema');
    }

}
