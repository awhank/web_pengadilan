@extends('layouts.app')

@section('title', 'Profil Pengadilan - Website Resmi Pengadilan Agama')

@section('content')
<!-- Header Page Banner -->
<div class="bg-[#056e4f] text-white py-8 px-4">
    <div class="max-w-7xl mx-auto space-y-2">
        <div class="text-xs text-emerald-200">
            <a href="{{ route('home') }}" class="hover:underline">Beranda</a> / Profil Pengadilan
        </div>
        <h1 class="text-2xl sm:text-3xl font-extrabold">Profil Lembaga Pengadilan Agama</h1>
        <p class="text-xs sm:text-sm text-emerald-100 max-w-3xl">
            Visi, Misi, Tugas Pokok dan Fungsi, Wilayah Yurisdiksi, Struktur Organisasi, dan Profil Pimpinan.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-10 space-y-12">
    <!-- 1. Visi & Misi (Lampiran II.A.2 No 1) -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Visi -->
        <div class="bg-white p-6 rounded-2xl shadow-xs border border-slate-200 space-y-3">
            <div class="inline-flex items-center gap-2 text-xs font-bold bg-emerald-50 text-[#056e4f] px-3 py-1 rounded-full uppercase">
                🌟 Visi Mahkamah Agung RI
            </div>
            <h3 class="text-lg font-bold text-slate-900">Terwujudnya Pengadilan Agama Yang Agung</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Mewujudkan badan peradilan yang mandiri, berintegritas, memberikan kepastian hukum yang adil, serta menjadi teladan pelayanan publik modern berorientasi masyarakat.
            </p>
        </div>

        <!-- Misi -->
        <div class="bg-white p-6 rounded-2xl shadow-xs border border-slate-200 space-y-3">
            <div class="inline-flex items-center gap-2 text-xs font-bold bg-amber-50 text-[#ff9900] px-3 py-1 rounded-full uppercase">
                🎯 Misi Lembaga
            </div>
            <ul class="text-xs sm:text-sm text-slate-600 space-y-2 leading-relaxed">
                <li class="flex items-start gap-2">
                    <span class="text-[#056e4f] font-bold">1.</span>
                    <span>Menjaga kemandirian dan integritas badan peradilan di lingkungan peradilan agama.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#056e4f] font-bold">2.</span>
                    <span>Memberikan pelayanan hukum yang berkeadilan, cepat, sederhana, dan berbiaya ringan.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#056e4f] font-bold">3.</span>
                    <span>Meningkatkan kualitas kepemimpinan, kompetensi aparatur, dan transparansi administrasi.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#056e4f] font-bold">4.</span>
                    <span>Meningkatkan kredibilitas dan keterbukaan informasi peradilan berbasis digital.</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- 2. Tugas Pokok dan Fungsi (Lampiran II.A.2 No 2) -->
    <section class="bg-white p-6 sm:p-8 rounded-2xl shadow-xs border border-slate-200 space-y-4">
        <h2 class="text-xl font-extrabold text-[#056e4f]">Tugas Pokok & Fungsi Pengadilan Agama</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs sm:text-sm text-slate-600 leading-relaxed">
            <div>
                <h4 class="font-bold text-slate-900 text-sm mb-2">Tugas Pokok</h4>
                <p>
                    Berdasarkan UU Nomor 7 Tahun 1989 jo. UU Nomor 3 Tahun 2006 jo. UU Nomor 50 Tahun 2009, bertugas dan berwenang memeriksa, memutus, dan menyelesaikan perkara di tingkat pertama antara orang-orang yang beragama Islam di bidang perkawinan, waris, wasiat, hibah, wakaf, zakat, infaq, shadaqah, dan ekonomi syari'ah.
                </p>
            </div>
            <div>
                <h4 class="font-bold text-slate-900 text-sm mb-2">Fungsi Utama</h4>
                <ul class="space-y-1 list-disc pl-4">
                    <li>Fungsi Mengadili (Judicial Function): Menyelesaikan sengketa perdata Islam.</li>
                    <li>Fungsi Pembinaan & Pengawasan: Pengawasan administrasi dan teknis peradilan.</li>
                    <li>Fungsi Administratif: Pengelolaan SAKIP, Keuangan DIPA, dan Kepegawaian.</li>
                    <li>Fungsi Pelayanan Publik: Keterbukaan informasi dan bantuan hukum cuma-cuma (prodeo).</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 3. Wilayah Yurisdiksi (Lampiran II.A.2 No 3) -->
    <section class="bg-slate-100 p-6 sm:p-8 rounded-2xl border border-slate-200 space-y-4">
        <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-2">
            <div>
                <h2 class="text-xl font-extrabold text-[#056e4f]">Wilayah Hukum (Yurisdiksi)</h2>
                <p class="text-xs text-slate-500">Mencakup wilayah kecamatan dalam daerah administratif hukum pengadilan.</p>
            </div>
            <span class="text-xs bg-[#ff9900] text-slate-950 font-bold px-3 py-1 rounded-full self-start">
                Total: 8 Kecamatan
            </span>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs">
            <div class="bg-white p-3 rounded-lg border border-slate-200 text-center font-semibold text-slate-800">Kec. Pengadilan Kota</div>
            <div class="bg-white p-3 rounded-lg border border-slate-200 text-center font-semibold text-slate-800">Kec. Syariah Barat</div>
            <div class="bg-white p-3 rounded-lg border border-slate-200 text-center font-semibold text-slate-800">Kec. Syariah Timur</div>
            <div class="bg-white p-3 rounded-lg border border-slate-200 text-center font-semibold text-slate-800">Kec. Keadilan Utara</div>
            <div class="bg-white p-3 rounded-lg border border-slate-200 text-center font-semibold text-slate-800">Kec. Keadilan Selatan</div>
            <div class="bg-white p-3 rounded-lg border border-slate-200 text-center font-semibold text-slate-800">Kec. Makmur Sejahtera</div>
            <div class="bg-white p-3 rounded-lg border border-slate-200 text-center font-semibold text-slate-800">Kec. Sentosa Mandiri</div>
            <div class="bg-white p-3 rounded-lg border border-slate-200 text-center font-semibold text-slate-800">Kec. Hidayah Pusat</div>
        </div>
    </section>

    <!-- 4. Struktur Organisasi & Profil Pejabat (Lampiran II.A.2 No 4 & No 10 - Staf/Honorer tidak ditampilkan sesuai SK) -->
    <section class="space-y-6">
        <div>
            <h2 class="text-xl font-extrabold text-[#056e4f]">Struktur Organisasi & Profil Pimpinan</h2>
            <p class="text-xs text-slate-500">Sesuai SK Dirjen Badilag: Menampilkan struktur pejabat struktural & fungsional (Staf dan Tenaga Honorer tidak ditampilkan).</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Ketua -->
            <div class="bg-white rounded-2xl shadow-xs border border-slate-200 p-5 text-center space-y-3">
                <div class="w-24 h-24 mx-auto rounded-full bg-emerald-100 border-4 border-[#056e4f] flex items-center justify-center text-3xl">
                    👨‍⚖️
                </div>
                <div>
                    <h3 class="font-bold text-sm text-slate-900">Drs. H. Ahmad Fauzi, S.H., M.H.</h3>
                    <p class="text-xs text-[#056e4f] font-semibold">Ketua Pengadilan Agama</p>
                    <p class="text-[11px] text-slate-400">Pembina Utama Madya (IV/d)</p>
                </div>
                <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-500 text-left space-y-1">
                    <p>🎓 Pendidikan: S2 Ilmu Hukum</p>
                    <p>📅 TMT Jabatan: 15 Januari 2024</p>
                </div>
            </div>

            <!-- Wakil Ketua -->
            <div class="bg-white rounded-2xl shadow-xs border border-slate-200 p-5 text-center space-y-3">
                <div class="w-24 h-24 mx-auto rounded-full bg-emerald-100 border-4 border-[#056e4f] flex items-center justify-center text-3xl">
                    👩‍⚖️
                </div>
                <div>
                    <h3 class="font-bold text-sm text-slate-900">Dra. Hj. Nurul Hidayah, M.H.</h3>
                    <p class="text-xs text-[#056e4f] font-semibold">Wakil Ketua Pengadilan</p>
                    <p class="text-[11px] text-slate-400">Pembina Tingkat I (IV/b)</p>
                </div>
                <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-500 text-left space-y-1">
                    <p>🎓 Pendidikan: S2 Hukum Islam</p>
                    <p>📅 TMT Jabatan: 01 Maret 2024</p>
                </div>
            </div>

            <!-- Panitera -->
            <div class="bg-white rounded-2xl shadow-xs border border-slate-200 p-5 text-center space-y-3">
                <div class="w-24 h-24 mx-auto rounded-full bg-amber-100 border-4 border-[#ff9900] flex items-center justify-center text-3xl">
                    📜
                </div>
                <div>
                    <h3 class="font-bold text-sm text-slate-900">Muhammad Ridwan, S.H.</h3>
                    <p class="text-xs text-[#ff9900] font-semibold">Panitera</p>
                    <p class="text-[11px] text-slate-400">Pembina (IV/a)</p>
                </div>
                <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-500 text-left space-y-1">
                    <p>🎓 Pendidikan: S1 Ilmu Hukum</p>
                    <p>📅 TMT Jabatan: 10 Juli 2023</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Alamat Lengkap & Foto Gedung (Lampiran II.A.2 No 5) -->
    <section class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-xs space-y-4">
        <h2 class="text-xl font-extrabold text-[#056e4f]">Alamat Kontak & Gedung Kantor</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div class="space-y-3 text-xs sm:text-sm text-slate-600">
                <div class="p-3 bg-slate-50 rounded-lg space-y-1">
                    <p><strong>Nama Jalan:</strong> Jl. Pengadilan Percontohan No. 1</p>
                    <p><strong>Desa / Kelurahan:</strong> Kelurahan Sentosa Peradilan</p>
                    <p><strong>Kecamatan:</strong> Kecamatan Pengadilan Kota</p>
                    <p><strong>Provinsi:</strong> Provinsi Wilayah Hukum Peradilan Agama</p>
                    <p><strong>Kode Pos:</strong> 12345</p>
                </div>
                <div class="space-y-1">
                    <p>📞 <strong>Nomor Telepon:</strong> (021) 555-1234 / Faks: (021) 555-1235</p>
                    <p>✉️ <strong>Email Resmi:</strong> sekretariat@pa-contoh.go.id</p>
                    <p>🌐 <strong>Domain Resmi Pemerintah:</strong> https://pa-contoh.go.id</p>
                </div>
            </div>
            <!-- Mock Foto Gedung Kantor -->
            <div class="h-64 bg-slate-800 rounded-2xl flex flex-col items-center justify-center text-white p-6 border-2 border-emerald-800 text-center">
                <span class="text-5xl mb-2">🏢</span>
                <p class="font-bold text-sm">Gedung Kantor Pengadilan Agama Kelas I-A</p>
                <p class="text-xs text-slate-400 mt-1">Dokumentasi Standar Sarana Prasarana Gedung Pelayanan Sesuai Blueprint Mahkamah Agung RI</p>
            </div>
        </div>
    </section>
</div>
@endsection
