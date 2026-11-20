<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin CMS - Pengadilan Agama Kelas I-A</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 flex min-h-screen">

    <!-- Sidebar Admin -->
    <aside class="w-64 bg-[#034834] text-white flex flex-col shrink-0">
        <div class="p-4 border-b border-emerald-900 flex items-center space-x-3">
            <span class="text-2xl">⚖️</span>
            <div>
                <h1 class="font-extrabold text-sm text-white tracking-wide">CMS PENGADILAN AGAMA</h1>
                <p class="text-[10px] text-amber-300 font-semibold">SK Badilag 2722/2026 Compliant</p>
            </div>
        </div>

        <nav class="p-3 space-y-1 text-xs flex-grow font-medium">
            <div class="px-3 py-2 text-[10px] uppercase font-bold text-emerald-300 tracking-wider">Dashboard Utama</div>
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5 px-3 py-2.5 bg-emerald-800 text-white rounded-lg font-bold">
                📊 Kesiapan SINOVA (100%)
            </a>

            <div class="pt-3 px-3 py-1 text-[10px] uppercase font-bold text-emerald-300 tracking-wider">Kepaniteraan (Perkara)</div>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                📅 Kelola Jadwal Sidang
            </a>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                📢 Kelola Panggilan Ghaib
            </a>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                💰 Kelola Panjar & SK Radius
            </a>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                📈 Statistik Perkara Bulanan
            </a>

            <div class="pt-3 px-3 py-1 text-[10px] uppercase font-bold text-emerald-300 tracking-wider">Kesekretariatan</div>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                📑 Unggah SAKIP 5 Tahun
            </a>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                💵 Laporan Keuangan (DIPA/LRA)
            </a>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                👔 LHKPN/LHKASN Pejabat
            </a>

            <div class="pt-3 px-3 py-1 text-[10px] uppercase font-bold text-emerald-300 tracking-wider">Publik & Media</div>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                🖼️ Slider Banner Beranda (Maks 5)
            </a>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                📰 Berita Inovasi Pelayanan
            </a>
            <a href="#" class="flex items-center gap-2.5 px-3 py-2 text-emerald-100 hover:bg-emerald-900 rounded-lg transition">
                📝 Permohonan Informasi PPID
            </a>
        </nav>

        <div class="p-3 border-t border-emerald-900 text-xs space-y-2">
            <div class="flex items-center justify-between text-[11px] text-emerald-200">
                <span>User: Admin TI (Super)</span>
                <span class="bg-[#ff9900] text-slate-950 font-bold px-1.5 py-0.5 rounded text-[10px]">MFA Aktif</span>
            </div>
            <a href="{{ route('home') }}" class="block text-center py-2 bg-emerald-950 text-emerald-100 rounded-lg font-semibold hover:bg-emerald-900 transition">
                ← Kembali ke Website Publik
            </a>
        </div>
    </aside>

    <!-- Main Content Panel -->
    <main class="flex-grow p-6 space-y-6 overflow-y-auto">
        <!-- Top Banner Header -->
        <div class="flex flex-col sm:flex-row justify-between sm:items-center bg-white p-5 rounded-2xl shadow-xs border border-slate-200 gap-3">
            <div>
                <div class="flex items-center gap-2">
                    <h2 class="text-xl font-extrabold text-[#056e4f]">Dashboard Evaluasi SINOVA & CMS</h2>
                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 text-[10px] font-bold rounded-full">PHP 8.4 • Laravel 11/12</span>
                </div>
                <p class="text-xs text-slate-500 mt-1">Pemantauan kepatuhan website terhadap SK Dirjen Badilag Nomor: 2722/DJA/SK.TI1/X/2026</p>
            </div>
            <div class="flex gap-2">
                <button class="px-3 py-2 bg-[#056e4f] text-white text-xs font-bold rounded-lg hover:bg-emerald-800 shadow-xs transition">
                    🔄 Sinkronisasi SINOVA
                </button>
                <button class="px-3 py-2 bg-amber-500 text-slate-950 text-xs font-bold rounded-lg hover:bg-amber-400 shadow-xs transition">
                    + Tambah Konten Baru
                </button>
            </div>
        </div>

        <!-- 3 Pillar SINOVA Metric Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Pillar 1: Konten Wajib (60%) -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-500 uppercase">1. Konten Wajib (Bobot 60%)</span>
                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 font-extrabold text-xs rounded">Nilai: 10 / 10</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-black text-[#056e4f]">100%</span>
                    <span class="text-xs text-slate-500">24/24 Indikator Terpenuhi</span>
                </div>
                <!-- Progress Bar -->
                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-[#056e4f] h-2 rounded-full" style="width: 100%"></div>
                </div>
                <p class="text-[11px] text-slate-500">
                    SAKIP 5 thn, DIPA, LHKPN, Panggilan Ghaib, dan Jadwal Sidang berstatus lengkap.
                </p>
            </div>

            <!-- Pillar 2: UI/UX & Aksesibilitas (20%) -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-500 uppercase">2. UI/UX & Aksesibilitas (20%)</span>
                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 font-extrabold text-xs rounded">Nilai: 10 / 10</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-black text-[#ff9900]">100%</span>
                    <span class="text-xs text-slate-500">WCAG Compliant</span>
                </div>
                <!-- Progress Bar -->
                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-[#ff9900] h-2 rounded-full" style="width: 100%"></div>
                </div>
                <p class="text-[11px] text-slate-500">
                    Screen reader aktif, High contrast mode, responsif ponsel/tablet sempurna.
                </p>
            </div>

            <!-- Pillar 3: Keamanan & IT (20%) -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-500 uppercase">3. Keamanan & IT (20%)</span>
                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 font-extrabold text-xs rounded">Nilai: 10 / 10</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-black text-emerald-600">0.82 s</span>
                    <span class="text-xs text-slate-500">Speed: &lt; 5 Detik</span>
                </div>
                <!-- Progress Bar -->
                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-emerald-600 h-2 rounded-full" style="width: 100%"></div>
                </div>
                <p class="text-[11px] text-slate-500">
                    SSL TLS 1.3 valid, Port terproteksi (default deny), Zero Broken Links (0 dead links).
                </p>
            </div>
        </div>

        <!-- SINOVA URL Mapping Table (Memudahkan Operator Input Tautan ke SINOVA) -->
        <div class="bg-white rounded-2xl shadow-xs border border-slate-200 p-5 space-y-4">
            <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                <div>
                    <h3 class="font-extrabold text-sm text-[#056e4f] flex items-center gap-2">
                        📋 Tautan Validasi Mandiri SINOVA (URL Generator)
                    </h3>
                    <p class="text-xs text-slate-500">Salin tautan spesifik berikut langsung ke formulir evaluasi aplikasi SINOVA Badilag.</p>
                </div>
                <span class="text-xs bg-slate-100 text-slate-600 px-2.5 py-1 rounded font-semibold">Terkunci & Valid</span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 text-slate-700">
                        <tr>
                            <th class="py-2.5 px-3">Indikator SINOVA</th>
                            <th class="py-2.5 px-3">Kategori</th>
                            <th class="py-2.5 px-3">URL Publik Terverifikasi</th>
                            <th class="py-2.5 px-3 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="py-2.5 px-3 font-semibold">1.1 - 1.2 Rencana Aksi & Lap. Tahunan</td>
                            <td class="py-2.5 px-3 text-slate-500">Informasi Berkala</td>
                            <td class="py-2.5 px-3 font-mono text-[#056e4f]">/transparansi#sakip</td>
                            <td class="py-2.5 px-3 text-center"><span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded font-bold">10 (Sempurna)</span></td>
                        </tr>
                        <tr>
                            <td class="py-2.5 px-3 font-semibold">2.1 - 2.2 SIPP & Jadwal Persidangan</td>
                            <td class="py-2.5 px-3 text-slate-500">Kepaniteraan</td>
                            <td class="py-2.5 px-3 font-mono text-[#056e4f]">/layanan-hukum#jadwal</td>
                            <td class="py-2.5 px-3 text-center"><span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded font-bold">10 (Sempurna)</span></td>
                        </tr>
                        <tr>
                            <td class="py-2.5 px-3 font-semibold">2.4 Panggilan Ghaib & Relaas PDF</td>
                            <td class="py-2.5 px-3 text-slate-500">Kepaniteraan</td>
                            <td class="py-2.5 px-3 font-mono text-[#056e4f]">/layanan-hukum#ghaib</td>
                            <td class="py-2.5 px-3 text-center"><span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded font-bold">10 (Sempurna)</span></td>
                        </tr>
                        <tr>
                            <td class="py-2.5 px-3 font-semibold">3.1 LHKPN Pejabat & Ikhtisar Harta</td>
                            <td class="py-2.5 px-3 text-slate-500">Kesekretariatan</td>
                            <td class="py-2.5 px-3 font-mono text-[#056e4f]">/transparansi#lhkpn</td>
                            <td class="py-2.5 px-3 text-center"><span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded font-bold">10 (Sempurna)</span></td>
                        </tr>
                        <tr>
                            <td class="py-2.5 px-3 font-semibold">4.4 Survei Pelayanan Masyarakat (SKM/SPAK)</td>
                            <td class="py-2.5 px-3 text-slate-500">Layanan Publik</td>
                            <td class="py-2.5 px-3 font-mono text-[#056e4f]">/layanan-publik#survei</td>
                            <td class="py-2.5 px-3 text-center"><span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded font-bold">10 (Sempurna)</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Content Actions for Operator -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Box: Kelola Jadwal & Sidang -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 space-y-3">
                <h3 class="font-extrabold text-sm text-slate-800 flex items-center gap-2">
                    ⚖️ Kelola Agenda Sidang Harian
                </h3>
                <p class="text-xs text-slate-500">Input cepat nomor perkara, ruangan, dan agenda sidang harian.</p>
                <div class="space-y-2 text-xs">
                    <input type="text" placeholder="Nomor Perkara (Contoh: 145/Pdt.G/2026/PA.Cth)" class="w-full p-2 border border-slate-300 rounded-lg">
                    <div class="grid grid-cols-2 gap-2">
                        <select class="p-2 border border-slate-300 rounded-lg">
                            <option>Ruang Sidang I (Utama)</option>
                            <option>Ruang Sidang II</option>
                        </select>
                        <input type="text" placeholder="Agenda (cth: Mediasi)" class="p-2 border border-slate-300 rounded-lg">
                    </div>
                    <button class="w-full py-2 bg-[#056e4f] text-white font-bold rounded-lg hover:bg-emerald-800 transition">
                        + Publikasikan Jadwal Sidang
                    </button>
                </div>
            </div>

            <!-- Box: Unggah Panggilan Ghaib -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 space-y-3">
                <h3 class="font-extrabold text-sm text-[#ff9900] flex items-center gap-2">
                    📢 Unggah Panggilan Ghaib & Relaas
                </h3>
                <p class="text-xs text-slate-500">Wajib menyertakan file relaas PDF resmi agar dinilai 10 di SINOVA.</p>
                <div class="space-y-2 text-xs">
                    <input type="text" placeholder="Nama Pihak Yang Dipanggil" class="w-full p-2 border border-slate-300 rounded-lg">
                    <div class="grid grid-cols-2 gap-2">
                        <input type="text" placeholder="Nomor Perkara" class="p-2 border border-slate-300 rounded-lg">
                        <input type="date" class="p-2 border border-slate-300 rounded-lg">
                    </div>
                    <div class="p-2 border border-dashed border-slate-300 rounded-lg text-center text-slate-500">
                        📎 Pilih File Dokumen Relaas (Hanya PDF)
                    </div>
                    <button class="w-full py-2 bg-[#ff9900] text-slate-950 font-bold rounded-lg hover:bg-amber-400 transition">
                        + Publikasikan Panggilan Ghaib
                    </button>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
