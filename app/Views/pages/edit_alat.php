<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>


<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
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
                        <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:hover:text-white">Ubah Data Alat</span>
                    </div>
                </li>
            </ol>
        </nav>
        
        <h4 class="text-2xl font-bold dark:text-white">Ubah Data Alat</h4>

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 max-w-2xl lg:py-10">
                
                <form action="/alat/updateAlat/<?= $alat['id']; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="gambarLama" value="<?= $alat['gambar']; ?>">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="Kode Alat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Alat</label>

                            <input type="text" name="kode_alat" id="kode_alat" class="max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 py-2.5 w-full disabled <?= (session('validation')) ? 'input-error border-2' : ''; ?> " value="<?=$alat['kode_alat'];?>" disabled readonly>

                            <?php if (session('validation') && session('validation')->hasError('kode_alat')) :?>
                                <div class="text-error text-sm">
                                    <?= session('validation')->getError('kode_alat'); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="w-full">
                            <label for="Nama Alat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Alat</label>
                            <input type="text" name="nama_alat" id="namaAlat" class="max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 py-2.5 w-full" placeholder="Ex. Hammer Jack" value="<?= $alat['nama_alat']; ?>">
                        </div>
                        <div class="w-full">
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                            <input type="text" name="brand" id="brand" class="max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 py-2.5 w-full" placeholder="Ex. Makita / Bosch" value="<?= $alat['brand']; ?>">
                        </div>
                        <div class=" w-full">
                            <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Alat</label>
                            <select id="kondisi" name="kondisi" class="px-3 text-gray-600 max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 py-2.5 w-full">
                                <option selected=""><?= $alat['kondisi']; ?></option>
                                <option value="Standby">Standby</option>
                                <option value="Broken">Broken</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="gambar" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>

                            <div class="w-full flex flex-row items-center custom-file ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 rounded-md">
                                <input class="file-input file-input-[#00A500] h-full w-full max-w-xs" aria-describedby="gambar" id="gambar" name="gambar" type="file" aria-placeholder="afadfa" title="gambar kosong">
                                <label for="gambar"><?= $alat['gambar']; ?></label>

                                
                            </div>
                        </div>

                        <div class="sm:col-span-2 ">
                            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <div class="border-2 border-primary-green rounded-md overflow-auto">
                                <textarea id="keterangan" name="keterangan" class="block p-2.5 w-full h-64 " placeholder="Your description here" style="height: 250px;"><?= $alat['keterangan']; ?></textarea>

                            </div>
                        </div>

                        <button type="submit" class="bg-[#00A500] text-white w-fit py-2 px-5 flex flex-row items-center gap-x-3 rounded-lg shadow-md hover:bg-lime-800 hover:shadow-none">
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