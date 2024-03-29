<!-- start: Sidebar -->
<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="{{ asset('img/logo.png') }}" alt="" class="w-8 h-8 rounded object-cover">
        <span class="text-lg font-semibold text-white ml-3">LPK Dewa Computer</span>
    </a>
    <ul class="mt-4">
        <li class="mb-1 group">
            <a href="/dashboard"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md {{ $active == 'dashboard' ? 'bg-gray-800 text-white' : '' }} ">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md {{ $active == 'computer' || $active == 'bahasa' ? 'bg-gray-800 text-white' : '' }} sidebar-dropdown-toggle">
                <i class="ri-flashlight-line mr-3 text-lg"></i>
                <span class="text-sm">Program Setting</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="/program/computer"
                        class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full {{ $active == 'computer' ? 'bg-gray-800 text-white' : '' }} before:bg-gray-300 before:mr-3 rounded-md p-1">Program
                        Computer</a>
                </li>
                <li class="mb-4">
                    <a href="/program/bahasa"
                        class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full {{ $active == 'bahasa' ? 'bg-gray-800 text-white' : '' }} before:bg-gray-300 before:mr-3 rounded-md p-1">Program
                        Bahasa</a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-settings-2-line mr-3 text-lg"></i>
                <span class="text-sm">Settings</span>
            </a>
        </li>
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end: Sidebar -->
