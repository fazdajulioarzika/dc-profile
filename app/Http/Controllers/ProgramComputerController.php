<?php

namespace App\Http\Controllers;

use App\Models\ProgramComputer;
use Illuminate\Http\Request;

class ProgramComputerController extends Controller
{
    public function index()
    {
        return view('programcomputer.index', [
            'title' => 'Program | LPK Dewa Computer',
            'active' => 'computer',
            'computer' => ProgramComputer::paginate(5)->withQueryString(),
        ]);
    }
    public function create()
    {
        return view('programcomputer.create', [
            'title' => 'Tambah Program Computer | LPK Dewa Computer',
            'active' => 'computer',
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:program_computers',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $validatedData['name'] = ucwords($validatedData['name']);


        ProgramComputer::create($validatedData);
        return redirect('/program/computer')->with('success', 'Program Computer Baru Telah Ditambahkan');
    }
    public function edit(ProgramComputer $program_computer)
    {
        return view('programcomputer.edit', [
            'title' => 'Program | LPK Dewa Computer',
            'active' => 'computer',
            'computer' => $program_computer,
        ]);
    }
    public function update(Request $request, ProgramComputer $program_computer)
    {
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required',
            'icon' => 'required',
        ];

        if ($request->name != $program_computer->name) {
            $rules['name'] = 'required|max:255|unique:program_computers';
        }

        $validatedData = $request->validate($rules);

        $validatedData['name'] = ucwords($validatedData['name']);


        ProgramComputer::where('id', $program_computer->id)
            ->update($validatedData);
        return redirect('/program/computer')->with('success', 'Program Computer Telah Diubah');
    }
    public function destroy(ProgramComputer $program_computer)
    {
        // Hapus nilai di tabel weights yang terkait dengan criteria
        ProgramComputer::where('id', $program_computer->id)->delete();

        $program_computer->delete();
        return redirect('/program/computer')->with('success', 'Program Computer Telah Dihapus');
    }


    public function search(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->search;
            $program_computer = ProgramComputer::where('name', 'like', '%' . $search . '%')->paginate(5)->withQueryString();
        } else {
            $program_computer = ProgramComputer::paginate(5);
        }
        return view('programcomputer.index', [
            'title' => 'Program | LPK Dewa Computer',
            'active' => 'computer',
            'computer' => $program_computer,
        ]);
    }
}
