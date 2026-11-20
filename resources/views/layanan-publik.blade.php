@extends('layouts.app')

@section('title', 'Layanan Publik & Pengaduan - Website Resmi Pengadilan Agama')

@section('content')
<!-- Header Page Banner -->
<div class="bg-[#056e4f] text-white py-8 px-4">
    <div class="max-w-7xl mx-auto space-y-2">
        <div class="text-xs text-emerald-200">
            <a href="{{ route('home') }}" class="hover:underline">Beranda</a> / Layanan Publik & Pengaduan
        </div>
        <h1 class="text-2xl sm:text-3xl font-extrabold">Layanan Publik, PPID & Saluran Pengaduan</h1>
        <p class="text-xs sm:text-sm text-emerald-100 max-w-3xl">
            Maklumat Pelayanan, Formulir PPID Online, SIWAS MARI, Rekapitulasi Pengaduan, dan Sarana Ramah Disabilitas.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-10 space-y-12">
    <!-- 1. Maklumat Pelayanan Pengadilan (Lampiran II.A.2 No 11) -->
    <section id="maklumat" class="bg-gradient-to-r from-emerald-900 to-[#056e4f] text-white p-8 rounded-3xl shadow-md space-y-4 text-center">
        <div class="inline-block px-3 py-1 bg-[#ff9900] text-slate-950 font-black text-xs rounded-full uppercase tracking-wider">
            Maklumat Pelayanan
        </div>
        <h2 class="text-xl sm:text-2xl font-black max-w-3xl mx-auto leading-snug">
            "Dengan ini kami menyatakan sanggup menyelenggarakan pelayanan peradilan sesuai standar pelayanan yang telah ditetapkan dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai peraturan perundang-undangan."
        </h2>
        <p class="text-xs text-emerald-200">
            Ditetapkan oleh Ketua Pengadilan Agama • Standar Pelayanan SK KMA No. 026/KMA/SK/II/2012
        </p>
    </section>

    <!-- 2. Layanan Informasi PPID & Laporan Akses Informasi (Lampiran II.A.1 No 20) -->
    <section class="bg-white p-6 sm:p-8 rounded-2xl shadow-xs border border-slate-200 space-y-6">
        <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-2 border-b border-slate-100 pb-4">
            <div>
                <h2 class="text-xl font-extrabold text-[#056e4f]">Pejabat Pengelola Informasi & Dokumentasi (PPID)</h2>
                <p class="text-xs text-slate-500">Mendukung Keterbukaan Informasi Publik berdasarkan SK KMA No. 2-144/KMA/SK/VIII/2022.</p>
            </div>
            <a href="#" class="px-4 py-2 bg-[#ff9900] text-slate-950 font-bold rounded-lg text-xs hover:bg-amber-500 transition self-start">
                📝 Formulir Permohonan Informasi Online
            </a>
        </div>

        <!-- Rekapitulasi Laporan Akses Informasi Tahunan -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs">
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 text-center">
                <span class="text-slate-500 font-semibold block">Permohonan Diterima</span>
                <span class="text-2xl font-extrabold text-[#056e4f] block mt-1">28</span>
                <span class="text-[10px] text-slate-400">Tahun 2026</span>
            </div>
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 text-center">
                <span class="text-slate-500 font-semibold block">Dikabulkan Penuh</span>
                <span class="text-2xl font-extrabold text-emerald-600 block mt-1">28</span>
                <span class="text-[10px] text-slate-400">100% Terpenuhi</span>
            </div>
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 text-center">
                <span class="text-slate-500 font-semibold block">Rata-Rata Waktu Jawab</span>
                <span class="text-2xl font-extrabold text-amber-600 block mt-1">1.2 Hari</span>
                <span class="text-[10px] text-slate-400">Standar Maks. 3 Hari</span>
            </div>
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 text-center">
                <span class="text-slate-500 font-semibold block">Ditolak / Keberatan</span>
                <span class="text-2xl font-extrabold text-slate-400 block mt-1">0</span>
                <span class="text-[10px] text-slate-400">Nol Sengketa Informasi</span>
            </div>
        </div>
    </section>

    <!-- 3. Rekapitulasi Pengaduan & Hukuman Disiplin (Lampiran II.A.1 No 21 & 22 - Indikator Wajib) -->
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-extrabold text-[#056e4f]">Rekapitulasi Pengaduan & Hukuman Disiplin</h2>
            <p class="text-xs text-slate-500">Transparansi penanganan laporan dugaan pelanggaran perilaku dan hasil tindak lanjut Badan Pengawasan MA RI.</p>
        </div>

        <div class="bg-white rounded-xl shadow-xs border border-slate-200 overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#056e4f] text-white">
                    <tr>
                        <th class="py-3 px-4">Inisial Pelapor / Terlapor</th>
                        <th class="py-3 px-4">Jenis Pelanggaran</th>
                        <th class="py-3 px-4">Deskripsi Singkat</th>
                        <th class="py-3 px-4">Status Pemeriksaan</th>
                        <th class="py-3 px-4">Hukuman Disiplin</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Pelapor: MS / Terlapor: F (Staf)</td>
                        <td class="py-3 px-4">Disiplin Kerja</td>
                        <td class="py-3 px-4 text-slate-600">Keterlambatan pelayanan meja pendaftaran tanpa izin</td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded font-bold">Selesai Diperiksa</span></td>
                        <td class="py-3 px-4 text-amber-700 font-semibold">Teguran Lisan oleh Pimpinan</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Pelapor: Anonim / Terlapor: -</td>
                        <td class="py-3 px-4">Dugaan Pungli</td>
                        <td class="py-3 px-4 text-slate-600">Laporan dugaan biaya tambahan di loket informasi</td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 bg-slate-100 text-slate-700 rounded font-bold">Tidak Terbukti</span></td>
                        <td class="py-3 px-4 text-slate-400">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- 4. Sarana Prasarana Ramah Disabilitas (Bab III.A.1) -->
    <section id="disabilitas" class="bg-amber-50 border border-amber-200 rounded-2xl p-6 sm:p-8 space-y-4">
        <div class="flex items-center space-x-3">
            <span class="text-3xl">♿</span>
            <div>
                <h2 class="text-xl font-extrabold text-amber-900">Layanan Ramah Kelompok Rentan & Disabilitas</h2>
                <p class="text-xs text-amber-800 font-medium">Fasilitas khusus bagi kaum rentan (disabilitas, lansia, wanita hamil, dan ibu menyusui).</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs text-slate-700">
            <div class="bg-white p-4 rounded-xl border border-amber-200 space-y-1">
                <span class="font-bold text-amber-900 text-sm">🚶 Jalur Pemandu (Guiding Block)</span>
                <p>Ubin pemandu kuning mulai dari pintu gerbang kantor hingga loket prioritas PTSP.</p>
            </div>
            <div class="bg-white p-4 rounded-xl border border-amber-200 space-y-1">
                <span class="font-bold text-amber-900 text-sm">🦽 Kursi Roda & Jalur Landai (Ramp)</span>
                <p>Akses tanpa tangga untuk mempermudah kursi roda dan alat bantu jalan.</p>
            </div>
            <div class="bg-white p-4 rounded-xl border border-amber-200 space-y-1">
                <span class="font-bold text-amber-900 text-sm">🗣️ Brosur Huruf Braille & Jurubahasa</span>
                <p>Panduan informasi berhuruf Braille dan fasilitas juru bahasa isyarat bagi tuna rungu.</p>
            </div>
        </div>
    </section>

    <!-- 5. Hasil Survei Pelayanan (SKM & SPAK) (Lampiran II.A.1 No 23) -->
    <section id="survei" class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-xs space-y-6">
        <div>
            <h2 class="text-xl font-extrabold text-[#056e4f]">Hasil Survei Pelayanan Publik Triwulan Terakhir</h2>
            <p class="text-xs text-slate-500">Nilai indeks kepuasan masyarakat yang dipublikasikan secara transparan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <!-- SKM -->
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <span class="text-xs font-bold text-slate-500 uppercase">Indeks Kepuasan Masyarakat (SKM)</span>
                <p class="text-4xl font-black text-[#056e4f]">3.94</p>
                <span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-2.5 py-0.5 rounded-full inline-block">Sangat Baik (Skala 4.00)</span>
            </div>
            <!-- SPAK -->
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <span class="text-xs font-bold text-slate-500 uppercase">Indeks Persepsi Anti Korupsi (SPAK)</span>
                <p class="text-4xl font-black text-[#ff9900]">3.98</p>
                <span class="text-xs font-bold text-amber-800 bg-amber-100 px-2.5 py-0.5 rounded-full inline-block">Bebas Pungli & Korupsi</span>
            </div>
            <!-- SPKP -->
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <span class="text-xs font-bold text-slate-500 uppercase">Persepsi Kualitas Pelayanan (SPKP)</span>
                <p class="text-4xl font-black text-slate-800">3.92</p>
                <span class="text-xs font-bold text-slate-700 bg-slate-200 px-2.5 py-0.5 rounded-full inline-block">Pelayanan Prima</span>
            </div>
        </div>
    </section>
</div>
@endsection
