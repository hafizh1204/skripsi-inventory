<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>


<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="<?= base_url('/proyek'); ?>" class="inline-flex gap-2 items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                    <i class="fa-solid fa-table-list fa-lg"></i>
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

        <section class="flex flex-row justify-between bg-white dark:bg-gray-900">
            <div class="py-8 px-4 w-full max-w-2xl lg:py-10">
                <!-- enctype="multipart/form-data" untuk mengambil semua data baik berupa file -->
                <form action="/proyek/updateProyek/<?= $proyek['id_proyek']; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="fotoLama" value="<?= $proyek['foto_lokasi']; ?>">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <input type="hidden" value="<?= $proyek['id_proyek']; ?>" name="id_proyek">
                        <div class="w-full">
                            <label for="Nama_po" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Proyek</label>
                            <input type="text" name="nama_po" id="namaPo" class="max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 w-full" placeholder="ketik disini" value="<?= $proyek['nama_po']; ?>">
                        </div>
                        <div class="w-full">
                            <label for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area Proyek</label>
                            <input type="text" name="area" id="area" class="max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 w-full" placeholder="ketik disini" value="<?= $proyek['area']; ?>">
                        </div>
                        
                        <div class="w-full">
                            <label for="tanggal_mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                            <div class="relative max-w-sm">
                                
                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="px-3 text-gray-600 max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 py-2.5 w-full" value="<?= $proyek['tanggal_mulai']; ?>">
                            </div>

                        </div>
                        <div class="w-full">
                            <label for="tanggal_selesai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Selesai</label>
                            <div class="relative max-w-sm">
                                
                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="px-3 text-gray-600 max-w-xs ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 focus:bg-white rounded-md bg-gray-50 py-2.5 w-full " value="<?= $proyek['tanggal_selesai']; ?>">
                            </div>

                        </div>


                        <div class="sm:col-span-2">
                            <label for="foto_lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Lokasi</label>

                            <div class="w-full flex flex-row items-center custom-file ring-1 ring-primary-green focus:ring-offset-1 focus:ring-primary-green focus:ring-2 rounded-md">
                                <input type="file" name="foto_lokasi" id="foto_lokasi" placeholder="ketik disini untuk gambar (sementara)" class="file-input file-input-[#00A500] h-full w-full max-w-xs file:" value="<?= $proyek['foto_lokasi']; ?>">

                                <label for="Foto_lokasi"><?= $proyek['foto_lokasi']; ?></label>

                            </div>
                        </div>

                        
                        

                        <button type="submit" class="bg-[#00A500] text-white w-fit py-2 px-5 flex flex-row items-center gap-x-3 rounded-lg shadow-md hover:bg-lime-800 hover:shadow-none">
                                <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                                </svg>
                                Tambah & Simpan Proyek
                        </button>
                    </div>   
                </form>
            </div>
            <div class="py-8 w-[400px]">
                <div class="p-4 bg-green-50 text-green-600 rounded-md border-2 border-green-300">
                    <h1 class="text-xl font-semibold mb-2">Petunjuk Pengisian</h1>
                    <ul class="flex flex-col gap-y-1 px-4 text-base" style="list-style-type:disc">
                        <li>Kolom nama proyek untuk pengisian nama proyek berdasarkan dokumen PO</li>
                        <li>Kolom area untuk pengisian nama area yang menjadi lokasi kerja</li>
                        <li>Kolom tanggal mulai untuk pengisian kapan proyek dimulai</li>
                        <li>Kolom tanggal selesai untuk pengisian kapan estimasi proyek akan selesai</li>
                        <li>Kolom gambar untuk mengunggah gambar atau foto lokasi area </li>
                    </ul>
                </div>
            </div>
        </section>


    </div>
</div>

<?= $this->endSection(); ?>