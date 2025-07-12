@extends('layouts.app')

@section('content')
    {{-- FORMULIR PENGADUAN --}}
    <div id="formPengaduan" class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow mb-12 max-w-4xl mx-auto">
        <h3 class="text-xl font-semibold text-purple-800 dark:text-purple-300 mb-4">Mahasiswa | FORMULIR PENGADUAN</h3>

        <form action="#" method="POST" enctype="multipart/form-data">
            {{-- Dummy form tanpa kirim real --}}
            @csrf

            {{-- Kategori & Tujuan --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="kategori" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-200">Kategori</label>
                    <select name="kategori" class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white" required>
                        <option value="" disabled selected hidden>Pilih Kategori</option>
                        <option value="fasilitas">Fasilitas</option>
                        <option value="dosen">Dosen</option>
                    </select>
                </div>
                <div>
                    <label for="tujuan" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-200">Tujuan</label>
                    <select name="tujuan" class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white" required>
                        <option value="" disabled selected hidden>Pilih Tujuan</option>
                        <option value="jurusan">Jurusan</option>
                        <option value="prodi">Program Studi</option>
                    </select>
                </div>
            </div>

            {{-- Prodi & Judul --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="prodi" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-200">Program Studi</label>
                    <select name="prodi" class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white" required>
                        <option value="" disabled selected hidden>Pilih Program Studi</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="TK">Teknik Komputer</option>
                        <option value="TRPL">TRPL</option>
                    </select>
                </div>
                <div>
                    <label for="judul" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-200">Judul</label>
                    <input type="text" id="judul" name="judul" class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white" required>
                </div>
            </div>

            {{-- Isi Laporan --}}
            <div class="mb-4">
                <label for="isi" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-200">Isi Laporan</label>
                <textarea id="isi" name="isi" rows="4" class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white" required></textarea>
            </div>

            {{-- Upload Bukti --}}
            <div class="mb-4">
                <label for="bukti" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-200">Upload Bukti (opsional)</label>
                <input type="file" id="bukti" name="bukti" accept="image/*,application/pdf" class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white">
                <p class="text-xs text-gray-500 mt-1">Format yang diperbolehkan: JPG, PNG, PDF</p>
            </div>

            {{-- Button --}}
            <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded">Kirim Laporan</button>
        </form>
    </div>

    {{-- RIWAYAT PENGADUAN --}}
    <div id="riwayat" class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow max-w-6xl mx-auto">
        <h3 class="text-xl font-semibold text-purple-800 dark:text-purple-300 mb-4">RIWAYAT PENGADUAN</h3>

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-purple-100 dark:bg-gray-700 text-left">
                    <th class="p-3">Judul</th>
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                <tr>
                    <td class="p-3">AC Rusak</td>
                    <td class="p-3">2025-07-01</td>
                    <td class="p-3"><span class="px-2 py-1 rounded bg-yellow-200 text-yellow-800 text-sm">Diproses</span></td>
                    <td class="p-3">
                        <a href="#" class="text-blue-600 hover:underline text-sm">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td class="p-3">Toilet Bocor</td>
                    <td class="p-3">2025-06-25</td>
                    <td class="p-3"><span class="px-2 py-1 rounded bg-green-200 text-green-800 text-sm">Selesai</span></td>
                    <td class="p-3">
                        <a href="#" class="text-blue-600 hover:underline text-sm">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td class="p-3">Dosen Tidak Hadir</td>
                    <td class="p-3">2025-06-22</td>
                    <td class="p-3"><span class="px-2 py-1 rounded bg-red-200 text-red-800 text-sm">Ditolak</span></td>
                    <td class="p-3">
                        <a href="#" class="text-blue-600 hover:underline text-sm">Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
