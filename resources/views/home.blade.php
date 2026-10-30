@extends('layouts.layout')
@section('title', 'Home')
@section('content')

    <main class="grow">
        <section class="px-4 md:px-8 py-12 bg-gray-50">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 items-center gap-10">
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                        Hello, Saya <span class="text-blue-600">Steve Alberto Auwinardi</span>
                    </h1>
                    <p class="mt-4 text-base text-slate-600 leading-relaxed">
                        Mahasiswa Informatika (IMT) di Universitas Ciputra Makassar. Saya antusias dalam mengeksplorasi
                        logika pemrograman, struktur data, dan pengembangan web.
                    </p>
                    <div class="mt-8 flex gap-4">
                        <a href="/projects"
                            class="px-5 py-2.5 bg-blue-600 text-white text-sm font-semibold rounded-md hover:bg-blue-700 transition">Lihat
                            Karya Saya</a>
                        <a href="/about"
                            class="px-5 py-2.5 bg-white text-slate-800 border border-slate-300 text-sm font-semibold rounded-md hover:bg-gray-100 transition">Tentang
                            Saya</a>
                    </div>
                </div>
                <div class="text-center">
                    <img src="img/steve.jpg" alt="Steve Alberto"
                        class="w-200 max-w-sm mx-auto rounded-2xl shadow-xl object-cover" />
                </div>
            </div>
        </section>

        <section class="px-4 md:px-8 py-12">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-2xl font-bold text-slate-900 mb-8 border-b pb-2">Proyek Terkini</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white border border-slate-200 p-6 rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="text-xs font-semibold bg-blue-100 text-blue-700 px-2 py-1 rounded">Java /
                            OOP</span>
                        <h3 class="mt-4 text-lg font-bold text-slate-900">PartyPay (Splitbill)</h3>
                        <p class="mt-2 text-sm text-slate-600">Aplikasi mobile untuk mempermudah pelacakan dan pembagian
                            pengeluaran langganan grup.</p>
                    </div>
                    <div class="bg-white border border-slate-200 p-6 rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="text-xs font-semibold bg-green-100 text-green-700 px-2 py-1 rounded">Struktur
                            Data</span>
                        <h3 class="mt-4 text-lg font-bold text-slate-900">MLBB Path Finder</h3>
                        <p class="mt-2 text-sm text-slate-600">Implementasi struktur data Tree untuk pemetaan hierarki
                            item game.</p>
                    </div>
                    <div class="bg-white border border-slate-200 p-6 rounded-lg shadow-sm hover:shadow-md transition">
                        <span
                            class="text-xs font-semibold bg-purple-100 text-purple-700 px-2 py-1 rounded">Algoritma</span>
                        <h3 class="mt-4 text-lg font-bold text-slate-900">Tower of Hanoi</h3>
                        <p class="mt-2 text-sm text-slate-600">Penyelesaian kasus Bicolor Tower of Hanoi menggunakan
                            Stack.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection