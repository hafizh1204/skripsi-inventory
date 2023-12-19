<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        
        <h4 class="text-2xl font-bold dark:text-white">Peminjaman Alat</h4>

        <!-- <p class="mt-6 bg-slate-100 w-fit px-8 py-2 rounded-lg outline outline-slate-300 text-slate-600 font-medium">
            Isi formulir peminjaman dibawah ini !
        </p> -->

        
        <label for="peminjaman" class="form-control w-full flex lg:flex-row md:flex-col py-5 gap-6 items-end justify-between">

            <!-- <div class="w-2/4 flex flex-row gap-5">
                <div class="w-2/5">
                    <div class="label">
                        <span class="label-text font-medium">Nama Peminjam</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full" />
                </div>
                <div class="w-2/5">
                    <div class="label">
                        <span class="label-text font-medium">Area proyek</span>
                    </div>
                    <select class="select select-bordered w-full">
                        <option disabled selected>Pilih Area Proyek</option>
                        <option>Proyek 1</option>
                        <option>Proyek 2</option>
                        <option>Proyek 3</option>
                    </select>
                </div>

            </div> -->


            <div class="w-1/3">
                <div class="label">
                    <span class="label-text font-medium sr-only">Nama Peminjam</span>
                </div>
                <input type="text" placeholder="cari alat" class="input input-bordered w-full" />
            </div>

            
            <!-- <select id="kondisi" name="kondisi" class="select select-primary w-fit bg-gray-50">
                <option value="0">dipinjam</option>
                <option value="1">ready</option>
            </select> -->

            <form action="" method="GET" id="form_id">
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1" class="sr-only">Jurusan</label> -->
                    <!-- gunakan event onchange untuk mengirim data secara otomatis  -->
                    <select class="form-control select select-primary w-fit bg-gray-50" name="cari" onChange="document.getElementById('form_id').submit();">
                        <option disabled>-- Pilih Dilihat --</option>
                        <option <?php if(!empty($cari)){ echo $cari == '0' ? 'selected':''; } ?> value="0">Dipinjam</option>
                        <option <?php if(!empty($cari)){ echo $cari == '1' ? 'selected':''; } ?> value="1">Ready</option>
                    </select>
                </div>
            </form>
            
                
        </label>

        

        <div class="relative shadow-md sm:rounded-lg my-5">
            <table class="w-full text-md text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode alat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Nama Alat
                                <a href="#">
                                    <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                    </svg>
                                </a>
                            </div>
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                lokasi alat
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                proyek
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                pinjam
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center sr-only">
                                Area
                            </div>
                        </th>
                        
                        
                        
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($pinjam as $pinjamAlat) : ?>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $i++; ?>
                        </td>
                        <td class="px-6 py-3">
                            <?= $pinjamAlat['kode_alat']; ?>
                        </td>
                        
                        <td class="px-6 py-3">
                            <?= $pinjamAlat['nama_alat']; ?>
                        </td>
                        <td class="px-6 py-3">
                            <?= ($pinjamAlat['status'] == 1) ? '-' : $pinjamAlat['lokasi'] ; ?>
                        </td>
                        <td class="px-6 py-3">
                            <?= ($pinjamAlat['status'] == 1) ? '-' : $pinjamAlat['nama_po']; ?>
                        </td>
                        <td class="px-6 py-3">
                            <div class="flex flex-row items-center justify-center gap-x-2">

                                <a href="#" class="<?= ($pinjamAlat['status'] == 1) ? 'bg-blue-600 hover:bg-blue-800 text-white' : 'bg-slate-400 '; ?> text-sm font-semibold px-4 py-2 rounded-md">pinjam</a>

                                
                            </div>
                        </td>
                        


                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        
        
    </div>
</div>

<?= $this->endSection(); ?>