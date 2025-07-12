<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // Simulasi data Prodi
        $prodis = collect([
            (object)['id' => 1, 'nama' => 'Teknik Informatika'],
            (object)['id' => 2, 'nama' => 'Sistem Informasi'],
        ]);

        // Simulasi data laporan mahasiswa
        $laporans = collect([
            (object)[
                'judul' => 'AC Rusak', 'nama' => 'Indah Nurhayati', 'nim' => '12345678', 'kelas' => 'TI-2A',
                'prodi_id' => 1, 'prodi' => 'Teknik Informatika', 'status' => 'menunggu'
            ],
            (object)[
                'judul' => 'Kursi Patah', 'nama' => 'Budi Prasetyo', 'nim' => '87654321', 'kelas' => 'SI-2B',
                'prodi_id' => 2, 'prodi' => 'Sistem Informasi', 'status' => 'selesai'
            ],
        ]);

        // Filter berdasarkan prodi jika dipilih
        $filterProdi = $request->query('prodi');
        if ($filterProdi) {
            $laporans = $laporans->where('prodi_id', (int)$filterProdi);
        }

        return view('kajur.semua-laporan', compact('laporans', 'prodis', 'filterProdi'));
    }

    public function export(Request $request)
    {
        // Dummy sementara
        return 'Export ke PDF untuk prodi ID: ' . $request->query('prodi');
    }
}
