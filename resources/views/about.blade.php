@extends('layouts.layout')
@section('title', 'About')
@section('content')

    <main class="grow px-4 md:px-8 py-10">
        <div class="max-w-6xl mx-auto grid md:grid-cols-12 gap-8">
            
            <div class="md:col-span-4">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                    <img src="img/steve.jpg" alt="Steve" class="w-full rounded-md object-cover">
                    <h3 class="text-xl font-bold mt-4 text-slate-900">Steve Alberto Auwinardi</h3>
                    <p class="text-blue-600 text-sm font-medium">Informatics Student & Tech Explorer</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="px-2 py-1 text-xs border rounded text-slate-700 bg-gray-50">IMT Student</span>
                        <span class="px-2 py-1 text-xs border rounded text-slate-700 bg-gray-50">Logic Thinker</span>
                        <span class="px-2 py-1 text-xs border rounded text-slate-700 bg-gray-50">Organizer</span>
                    </div>
                </div>
            </div>

            <div class="md:col-span-8 space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                    <h4 class="text-lg font-bold text-slate-900 border-b pb-2">Profil Saya</h4>
                    <p class="text-slate-600 mt-4 text-sm leading-relaxed">
                        Halo! Saya <strong>Steve Alberto Auwinardi</strong>, mahasiswa Informatika (IMT) yang antusias dalam mengeksplorasi logika pemrograman dan struktur data. Sebagai mahasiswa, saya fokus membangun pondasi teknis yang kuat melalui berbagai studi kasus teknis yang menantang.
                    </p>
                    <p class="text-slate-600 mt-2 text-sm leading-relaxed">
                        Di luar ranah coding, saya adalah pribadi yang sangat aktif dalam kegiatan kemahasiswaan dan organisasi. Saya percaya bahwa menjadi seorang developer tidak hanya soal kode, tapi juga soal kepemimpinan, kerja sama tim, dan kemampuan manajemen waktu.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm border border-slate-200">
                    <h4 class="text-lg font-bold text-slate-900 border-b pb-2">Pendidikan & Aktivitas</h4>
                    
                    <div class="mt-4 border-l-2 border-blue-600 pl-4">
                        <h6 class="font-bold text-slate-900">Universitas Ciputra Makassar</h6>
                        <p class="text-xs text-slate-500">Sarjana Informatika (IMT) | 2025 - Sekarang</p>
                        <p class="text-sm text-slate-600 mt-1">Aktif mengembangkan solusi berbasis logika melalui tugas akademik dan berpartisipasi dalam pengembangan ekosistem mahasiswa.</p>
                    </div>

                    <div class="mt-6 border-l-2 border-indigo-500 pl-4">
                        <h6 class="font-bold text-slate-900">Infinity (Organisasi Angkatan)</h6>
                        <p class="text-xs text-slate-500">Divisi Event</p>
                        <p class="text-sm text-slate-600 mt-1">Bertanggung jawab dalam mengatur dan memastikan seluruh acara angkatan berjalan dengan baik dan terstruktur.</p>
                    </div>

                    <div class="mt-6 border-l-2 border-teal-500 pl-4">
                        <h6 class="font-bold text-slate-900">Entrance (Bazar & Event)</h6>
                        <p class="text-xs text-slate-500">Secure Rescue Cleaning (SRC)</p>
                        <p class="text-sm text-slate-600 mt-1">Bertugas menjaga keamanan, kebersihan, dan keselamatan bagi total 30.000 pengunjung selama 4 hari acara berlangsung.</p>
                    </div>

                    <div class="mt-6 border-l-2 border-rose-500 pl-4">
                        <h6 class="font-bold text-slate-900">O-Week (Masa Pengenalan Kampus)</h6>
                        <p class="text-xs text-slate-500">Rescue & Health Department (RHD)</p>
                        <p class="text-sm text-slate-600 mt-1">Memastikan dan menjaga keselamatan serta kesehatan mahasiswa baru selama rangkaian acara O-Week yang berlangsung selama 6 hari.</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

@endsection