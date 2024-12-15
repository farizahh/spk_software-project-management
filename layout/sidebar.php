<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 px-8">
        <a href="https://flowbite.com/" class="flex items-center ps-2.5 mb-5">

            <span class="self-center text-4xl mt-10 font-semibold whitespace-nowrap">SPK</span>
        </a>
        <ul class="space-y-2 font-normal mt-10 space-y-5">
            <li>
                <h1>Menu</h1>
            </li>
            <li>
                <a href="index.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fa-solid fa-file w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Data</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="kriteria.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Kriteria</a>
                    </li>
                    <li>
                        <a href="alternatif.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Alternatif</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-dua" data-collapse-toggle="dropdown-dua">
                    <i class="fa-solid fa-shapes w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Perhitungan</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-dua" class="hidden py-2 space-y-2">
                    <li>
                        <a href="matrik-hasil.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Nilai Hasil Matrik</a>
                    </li>
                    <li>
                        <a href="matrik-keputusan.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Normalisasi Matrik Keputusan</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-tiga" data-collapse-toggle="dropdown-tiga">
                    <i class="fa-solid fa-square-poll-vertical w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Hasil dan Laporan</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-tiga" class="hidden py-2 space-y-2">
                    <li>
                        <a href="skenario1.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Skenario 1</a>
                    </li>
                    <li>
                        <a href="skenario2.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Skenario 2</a>
                    </li>
                </ul>
            </li>
            <!-- <li>
                <a href="hasil.php" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-tiga" data-collapse-toggle="dropdown-tiga">
                    <i class="fa-solid fa-square-poll-vertical w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Hasil dan Laporan</span>
                </a>
            </li> -->
        </ul>
    </div>
</aside>