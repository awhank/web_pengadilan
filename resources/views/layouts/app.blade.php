<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Resmi Pengadilan Agama') - Mahkamah Agung RI</title>
    <meta name="description" content="Portal Pelayanan dan Keterbukaan Informasi Publik Pengadilan Agama Berdasarkan SK Dirjen Badilag No. 2722/DJA/SK.TI1/X/2026">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

    <!-- Top Announcement Bar (Pemerintah Resmi) -->
    <div class="bg-[#034834] text-white text-xs py-1.5 px-4 border-b border-emerald-900">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
            <div class="flex items-center space-x-3">
                <span class="inline-flex items-center font-semibold bg-emerald-800 px-2 py-0.5 rounded text-[11px] text-emerald-200">
                    🏛️ Situs Resmi Pemerintah .go.id
                </span>
                <span class="hidden sm:inline text-emerald-100">Jam Pelayanan: Senin - Jumat (08.00 - 16.30)</span>
            </div>
            <div class="flex items-center space-x-4 text-[12px]">
                <a href="{{ route('layanan.hukum') }}#sipp" class="hover:text-amber-300 font-medium transition">SIPP Web</a>
                <span class="text-emerald-700">|</span>
                <a href="https://ecourt.mahkamahagung.go.id" target="_blank" rel="noopener" class="hover:text-amber-300 font-medium transition">e-Court MA RI ↗</a>
                <span class="text-emerald-700">|</span>
                <a href="https://putusan3.mahkamahagung.go.id" target="_blank" rel="noopener" class="hover:text-amber-300 font-medium transition">Direktori Putusan ↗</a>
                <span class="text-emerald-700">|</span>
                <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center text-amber-300 font-semibold hover:underline">
                    🔐 Panel Admin CMS
                </a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Brand & Official Emblem -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div class="w-12 h-12 rounded-full bg-[#056e4f] flex items-center justify-center text-white font-bold text-lg shadow-sm border-2 border-[#ff9900]">
                    ⚖️
                </div>
                <div>
                    <h1 class="text-lg sm:text-xl font-extrabold text-[#056e4f] tracking-tight group-hover:text-emerald-700 transition">
                        PENGADILAN AGAMA KELAS I-A
                    </h1>
                    <p class="text-xs text-slate-500 font-medium tracking-wide">
                        DIREKTORAT JENDERAL BADAN PERADILAN AGAMA • MAHKAMAH AGUNG RI
                    </p>
                </div>
            </a>

            <!-- Right Controls: Quick Search & Mobile Toggle -->
            <div class="flex items-center space-x-2">
                <!-- Search bar desktop -->
                <div class="hidden lg:flex items-center relative">
                    <input type="text" placeholder="Cari perkara, jadwal, regulasi..." class="w-64 pl-9 pr-3 py-1.5 text-xs bg-slate-100 border border-slate-300 rounded-full focus:outline-none focus:ring-2 focus:ring-[#056e4f] focus:bg-white transition">
                    <span class="absolute left-3 text-slate-400 text-xs">🔍</span>
                </div>

                <!-- Accessibility Quick Toggle in Header -->
                <button onclick="toggleAccessPanel()" title="Pilihan Aksesibilitas Disabilitas" class="px-2.5 py-1.5 bg-amber-50 text-amber-900 border border-amber-300 rounded-lg text-xs font-semibold flex items-center gap-1 hover:bg-amber-100 transition shadow-xs">
                    ♿ <span class="hidden md:inline">Aksesibilitas</span>
                </button>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileMenu()" class="lg:hidden p-2 text-slate-600 hover:text-[#056e4f] hover:bg-slate-100 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- 6 Main Consolidated Navigation Menu (SK Dirjen Badilag Bab III.F) -->
        <nav class="bg-[#056e4f] text-white hidden lg:block border-t border-emerald-800">
            <div class="max-w-7xl mx-auto px-4 flex space-x-1 font-semibold text-sm">
                <!-- 1. Beranda -->
                <a href="{{ route('home') }}" class="px-4 py-3 hover:bg-[#034834] {{ request()->routeIs('home') ? 'bg-[#034834] border-b-4 border-[#ff9900]' : '' }} transition flex items-center gap-1.5">
                    🏠 Beranda
                </a>

                <!-- 2. Profil Pengadilan -->
                <a href="{{ route('profil') }}" class="px-4 py-3 hover:bg-[#034834] {{ request()->routeIs('profil') ? 'bg-[#034834] border-b-4 border-[#ff9900]' : '' }} transition flex items-center gap-1.5">
                    🏢 Profil Pengadilan
                </a>

                <!-- 3. Layanan Hukum (Kepaniteraan) -->
                <a href="{{ route('layanan.hukum') }}" class="px-4 py-3 hover:bg-[#034834] {{ request()->routeIs('layanan.hukum') ? 'bg-[#034834] border-b-4 border-[#ff9900]' : '' }} transition flex items-center gap-1.5">
                    ⚖️ Layanan Hukum
                </a>

                <!-- 4. Transparansi (Kesekretariatan) -->
                <a href="{{ route('transparansi') }}" class="px-4 py-3 hover:bg-[#034834] {{ request()->routeIs('transparansi') ? 'bg-[#034834] border-b-4 border-[#ff9900]' : '' }} transition flex items-center gap-1.5">
                    📊 Transparansi
                </a>

                <!-- 5. Layanan Publik & Pengaduan -->
                <a href="{{ route('layanan.publik') }}" class="px-4 py-3 hover:bg-[#034834] {{ request()->routeIs('layanan.publik') ? 'bg-[#034834] border-b-4 border-[#ff9900]' : '' }} transition flex items-center gap-1.5">
                    📢 Layanan Publik & Pengaduan
                </a>

                <!-- 6. Berita dan Publikasi -->
                <a href="{{ route('berita') }}" class="px-4 py-3 hover:bg-[#034834] {{ request()->routeIs('berita') ? 'bg-[#034834] border-b-4 border-[#ff9900]' : '' }} transition flex items-center gap-1.5">
                    📰 Berita & Publikasi
                </a>
            </div>
        </nav>

        <!-- Mobile Navigation Menu (Drawer) -->
        <div id="mobile-menu" class="hidden lg:hidden bg-[#056e4f] text-white px-4 py-3 space-y-1 text-sm border-t border-emerald-800">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md hover:bg-[#034834] {{ request()->routeIs('home') ? 'bg-[#034834]' : '' }}">🏠 Beranda</a>
            <a href="{{ route('profil') }}" class="block px-3 py-2 rounded-md hover:bg-[#034834] {{ request()->routeIs('profil') ? 'bg-[#034834]' : '' }}">🏢 Profil Pengadilan</a>
            <a href="{{ route('layanan.hukum') }}" class="block px-3 py-2 rounded-md hover:bg-[#034834] {{ request()->routeIs('layanan.hukum') ? 'bg-[#034834]' : '' }}">⚖️ Layanan Hukum</a>
            <a href="{{ route('transparansi') }}" class="block px-3 py-2 rounded-md hover:bg-[#034834] {{ request()->routeIs('transparansi') ? 'bg-[#034834]' : '' }}">📊 Transparansi</a>
            <a href="{{ route('layanan.publik') }}" class="block px-3 py-2 rounded-md hover:bg-[#034834] {{ request()->routeIs('layanan.publik') ? 'bg-[#034834]' : '' }}">📢 Layanan Publik & Pengaduan</a>
            <a href="{{ route('berita') }}" class="block px-3 py-2 rounded-md hover:bg-[#034834] {{ request()->routeIs('berita') ? 'bg-[#034834]' : '' }}">📰 Berita & Publikasi</a>
            <div class="pt-2 border-t border-emerald-700">
                <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-md bg-[#ff9900] text-slate-900 font-bold text-center">🔐 Masuk Panel Admin</a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer Baku Sesuai Ketentuan SK Dirjen Badilag -->
    <footer class="bg-slate-900 text-slate-300 border-t-4 border-[#ff9900] mt-12 text-xs">
        <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Col 1: Alamat & Kontak Resmi -->
            <div class="space-y-3">
                <div class="flex items-center space-x-2">
                    <span class="text-xl">⚖️</span>
                    <h3 class="text-sm font-bold text-white tracking-wide">PENGADILAN AGAMA KELAS I-A</h3>
                </div>
                <p class="text-slate-400 leading-relaxed">
                    Jl. Pengadilan No. 1, Kompleks Perkantoran Pemerintah Daerah<br>
                    Provinsi Wilayah Hukum Peradilan Agama<br>
                    Kode Pos: 12345
                </p>
                <div class="text-slate-400 space-y-1">
                    <p>📞 Telp: (021) 555-1234</p>
                    <p>✉️ Email: info@pa-contoh.go.id</p>
                    <p>🟢 WhatsApp PTSP: 0812-3456-7890</p>
                </div>
            </div>

            <!-- Col 2: Integrasi Aplikasi MA RI -->
            <div class="space-y-3">
                <h3 class="text-sm font-bold text-amber-400">APLIKASI PUSAT MA RI</h3>
                <ul class="space-y-2">
                    <li><a href="https://badilag.mahkamahagung.go.id" target="_blank" rel="noopener" class="hover:text-white transition">▶ Ditjen Badilag MA RI</a></li>
                    <li><a href="https://ecourt.mahkamahagung.go.id" target="_blank" rel="noopener" class="hover:text-white transition">▶ e-Court Mahkamah Agung</a></li>
                    <li><a href="https://putusan3.mahkamahagung.go.id" target="_blank" rel="noopener" class="hover:text-white transition">▶ Direktori Putusan MA RI</a></li>
                    <li><a href="https://siwas.mahkamahagung.go.id" target="_blank" rel="noopener" class="hover:text-white transition">▶ SIWAS Mahkamah Agung</a></li>
                    <li><a href="https://jdih.mahkamahagung.go.id" target="_blank" rel="noopener" class="hover:text-white transition">▶ JDIH Mahkamah Agung</a></li>
                </ul>
            </div>

            <!-- Col 3: Standar Layanan Publik -->
            <div class="space-y-3">
                <h3 class="text-sm font-bold text-amber-400">STANDAR PELAYANAN</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('layanan.publik') }}#maklumat" class="hover:text-white transition">▶ Maklumat Pelayanan</a></li>
                    <li><a href="{{ route('layanan.hukum') }}#panjar" class="hover:text-white transition">▶ Biaya Panjar & SK Radius</a></li>
                    <li><a href="{{ route('layanan.hukum') }}#prodeo" class="hover:text-white transition">▶ Hak Prodeo (Biaya Nol Rupiah)</a></li>
                    <li><a href="{{ route('layanan.publik') }}#disabilitas" class="hover:text-white transition">▶ Sarana Ramah Disabilitas</a></li>
                    <li><a href="{{ route('layanan.publik') }}#survei" class="hover:text-white transition">▶ Hasil Survei SKM & SPAK</a></li>
                </ul>
            </div>

            <!-- Col 4: Keamanan Siber & Sertifikasi SINOVA -->
            <div class="space-y-3">
                <h3 class="text-sm font-bold text-amber-400">STANDAR TATA KELOLA TI</h3>
                <div class="p-3 bg-slate-800 rounded-lg border border-slate-700 space-y-2">
                    <div class="flex items-center space-x-2">
                        <span class="text-emerald-400 font-bold">✓ SSL/TLS Valid</span>
                        <span class="text-[10px] bg-emerald-950 text-emerald-300 px-1.5 py-0.5 rounded border border-emerald-800">Port 443 Encrypted</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-amber-400 font-bold">✓ SINOVA Verified</span>
                        <span class="text-[10px] bg-amber-950 text-amber-300 px-1.5 py-0.5 rounded border border-amber-800">Skor Sempurna</span>
                    </div>
                    <p class="text-[11px] text-slate-400">
                        Memenuhi SK Dirjen Badilag No. 2722/DJA/SK.TI1/X/2026 & Standar Keamanan Siber Nasional BSrE.
                    </p>
                </div>
            </div>
        </div>

        <!-- Copyright Sub-footer -->
        <div class="border-t border-slate-800 bg-slate-950 py-4 px-4 text-center text-slate-400">
            <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center text-[11px] gap-2">
                <p>© 2026 Pengadilan Agama Kelas I-A. Seluruh Hak Cipta Dilindungi Undang-Undang.</p>
                <p class="text-slate-400">Dibangun dengan Framework Laravel & Arsitektur Non-EOL Terproteksi</p>
            </div>
        </div>
    </footer>

    <!-- Floating Accessibility Modal / Widget (Disabilitas WCAG Compliance) -->
    <div id="accessibility-panel" class="hidden fixed bottom-20 right-6 z-50 bg-white rounded-2xl shadow-2xl border-2 border-[#056e4f] p-5 w-80 text-slate-800">
        <div class="flex justify-between items-center pb-3 border-b border-slate-200">
            <h3 class="font-bold text-sm text-[#056e4f] flex items-center gap-1.5">
                ♿ Fitur Aksesibilitas Disabilitas
            </h3>
            <button onclick="toggleAccessPanel()" class="text-slate-400 hover:text-slate-700 text-sm font-bold">✕</button>
        </div>

        <div class="mt-4 space-y-4 text-xs">
            <!-- 1. Screen Reader -->
            <div>
                <label class="font-semibold block mb-1.5 text-slate-700">1. Pembaca Layar (Screen Reader)</label>
                <button id="screen-reader-btn" onclick="toggleScreenReader()" class="w-full py-2 bg-[#056e4f] text-white font-semibold rounded-lg hover:bg-emerald-800 transition flex items-center justify-center gap-1.5 shadow-xs">
                    <span>🔊 Baca Halaman Ini (Suara)</span>
                </button>
                <p class="text-[10px] text-slate-500 mt-1">Blok teks untuk membaca bagian tertentu atau dengarkan seluruh halaman.</p>
            </div>

            <!-- 2. High Contrast Mode -->
            <div>
                <label class="font-semibold block mb-1.5 text-slate-700">2. Mode Kontras Warna</label>
                <div class="grid grid-cols-3 gap-1.5">
                    <button onclick="toggleContrast('normal')" class="py-1.5 border border-slate-300 rounded font-medium hover:bg-slate-100">Normal</button>
                    <button onclick="toggleContrast('high-contrast')" class="py-1.5 bg-black text-yellow-300 border border-yellow-400 rounded font-bold">Tinggi</button>
                    <button onclick="toggleContrast('inverted')" class="py-1.5 bg-slate-800 text-white rounded font-medium">Inversi</button>
                </div>
            </div>

            <!-- 3. Font Size Scaling -->
            <div>
                <label class="font-semibold block mb-1.5 text-slate-700">3. Ukuran Teks (Zoom-In)</label>
                <div class="grid grid-cols-3 gap-1.5">
                    <button onclick="changeFontSize('normal')" class="py-1.5 border border-slate-300 rounded font-semibold hover:bg-slate-100">100%</button>
                    <button onclick="changeFontSize('lg')" class="py-1.5 border border-slate-300 rounded font-semibold hover:bg-slate-100 text-sm">115% (+A)</button>
                    <button onclick="changeFontSize('xl')" class="py-1.5 border border-slate-300 rounded font-semibold hover:bg-slate-100 text-base">125% (++A)</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Trigger Button -->
    <div class="accessibility-bar">
        <button onclick="toggleAccessPanel()" aria-label="Menu Aksesibilitas" class="w-13 h-13 rounded-full bg-[#ff9900] text-slate-950 font-extrabold text-xl shadow-lg border-2 border-white flex items-center justify-center hover:scale-105 transition transform">
            ♿
        </button>
    </div>

</body>
</html>
