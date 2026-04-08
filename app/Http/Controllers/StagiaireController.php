<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:3|max:20',
            'email' => 'required|email|unique:stagiaires',
            'password' => 'required|min:6|max:20|confirmed'
        ]);

        $stagiaire = new Stagiaire();

        $stagiaire->Fullname = $request->fullname;
        $stagiaire->email = $request->email;
        $stagiaire->password = Hash::make($request->password);

        $stagiaire->save();

        return redirect()->route('stagiaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stagiaire = Stagiaire::find($id);
        return view('show', compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stagiaire = Stagiaire::find($id);

        return view('edit', compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $stagiaire = Stagiaire::find($id);

        $stagiaire->Fullname = $request->fullname;
        $stagiaire->email = $request->email;
        $stagiaire->password = Hash::make($request->password);

        $stagiaire->save();

        return redirect()->route('stagiaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $stagiaire = Stagiaire::find($id);
        $stagiaire->delete();

        return redirect()->route('stagiaires.index');
    }
}
