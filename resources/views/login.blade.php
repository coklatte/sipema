<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LOGIN SIPEMA</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      background-image: url('{{ asset('images/polmed.jpg') }}');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-60 z-0"></div>

  <!-- Card -->
  <div class="relative z-10 w-full max-w-md bg-white bg-opacity-90 backdrop-blur-md p-8 rounded-xl shadow-xl">
    <h1 class="text-3xl font-bold text-center text-purple-800 mb-6">SIPEMA</h1>
    <p class="text-sm text-center text-gray-600 mb-6">Sistem Informasi Pengaduan Mahasiswa</p>

    <form id="loginForm" class="space-y-4">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" class="w-full px-4 py-2 rounded border-gray-300 focus:ring-purple-500 focus:border-purple-500" placeholder="nama@polmed.ac.id" required>
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" id="password" class="w-full px-4 py-2 rounded border-gray-300 focus:ring-purple-500 focus:border-purple-500" placeholder="••••••••" required>
      </div>
      <div>
        <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Login Sebagai</label>
        <select id="role" class="w-full px-4 py-2 rounded border-gray-300 focus:ring-purple-500 focus:border-purple-500">
          <option value="mahasiswa">Mahasiswa</option>
          <option value="admin">Admin</option>
          <option value="kajur">Kajur</option>
        </select>
      </div>

      <div class="flex items-center">
        <input type="checkbox" id="remember" class="mr-2">
        <label for="remember" class="text-sm text-gray-600">Ingat saya</label>
      </div>

      <button type="submit" class="w-full bg-purple-700 text-white py-2 rounded hover:bg-purple-800 transition">
        Login
      </button>
    </form>
  </div>

  <!-- Dummy login (tanpa API) -->
  <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const role = document.getElementById('role').value;

      if (role === 'mahasiswa') {
        window.location.href = '/mahasiswa/dashboard';
      } else if (role === 'admin') {
        window.location.href = '/admin/dashboard';
      } else if (role === 'kajur') {
        window.location.href = '/kajur/dashboard';
      }
    });
  </script>

</body>
</html>
