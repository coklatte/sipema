@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 p-8 rounded-xl shadow">
    <h2 class="text-xl font-semibold text-purple-800 dark:text-purple-300 mb-6">Profil Mahasiswa</h2>

    {{-- ✅ Notifikasi --}}
    @if(session('success'))
        <div id="successMessage" class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div id="errorMessage" class="bg-red-100 text-red-800 p-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    {{-- ✅ Data Profil --}}
    <div class="space-y-4">
        <div>
            <p class="text-sm text-gray-500">Nama</p>
            <p class="text-lg font-medium text-gray-800 dark:text-white">Indah Nurhayati</p>
        </div>
        <div>
            <p class="text-sm text-gray-500">NIM</p>
            <p class="text-lg font-medium text-gray-800 dark:text-white">123456789</p>
        </div>
        <div>
            <p class="text-sm text-gray-500">Program Studi</p>
            <p class="text-lg font-medium text-gray-800 dark:text-white">D3 Teknik Informatika</p>
        </div>
        <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="text-lg font-medium text-gray-800 dark:text-white">indah@example.com</p>
        </div>
    </div>

    {{-- ✅ Tombol Toggle Form --}}
    <button id="toggleBtn" onclick="togglePasswordForm()" class="text-sm text-purple-700 hover:underline mt-4">
        Ubah Password
    </button>

    {{-- ✅ Form Ubah Password --}}
    <form id="passwordForm" action="{{ route('mahasiswa.updatePassword') }}" method="POST" class="mt-4 hidden">
        @csrf
        @method('PUT')

        {{-- Password Lama --}}
        <div class="mb-3">
            <label for="password_lama" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password Lama</label>
            <input type="password" name="password_lama" id="password_lama" required class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white">
        </div>

        {{-- Password Baru --}}
        <div class="mb-3">
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password Baru</label>
            <input type="password" name="password" id="password" required class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white">
        </div>

        {{-- Konfirmasi Password Baru --}}
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full p-2 rounded border border-gray-300 dark:bg-gray-700 dark:text-white">
        </div>

        <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded">
            Simpan Password
        </button>
    </form>
</div>

{{-- ✅ Script Toggle --}}
<script>
    function togglePasswordForm() {
        const form = document.getElementById('passwordForm');
        const btn = document.getElementById('toggleBtn');
        form.classList.toggle('hidden');
        btn.textContent = form.classList.contains('hidden') ? 'Ubah Password' : 'Tutup Form';
    }

    // Notifikasi menghilang otomatis
    setTimeout(() => {
        const success = document.getElementById('successMessage');
        const error = document.getElementById('errorMessage');

        if (success) {
            success.style.transition = 'opacity 0.5s ease';
            success.style.opacity = 0;
            setTimeout(() => success.remove(), 500);
        }

        if (error) {
            error.style.transition = 'opacity 0.5s ease';
            error.style.opacity = 0;
            setTimeout(() => error.remove(), 500);
        }
    }, 3000);
</script>
@endsection
