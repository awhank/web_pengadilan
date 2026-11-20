@extends('layouts.app')

@section('title', 'Berita & Publikasi - Website Resmi Pengadilan Agama')

@section('content')
<!-- Header Page Banner -->
<div class="bg-[#056e4f] text-white py-8 px-4">
    <div class="max-w-7xl mx-auto space-y-2">
        <div class="text-xs text-emerald-200">
            <a href="{{ route('home') }}" class="hover:underline">Beranda</a> / Berita & Publikasi
        </div>
        <h1 class="text-2xl sm:text-3xl font-extrabold">Kanal Berita, Pengumuman & Infografis</h1>
        <p class="text-xs sm:text-sm text-emerald-100 max-w-3xl">
            Sesuai SK Dirjen Badilag Bab III.D: Berita berorientasi pada pelayanan masyarakat dan inovasi, bukan sekadar liputan seremonial internal monoton.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-10 space-y-12">
    <!-- Filter Kategori Berita -->
    <div class="flex flex-wrap gap-2 text-xs font-semibold">
        <button class="px-4 py-2 bg-[#056e4f] text-white rounded-full">Semua Publikasi</button>
        <button class="px-4 py-2 bg-white text-slate-700 border border-slate-300 rounded-full hover:bg-slate-100">Inovasi Layanan</button>
        <button class="px-4 py-2 bg-white text-slate-700 border border-slate-300 rounded-full hover:bg-slate-100">Pengumuman Resmi</button>
        <button class="px-4 py-2 bg-white text-slate-700 border border-slate-300 rounded-full hover:bg-slate-100">Galeri Infografis</button>
        <button class="px-4 py-2 bg-white text-slate-700 border border-slate-300 rounded-full hover:bg-slate-100">Opini & Reformasi Birokrasi</button>
    </div>

    <!-- Grid Berita & Artikel Inovatif -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Artikel 1 -->
        <article class="bg-white rounded-2xl shadow-xs border border-slate-200 overflow-hidden hover:shadow-md transition">
            <div class="h-44 bg-gradient-to-tr from-[#056e4f] to-emerald-700 flex items-center justify-center text-white text-4xl">
                📱
            </div>
            <div class="p-5 space-y-2">
                <span class="text-[11px] text-amber-600 font-bold bg-amber-50 px-2 py-0.5 rounded">Inovasi Layanan</span>
                <h3 class="font-bold text-sm text-slate-900 leading-snug hover:text-[#056e4f] transition">
                    Penerapan Layanan Antrean Sidang Mandiri Berbasis Notifikasi WhatsApp
                </h3>
                <p class="text-xs text-slate-500 line-clamp-2">
                    Inovasi ini memangkas waktu tunggu para pihak di pengadilan dan memberikan transparansi urutan pemanggilan sidang secara real-time.
                </p>
                <div class="pt-2 text-[11px] text-slate-400 flex justify-between items-center border-t border-slate-100">
                    <span>18 Nov 2026</span>
                    <span class="text-[#056e4f] font-semibold">Baca Artikel →</span>
                </div>
            </div>
        </article>

        <!-- Artikel 2 -->
        <article class="bg-white rounded-2xl shadow-xs border border-slate-200 overflow-hidden hover:shadow-md transition">
            <div class="h-44 bg-gradient-to-tr from-[#034834] to-teal-800 flex items-center justify-center text-white text-4xl">
                ♿
            </div>
            <div class="p-5 space-y-2">
                <span class="text-[11px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded">Kelompok Rentan</span>
                <h3 class="font-bold text-sm text-slate-900 leading-snug hover:text-[#056e4f] transition">
                    Optimalisasi Jalur Pemandu & Fasilitas Ramah Disabilitas di PTSP Pengadilan
                </h3>
                <p class="text-xs text-slate-500 line-clamp-2">
                    Mewujudkan peradilan inklusif bagi seluruh masyarakat dengan penyediaan guiding block, kursi roda, dan petugas pendamping khusus.
                </p>
                <div class="pt-2 text-[11px] text-slate-400 flex justify-between items-center border-t border-slate-100">
                    <span>15 Nov 2026</span>
                    <span class="text-[#056e4f] font-semibold">Baca Artikel →</span>
                </div>
            </div>
        </article>

        <!-- Artikel 3 -->
        <article class="bg-white rounded-2xl shadow-xs border border-slate-200 overflow-hidden hover:shadow-md transition">
            <div class="h-44 bg-gradient-to-tr from-amber-600 to-[#ff9900] flex items-center justify-center text-white text-4xl">
                📊
            </div>
            <div class="p-5 space-y-2">
                <span class="text-[11px] text-slate-900 font-bold bg-amber-100 px-2 py-0.5 rounded">Transparansi</span>
                <h3 class="font-bold text-sm text-slate-900 leading-snug hover:text-[#056e4f] transition">
                    Publikasi Laporan Realisasi Anggaran (LRA) dan Capaian SAKIP Triwulan III
                </h3>
                <p class="text-xs text-slate-500 line-clamp-2">
                    Dokumen transparansi keuangan DIPA dan capaian indikator kinerja utama telah diunggah dan dapat diunduh bebas oleh masyarakat.
                </p>
                <div class="pt-2 text-[11px] text-slate-400 flex justify-between items-center border-t border-slate-100">
                    <span>10 Nov 2026</span>
                    <span class="text-[#056e4f] font-semibold">Baca Artikel →</span>
                </div>
            </div>
        </article>
    </div>

    <!-- Galeri Infografis Alur Pelayanan (Bab III.F.6) -->
    <section class="bg-slate-100 p-6 sm:p-8 rounded-2xl border border-slate-200 space-y-6">
        <div>
            <h2 class="text-xl font-extrabold text-[#056e4f]">Galeri Infografis Pelayanan</h2>
            <p class="text-xs text-slate-500">Panduan visual alur berperkara dan hak-hak pencari keadilan.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <div class="h-32 bg-emerald-800 rounded-lg flex items-center justify-center text-white text-3xl font-bold">
                    Infografis 1
                </div>
                <h4 class="font-bold text-slate-900">Alur Pendaftaran Perkara Melalui e-Court</h4>
                <p class="text-slate-500">Langkah mudah mengajukan gugatan/permohonan dari rumah.</p>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <div class="h-32 bg-amber-600 rounded-lg flex items-center justify-center text-white text-3xl font-bold">
                    Infografis 2
                </div>
                <h4 class="font-bold text-slate-900">Prosedur Mediasi di Pengadilan Agama</h4>
                <p class="text-slate-500">Mencapai perdamaian bersama mediator bersertifikasi.</p>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <div class="h-32 bg-teal-800 rounded-lg flex items-center justify-center text-white text-3xl font-bold">
                    Infografis 3
                </div>
                <h4 class="font-bold text-slate-900">Hak Layanan Prodeo (Biaya Nol Rupiah)</h4>
                <p class="text-slate-500">Cara memperoleh surat keterangan tidak mampu dan bantuan posbakum.</p>
            </div>
        </div>
    </section>
</div>
@endsection
