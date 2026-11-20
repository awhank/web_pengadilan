@extends('layouts.app')

@section('title', 'Transparansi & Akuntabilitas - Website Resmi Pengadilan Agama')

@section('content')
<!-- Header Page Banner -->
<div class="bg-[#056e4f] text-white py-8 px-4">
    <div class="max-w-7xl mx-auto space-y-2">
        <div class="text-xs text-emerald-200">
            <a href="{{ route('home') }}" class="hover:underline">Beranda</a> / Transparansi Kesekretariatan
        </div>
        <h1 class="text-2xl sm:text-3xl font-extrabold">Transparansi Kinerja & Pengelolaan Anggaran</h1>
        <p class="text-xs sm:text-sm text-emerald-100 max-w-3xl">
            Sistem Akuntabilitas Kinerja Instansi Pemerintah (SAKIP 5 Tahun), Keuangan DIPA, Pengadaan Barang & Jasa, dan LHKPN.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-10 space-y-12">
    <!-- 1. Dokumen SAKIP 5 Tahun Terakhir (Lampiran II.A.1 No 14 - 19) -->
    <section class="bg-white p-6 sm:p-8 rounded-2xl shadow-xs border border-slate-200 space-y-6">
        <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-2 border-b border-slate-100 pb-4">
            <div>
                <h2 class="text-xl font-extrabold text-[#056e4f]">Dokumen SAKIP (5 Tahun Terakhir)</h2>
                <p class="text-xs text-slate-500">Kepatuhan kewajiban unggah dokumen kinerja 5 tahunan (2022 - 2026) sesuai SK Dirjen Badilag.</p>
            </div>
            <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded-full self-start">
                Nilai Sempurna SINOVA (10)
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-xs">
            <!-- 1. Renstra -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900 text-sm">Rencana Strategis (Renstra)</span>
                    <span class="text-[10px] bg-slate-200 text-slate-700 px-1.5 py-0.5 rounded font-bold">2020-2024 / 2025-2029</span>
                </div>
                <p class="text-slate-500">Dokumen perencanaan jangka menengah dan reviu Renstra satker.</p>
                <div class="pt-1 flex flex-col gap-1 text-[11px]">
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Reviu Renstra 2025-2029 (PDF)</a>
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Dokumen Renstra Induk (PDF)</a>
                </div>
            </div>

            <!-- 2. RKT -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900 text-sm">Rencana Kinerja Tahunan (RKT)</span>
                    <span class="text-[10px] bg-slate-200 text-slate-700 px-1.5 py-0.5 rounded font-bold">5 Tahun</span>
                </div>
                <p class="text-slate-500">Target kinerja tahunan satuan kerja periode 2022 s.d. 2026.</p>
                <div class="pt-1 flex flex-col gap-1 text-[11px]">
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 RKT Tahun 2026 (PDF)</a>
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Arsip RKT 2022 - 2025 (ZIP/PDF)</a>
                </div>
            </div>

            <!-- 3. PK -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900 text-sm">Perjanjian Kinerja (PK)</span>
                    <span class="text-[10px] bg-slate-200 text-slate-700 px-1.5 py-0.5 rounded font-bold">5 Tahun</span>
                </div>
                <p class="text-slate-500">Komitmen kinerja pimpinan dengan Pengadilan Tingkat Banding.</p>
                <div class="pt-1 flex flex-col gap-1 text-[11px]">
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Perjanjian Kinerja 2026 (PDF)</a>
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Arsip PK 2022 - 2025 (ZIP/PDF)</a>
                </div>
            </div>

            <!-- 4. IKU -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900 text-sm">Indikator Kinerja Utama (IKU)</span>
                    <span class="text-[10px] bg-slate-200 text-slate-700 px-1.5 py-0.5 rounded font-bold">5 Tahun</span>
                </div>
                <p class="text-slate-500">Ukuran keberhasilan organisasi dan reviu IKU terbaru.</p>
                <div class="pt-1 flex flex-col gap-1 text-[11px]">
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Reviu IKU Tahun 2026 (PDF)</a>
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Arsip IKU 2022 - 2025 (PDF)</a>
                </div>
            </div>

            <!-- 5. LKjIP -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900 text-sm">Laporan Kinerja (LKjIP)</span>
                    <span class="text-[10px] bg-slate-200 text-slate-700 px-1.5 py-0.5 rounded font-bold">5 Tahun</span>
                </div>
                <p class="text-slate-500">Pertanggungjawaban capaian sasaran strategis lembaga.</p>
                <div class="pt-1 flex flex-col gap-1 text-[11px]">
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 LKjIP Tahun 2025 (PDF)</a>
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Arsip LKjIP 2021 - 2024 (PDF)</a>
                </div>
            </div>

            <!-- 6. Laporan Tahunan -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900 text-sm">Laporan Tahunan Satker</span>
                    <span class="text-[10px] bg-slate-200 text-slate-700 px-1.5 py-0.5 rounded font-bold">5 Tahun</span>
                </div>
                <p class="text-slate-500">Laporan pelaksanaan kegiatan pengadilan 5 tahun terakhir.</p>
                <div class="pt-1 flex flex-col gap-1 text-[11px]">
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Laporan Tahunan 2025 (PDF)</a>
                    <a href="#" class="text-[#056e4f] font-semibold hover:underline">📄 Arsip Lap. Tahunan 2021 - 2024 (PDF)</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Pengelolaan Keuangan DIPA (Lampiran II.A.1 No 10, 11, 12, 13) -->
    <section class="bg-slate-100 p-6 sm:p-8 rounded-2xl border border-slate-200 space-y-6">
        <div>
            <h2 class="text-xl font-extrabold text-[#056e4f]">Transparansi Anggaran DIPA & Keuangan</h2>
            <p class="text-xs text-slate-500">Publikasi Daftar Isian Pelaksanaan Anggaran (DIPA 01 & DIPA 04), LRA, dan CALK.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-xs">
            <!-- DIPA -->
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <span class="font-bold text-slate-900 text-sm">1. DIPA Satker</span>
                <p class="text-slate-500">DIPA 01 (Badan Urusan Administrasi) & DIPA 04 (Ditjen Badilag).</p>
                <a href="#" class="text-[#056e4f] font-semibold block hover:underline">📄 Unduh DIPA 2026 (PDF)</a>
            </div>

            <!-- LRA -->
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <span class="font-bold text-slate-900 text-sm">2. LRA</span>
                <p class="text-slate-500">Laporan Realisasi Anggaran per triwulan dan tahunan.</p>
                <a href="#" class="text-[#056e4f] font-semibold block hover:underline">📄 Unduh LRA Triwulan III (PDF)</a>
            </div>

            <!-- CALK -->
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <span class="font-bold text-slate-900 text-sm">3. CALK</span>
                <p class="text-slate-500">Catatan Atas Laporan Keuangan tahun berjalan.</p>
                <a href="#" class="text-[#056e4f] font-semibold block hover:underline">📄 Unduh CALK 2025 (PDF)</a>
            </div>

            <!-- RUP PBJ -->
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <span class="font-bold text-slate-900 text-sm">4. Pengadaan (PBJ)</span>
                <p class="text-slate-500">Rencana Umum Pengadaan Barang & Jasa (SiRUP).</p>
                <a href="#" class="text-[#056e4f] font-semibold block hover:underline">📄 Unduh RUP PBJ 2026 (PDF)</a>
            </div>
        </div>
    </section>

    <!-- 3. LHKPN & LHKASN Pejabat (Lampiran II.A.1 No 9 - Ikhtisar Harta Minimal 2 Tahun) -->
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-extrabold text-[#ff9900]">Laporan Harta Kekayaan Pejabat (LHKPN / LHKASN)</h2>
            <p class="text-xs text-slate-500">Kepatuhan pelaporan LHKPN pejabat struktural dan hakim minimal 2 tahun terakhir dalam bentuk Ikhtisar Kekayaan resmi KPK.</p>
        </div>

        <div class="bg-white rounded-xl shadow-xs border border-slate-200 overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#056e4f] text-white">
                    <tr>
                        <th class="py-3 px-4">Nama Pejabat</th>
                        <th class="py-3 px-4">Jabatan</th>
                        <th class="py-3 px-4">Tahun Lapor Terakhir</th>
                        <th class="py-3 px-4">Dokumen Ikhtisar Harta (Min. 2 Thn)</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Drs. H. Ahmad Fauzi, S.H., M.H.</td>
                        <td class="py-3 px-4">Ketua Pengadilan Agama</td>
                        <td class="py-3 px-4 font-bold text-emerald-800">2025 (Periodik)</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="#" class="px-2.5 py-1 bg-amber-50 text-amber-900 border border-amber-300 rounded font-semibold hover:bg-amber-100">Ikhtisar 2025 (PDF)</a>
                            <a href="#" class="px-2.5 py-1 bg-slate-100 text-slate-700 rounded font-semibold hover:bg-slate-200">Ikhtisar 2024 (PDF)</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Dra. Hj. Nurul Hidayah, M.H.</td>
                        <td class="py-3 px-4">Wakil Ketua Pengadilan</td>
                        <td class="py-3 px-4 font-bold text-emerald-800">2025 (Periodik)</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="#" class="px-2.5 py-1 bg-amber-50 text-amber-900 border border-amber-300 rounded font-semibold hover:bg-amber-100">Ikhtisar 2025 (PDF)</a>
                            <a href="#" class="px-2.5 py-1 bg-slate-100 text-slate-700 rounded font-semibold hover:bg-slate-200">Ikhtisar 2024 (PDF)</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Muhammad Ridwan, S.H.</td>
                        <td class="py-3 px-4">Panitera</td>
                        <td class="py-3 px-4 font-bold text-emerald-800">2025 (Periodik)</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="#" class="px-2.5 py-1 bg-amber-50 text-amber-900 border border-amber-300 rounded font-semibold hover:bg-amber-100">Ikhtisar 2025 (PDF)</a>
                            <a href="#" class="px-2.5 py-1 bg-slate-100 text-slate-700 rounded font-semibold hover:bg-slate-200">Ikhtisar 2024 (PDF)</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Bambang Irawan, S.E., S.H.</td>
                        <td class="py-3 px-4">Sekretaris</td>
                        <td class="py-3 px-4 font-bold text-emerald-800">2025 (Periodik)</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="#" class="px-2.5 py-1 bg-amber-50 text-amber-900 border border-amber-300 rounded font-semibold hover:bg-amber-100">Ikhtisar 2025 (PDF)</a>
                            <a href="#" class="px-2.5 py-1 bg-slate-100 text-slate-700 rounded font-semibold hover:bg-slate-200">Ikhtisar 2024 (PDF)</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
