<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'SIPEMA')</title>

    {{-- TailwindCSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>

    {{-- Alpine.js --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white text-gray-800 dark:bg-gray-900 dark:text-white transition-colors duration-300">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <aside class="w-64 bg-purple-800 text-white p-6 space-y-6 dark:bg-gray-800">
        <h1 class="text-2xl font-bold">SIPEMA</h1>
        <nav class="flex flex-col gap-4">
            @if (request()->is('mahasiswa/*'))
                <a href="/mahasiswa/dashboard" class="{{ request()->is('mahasiswa/dashboard') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Dashboard</a>
                <a href="/mahasiswa/pengaduan" class="{{ request()->is('mahasiswa/pengaduan') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Pengaduan</a>
                <a href="/mahasiswa/profil" class="{{ request()->is('mahasiswa/profil') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Profil</a>
            @elseif (request()->is('admin/*'))
                <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Dashboard</a>
                <a href="/admin/laporan-masuk" class="{{ request()->is('admin/laporan-masuk') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Laporan Masuk</a>
                <a href="/admin/profil" class="{{ request()->is('admin/profil') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Profil</a>
            @elseif (request()->is('kajur/*'))
                <a href="/kajur/dashboard" class="{{ request()->is('kajur/dashboard') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Dashboard</a>
                <a href="/kajur/semua-laporan" class="{{ request()->is('kajur/semua-laporan') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Semua Laporan</a>
                <a href="/kajur/profil" class="{{ request()->is('kajur/profil') ? 'text-purple-300 font-bold' : 'hover:text-purple-300' }}">Profil</a>
            @endif
        </nav>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 p-6">
        {{-- Header --}}
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-purple-800 dark:text-purple-300">@yield('title', 'Halaman')</h1>
                <p class="text-sm text-gray-600 dark:text-gray-400">Selamat Datang di SIPEMA</p>
            </div>
            <div class="flex items-center gap-4">
                {{-- Toggle Dark Mode --}}
                <button id="toggleDark" class="text-purple-800 hover:text-purple-600 dark:text-purple-300" title="Toggle Dark Mode">
                    <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 3v1m0 16v1m8.485-8.485l-.707.707M4.222 4.222l-.707.707M21 12h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707" />
                    </svg>
                    <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                    </svg>
                </button>

                {{-- Dropdown User --}}
                <div class="relative">
                    @php
                        $role = request()->segment(1);
                        $label = ucfirst($role);
                        $profilLink = "/$role/profil";
                    @endphp

                    <button id="userButton" class="bg-purple-700 px-3 py-1 text-white rounded hover:bg-purple-600">{{ $label }}</button>
                    <div id="userDropdown" class="absolute right-0 mt-2 bg-white dark:bg-gray-700 text-black dark:text-white rounded shadow hidden z-10 w-40">
                        <a href="{{ $profilLink }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Konten halaman --}}
        @yield('content')
    </main>
</div>

{{-- Tambahan Script --}}
<script>
    const toggleBtn = document.getElementById('toggleDark');
    const html = document.documentElement;
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        html.classList.add('dark');
    }

    toggleBtn.addEventListener('click', () => {
        html.classList.toggle('dark');
        localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
    });

    // Dropdown user
    const userBtn = document.getElementById('userButton');
    const dropdown = document.getElementById('userDropdown');
    let isDropdownOpen = false;

    userBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdown.classList.toggle('hidden');
        isDropdownOpen = !isDropdownOpen;
    });

    window.addEventListener('click', () => {
        if (isDropdownOpen) {
            dropdown.classList.add('hidden');
            isDropdownOpen = false;
        }
    });
</script>

@stack('scripts')
</body>
</html>
