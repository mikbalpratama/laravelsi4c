<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $grafikmhs = DB::select("SELECT prodis.nama_prodi, 
                                COUNT(*) as jumlah_mhs 
                                FROM mahasiswas
                                JOIN prodis 
                                ON mahasiswas.prodi_id = prodis.id
                                GROUP BY prodis.nama_prodi");

        
        $grafik_angkatan = DB::select("select left(m.npm,2) as Tahun_Angkatan, count(*) as jumlah from laravelsi4c.mahasiswas m group by left(m.npm,2)");


        return view('dashboard-adminlte', compact('grafikmhs', 'grafik_angkatan'));
    }
}