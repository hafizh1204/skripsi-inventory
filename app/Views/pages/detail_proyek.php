<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

        <div>
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                    <a href="<?= base_url('/proyek'); ?>" class="inline-flex gap-2 items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fa-solid fa-table-list fa-lg"></i>
                        Data Proyek
                    </a>
                    </li>

                    <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:hover:text-white">Rincian Proyek</span>
                    </div>
                    </li>
                </ol>
            </nav>


            <div class="px-4 sm:px-0">
                <h3 class="text-2xl font-bold leading-7 text-gray-900">Rincian Proyek</h3>
            </div>

            


            <div class="flex lg:flex-row flex-col gap-x-3 justify-between items-center">
                <div class="mt-6 border-t border-gray-100 w-full">
                    <dl class="divide-y divide-gray-100 w-full">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Nama Proyek</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $proyek['nama_po']; ?></dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Koordinator</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $proyek['koordinator']; ?></dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Area Kerja</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $proyek['area']; ?></dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Mulai</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $proyek['tanggal_mulai']; ?></dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Estimasi Selesai</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $proyek['tanggal_selesai']; ?></dd>
                        </div>
                        
                        
                    </dl>
                </div>

                <div class="">
                    <img src="/img/<?= $proyek['foto_lokasi']; ?>" alt="" class="max-w-[30rem] object-cover aspect-video bg-red-300">
                </div>

            </div>
        </div>


        
        
        
        
    </div>
</div>

<?= $this->endSection(); ?>