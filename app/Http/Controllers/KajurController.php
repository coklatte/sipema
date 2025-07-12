<?php

namespace App\Http\Controllers;

use App\Models\Laporan;  // import model Laporan
use Illuminate\Http\Request;

class KajurController extends Controller
{
    public function dashboard()
    {
        $laporans = Laporan::all();

        return view('kajur.dashboard', compact('laporans'));
    }
}
