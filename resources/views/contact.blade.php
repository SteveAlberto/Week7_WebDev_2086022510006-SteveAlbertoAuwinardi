@extends('layouts.layout')
@section('title', 'Contact')
@section('content')

    <main class="grow">
        <div class="max-w-6xl mx-auto p-4 md:p-8 mt-8 font-[sans-serif]">
            <div
                class="grid sm:grid-cols-2 items-start gap-16 p-8 mx-auto bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md">
                <div>
                    <h1 class="text-gray-800 text-3xl font-extrabold">Mari Berkolaborasi</h1>
                    <p class="text-sm text-gray-500 mt-4">Punya ide proyek, tawaran kerja, atau sekadar ingin
                        berdiskusi? Jangan ragu untuk menghubungi saya melalui form di samping atau melalui kontak di
                        bawah ini.</p>

                    <div class="mt-12">
                        <h2 class="text-gray-800 text-base font-bold">Email</h2>
                        <ul class="mt-4">
                            <li class="flex items-center">
                                <div
                                    class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#007bff"
                                        viewBox="0 0 479.058 479.058">
                                        <path
                                            d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159h389.235zM44.912 389.235c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c0 8.26-6.71 14.971-14.971 14.971H44.912z"
                                            data-original="#000000" />
                                    </svg>
                                </div>
                                <a href="mailto:salberto@ciputra.ac.id"
                                    class="text-[#007bff] text-sm ml-4 border-b border-transparent hover:border-[#007bff]">
                                    <small class="block text-gray-500">Drop a mail</small>
                                    salberto@student.ciputra.ac.id
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <form class="px-4 mt-6">
                    <div class="space-y-4 max-w-sm mx-auto">
                        <div>
                            <label for="email"
                                class="mb-2 text-slate-900 font-medium text-sm inline-block">Email</label>
                            <input type="email" id="email" name="email" placeholder="salberto@student.ciputra.ac.id"
                                required
                                class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-slate-50 w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" />
                        </div>
                        <div>
                            <label for="nama" class="mb-2 text-slate-900 font-medium text-sm inline-block">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="Steve" required
                                class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-slate-50 w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" />
                        </div>
                        <div>
                            <label for="pesan"
                                class="mb-2 text-slate-900 font-medium text-sm inline-block">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="4" placeholder="Tulis pesan Anda di sini..."
                                required
                                class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-slate-50 w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600"></textarea>
                        </div>
                        <button type="submit"
                            class="mt-2! py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer tracking-wide text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection