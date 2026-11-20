@extends('layouts.app')

@section('title', 'Beranda - Website Resmi Pengadilan Agama')

@section('content')
<!-- Hero Slider (Maksimal 3-5 slide sesuai SK Dirjen Badilag Bab III.C.3) -->
<section class="relative bg-gradient-to-r from-[#056e4f] to-[#034834] text-white py-12 px-4 shadow-md overflow-hidden">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <!-- Hero Text -->
        <div class="lg:col-span-7 space-y-4">
            <div class="inline-flex items-center gap-2 bg-[#ff9900] text-slate-950 px-3 py-1 rounded-full text-xs font-bold tracking-wide uppercase">
                ⭐ Zona Integritas Menuju WBBM
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight">
                Pelayanan Hukum Berkeadilan, Cepat, dan Transparan
            </h2>
            <p class="text-emerald-100 text-sm sm:text-base leading-relaxed">
                Selamat datang di portal resmi Pengadilan Agama. Akses layanan persidangan, pendaftaran perkara online, informasi biaya panjar, transparansi dokumen SAKIP, dan saluran pengaduan terpadu.
            </p>
            <div class="flex flex-wrap gap-3 pt-2">
                <a href="{{ route('layanan.hukum') }}#jadwal" class="px-5 py-2.5 bg-[#ff9900] hover:bg-amber-500 text-slate-950 font-bold rounded-lg text-xs sm:text-sm shadow-md transition transform hover:-translate-y-0.5">
                    📅 Cek Jadwal Sidang
                </a>
                <a href="{{ route('layanan.hukum') }}#ghaib" class="px-5 py-2.5 bg-emerald-800 hover:bg-emerald-700 text-white font-semibold rounded-lg text-xs sm:text-sm border border-emerald-600 transition">
                    📢 Panggilan Ghaib
                </a>
                <a href="{{ route('transparansi') }}" class="px-5 py-2.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-lg text-xs sm:text-sm backdrop-blur-xs transition">
                    📊 Laporan SAKIP & DIPA
                </a>
            </div>
        </div>

        <!-- Hero Card Banner / Info Box -->
        <div class="lg:col-span-5">
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 shadow-xl space-y-4">
                <div class="flex items-center justify-between border-b border-emerald-600/50 pb-3">
                    <span class="font-bold text-sm text-amber-300">📌 PINTASAN APLIKASI UTAMA</span>
                    <span class="text-[11px] bg-emerald-900 text-emerald-200 px-2 py-0.5 rounded">Akses Cepat</span>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <a href="https://ecourt.mahkamahagung.go.id" target="_blank" class="p-3 bg-white/10 hover:bg-white/20 rounded-xl transition flex flex-col items-center text-center group">
                        <span class="text-2xl mb-1 group-hover:scale-110 transition">💻</span>
                        <span class="font-bold text-xs text-white">e-Court MA RI</span>
                        <span class="text-[10px] text-emerald-200">Pendaftaran Online</span>
                    </a>
                    <a href="{{ route('layanan.hukum') }}#sipp" class="p-3 bg-white/10 hover:bg-white/20 rounded-xl transition flex flex-col items-center text-center group">
                        <span class="text-2xl mb-1 group-hover:scale-110 transition">🔍</span>
                        <span class="font-bold text-xs text-white">SIPP Web Satker</span>
                        <span class="text-[10px] text-emerald-200">Lacak Perkara</span>
                    </a>
                    <a href="https://putusan3.mahkamahagung.go.id" target="_blank" class="p-3 bg-white/10 hover:bg-white/20 rounded-xl transition flex flex-col items-center text-center group">
                        <span class="text-2xl mb-1 group-hover:scale-110 transition">📑</span>
                        <span class="font-bold text-xs text-white">Direktori Putusan</span>
                        <span class="text-[10px] text-emerald-200">Salinan Putusan</span>
                    </a>
                    <a href="https://siwas.mahkamahagung.go.id" target="_blank" class="p-3 bg-white/10 hover:bg-white/20 rounded-xl transition flex flex-col items-center text-center group">
                        <span class="text-2xl mb-1 group-hover:scale-110 transition">🛡️</span>
                        <span class="font-bold text-xs text-white">SIWAS MARI</span>
                        <span class="text-[10px] text-emerald-200">Pengaduan Online</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4 Primary Quick Action Cards (Aturan SINOVA: Maksimal 2 Klik untuk Akses Informasi Utama) -->
