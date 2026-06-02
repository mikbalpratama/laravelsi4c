<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $result = Periode::all(); // select*from periode
        //dd($result);
        return view('periode.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'kode_smt' => 'required|unique:periodes',
            'tahun_akademik' => 'required'
        ]);

        Periode::create($input);
        return redirect()->route('periode.index')->with('success', 'Periode berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($periode)
    {
         $periode = Periode::find($periode);
        //dd($periode);
        $periode->delete();
        return redirect()->route('periode.index')->with('success', 'Periode berhasil dihapus.');
    }
}
