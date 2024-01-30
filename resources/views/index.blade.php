@extends('layout.home')
@section('home')
    {{-- hero section --}}
    <section class="text-gray-600 body-font" id="hero">
        <div class="container mx-auto flex px-5 my-10 md:my-16 py-24 md:flex-row flex-col items-center ">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center toright">
                <h1 class=" sm:text-4xl text-3xl mb-1 font-medium text-gray-900">Lembaga Pelatihan Kerja
                </h1>
                <span class="text-blue-600 runtext sm:text-4xl text-3xl mb-4 font-medium">|</span>
                <p class="mb-8 leading-relaxed">LPK - LKP Dewa Computer merupakan lembaga pelatihan kerja resmi binaan
                    pemerintah republik indonesia yang berhak membimbing, membina, mengeluarkan sertifikat kompetensi serta
                    merekomendasikan calon tenaga kerja berkerja di dalam negeri maupun di luar negeri</p>
                <div class="flex justify-center">
                    <a href="/auth/register" target="_blank"
                        class="inline-flex text-white bg-blue-600 border-0 py-2 px-6 focus:outline-none hover:bg-blue-700 rounded text-lg">Daftar</a>
                    <button
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Hubungi
                        Kami</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 down">


                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/carousel2.jpg') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/carousel3.jpg') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/carousel4.jpg') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    {{-- end hero section --}}
    {{-- Our Graduate section --}}
    <section class="text-gray-600 body-font pb-8 bg-gradient-to-r from-blue-600 to-cyan-300 via-blue-200 " id="lulusan">

        <div class="flex flex-wrap  justify-center px-5 py-10 mx-auto">
            <div class="flex w-full mb-4 flex-col items-center text-center">
                <h1 class="text-2xl lg:text-3xl font-medium title-font m-2 text-white"
                    style="
                text-shadow: 2px 2px 4px rgb(0, 0, 0);">
                    Umpan Balik
                </h1>
            </div>
        </div>
        <div class="swiper
                    w-full h-full mySwiper">
            <div class="flex flex-nowrap swiper-wrapper">
                <div class="px-4 min-h-max flex swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-lg mb-14 bg-gray-100 p-8">
                        <div class="flex items-center">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                        </div>
                        <h2 class="flex text-gray-900 text-lg title-font font-medium">Reni Revianti</h2>
                        <p class="flex mb-6 text-sm text-gray-500">Kecamatan Karanganyar</p>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-sm">Saya sangat senang & mengucapkan terima kasih
                                sebesar-besarnya pada LPK Dewa yang telah membawa perubahan hidup saya dari buta
                                sama sekali
                                masalah bahasa jepang sekarang saya bisa menguasai bahasa jepang dengan lebih baik,
                                berkat
                                kursus bahasa jepang di LPK Dewa saya sudah bekerja dan tidak dicemooh lagi sama
                                saudara
                                saya yang lain.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-4 min-h-max flex swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-lg mb-14 bg-gray-100 p-8">
                        <div class="flex items-center">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                        </div>
                        <h2 class="flex text-gray-900 text-lg title-font font-medium">Rony Patar</h2>
                        <p class="flex mb-6 text-sm text-gray-500">Kecamatan Kajen</p>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-sm">Dulu sewaktu saya lulus dari SMA saya iseng-iseng
                                ikut kursus
                                di LPK Dewa Computer sambil mengisi kekosongan waktu, ternyata...WOW... yang ngajar
                                di LPK
                                Dewa Computer profesional...ramah lagi...sudah biayanya murah, ruangnya nyaman,
                                ditambah
                                pengajarnya kalem...lembut dan sabar, saya jadi semangat untuk kursus komputer, dan
                                apa yang
                                terjadi??? ternyata kata simak benar,lulusan dari LPK Dewa benar-benar dicari oleh
                                banyak
                                instansi. Terimakasih LPK dewa Computer saya sekarang sudah kerja dibagian operator
                                komputer.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-4 min-h-max flex swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-lg mb-14 bg-gray-100 p-8">
                        <div class="flex items-center">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                        </div>
                        <h2 class="flex text-gray-900 text-lg title-font font-medium">Anis Marsella</h2>
                        <p class="flex mb-6 text-sm text-gray-500">Kecamatan Kedungwuni</p>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-sm">Setelah saya mengikuti kursus komputer di LPK Dewa Computer
                                ternyata tidak sia-sia, karena setelah 2 minggu saya dinyatakan layak lulus, sekarang saya
                                sudah bekerja di Alfamart Depok Jakarta sebagai Kasir. Alhamdulillah... Saya kerja!! Ayo
                                ikutin jejak sukses saya...</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-4 min-h-max flex swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-lg mb-14 bg-gray-100 p-8">
                        <div class="flex items-center">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                        </div>
                        <h2 class="flex text-gray-900 text-lg title-font font-medium">Fredy Sanyoto</h2>
                        <p class="flex mb-6 text-sm text-gray-500">Kecamatan Karanganyar</p>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-sm"> Tadinya saya ragu kursus komputer di LPK Dewa
                                Computer,
                                ternyata lihat lulusannya cepat mendapat pekerjaan maka saya cari hutangan untuk
                                bisa kursus
                                di LPK Dewa, eh...ternyata benar... setelah saya dinyatakan layak lulus, saya
                                mencoba
                                melamar kerja menjadi tenaga administrasi di sekolah... Ya Tuhan saya langsung
                                diterima...
                                saya berfikir kenapa tidak kemarin-kemarin ya... kursus di LPK Dewa Computer, tau
                                gini gue
                                tidak cari hutangan... udah diajarin dengan benar, lulus langsung kerja lagi.
                                Terimakasih
                                Dewa Computer.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    {{-- end Our Graduate section --}}

    {{-- partner section --}}
    <section id="lulusan" class="body-font mb-8 bg-cover bg-fixed bg-center bg-no-repeat"
        style="background-image: url({{ asset('img/parallax-picsay.jpg') }});">

        <div class="flex flex-wrap  justify-center px-5 py-10 mx-auto">
            <div class="flex w-full mb-1 flex-col items-center text-center">
                <h1 class="text-2xl lg:text-3xl font-bold m-2 text-transparent text-white bg-clip-text"
                    style="
                    text-shadow: 2px 2px 4px rgb(26, 40, 231);
                ">
                    Mitra Kami
                </h1>
            </div>
        </div>
        <div class="flex flex-wrap w-full pb-10 items-center justify-center text-white">
            <div class="w-1/5 p-4">
                <img src="{{ asset('img/tutwurihandayani.png') }}" alt="" width="200">
            </div>
            <div class="w-1/5 p-4">
                <img src="{{ asset('img/jawatengah.png') }}" alt="" width="200">
            </div>
            <div class="w-1/5 p-4">
                <img src="{{ asset('img/dewanusantara.png') }}" alt="" width="200">
            </div>
            <div class="w-1/5 p-4">
                <img src="{{ asset('img/pekalongan.svg') }}" alt="" width="180">
            </div>
            <div class="w-1/5 p-4">
                <img src="{{ asset('img/kemnaker.png') }}" alt="" width="200">
            </div>
        </div>

    </section>
    {{-- end partner section --}}

    <section id="diskusi">
        <div class="flex p-8 justify-center">
            <div class="w-full p-2 lg:w-2/3">
                <div id="disqus_thread"></div>
            </div>
        </div>
    </section>
@endsection
