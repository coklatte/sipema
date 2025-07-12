@extends('layouts.app')

@section('title', 'DASHBOARD KAJUR')

@section('content')
    <!-- Statistik Ringkasan -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        <div class="bg-white dark:bg-gray-800 rounded shadow p-4 text-center">
            <p class="text-sm font-medium text-purple-700 dark:text-purple-400">TOTAL LAPORAN MASUK</p>
            <p class="text-xl font-bold mt-1 text-purple-800 dark:text-purple-300">120</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded shadow p-4 text-center">
            <p class="text-sm font-medium text-green-600 dark:text-green-400">SUDAH SELESAI</p>
            <p class="text-xl font-bold mt-1 text-green-700 dark:text-green-300">50</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded shadow p-4 text-center">
            <p class="text-sm font-medium text-blue-600 dark:text-blue-400">SEDANG DIPROSES</p>
            <p class="text-xl font-bold mt-1 text-blue-700 dark:text-blue-300">40</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded shadow p-4 text-center">
            <p class="text-sm font-medium text-yellow-600 dark:text-yellow-400">MENUNGGU TINDAKAN</p>
            <p class="text-xl font-bold mt-1 text-yellow-700 dark:text-yellow-300">30</p>
        </div>
    </div>

    <!-- Ringkasan Aktivitas Terakhir -->
    <section>
        <h2 class="text-xl font-semibold mb-3 text-purple-800 dark:text-purple-300">Ringkasan Aktivitas Terakhir</h2>
        <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded shadow">
            <table class="w-full text-left text-gray-700 dark:text-gray-300 text-sm">
                <thead class="bg-gray-200 dark:bg-gray-700">
                    <tr>
                        <th class="py-2 px-3">Tanggal</th>
                        <th class="py-2 px-3">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="py-2 px-3">2025-07-10</td>
                        <td class="py-2 px-3">Laporan sarana rusak diterima</td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="py-2 px-3">2025-07-09</td>
                        <td class="py-2 px-3">Laporan dosen selesai ditindaklanjuti</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">2025-07-08</td>
                        <td class="py-2 px-3">Laporan lab komputer sedang diproses</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