<section class="max-w-7xl mx-auto px-4 -mt-6 z-20 relative">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- 1. Jadwal Sidang -->
        <a href="{{ route('layanan.hukum') }}#jadwal" class="bg-white p-4 rounded-xl shadow-md border-t-4 border-[#056e4f] hover:shadow-lg transition transform hover:-translate-y-1">
            <div class="flex items-center space-x-3">
                <div class="p-2.5 bg-emerald-50 text-[#056e4f] rounded-lg text-xl font-bold">📅</div>
                <div>
                    <h3 class="font-bold text-xs sm:text-sm text-slate-800">Jadwal Sidang</h3>
                    <p class="text-[11px] text-slate-500">Agenda Sidang Hari Ini</p>
                </div>
            </div>
        </a>

        <!-- 2. Biaya Panjar Perkara -->
        <a href="{{ route('layanan.hukum') }}#panjar" class="bg-white p-4 rounded-xl shadow-md border-t-4 border-[#ff9900] hover:shadow-lg transition transform hover:-translate-y-1">
            <div class="flex items-center space-x-3">
                <div class="p-2.5 bg-amber-50 text-[#ff9900] rounded-lg text-xl font-bold">💰</div>
                <div>
                    <h3 class="font-bold text-xs sm:text-sm text-slate-800">Panjar & Radius</h3>
                    <p class="text-[11px] text-slate-500">Estimasi Biaya Perkara</p>
                </div>
            </div>
        </a>

        <!-- 3. Hak Prodeo / Bantuan Hukum -->
        <a href="{{ route('layanan.hukum') }}#prodeo" class="bg-white p-4 rounded-xl shadow-md border-t-4 border-[#056e4f] hover:shadow-lg transition transform hover:-translate-y-1">
            <div class="flex items-center space-x-3">
                <div class="p-2.5 bg-emerald-50 text-[#056e4f] rounded-lg text-xl font-bold">🤝</div>
                <div>
                    <h3 class="font-bold text-xs sm:text-sm text-slate-800">Prodeo & Posbakum</h3>
                    <p class="text-[11px] text-slate-500">Layanan Biaya Rp 0</p>
                </div>
            </div>
        </a>

        <!-- 4. Panggilan Ghaib -->
        <a href="{{ route('layanan.hukum') }}#ghaib" class="bg-white p-4 rounded-xl shadow-md border-t-4 border-[#ff9900] hover:shadow-lg transition transform hover:-translate-y-1">
            <div class="flex items-center space-x-3">
                <div class="p-2.5 bg-amber-50 text-[#ff9900] rounded-lg text-xl font-bold">📜</div>
                <div>
                    <h3 class="font-bold text-xs sm:text-sm text-slate-800">Panggilan Ghaib</h3>
                    <p class="text-[11px] text-slate-500">Relaas Pemanggilan Resmi</p>
                </div>
            </div>
        </a>
    </div>
</section>

