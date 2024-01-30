<!-- back to top start -->
<a href="#hero"
    class=" fixed z-[9999] hidden bottom-4 right-4 p-4 w-14 h-14 rounded-full bg-blue-600 hover:animate-pulse "
    id="to-top">
    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
    </svg>
</a>
<!-- back to top end -->
<footer
    class=" {{ $active === 'weight' ? 'mt-[550px]' : '' }} {{ $active === 'table' ? 'mt-[750px]' : 'mt-[120px]' }} relative ">
    <div class="w-full py-6 mx-auto bg-slate-300 ">
        <div class="flex flex-wrap items-center">
            <div class="w-full max-w-full  mt-0 lg:mb-0">
                <div class="text-sm leading-normal text-center text-slate-700">

                    made with <i class="fa fa-heart text-red-600"></i> by
                    <a href="https://fazdajulioarzika.github.io/portfolio-tailwind/"
                        class="font-semibold text-transparent bg-gradient-to-r from-pink-500 via-purple-700 to-blue-700 bg-clip-text dev"
                        target="_blank">Fazda
                        Julio</a>
                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </div>
            </div>
        </div>
    </div>
</footer>
