@extends('layouts.app')

@section('title', 'SEMUA LAPORAN')

@section('content')
    <div class="p-4">

        {{-- FILTER & EXPORT --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <label for="filterProdi" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Filter Prodi:</label>
                <select id="filterProdi" name="prodi" class="w-full md:w-64 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600">
                    <option value="">Semua Prodi</option>
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                </select>
            </div>

            <div class="text-right">
                <a href="{{ route('kajur.laporan-export') }}"
                    class="inline-block bg-purple-700 hover:bg-purple-800 text-white px-5 py-2 rounded-lg transition dark:bg-purple-600 dark:hover:bg-purple-700">
                    Export PDF
                </a>
            </div>
        </div>

        {{-- TABEL --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-600 dark:text-gray-300">
                <thead class="text-xs uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                    <tr>
                        <th class="py-2 px-4">No</th>
                        <th class="py-2 px-4">Judul</th>
                        <th class="py-2 px-4">Nama</th>
                        <th class="py-2 px-4">NIM</th>
                        <th class="py-2 px-4">Kelas</th>
                        <th class="py-2 px-4">Prodi</th>
                        <th class="py-2 px-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($laporans as $index => $laporan)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td class="py-2 px-4">{{ $index + 1 }}</td>
                            <td class="py-2 px-4">{{ $laporan->judul }}</td>
                            <td class="py-2 px-4">{{ $laporan->nama }}</td>
                            <td class="py-2 px-4">{{ $laporan->nim }}</td>
                            <td class="py-2 px-4">{{ $laporan->kelas }}</td>
                            <td class="py-2 px-4">{{ $laporan->prodi }}</td>
                            <td class="py-2 px-4 capitalize">
                                @if ($laporan->status === 'menunggu')
                                    <span class="text-yellow-600 dark:text-yellow-400 font-medium">Menunggu</span>
                                @elseif ($laporan->status === 'diproses')
                                    <span class="text-blue-600 dark:text-blue-400 font-medium">Diproses</span>
                                @elseif ($laporan->status === 'selesai')
                                    <span class="text-green-600 dark:text-green-400 font-medium">Selesai</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-2 px-4 text-center text-gray-500 dark:text-gray-400">Tidak ada laporan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
