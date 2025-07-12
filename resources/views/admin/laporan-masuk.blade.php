@extends('layouts.app')

@section('title', 'Laporan Masuk Admin')

@section('content')
<div x-data="{ openFormId: null }" class="mb-8">
    <h2 class="text-xl font-bold text-purple-800 dark:text-purple-300 mb-4">LAPORAN MASUK</h2>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-300 mt-6">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
            <tr>
                <th class="py-2 px-4">No</th>
                <th class="py-2 px-4">Judul Laporan</th>
                <th class="py-2 px-4">Pelapor</th>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $index => $laporan)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="py-2 px-4">{{ $index + 1 }}</td>
                <td class="py-2 px-4">{{ $laporan->judul }}</td>
                <td class="py-2 px-4">****{{ substr($laporan->nim, -4) }}</td>
                <td class="py-2 px-4">{{ ucfirst($laporan->status) }}</td>
                <td class="py-2 px-4">
                    <button
                        @click="openFormId === {{ $laporan->id }} ? openFormId = null : openFormId = {{ $laporan->id }}"
                        class="bg-purple-600 hover:bg-purple-700 text-white px-3 py-1 rounded"
                    >
                        Tindak Lanjuti
                    </button>
                </td>
            </tr>

            {{-- Form Tindak Lanjut --}}
            <template x-if="openFormId === {{ $laporan->id }}">
                <tr>
                    <td colspan="5" class="bg-gray-50 dark:bg-gray-800 p-4">
                        <form class="space-y-3">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-white">Status</label>
                                <select class="mt-1 block w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                                    <option value="diproses">Diproses</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-white">Catatan</label>
                                <textarea rows="2" class="mt-1 block w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            </template>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Riwayat --}}
<div class="mt-12">
    <h2 class="text-xl font-bold text-purple-800 dark:text-purple-300 mb-4">RIWAYAT PENGADUAN</h2>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-300">
        <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
            <tr>
                <th class="py-2 px-4">No</th>
                <th class="py-2 px-4">Judul</th>
                <th class="py-2 px-4">Pelapor</th>
                <th class="py-2 px-4">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($riwayats as $i => $riwayat)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="py-2 px-4">{{ $i + 1 }}</td>
                <td class="py-2 px-4">{{ $riwayat->judul }}</td>
                <td class="py-2 px-4">****{{ substr($riwayat->nim, -4) }}</td>
                <td class="py-2 px-4">{{ ucfirst($riwayat->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
