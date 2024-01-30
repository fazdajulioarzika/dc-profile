@extends('layout.home')
@section('home')
    {{-- Layanan Section Start --}}
    <section class="text-gray-600 body-font" id="layanan">
        <div class="container px-5 py-32 lg:py-18 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-6 text-gray-900">Program Kami</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Tingkatkan keahlian dan dorong karier Anda ke
                    level berikutnya dengan program kursus IT kami! Dengan instruktur ahli, materi yang terkini, dan
                    proyek praktis, Anda akan memperoleh pengetahuan yang relevan dan keterampilan yang dibutuhkan oleh
                    industri IT saat ini.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <h1 class="text-3xl font-medium title-font mb-6 w-full p-6 text-gray-900">
                    Program Komputer
                </h1>
            </div>
            <div class="flex flex-wrap -m-4 justify-center">
                @foreach ($computer as $c)
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg hover:shadow-md hover:shadow-blue-600">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <img src="{{ asset('icon/' . $c->icon . '.svg') }}" alt="">
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">{{ $c->name }}</h2>
                            <p class="leading-relaxed text-base">{{ $c->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-wrap -m-4">
                <h1 class="text-3xl font-medium title-font mb-6 w-full p-6 text-gray-900">
                    Program Bahasa
                </h1>
            </div>
            <div class="flex flex-wrap -m-4 justify-center">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg hover:shadow-md hover:shadow-blue-600">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bahasa Jepang</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway
                            tile poke farm.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg hover:shadow-md hover:shadow-blue-600">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 16H5a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v1M9 12H4m8 8V9h8v11h-8Zm0 0H9m8-4a1 1 0 1 0-2 0 1 1 0 0 0 2 0Z" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bahasa Inggris</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway
                            tile poke farm.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg hover:shadow-md hover:shadow-blue-600">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 7h0m3.5 1.5h0m-7 0h0M7 12h0m9 4h2.7a2 2 0 0 0 1.9-1.3 9 9 0 1 0-16 2.5A9.1 9.1 0 0 0 12 21a2 2 0 0 0 2-2v-.9a2 2 0 0 1 2-2.1Z" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bahasa Korea</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway
                            tile poke farm.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg hover:shadow-md hover:shadow-blue-600">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M4.4 7.7c2 .5 2.4 2.8 3.2 3.8 1 1.4 2 1.3 3.2 2.7 1.8 2.3 1.3 5.7 1.3 6.7M20 15h-1a4 4 0 0 0-4 4v1M8.6 4c0 .8.1 1.9 1.5 2.6 1.4.7 3 .3 3 2.3 0 .3 0 2 1.9 2 2 0 2-1.7 2-2 0-.6.5-.9 1.2-.9H20m1 4a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bahasa Mandarin</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway
                            tile poke farm.</p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 my-8">
                <h1 class="sm:text-3xl text-2xl font-medium title-font  mb-6 text-blue-600">Fasilitas
                </h1>
                <ul class="text-md font-medium w-full mx-auto list-disc list-inside">
                    <li class="mb-2">Job melimpah.</li>
                    <li class="mb-2">Siswa dididik mulai dari nol.</li>
                    <li class="mb-2">
                        Gratis internet/Free hotspot area.
                    </li>
                    <li class="mb-2">
                        Disediakan asrama baik putra dan putri.
                    </li>
                    <li class="mb-2">
                        Lokasi yang strategis dan mudah dijangkau.
                    </li>
                    <li class="mb-2">
                        Makan, Kaos & Buku paket pembelajaran.
                    </li>
                    <li class="mb-2">
                        Ruang kelas yang luas, nyaman, sejuk dan ber-AC.
                    </li>
                    <li class="mb-2">
                        Bebas konsultasi dengan instruktur selama diluar kelas.
                    </li>
                    <li class="mb-2">
                        Saat praktik siswa didampingi instruktur berpengalaman.
                    </li>
                    <li class="mb-2">
                        Disediakan kendaraan jemputan gratis bagi peserta magang jepang yang datang dari luar kota.
                    </li>
                </ul>
            </div>
            <div class="flex">
                <a href="/auth/register"
                    class="inline-flex mx-auto mt-16 text-blue-600 border-2 py-2 px-8 border-blue-600 hover:text-white hover:bg-blue-600 rounded text-lg font-medium transition duration-300">Daftar
                    Sekarang</a>
            </div>
        </div>
    </section>
    {{-- Layanan Section End --}}
@endsection
