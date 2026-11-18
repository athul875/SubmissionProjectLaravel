<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use GrahamCampbell\ResultType\Success;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'kode_matakuliah' => 'required|string|max:20|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:100',
            'sks' => 'required|integer|between:1,6',
        ]);

        MataKuliah::create([
            'kode_matakuliah' => $request -> kode_matakuliah,
            'nama_matakuliah' => $request -> nama_matakuliah,
            'sks' => $request -> sks,
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil ditambahkan.');    
    }

    public function show($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }
}
