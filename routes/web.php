<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Mahasiswa\ProfilController;
use App\Http\Controllers\Kajur\LaporanController;

// Halaman Utama & Login
Route::view('/', 'home')->name('home');
Route::view('/login', 'login')->name('login');

// =================== MAHASISWA ===================
Route::get('/mahasiswa/dashboard', fn () => view('mahasiswa.dashboard'))->name('mahasiswa.dashboard');
Route::get('/mahasiswa/pengaduan', fn () => view('mahasiswa.pengaduan'))->name('mahasiswa.pengaduan');
Route::get('/mahasiswa/profil', [ProfilController::class, 'index'])->name('mahasiswa.profil');
Route::put('/mahasiswa/profil/password', [ProfilController::class, 'updatePassword'])->name('mahasiswa.updatePassword');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// =================== ADMIN ===================
// Halaman dashboard admin
Route::get('/admin/dashboard', fn () => view('admin.dashboard'))->name('admin.dashboard');

Route::get('/admin/laporan-masuk', function () {
    $laporans = [
        (object)[ 'id' => 1, 'judul' => 'AC rusak di ruang A2.2', 'nim' => '12345678', 'status' => 'menunggu' ],
        (object)[ 'id' => 2, 'judul' => 'Kursi patah di lab komputer', 'nim' => '87654321', 'status' => 'diproses' ],
    ];

    $riwayats = [
        (object)[ 'id' => 1, 'judul' => 'Papan tulis hilang', 'nim' => '11223344', 'status' => 'selesai', 'tanggal' => '2025-07-01' ],
        (object)[ 'id' => 2, 'judul' => 'Infocus mati total', 'nim' => '55667788', 'status' => 'selesai', 'tanggal' => '2025-07-04' ],
    ];

    return view('admin.laporan-masuk', compact('laporans', 'riwayats'));
})->name('admin.laporan.masuk');

Route::get('/admin/profil', fn () => view('admin.profil'))->name('admin.profil');
Route::put('/admin/update-password', fn () => null)->name('admin.updatePassword');

// =================== KAJUR ===================
Route::get('/kajur/dashboard', function () {
    $laporans = collect([
        (object)[ 'judul' => 'Laporan Sarana Rusak', 'nim' => '12345678', 'status' => 'menunggu' ],
        (object)[ 'judul' => 'Keluhan Dosen', 'nim' => '87654321', 'status' => 'diproses' ],
        (object)[ 'judul' => 'Permintaan Lab', 'nim' => '11223344', 'status' => 'selesai' ],
    ]);

    return view('kajur.dashboard', compact('laporans'));
})->name('kajur.dashboard');

// ✅ Ganti laporan masuk jadi semua-laporan (pakai controller)
Route::get('/kajur/semua-laporan', [LaporanController::class, 'index'])->name('kajur.semua-laporan');
Route::get('/kajur/laporan-export', [LaporanController::class, 'export'])->name('kajur.laporan-export');
// Halaman profil kajur
Route::get('/kajur/profil', function () {
    return view('kajur.profil');
})->name('kajur.profil');

// Update password kajur (dummy dulu)
Route::put('/kajur/update-password', function () {
    // Simulasi backend: belum dihubungkan ke DB
    return back()->with('status', 'Password berhasil diubah.');
})->name('kajur.updatePassword');
