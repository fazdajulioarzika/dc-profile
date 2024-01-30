<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://dewa-computer.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
        Disqus.</a></noscript>
<script src="https://unpkg.com/split-type"></script>
<script>
    window.onscroll = function() {
        const header = document.querySelector('header');
        const fixedNav = header.offsetTop;
        const toTop = document.querySelector('#to-top');

        if (window.pageYOffset > fixedNav) {
            header.classList.add('nfix');
            toTop.classList.remove('hidden');
            toTop.classList.add('flex');
        } else {
            header.classList.remove('nfix');
            toTop.classList.remove('flex');
            toTop.classList.add('hidden');
        }
    };

    // hamburger
    const hamburger = document.querySelector('#hamburger');
    const navMenu = document.querySelector('#nav-menu');

    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('hamburger-active');
        navMenu.classList.toggle('hidden');
    });

    //klik luar hamburger
    window.addEventListener('click', function(e) {
        if (e.target != hamburger && e.target != navMenu) {
            hamburger.classList.remove('hamburger-active');
            navMenu.classList.add('hidden');
        }
    });

    function initSwiper() {
        var screenWidth = window.innerWidth;
        var slidesPerView;

        // Menentukan nilai slidesPerView berdasarkan lebar layar
        if (screenWidth < 600) {
            slidesPerView = 1;
        } else if (screenWidth < 900) {
            slidesPerView = 2;
        } else {
            slidesPerView = 3;
        }

        // Inisialisasi objek Swiper dengan nilai slidesPerView yang ditentukan
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: slidesPerView,
            centeredSlides: false,
            spaceBetween: 0,
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    // Memanggil fungsi saat halaman dimuat dan saat layar diubah ukurannya
    document.addEventListener('DOMContentLoaded', initSwiper);
    window.addEventListener('resize', initSwiper);




    gsap.registerPlugin(TextPlugin);
    gsap.to('.runtext', {
        duration: 2,
        delay: 1.5,
        text: 'Dewa Computer'
    });
    gsap.from('.down', {
        duration: 1,
        y: -100,
        opacity: 0,
    });
    gsap.from('.toright', {
        duration: 1,
        x: -100,
        opacity: 0
    });
    gsap.from('.up', {
        duration: 1,
        y: 100,
        opacity: 0
    });
    gsap.from('.tright', {
        duration: 0.5,
        x: -30,
        opacity: 0
    });
</script>
