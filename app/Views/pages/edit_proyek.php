<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>


<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="<?= base_url('/proyek'); ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                            <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
                            <path d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                            <path fill-rule="evenodd" d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>
                        Data proyek
                    </a>
                </li>

                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:hover:text-white">Ubah Data Proyek</span>
                    </div>
                </li>
            </ol>
        </nav>
        
        <h4 class="text-2xl font-bold dark:text-white">Ubah Data Proyek</h4>

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 max-w-2xl lg:py-10">
                
                <form action="/proyek/updateProyek" method="post">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <input type="hidden" value="<?= $alat['id_proyek']; ?>" name="id_proyek">
                        <div class="w-full">
                            <label for="Nama_po" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Proyek</label>
                            <input type="text" name="nama_po" id="namaPo" class="max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 w-full" placeholder="ketik disini" value="<?= $alat['nama_po']; ?>">
                        </div>
                        <div class="w-full">
                            <label for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area Proyek</label>
                            <input type="text" name="area" id="area" class="max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 w-full" placeholder="ketik disini" value="<?= $alat['area']; ?>">
                        </div>
                        
                        <div class="w-full">
                            <label for="tanggal_mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                            <div class="relative max-w-sm">
                                
                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="px-3 text-gray-600 max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 py-2.5 w-full" value="<?= $alat['tanggal_mulai']; ?>">
                            </div>

                        </div>
                        <div class="w-full">
                            <label for="tanggal_selesai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Selesai</label>
                            <div class="relative max-w-sm">
                                
                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="px-3 text-gray-600 max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 py-2.5 w-full " value="<?= $alat['tanggal_selesai']; ?>">
                            </div>

                        </div>


                        <div class="sm:col-span-2">
                            <label for="foto_lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Lokasi</label>

                            <div class="w-full flex flex-row items-center custom-file ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 rounded-md">
                                <input type="file" name="foto_lokasi" id="foto_lokasi" placeholder="ketik disini untuk gambar (sementara)" class="file-input file-input-[#00A500] h-full w-full max-w-xs file:" value="<?= $alat['foto_lokasi']; ?>">

                                <label for="Foto_lokasi"><?= $alat['foto_lokasi']; ?></label>

                            </div>
                        </div>

                        
                        

                        <button type="submit" class="bg-lime-600 text-white w-fit py-2 px-5 flex flex-row items-center gap-x-3 rounded-lg shadow-md hover:bg-lime-800 hover:shadow-none">
                                <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                                </svg>
                                Tambah & Simpan Proyek
                        </button>
                    </div>   
                </form>
            </div>
        </section>


    </div>
</div>

<?= $this->endSection(); ?>