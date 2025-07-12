@extends('layouts.app')

@section('title', 'PROFIL')

@section('content')
    <div class="p-6">
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 space-y-4 max-w-xl">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                <input type="text" class="w-full px-4 py-2 mt-1 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="Dr. Ir. Budi Santoso, M.T." disabled>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">NIP</label>
                <input type="text" class="w-full px-4 py-2 mt-1 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="198005152005031001" disabled>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" class="w-full px-4 py-2 mt-1 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="kajur@polmed.ac.id" disabled>
            </div>

            <hr class="border-t border-gray-300 dark:border-gray-600">

            <form method="POST" action="{{ route('kajur.updatePassword') }}" class="space-y-4">
                @csrf
                @method('PUT')

                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Ganti Password</h3>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password Baru</label>
                    <input type="password" name="password" class="w-full px-4 py-2 mt-1 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="w-full px-4 py-2 mt-1 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                </div>

                <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded-lg transition">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
@endsection
