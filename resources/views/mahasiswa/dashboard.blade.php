@extends('layouts.app')

@section('title', 'Dashboard Mahasiswa')

@section('content')
    {{-- Statistik --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow text-center">
            <p class="text-sm text-gray-500 dark:text-gray-300">TOTAL LAPORAN</p>
            <p class="text-2xl font-bold text-purple-700 dark:text-purple-300">12</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow text-center">
            <p class="text-sm text-gray-500 dark:text-gray-300">DIPROSES</p>
            <p class="text-2xl font-bold text-yellow-500">3</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow text-center">
            <p class="text-sm text-gray-500 dark:text-gray-300">SELESAI</p>
            <p class="text-2xl font-bold text-green-600">9</p>
        </div>
    </div>

    {{-- Laporan Terakhir --}}
    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
        <h3 class="text-md font-semibold text-purple-800 dark:text-purple-300 mb-2">Laporan Terakhir:</h3>
        <p class="mb-1">"AC rusak di ruang kelas A2.2"</p>
        <p>Status: <span class="text-yellow-600 font-semibold">Diproses</span></p>

        <div class="flex gap-4 mt-6">
            <a href="{{ route('mahasiswa.pengaduan') }}"
            class="bg-purple-700 hover:bg-purple-800 text-white px-6 py-2 rounded shadow text-sm">
                Buat Laporan
            </a>

            <a href="{{ route('mahasiswa.pengaduan') }}#riwayat"
            class="bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white px-6 py-2 rounded shadow text-sm">
                Lihat Laporan
            </a>
        </div>
    </div>
@endsection
