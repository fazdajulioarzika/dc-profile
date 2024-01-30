<?php

namespace App\Http\Controllers;

use App\Models\ProgramBahasa;
use Illuminate\Http\Request;

class ProgramBahasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('programbahasa.index',  [
            'title' => 'Program | LPK Dewa Computer',
            'active' => 'bahasa',
            'bahasa' => ProgramBahasa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
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
    public function show(ProgramBahasa $programBahasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramBahasa $programBahasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgramBahasa $programBahasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramBahasa $programBahasa)
    {
        //
    }
}
