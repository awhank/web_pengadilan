@extends('layouts.app')

@section('title', 'Layanan Hukum (Kepaniteraan) - Website Resmi Pengadilan Agama')

@section('content')
<!-- Header Page Banner -->
<div class="bg-[#056e4f] text-white py-8 px-4">
    <div class="max-w-7xl mx-auto space-y-2">
        <div class="text-xs text-emerald-200">
            <a href="{{ route('home') }}" class="hover:underline">Beranda</a> / Layanan Hukum
        </div>
        <h1 class="text-2xl sm:text-3xl font-extrabold">Layanan Kepaniteraan & Teknis Perkara</h1>
        <p class="text-xs sm:text-sm text-emerald-100 max-w-3xl">
            Sistem Informasi Penelusuran Perkara (SIPP), Agenda Sidang, Panjar Biaya, Panggilan Ghaib, dan e-Court.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-10 space-y-12">
    <!-- 1. SIPP & e-Court Portals (Lampiran II.A.1 No 3 & Lampiran II.A.2 No 6) -->
    <section id="sipp" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card SIPP Satker -->
        <div class="bg-white p-6 rounded-2xl shadow-xs border-l-4 border-[#056e4f] space-y-3">
            <div class="flex items-center space-x-3">
                <span class="text-3xl">🔍</span>
                <div>
                    <h3 class="font-bold text-base text-slate-900">Sistem Informasi Penelusuran Perkara (SIPP)</h3>
                    <p class="text-xs text-slate-500">Aplikasi Resmi Penelusuran Status & Riwayat Perkara</p>
                </div>
            </div>
            <p class="text-xs text-slate-600 leading-relaxed">
                Pantau jalannya perkara, penetapan majelis hakim, panitera pengganti, jadwal sidang, penundaan, serta amar putusan secara transparan melalui SIPP Web Pengadilan.
            </p>
            <div class="pt-2 flex gap-3">
                <a href="#" class="px-4 py-2 bg-[#056e4f] text-white rounded-lg text-xs font-semibold hover:bg-emerald-800 transition">
                    Buka SIPP Web Satker →
                </a>
                <a href="https://banding.mahkamahagung.go.id" target="_blank" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg text-xs font-medium hover:bg-slate-200 transition">
                    SIPP Banding PTA ↗
                </a>
            </div>
        </div>

        <!-- Card e-Court MA RI -->
        <div class="bg-white p-6 rounded-2xl shadow-xs border-l-4 border-[#ff9900] space-y-3">
            <div class="flex items-center space-x-3">
                <span class="text-3xl">💻</span>
                <div>
                    <h3 class="font-bold text-base text-slate-900">e-Court Mahkamah Agung RI</h3>
                    <p class="text-xs text-slate-500">Layanan Peradilan Elektronik Modern (Perma No. 1/2019)</p>
                </div>
            </div>
            <p class="text-xs text-slate-600 leading-relaxed">
                Layanan pendaftaran perkara elektronik (e-Filing), pembayaran panjar biaya secara elektronik (e-Payment), pemanggilan sidang elektronik (e-Summons), dan persidangan elektronik (e-Litigation).
            </p>
            <div class="pt-2 flex gap-3">
                <a href="https://ecourt.mahkamahagung.go.id" target="_blank" class="px-4 py-2 bg-[#ff9900] text-slate-950 font-bold rounded-lg text-xs hover:bg-amber-500 transition">
                    Masuk Portal e-Court ↗
                </a>
                <a href="https://putusan3.mahkamahagung.go.id" target="_blank" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg text-xs font-medium hover:bg-slate-200 transition">
                    Direktori Putusan MA ↗
                </a>
            </div>
        </div>
    </section>

    <!-- 2. Prosedur Berperkara (Lampiran II.A.2 No 8) -->
    <section class="bg-white p-6 sm:p-8 rounded-2xl shadow-xs border border-slate-200 space-y-6">
        <div>
            <h2 class="text-xl font-extrabold text-[#056e4f]">Standar Prosedur Berperkara</h2>
            <p class="text-xs text-slate-500">Tahapan dan panduan administrasi perkara peradilan agama.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-xs">
            <!-- 1. Tk Pertama -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <span class="font-bold text-slate-900 text-sm flex items-center gap-1.5 text-[#056e4f]">
                    1. Tingkat Pertama
                </span>
                <p class="text-slate-600">Pendaftaran gugatan/permohonan di PTSP atau e-Court, pembayaran panjar biaya, penetapan majelis hakim, pemanggilan para pihak, sidang perdamaian/mediasi, hingga pembacaan putusan.</p>
            </div>
            <!-- 2. Banding -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <span class="font-bold text-slate-900 text-sm flex items-center gap-1.5 text-[#056e4f]">
                    2. Tingkat Banding
                </span>
                <p class="text-slate-600">Pengajuan permohonan banding dalam tenggang waktu 14 hari setelah putusan diberitahukan, pembayaran panjar banding, memori banding, hingga pengiriman berkas ke PTA.</p>
            </div>
            <!-- 3. Kasasi -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <span class="font-bold text-slate-900 text-sm flex items-center gap-1.5 text-[#056e4f]">
                    3. Tingkat Kasasi
                </span>
                <p class="text-slate-600">Permohonan diajukan dalam waktu 14 hari sejak putusan banding diterima, penyerahan memori kasasi dalam 14 hari, dan pemeriksaan oleh Mahkamah Agung RI.</p>
            </div>
            <!-- 4. Peninjauan Kembali (PK) -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <span class="font-bold text-slate-900 text-sm flex items-center gap-1.5 text-[#056e4f]">
                    4. Peninjauan Kembali (PK)
                </span>
                <p class="text-slate-600">Upaya hukum luar biasa berdasarkan alasan adanya novum (bukti baru) yang sah atau adanya putusan yang saling bertentangan.</p>
            </div>
            <!-- 5. Gugatan Sederhana -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <span class="font-bold text-slate-900 text-sm flex items-center gap-1.5 text-[#056e4f]">
                    5. Gugatan Sederhana (Small Claim)
                </span>
                <p class="text-slate-600">Penyelesaian sengketa ekonomi syariah dengan nilai materiil maksimal Rp 500.000.000,- yang diperiksa hakim tunggal dan diselesaikan maksimal 25 hari kerja.</p>
            </div>
            <!-- 6. Pengambilan Produk Pengadilan -->
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 space-y-2">
                <span class="font-bold text-slate-900 text-sm flex items-center gap-1.5 text-[#056e4f]">
                    6. Pengambilan Akta Cerai & Putusan
                </span>
                <p class="text-slate-600">Pengambilan Akta Cerai dan Salinan Putusan/Penetapan di Meja Produk Pengadilan dengan membawa KTP asli, nomor perkara, dan bukti pembayaran yang sah.</p>
            </div>
        </div>
    </section>

    <!-- 3. Biaya Panjar Perkara & SK Radius (Lampiran II.A.1 No 7, 8 & Lampiran II.A.2 No 9) -->
    <section id="panjar" class="bg-slate-100 p-6 sm:p-8 rounded-2xl border border-slate-200 space-y-6">
        <div>
            <h2 class="text-xl font-extrabold text-[#056e4f]">Panjar Biaya Perkara & SK Radius</h2>
            <p class="text-xs text-slate-500">Transparansi tarif resmi biaya pemanggilan para pihak berdasarkan Surat Keputusan Ketua Pengadilan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900">Radius I (Dekat)</span>
                    <span class="font-extrabold text-[#056e4f] text-sm">Rp 75.000 / Pgl</span>
                </div>
                <p class="text-slate-500">Wilayah kelurahan dalam radius 0 - 5 km dari gedung kantor pengadilan.</p>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900">Radius II (Sedang)</span>
                    <span class="font-extrabold text-[#056e4f] text-sm">Rp 100.000 / Pgl</span>
                </div>
                <p class="text-slate-500">Wilayah kelurahan/desa dalam radius 5 - 15 km dari gedung kantor pengadilan.</p>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs space-y-2">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-900">Radius III (Jauh)</span>
                    <span class="font-extrabold text-[#056e4f] text-sm">Rp 150.000 / Pgl</span>
                </div>
                <p class="text-slate-500">Wilayah pelosok/perbatasan dalam radius > 15 km atau akses geografis sulit.</p>
            </div>
        </div>

        <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-3">
            <div class="text-xs">
                <p class="font-bold text-slate-800">Dokumen Resmi SK Radius Biaya Pemanggilan</p>
                <p class="text-slate-500">Nomor: W1-A/SK.KPA/HK.05/I/2026 tanggal 2 Januari 2026</p>
            </div>
            <a href="#" class="px-4 py-2 bg-[#056e4f] text-white rounded-lg text-xs font-semibold hover:bg-emerald-800 transition">
                📄 Unduh SK Radius Lengkap (PDF)
            </a>
        </div>
    </section>

    <!-- 4. Panggilan Ghaib Lengkap (Lampiran II.A.1 No 6 - Indikator Wajib) -->
    <section id="ghaib" class="space-y-4">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-xl font-extrabold text-[#ff9900]">Pengumuman Panggilan Ghaib</h2>
                <p class="text-xs text-slate-500">Daftar pemanggilan para pihak yang tidak diketahui tempat tinggalnya di seluruh wilayah Republik Indonesia.</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-xs border border-slate-200 overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#056e4f] text-white">
                    <tr>
                        <th class="py-3 px-4">Nama Pihak Tergugat/Termohon</th>
                        <th class="py-3 px-4">Nomor Perkara</th>
                        <th class="py-3 px-4">Tanggal Sidang</th>
                        <th class="py-3 px-4">Tautan Dokumen Relaas</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Budi Santoso bin Suparman</td>
                        <td class="py-3 px-4 text-emerald-800 font-medium">108/Pdt.G/2026/PA.Cth</td>
                        <td class="py-3 px-4">08 Desember 2026</td>
                        <td class="py-3 px-4">
                            <a href="#" class="px-3 py-1 bg-amber-50 text-amber-900 border border-amber-300 rounded font-bold hover:bg-amber-100 transition">
                                📥 Unduh Relaas (PDF)
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Indah Permata binti Slamet</td>
                        <td class="py-3 px-4 text-emerald-800 font-medium">114/Pdt.G/2026/PA.Cth</td>
                        <td class="py-3 px-4">12 Desember 2026</td>
                        <td class="py-3 px-4">
                            <a href="#" class="px-3 py-1 bg-amber-50 text-amber-900 border border-amber-300 rounded font-bold hover:bg-amber-100 transition">
                                📥 Unduh Relaas (PDF)
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 font-semibold text-slate-900">Rahmat Hidayat bin Abdullah</td>
                        <td class="py-3 px-4 text-emerald-800 font-medium">120/Pdt.G/2026/PA.Cth</td>
                        <td class="py-3 px-4">18 Desember 2026</td>
                        <td class="py-3 px-4">
                            <a href="#" class="px-3 py-1 bg-amber-50 text-amber-900 border border-amber-300 rounded font-bold hover:bg-amber-100 transition">
                                📥 Unduh Relaas (PDF)
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- 5. Hak Bantuan Hukum / Prodeo & Posbakum (Lampiran II.A.1 No 1) -->
    <section id="prodeo" class="bg-emerald-50 border border-emerald-200 rounded-2xl p-6 sm:p-8 space-y-4">
        <div class="flex items-center space-x-3">
            <span class="text-3xl">🤝</span>
            <div>
                <h2 class="text-xl font-extrabold text-[#056e4f]">Hak Pembebasan Biaya Perkara (Prodeo) & Posbakum</h2>
                <p class="text-xs text-emerald-800 font-medium">Bagi masyarakat tidak mampu secara ekonomi, seluruh biaya perkara ditanggung DIPA negara (Rp 0,-).</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs sm:text-sm text-slate-700">
            <div class="space-y-2">
                <h4 class="font-bold text-slate-900">Syarat Pengajuan Prodeo:</h4>
                <ul class="list-disc pl-4 space-y-1">
                    <li>Surat Keterangan Tidak Mampu (SKTM) dari Kelurahan/Desa setempat.</li>
                    <li>Atau Kartu Perlindungan Sosial (KPS, KIP, PKH, BPNT).</li>
                    <li>Mengisi formulir permohonan beracara secara cuma-cuma di meja POSBAKUM PTSP.</li>
                </ul>
            </div>
            <div class="space-y-2">
                <h4 class="font-bold text-slate-900">Layanan Pos Bantuan Hukum (Posbakum):</h4>
                <p class="leading-relaxed">
                    Tersedia bantuan konsultasi hukum, pembuatan surat gugatan/permohonan secara gratis oleh advokat piket di ruang Posbakum Pengadilan.
                </p>
            </div>
        </div>
    </section>
</div>
@endsection
