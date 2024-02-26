<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

        <div>
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                    <a href="<?= base_url('/alat'); ?>" class="inline-flex gap-2 items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-toolbox fa-lg"></i>
                        Data Alat
                    </a>
                    </li>

                    <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:hover:text-white">Informasi Alat</span>
                    </div>
                    </li>
                </ol>
            </nav>


            <div class="px-4 sm:px-0">
                <h3 class="text-2xl font-bold leading-7 text-gray-900">Informasi Alat</h3>
            </div>

            


            <div class="flex flex-row gap-x-3 justify-between">
                <div class="mt-6 border-t border-gray-100 w-full">
                    <dl class="divide-y divide-gray-100 w-full">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Kode Alat</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $alat['kode_alat']; ?></dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Nama Alat</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $alat['nama_alat']; ?></dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Brand</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $alat['brand']; ?></dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Kondisi Alat</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $alat['kondisi']; ?></dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Keterangan</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                <?= $alat['keterangan']; ?>
                            </dd>
                        </div>
                        <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Rekam Data</dt>
                            <dd class=" text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list" class="divide-y divide-gray-100 rounded-md border-gray-200">
                                    <li class="flex items-center justify-start py-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <div class=" flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium">Tanggal masuk : <?= $alat['created_at']; ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex items-center justify-start py-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <div class=" flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium">Tanggal Update : <?= $alat['updated_at']; ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="">
                    <img src="/img/<?= $alat['gambar']; ?>" alt="" class="max-w-[30rem] aspect-square bg-red-300">
                </div>

            </div>
        </div>


        
        
        
        
    </div>
</div>

<?= $this->endSection(); ?>