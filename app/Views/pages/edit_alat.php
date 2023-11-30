<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>


<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="<?= base_url('/alat'); ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                            <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
                            <path d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                            <path fill-rule="evenodd" d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>
                        Data Alat
                    </a>
                </li>

                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:hover:text-white">Ubah Data Alat</span>
                    </div>
                </li>
            </ol>
        </nav>
        
        <h4 class="text-2xl font-bold dark:text-white">Ubah Data Alat</h4>

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 max-w-2xl lg:py-10">
                
                <form action="/alat/updateAlat/<?= $alat['id']; ?>" method="post">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="Kode Alat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Alat</label>

                            <input type="text" name="kode_alat" id="kodeAlat" class="input input-bordered input-primary bg-gray-50 w-full <?= (session('validation')) ? 'input-error border-2' : ''; ?> " placeholder="DJM-XX-XXX" value="<?= $alat['kode_alat']; ?>" disabled>

                            <?php if (session('validation') && session('validation')->hasError('kode_alat')) :?>
                                <div class="text-error text-sm">
                                    <?= session('validation')->getError('kode_alat'); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="w-full">
                            <label for="Nama Alat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Alat</label>
                            <input type="text" name="nama_alat" id="namaAlat" class="input input-bordered input-primary bg-gray-50 w-full" placeholder="Ex. Hammer Jack" value="<?= $alat['nama_alat']; ?>">
                        </div>
                        <div class="w-full">
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                            <input type="text" name="brand" id="brand" class="input input-bordered input-primary bg-gray-50 w-full" placeholder="Ex. Makita / Bosch" value="<?= $alat['brand']; ?>">
                        </div>
                        <div class=" w-full">
                            <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Alat</label>
                            <select id="kondisi" name="kondisi" class="select select-primary w-full max-w-xs bg-gray-50">
                                <option selected=""><?= $alat['kondisi']; ?></option>
                                <option value="Standby">Standby</option>
                                <option value="Broken">Broken</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                            <input type="text" name="gambar" id="gambar" class="input input-bordered input-primary bg-gray-50 w-full" placeholder="Temporari Text for Files" value="<?= $alat['gambar']; ?>">
                        </div>
                        
                        <div class="sm:col-span-2">
                            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Alat</label>
                            <textarea id="keterangan" name="keterangan" rows="8" class="block p-2.5 w-full textarea textarea-primary" placeholder="Your description here"><?= $alat['keterangan']; ?></textarea>
                        </div>

                        <button type="submit" class="bg-lime-600 text-white w-fit py-2 px-5 flex flex-row items-center gap-x-3 rounded-lg shadow-md hover:bg-lime-800 hover:shadow-none">
                                <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                                </svg>
                                Simpan Perubahan Data Alat
                        </button>
                    </div>    
                </form>
            </div>
        </section>


    </div>
</div>

<?= $this->endSection(); ?>