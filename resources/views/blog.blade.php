@extends('layouts.layout')
@section('title', 'Blog')
@section('content')

    <main class="grow px-4 md:px-8 py-10">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-sm border border-slate-200">
            <div class="mb-8 border-b pb-4">
                <span class="text-xs font-semibold bg-blue-100 text-blue-700 px-2.5 py-1 rounded">Web Development</span>
                <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-4 mb-2">Mengenal Tailwind CSS: Utility-First Framework untuk Desain Modern</h1>
                <p class="text-sm text-slate-500">Dipublikasikan oleh Steve Alberto Auwinardi | 2026</p>
            </div>

            <div class="space-y-6 text-slate-700 text-sm md:text-base leading-relaxed">
                <h2 class="text-2xl font-bold text-slate-900 mt-6">Apa itu Tailwind CSS?</h2>
                <article>
                    Tailwind CSS adalah sebuah <em>utility-first CSS framework</em> yang menyediakan kelas-kelas utilitas siap pakai (seperti <code>flex</code>, <code>pt-4</code>, <code>text-center</code>, dan <code>bg-blue-600</code>). Berbeda dengan framework tradisional seperti Bootstrap yang menyediakan komponen siap pakai (misalnya tombol atau card dengan desain bawaan), Tailwind memberikan kebebasan penuh untuk merancang antarmuka kustom langsung di dalam markup HTML.
                </article>

                <h2 class="text-2xl font-bold text-slate-900 mt-6">Keunggulan Menggunakan Tailwind CSS</h2>
                <ul class="list-disc list-inside space-y-2 pl-2">
                    <li><strong>Kecepatan Pengembangan:</strong> Tidak perlu bolak-balik menulis file CSS terpisah untuk memberikan styling sederhana.</li>
                    <li><strong>Kustomisasi Tanpa Batas:</strong> Sangat mudah mengatur ukuran, warna, dan jarak secara presisi menggunakan kelas utilitas yang disediakan.</li>
                    <li><strong>Ukuran File Kecil (Optimized):</strong> Melalui fitur Purge/JIT (Just-In-Time), Tailwind hanya mengompilasi kelas CSS yang benar-benar digunakan pada kode proyek kita.</li>
                    <li><strong>Responsive Design yang Mudah:</strong> Cukup menambahkan prefiks ukuran layar seperti <code>md:</code> atau <code>lg:</code> pada kelas utilitas.</li>
                </ul>

                <h2 class="text-2xl font-bold text-slate-900 mt-6">Kesimpulan</h2>
                <article>
                    Bagi pengembang web modern, terutama dalam membangun portofolio atau aplikasi seperti yang saya kerjakan di Universitas Ciputra, Tailwind CSS menawarkan efisiensi tinggi serta konsistensi desain yang sangat baik.
                </article>
            </div>
        </div>
    </main>

@endsection