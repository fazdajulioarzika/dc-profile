<header class="body-font bg-white fixed top-0 w-full">
    <div class="kontak">
        <ul class="flex bg-blue-600 text-sm font-semibold ps-4 text-white">
            <li class="py-1 px-3"><a href="https://wa.me/6281717257287" target="_blank"><i class="fas fa-phone me-1"></i>
                    081717257287</a></li>
            <li class="py-1 px-3"><a href="mailto:lpkdewacomputer@gmail.com"><i
                        class="fas fa-envelope me-1"></i>dewacomputer@gmail.com</a>
            <li class="py-1 px-3"><a
                    href="https://www.instagram.com/dewacomp_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    target="_blank"><i class="fab fa-instagram me-1"></i>dewacomp_</a>
            </li>
        </ul>
    </div>
    <div class="w-full mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center bg-white">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="{{ asset('img/logo.png') }}" alt="" width="40">
            <span class="ml-3 text-xl font-bold">LPK Dewa Computer</span>
        </a>
        <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line origin-top-left transition duration-300"></span>
            <span class="hamburger-line transition duration-300"></span>
            <span class="hamburger-line origin-bottom-left transition duration-300"></span>
        </button>
        <nav id="nav-menu"
            class="md:ml-auto lg:block lg:static hidden fixed flex-wrap text-base font-semibold bg-white z-[9999] p-3 shadow-lg right-4 top-20 rounded-md lg:max-w-full lg:shadow-none lg:p-0 lg:rounded-none">
            <ul class="block lg:flex">
                <li class="group my-2 lg:my-0">
                    <a href="/"
                        class="border-b-2 p-0.5 border-white hover:border-violet-700 hover:text-violet-700 mr-5 transition duration-500 {{ $active == 'beranda' ? 'text-blue-600 border-indigo-600' : '' }}">Beranda</a>
                </li>
                <li class="group my-2 lg:my-0">
                    <a href="/tentang"
                        class="border-b-2 p-0.5 border-white hover:border-violet-700 hover:text-violet-700 mr-5 transition duration-500 {{ $active == 'tentang' ? 'text-blue-600 border-indigo-600' : '' }}">Tentang
                        Kami</a>
                </li>
                <li class="group my-2 lg:my-0">
                    <a href="/layanan"
                        class="border-b-2 p-0.5 border-white hover:border-violet-700 hover:text-violet-700 mr-5 transition duration-500 {{ $active == 'service' ? 'text-blue-600 border-indigo-600' : '' }}">Layanan</a>
                </li>
                <li class="group my-2 lg:my-0">
                    <a href="/goals"
                        class="border-b-2 p-0.5 border-white hover:border-violet-700 hover:text-violet-700 mr-5 transition duration-500 {{ $active == 'goals' ? 'text-blue-600 border-indigo-600' : '' }}">Visi
                        &
                        Misi</a>
                </li>
                <li class="group my-2 lg:my-0">
                    <a href="/"
                        class="border-b-2 p-0.5 border-white hover:border-violet-700 hover:text-violet-700 mr-5 transition duration-500">Tim
                        Kami</a>
                </li>
                <li class="group my-2 lg:my-0">
                    <a href="/"
                        class="border-b-2 p-0.5 border-white hover:border-violet-700 hover:text-violet-700 mr-5 transition duration-500">Blog</a>
                </li>
                <li class="group my-2 lg:my-0">
                    <a href="/"
                        class="border-b-2 p-0.5 border-white hover:border-violet-700 hover:text-violet-700 mr-5 transition duration-500">Contact</a>
                </li>
                <li class="group my-2 lg:my-0">
                    <a href="/auth/login"
                        class="flex w-full items-center bg-blue-600 border-0 py-1 px-3 focus:outline-none hover:bg-blue-700 rounded text-base lg:font-semibold text-white mt-4 md:mt-2 lg:mt-0">Masuk
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
