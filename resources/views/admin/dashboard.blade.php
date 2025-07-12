@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    {{-- Statistik Laporan --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow text-center">
            <p class="text-sm text-gray-500 dark:text-gray-300">TOTAL LAPORAN</p>
            <p class="text-2xl font-bold text-purple-700 dark:text-purple-300">25</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow text-center">
            <p class="text-sm text-gray-500 dark:text-gray-300">DIPROSES</p>
            <p class="text-2xl font-bold text-yellow-500">10</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow text-center">
            <p class="text-sm text-gray-500 dark:text-gray-300">SELESAI</p>
            <p class="text-2xl font-bold text-green-600">15</p>
        </div>
    </div>

    {{-- Tabel Laporan Terbaru --}}
    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
        <h2 class="text-lg font-semibold text-purple-800 dark:text-purple-300 mb-4">Laporan Terbaru</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead>
                    <tr class="text-left bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-200">
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Pelapor</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">Toilet rusak</td>
                        <td class="px-4 py-2">1234****</td>
                        <td class="px-4 py-2 text-yellow-600 font-semibold">Diproses</td>
                        <td class="px-4 py-2">
                            <a href="#" class="text-blue-600 hover:underline">Detail</a>
                        </td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">LCD tidak berfungsi</td>
                        <td class="px-4 py-2">9876****</td>
                        <td class="px-4 py-2 text-green-600 font-semibold">Selesai</td>
                        <td class="px-4 py-2">
                            <a href="#" class="text-blue-600 hover:underline">Detail</a>
                        </td>
                    </tr>
                    <!-- Tambahkan data lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
