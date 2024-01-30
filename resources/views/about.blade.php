@extends('layout.home')
@section('home')
    <!-- About Section Start -->
    <section id="tentang" class="py-24">
        <div class="mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full px-4 my-8">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font text-center mb-6 text-gray-900">Tentang Kami
                    </h1>
                </div>
                <div class="w-full p-4 mt-10 mb-10 lg:w-1/2">
                    <h2 class="font-bold text-dark text-center lg:text-left text-2xl mb-5 hover:text-primary lg:text-3xl">
                        Sejarah
                    </h2>
                    <p class="text-lg lg:text-left text-center text-secondary lg:text-md">
                        Bapak Toto Harsono, SE mendirikan LPK – LKP Dewa Computer pada tahun 2001 di Kota Kajen, Kabupaten
                        Pekalongan, sebagai respons terhadap keterbatasan teknologi di masyarakat pada tahun 2000. Dengan
                        restu dari orang tua, dukungan penuh masyarakat, dan respon positif dari pemerintah setempat, LPK –
                        LKP Dewa Computer bertujuan membawa perubahan positif dalam bidang pendidikan dan keterampilan di
                        Kabupaten Pekalongan. Diharapkan, ke depannya lembaga ini dapat menjalin kerjasama dengan berbagai
                        tingkat pendidikan dan kontribusi positif dalam meningkatkan mutu pendidikan dan ketrampilan
                        masyarakat setempat.
                    </p>
                </div>
                <div class="w-full px-4 lg:w-1/2 my-auto">
                    <img src="img/sejarah.jpg" alt="history" class="img-history rounded-xl mx-auto" width="500" />
                </div>
                <div class="w-full px-4 mt-14 mb-10 lg:hidden">
                    <h2 class="font-bold text-dark text-center text-2xl mb-5 hover:text-primary lg:text-3xl">Profile
                    </h2>
                    <p class="text-lg text-secondary text-center lg:text-md">
                        LPK – LKP DEWA COMPUTER merupakan salah satu lembaga yang mengamalkan ilmu pengetahuan dan
                        teknologi secara ilmiah dan melembaga langsung kepada masyarakat sebagai wahana pendidikan dalam
                        membantu mewujudkan tujuan pembangunan nasional. Pengamalan ilmu pengetahuan, teknologi dan seni
                        oleh perguruan tinggi sebagai lembaga ilmiah harus senantiasa dilandasi niat dan motivasi yang
                        murni untuk mengabdi melalui metodologi ilmiah, baik dalam perencanaan, pelaksanaan maupun
                        evaluasinya.
                    </p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <img src="img/carousel1.jpg" alt="profile" class="img-profile rounded-xl mx-auto" width="500" />
                </div>
                <div class="w-full hidden px-4 mt-14 mb-10 lg:w-1/2 lg:block">
                    <h2 class="font-bold text-dark text-center lg:text-left text-2xl mb-5 hover:text-primary lg:text-3xl">
                        Profile
                    </h2>
                    <p class="text-lg text-left text-secondary lg:text-md">
                        LPK – LKP DEWA COMPUTER merupakan salah satu lembaga yang mengamalkan ilmu pengetahuan dan
                        teknologi secara ilmiah dan melembaga langsung kepada masyarakat sebagai wahana pendidikan dalam
                        membantu mewujudkan tujuan pembangunan nasional. Pengamalan ilmu pengetahuan, teknologi dan seni
                        oleh perguruan tinggi sebagai lembaga ilmiah harus senantiasa dilandasi niat dan motivasi yang
                        murni untuk mengabdi melalui metodologi ilmiah, baik dalam perencanaan, pelaksanaan maupun
                        evaluasinya.
                    </p>
                </div>
                <div class="w-full px-4 mt-14 mb-10 lg:w-1/2">
                    <h2 class="font-bold text-dark text-center lg:text-left text-2xl mb-5 hover:text-primary lg:text-3xl">
                        Tujuan
                    </h2>
                    <p class="text-lg text-center lg:text-left text-secondary lg:text-md">
                        Membantu pemerintah dalam mencerdaskan masyarakat Indonesia, dengan mempersiapkan tenaga kerja
                        yang cakap, jujur, bersifat terbuka, tanggap terhadap kemajuan, memiliki pengetahuan serta
                        keterampilan untuk memangku jabatan yang memerlukan pendidikan dan pengajaran tinggi serta cakap
                        secara mandiri dalam memelihara, memajukan dan menerapkan serta mengembangkan ilmu pengetahuan,
                        teknologi dan atau kesenian dalam bidangnya masing-masing. Serta ikut serta mensukseskan
                        pembangunan menuju tercapainya masyarakat yang maju, adil dan sejahtera.
                    </p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <img src="img/carousel1.jpg" alt="tujuan" class="img-goals rounded-xl mx-auto" width="500" />
                </div>
            </div>
            <div class="w-full px-4 my-8">
                <h1 class="sm:text-3xl text-2xl font-medium title-font  mb-6 text-blue-600">Bentuk Kegiatan
                </h1>
                <ul class="text-md font-medium w-full mx-auto list-disc list-inside">
                    <li class="mb-2">
                        Pendidikan kepada masyarakat.
                    </li>
                    <li class="mb-2">
                        Pelayanan kepada masyarakat.
                    </li>
                    <li class="mb-2">
                        Pengembangan dan penerapan hasil pendidikan dan penelitian.
                    </li>
                    <li class="mb-2">
                        Koperasi.
                    </li>
                    <li class="mb-2">
                        Pusat Pemahaman dan Penerapan SDM & Pembinaan Usaha Kecil Menengah.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- About Section End -->
@endsection