<!-- Section: Jadwal Sidang Hari Ini & Panggilan Ghaib (Indikator Kunci SINOVA) -->
<section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-12 gap-8">
    <!-- Col Left: Jadwal Sidang Hari Ini -->
    <div class="lg:col-span-7 space-y-4">
        <div class="flex justify-between items-center border-b border-slate-200 pb-2">
            <div>
                <h3 class="text-base sm:text-lg font-extrabold text-[#056e4f] flex items-center gap-2">
                    ⚖️ Agenda Sidang Hari Ini
                </h3>
                <p class="text-xs text-slate-500">Jumat, 20 November 2026 • Ruang Sidang Utama & II</p>
            </div>
            <a href="{{ route('layanan.hukum') }}#jadwal" class="text-xs font-bold text-[#056e4f] hover:underline">
                Lihat Seluruhnya →
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-xs border border-slate-200 overflow-hidden">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#056e4f] text-white">
                    <tr>
                        <th class="py-2.5 px-3">No. Perkara</th>
                        <th class="py-2.5 px-3">Jenis Perkara</th>
                        <th class="py-2.5 px-3">Ruang</th>
                        <th class="py-2.5 px-3">Agenda</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50">
                        <td class="py-2.5 px-3 font-semibold text-emerald-800">124/Pdt.G/2026/PA.Cth</td>
                        <td class="py-2.5 px-3">Cerai Gugat</td>
                        <td class="py-2.5 px-3"><span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded font-bold">Ruang I</span></td>
                        <td class="py-2.5 px-3 text-slate-600">Mediasi Pertama</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-2.5 px-3 font-semibold text-emerald-800">128/Pdt.P/2026/PA.Cth</td>
                        <td class="py-2.5 px-3">Isbat Nikah</td>
                        <td class="py-2.5 px-3"><span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded font-bold">Ruang I</span></td>
                        <td class="py-2.5 px-3 text-slate-600">Pembuktian Saksi</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-2.5 px-3 font-semibold text-emerald-800">132/Pdt.G/2026/PA.Cth</td>
                        <td class="py-2.5 px-3">Harta Bersama</td>
                        <td class="py-2.5 px-3"><span class="px-2 py-0.5 bg-amber-100 text-amber-800 rounded font-bold">Ruang II</span></td>
                        <td class="py-2.5 px-3 text-slate-600">Jawaban Tergugat</td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-2.5 px-3 font-semibold text-emerald-800">140/Pdt.G/2026/PA.Cth</td>
                        <td class="py-2.5 px-3">Cerai Talak</td>
                        <td class="py-2.5 px-3"><span class="px-2 py-0.5 bg-amber-100 text-amber-800 rounded font-bold">Ruang II</span></td>
                        <td class="py-2.5 px-3 text-slate-600">Sidang Pembacaan Ikrar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Col Right: Panggilan Ghaib (Kewajiban SINOVA Lampiran II.A.1 No 6) -->
    <div class="lg:col-span-5 space-y-4">
        <div class="flex justify-between items-center border-b border-slate-200 pb-2">
            <div>
                <h3 class="text-base sm:text-lg font-extrabold text-[#ff9900] flex items-center gap-2">
                    📢 Panggilan Sidang Ghaib
                </h3>
                <p class="text-xs text-slate-500">Pemberitahuan Pihak Tidak Diketahui Keberadaannya</p>
            </div>
            <a href="{{ route('layanan.hukum') }}#ghaib" class="text-xs font-bold text-[#ff9900] hover:underline">
                Arsip Lengkap →
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-xs border border-slate-200 p-4 space-y-3">
            <!-- Item 1 -->
            <div class="p-3 bg-amber-50/50 rounded-lg border border-amber-200/60 space-y-1 text-xs">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900">Perkara: 112/Pdt.G/2026/PA.Cth</span>
                    <span class="text-[10px] bg-[#ff9900] text-slate-950 font-bold px-1.5 py-0.5 rounded">Sidang: 15 Des 2026</span>
                </div>
                <p class="text-slate-600">Kepada Tergugat: <strong>Ahmad Fulan bin Fulan</strong> (Dahulu tinggal di Wilayah Hukum PA)</p>
                <div class="pt-1 flex justify-end">
                    <a href="#" class="inline-flex items-center gap-1 text-[11px] text-[#056e4f] font-bold hover:underline">
                        📄 Unduh Relaas Panggilan (PDF)
                    </a>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="p-3 bg-amber-50/50 rounded-lg border border-amber-200/60 space-y-1 text-xs">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900">Perkara: 119/Pdt.G/2026/PA.Cth</span>
                    <span class="text-[10px] bg-[#ff9900] text-slate-950 font-bold px-1.5 py-0.5 rounded">Sidang: 22 Des 2026</span>
                </div>
                <p class="text-slate-600">Kepada Tergugat: <strong>Siti Fulanah binti Fulan</strong> (Dahulu tinggal di Wilayah Hukum PA)</p>
                <div class="pt-1 flex justify-end">
                    <a href="#" class="inline-flex items-center gap-1 text-[11px] text-[#056e4f] font-bold hover:underline">
                        📄 Unduh Relaas Panggilan (PDF)
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Statistik Perkara & Akuntabilitas (Indikator SINOVA Lampiran II.A.1 No 5) -->
<section class="bg-slate-100 py-10 px-4 border-y border-slate-200">
    <div class="max-w-7xl mx-auto space-y-6">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-xl sm:text-2xl font-extrabold text-[#056e4f]">
                Statistik Keadaan Perkara Bulan Berjalan
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">
                Data transparansi penanganan perkara peradilan agama secara berkala dan terverifikasi.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Sisa Bulan Lalu -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 text-center space-y-1">
                <span class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Sisa Bulan Lalu</span>
                <p class="text-2xl sm:text-3xl font-extrabold text-slate-800">42</p>
                <span class="text-[11px] text-slate-400">Perkara</span>
            </div>
            <!-- Perkara Masuk -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 text-center space-y-1">
                <span class="text-xs font-semibold text-emerald-700 uppercase tracking-wide">Perkara Masuk</span>
                <p class="text-2xl sm:text-3xl font-extrabold text-[#056e4f]">89</p>
                <span class="text-[11px] text-emerald-600 font-semibold">+ e-Court: 78</span>
            </div>
            <!-- Perkara Putus -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 text-center space-y-1">
                <span class="text-xs font-semibold text-amber-700 uppercase tracking-wide">Perkara Putus</span>
                <p class="text-2xl sm:text-3xl font-extrabold text-[#ff9900]">94</p>
                <span class="text-[11px] text-amber-600 font-semibold">Tingkat Minutasi: 98%</span>
            </div>
            <!-- Sisa Perkara Saat Ini -->
            <div class="bg-white p-5 rounded-2xl shadow-xs border border-slate-200 text-center space-y-1">
                <span class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Sisa Perkara Berjalan</span>
                <p class="text-2xl sm:text-3xl font-extrabold text-slate-800">37</p>
                <span class="text-[11px] text-slate-400">Dalam Proses Sidang</span>
            </div>
        </div>
    </div>
</section>

<!-- Section: Berita Inovasi Pelayanan & Infografis (Bab III.D) -->
<section class="max-w-7xl mx-auto px-4 py-12 space-y-6">
    <div class="flex justify-between items-end border-b border-slate-200 pb-3">
        <div>
            <span class="text-xs font-bold text-[#ff9900] uppercase tracking-wider">Reformasi Birokrasi</span>
            <h2 class="text-xl sm:text-2xl font-extrabold text-[#056e4f]">
                Kabar Peradilan & Inovasi Layanan
            </h2>
        </div>
        <a href="{{ route('berita') }}" class="text-xs font-bold text-[#056e4f] hover:underline">
            Lihat Semua Berita →
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Berita 1 -->
        <article class="bg-white rounded-2xl shadow-xs border border-slate-200 overflow-hidden hover:shadow-md transition">
            <div class="h-44 bg-gradient-to-tr from-[#056e4f] to-emerald-700 flex items-center justify-center text-white text-4xl">
                🚀
            </div>
            <div class="p-5 space-y-2">
                <span class="text-[11px] text-amber-600 font-bold bg-amber-50 px-2 py-0.5 rounded">Inovasi Layanan</span>
                <h3 class="font-bold text-sm text-slate-900 leading-snug hover:text-[#056e4f] transition">
                    <a href="{{ route('berita') }}">Penerapan Layanan Antrean Sidang Mandiri Berbasis Notifikasi WhatsApp</a>
                </h3>
                <p class="text-xs text-slate-500 line-clamp-2">
                    Inovasi ini memangkas waktu tunggu para pihak di pengadilan dan memberikan transparansi urutan pemanggilan sidang secara real-time.
                </p>
                <div class="pt-2 text-[11px] text-slate-400 flex justify-between items-center border-t border-slate-100">
                    <span>18 Nov 2026</span>
                    <span class="text-[#056e4f] font-semibold">Baca Selengkapnya →</span>
                </div>
            </div>
        </article>

        <!-- Berita 2 -->
        <article class="bg-white rounded-2xl shadow-xs border border-slate-200 overflow-hidden hover:shadow-md transition">
            <div class="h-44 bg-gradient-to-tr from-[#034834] to-teal-800 flex items-center justify-center text-white text-4xl">
                ♿
            </div>
            <div class="p-5 space-y-2">
                <span class="text-[11px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded">Kelompok Rentan</span>
                <h3 class="font-bold text-sm text-slate-900 leading-snug hover:text-[#056e4f] transition">
                    <a href="{{ route('berita') }}">Optimalisasi Jalur Pemandu & Fasilitas Ramah Disabilitas di PTSP Pengadilan</a>
                </h3>
                <p class="text-xs text-slate-500 line-clamp-2">
                    Mewujudkan peradilan inklusif bagi seluruh masyarakat dengan penyediaan guiding block, kursi roda, dan petugas pendamping khusus.
                </p>
                <div class="pt-2 text-[11px] text-slate-400 flex justify-between items-center border-t border-slate-100">
                    <span>15 Nov 2026</span>
                    <span class="text-[#056e4f] font-semibold">Baca Selengkapnya →</span>
                </div>
            </div>
        </article>

        <!-- Berita 3 -->
        <article class="bg-white rounded-2xl shadow-xs border border-slate-200 overflow-hidden hover:shadow-md transition">
            <div class="h-44 bg-gradient-to-tr from-amber-600 to-[#ff9900] flex items-center justify-center text-white text-4xl">
                📊
            </div>
            <div class="p-5 space-y-2">
                <span class="text-[11px] text-slate-900 font-bold bg-amber-100 px-2 py-0.5 rounded">Transparansi</span>
                <h3 class="font-bold text-sm text-slate-900 leading-snug hover:text-[#056e4f] transition">
                    <a href="{{ route('berita') }}">Publikasi Laporan Realisasi Anggaran (LRA) dan Capaian SAKIP Triwulan III</a>
                </h3>
                <p class="text-xs text-slate-500 line-clamp-2">
                    Dokumen transparansi keuangan DIPA dan capaian indikator kinerja utama telah diunggah dan dapat diunduh bebas oleh masyarakat.
                </p>
                <div class="pt-2 text-[11px] text-slate-400 flex justify-between items-center border-t border-slate-100">
                    <span>10 Nov 2026</span>
                    <span class="text-[#056e4f] font-semibold">Baca Selengkapnya →</span>
                </div>
            </div>
        </article>
    </div>
</section>

<!-- Section: Banner Survei Layanan (SKM/SPAK) & SIWAS (Kewajiban Bab III.F.5) -->
<section class="max-w-7xl mx-auto px-4 pb-12">
    <div class="bg-gradient-to-r from-amber-500 to-[#ff9900] rounded-3xl p-6 sm:p-8 text-slate-950 shadow-md flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="space-y-2 max-w-2xl text-center md:text-left">
            <span class="bg-white/80 text-slate-900 font-bold text-xs px-2.5 py-1 rounded-full uppercase">Survei Kepuasan Elektronik</span>
            <h3 class="text-xl sm:text-2xl font-black">
                Bantu Kami Tingkatkan Kualitas Pelayanan Pengadilan
            </h3>
            <p class="text-xs sm:text-sm text-amber-950 leading-relaxed font-medium">
                Berikan penilaian Anda secara objektif melalui Survei Kepuasan Masyarakat (SKM) dan Survei Persepsi Anti Korupsi (SPAK). Identitas responden dijamin kerahasiaannya.
            </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-3 shrink-0">
            <a href="{{ route('layanan.publik') }}#survei" class="px-5 py-3 bg-[#056e4f] text-white hover:bg-emerald-900 font-bold text-xs rounded-xl shadow transition text-center">
                📝 Isi Survei Online (SKM)
            </a>
            <a href="https://siwas.mahkamahagung.go.id" target="_blank" class="px-5 py-3 bg-white text-slate-900 hover:bg-slate-100 font-bold text-xs rounded-xl shadow transition text-center">
                🛡️ Lapor Pungli / SIWAS
            </a>
        </div>
    </div>
</section>
@endsection
