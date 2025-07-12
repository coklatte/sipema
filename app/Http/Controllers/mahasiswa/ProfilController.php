<?php
namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        // Ambil data dari session atau auth login, ini dummy
        $mahasiswa = [
            'nama' => 'Indah Nurhayati',
            'nim' => '123456789',
            'prodi' => 'D3 Teknik Informatika',
            'email' => 'indah@example.com',
        ];

        return view('mahasiswa.profil', compact('mahasiswa'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password_lama' => ['required'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        $user = auth()->user(); // Ganti sesuai model mahasiswa jika perlu

        if (!Hash::check($request->password_lama, $user->password)) {
            return back()->with('error', 'Password lama salah.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password berhasil diperbarui.');
    }
}
