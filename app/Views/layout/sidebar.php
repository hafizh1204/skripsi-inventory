<!-- sidebar start -->

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="<?= base_url('/pages'); ?> " class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 active:bg-gray-100 group">
                <i class="fas fa-desktop fa-xl"></i>
                <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/alat'); ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fas fa-toolbox fa-xl"></i>
                <span class="flex-1 ml-3 whitespace-nowrap">Data Alat</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/proyek'); ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-table-list fa-xl"></i>
                <span class="flex-1 ml-3 whitespace-nowrap">List PO</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/pinjam/pinjam_alat'); ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-screwdriver-wrench fa-xl"></i>
                <span class="flex-1 ml-3 whitespace-nowrap">Peminjaman Alat</span>
                </a>
            </li>
            <br>
            <br>
            <hr class="mt-28">
            <div>
                <a href="<?= base_url('/auth/keluar') ?>" class="flex items-center px-2 py-4 rounded-lg text-gray-900 dark:text-white hover:text-gray-950 group hover:bg-gray-100">
                <i class="fa-solid fa-arrow-right-from-bracket fa-2xl"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap text-lg">Keluar</span>  
                </a>
            </div>
        </ul>
    </div>
</aside>

    <!-- sidebar end -->