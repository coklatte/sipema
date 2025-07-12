@extends('layouts.app')

@section('title', 'Profil Admin')

@section('content')
<div class="space-y-12">
    {{-- Profil Admin --}}
    <div class="bg-white dark:bg-gray-800 rounded shadow p-6">
        <h2 class="text-lg font-semibold text-purple-800 dark:text-purple-300 mb-4">PROFIL ADMIN</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Nama Lengkap</label>
                <input type="text" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" value="Nama Admin" readonly>
            </div>
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Jabatan</label>
                <input type="text" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" value="Admin Jurusan" readonly>
            </div>
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Email</label>
                <input type="email" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" value="admin@example.com" readonly>
            </div>
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Username</label>
                <input type="text" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" value="admin123" readonly>
            </div>
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Password</label>
                <input type="password" value="********" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" readonly>
            </div>
        </div>

        {{-- ✅ Tombol Toggle Form --}}
        <button id="toggleBtn" onclick="togglePasswordForm()" class="text-sm text-purple-700 hover:underline mt-6">
            Ubah Password
        </button>

        {{-- ✅ Form Ubah Password --}}
        <form id="passwordForm" action="{{ route('admin.updatePassword') }}" method="POST" class="mt-4 hidden">
            @csrf
            @method('PUT')

            {{-- Password Lama --}}
            <div class="mb-3">
                <label for="password_lama" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password Lama</label>
                <input type="password" name="password_lama" id="password_lama" required class="w-full p-2 rounded border border-gray-300 dark:bg-gray-800 dark:text-white">
            </div>

            {{-- Password Baru --}}
            <div class="mb-3">
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password Baru</label>
                <input type="password" name="password" id="password" required class="w-full p-2 rounded border border-gray-300 dark:bg-gray-800 dark:text-white">
            </div>

            {{-- Konfirmasi Password --}}
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full p-2 rounded border border-gray-300 dark:bg-gray-800 dark:text-white">
            </div>

            <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded">
                Simpan Password
            </button>
        </form>

        {{-- ✅ Script Toggle --}}
        <script>
            function togglePasswordForm() {
                const form = document.getElementById('passwordForm');
                form.classList.toggle('hidden');
            }
        </script>


    </div>

    {{-- Tambah Akun Mahasiswa --}}
    <div class="bg-white dark:bg-gray-800 rounded shadow p-6">
        <h2 class="text-lg font-semibold text-purple-800 dark:text-purple-300 mb-4">TAMBAH AKUN MAHASISWA</h2>

        <form class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Nama Lengkap</label>
                <input type="text" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">NIM</label>
                <input type="text" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Email</label>
                <input type="email" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Program Studi</label>
                <select class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                    <option>Pilih Prodi</option>
                    <option>Teknik Informatika</option>
                    <option>Teknik Komputer</option>
                </select>
            </div>
            <div>
                <label class="block font-medium text-gray-700 dark:text-white">Password</label>
                <input type="password" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white">
            </div>

            <div class="col-span-1 md:col-span-2 mt-4">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                    Simpan Akun
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
