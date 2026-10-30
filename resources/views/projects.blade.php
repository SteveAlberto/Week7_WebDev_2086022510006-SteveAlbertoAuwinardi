@extends('layouts.layout')
@section('title', 'Projects')
@section('content')

    <main class="grow px-4 md:px-8 py-10">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12 text-center max-w-2xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Proyek & Keahlian</h1>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Eksplorasi dari implementasi algoritma struktur data, pemrograman berorientasi objek, perancangan UI/UX, hingga gambaran kemahiran teknis saya.
                </p>
            </div>

            <section class="bg-white p-6 md:p-8 rounded-lg shadow-sm border border-slate-200 mb-12">
                <h2 class="text-xl font-bold text-slate-900 mb-6 border-b pb-2">Keahlian Teknis & Tools</h2>
                <div class="grid md:grid-cols-2 gap-10">
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1"><span class="text-sm font-semibold text-slate-700">Java (Spring Boot / OOP)</span><span class="text-sm font-semibold text-slate-500">85%</span></div>
                            <div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1"><span class="text-sm font-semibold text-slate-700">CSS / Bootstrap / Tailwind</span><span class="text-sm font-semibold text-slate-500">80%</span></div>
                            <div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-blue-600 h-2 rounded-full" style="width: 80%"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1"><span class="text-sm font-semibold text-slate-700">HTML5</span><span class="text-sm font-semibold text-slate-500">75%</span></div>
                            <div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1"><span class="text-sm font-semibold text-slate-700">JavaScript</span><span class="text-sm font-semibold text-slate-500">75%</span></div>
                            <div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1"><span class="text-sm font-semibold text-slate-700">Python / Data Structure Logic</span><span class="text-sm font-semibold text-slate-500">75%</span></div>
                            <div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div></div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-6">
                            <h3 class="text-sm font-bold text-slate-800 mb-3">Alat Desain & Alur Kerja</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 bg-slate-50 text-slate-700 text-xs font-semibold rounded-md border border-slate-200">Figma</span>
                                <span class="px-3 py-1.5 bg-slate-50 text-slate-700 text-xs font-semibold rounded-md border border-slate-200">Canva</span>
                                <span class="px-3 py-1.5 bg-slate-50 text-slate-700 text-xs font-semibold rounded-md border border-slate-200">Git / GitHub</span>
                                <span class="px-3 py-1.5 bg-slate-50 text-slate-700 text-xs font-semibold rounded-md border border-slate-200">VS Code</span>
                                <span class="px-3 py-1.5 bg-slate-50 text-slate-700 text-xs font-semibold rounded-md border border-slate-200">MySQL</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-slate-800 mb-3">Soft Skills</h3>
                            <ul class="text-sm text-slate-600 space-y-2 list-disc list-inside">
                                <li>Pemecahan Masalah & Logika Algoritma</li>
                                <li>Kerja Sama Tim & Kepanitiaan Acara</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-xl font-bold text-slate-900 mb-6 border-b pb-2">Portofolio Karya</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] overflow-hidden flex flex-col">
                        <img src="img/partypay.jpg" alt="PartyPay App" class="w-full h-48 object-cover">
                        <div class="p-6 flex flex-col grow">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs font-semibold bg-blue-100 text-blue-700 px-2 py-1 rounded">Flutter</span>
                                <span class="text-xs font-semibold bg-gray-100 text-gray-700 px-2 py-1 rounded">Dart</span>
                            </div>
                            <h3 class="text-xl font-bold text-[#333] mb-2">PartyPay (Splitbill)</h3>
                            <p class="text-sm text-gray-500 mb-6 row">Aplikasi mobile cross-platform yang dirancang untuk mempermudah pelacakan dan pembagian pengeluaran langganan grup.</p>
                            <a href="#" class="text-center w-full py-2.5 bg-blue-600 text-white text-sm font-semibold rounded hover:bg-blue-700 transition-all">Lihat Source Code</a>
                        </div>
                    </div>
                        
                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition flex flex-col">
                        <img src="img/smarthome.png" alt="Smart Home OOP System" class="w-full h-48 object-cover border-b border-slate-100">
                        <div class="p-5 flex flex-col grow">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 px-2 py-1 rounded">Java</span>
                                <span class="text-xs font-semibold bg-gray-50 text-gray-700 border border-gray-200 px-2 py-1 rounded">OOP</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Sistem Smart Home</h3>
                            <p class="text-sm text-slate-600 mb-4 grow">Sistem simulasi perangkat rumah pintar yang mencakup fungsionalitas Thermostat, Camera, dan OfflineRelay.</p>
                            <a href="https://github.com/IMT-UC-Makassar/afl-2-case-study-smarthome-SteveAlberto.git" class="text-center w-full py-2.5 bg-blue-600 text-white text-sm font-semibold rounded hover:bg-blue-700 transition-all">Lihat Source Code</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition flex flex-col">
                        <img src="img/itemmlbb.png" alt="MLBB Item Tree" class="w-full h-48 object-cover border-b border-slate-100">
                        <div class="p-5 flex flex-col grow">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 px-2 py-1 rounded">Java</span>
                                <span class="text-xs font-semibold bg-gray-50 text-gray-700 border border-gray-200 px-2 py-1 rounded">Tree Structure</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">MLBB Item Path Finder</h3>
                            <p class="text-sm text-slate-600 mb-4 grow">Memetakan hubungan antara item mentah hingga menjadi item akhir di game Mobile Legends secara hierarkis menggunakan struktur data Tree.</p>
                            <a href="https://github.com/SteveAlberto/DS-w9-SteveAlbertoAuwinardi-2086022510006-Tree.git" class="text-center w-full py-2.5 bg-blue-600 text-white text-sm font-semibold rounded hover:bg-blue-700 transition-all">Lihat Source Code</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition flex flex-col">
                        <img src="img/towerofhanoi.png" alt="Tower of Hanoi" class="w-full h-48 object-cover border-b border-slate-100">
                        <div class="p-5 flex flex-col grow">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 px-2 py-1 rounded">Java</span>
                                <span class="text-xs font-semibold bg-gray-50 text-gray-700 border border-gray-200 px-2 py-1 rounded">Stack</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Bicolor Tower of Hanoi</h3>
                            <p class="text-sm text-slate-600 mb-4 grow">Penyelesaian studi kasus Tower of Hanoi dengan 6 ring berwarna acak menggunakan struktur data Stack.</p>
                            <a href="https://github.com/IMT-UC-Makassar/ds-w8-afl2-tower-of-hanoi-SteveAlberto.git" class="text-center w-full py-2.5 bg-blue-600 text-white text-sm font-semibold rounded hover:bg-blue-700 transition-all">Lihat Source Code</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition flex flex-col">
                        <img src="img/OOODriver.png" alt="OOO Driver" class="w-full h-48 object-cover border-b border-slate-100">
                        <div class="p-5 flex flex-col grow">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 px-2 py-1 rounded">Java</span>
                                <span class="text-xs font-semibold bg-gray-50 text-gray-700 border border-gray-200 px-2 py-1 rounded">OOP</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Simulator OOO Driver</h3>
                            <p class="text-sm text-slate-600 grow">Pemodelan sistem transformasi sabuk Kamen Rider OOO berbasis Java untuk mendalami interaksi kelas dan exception handling.</p>
                            <a href="https://github.com/SteveAlberto/AP-w9-Group8-GroupAssignment.git" class="text-center w-full py-2.5 bg-blue-600 text-white text-sm font-semibold rounded hover:bg-blue-700 transition-all">Lihat Source Code</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

@endsection