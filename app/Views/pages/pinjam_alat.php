<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        
        <h4 class="text-2xl font-bold dark:text-white">Peminjaman Alat</h4>

        <!-- <p class="mt-6 bg-slate-100 w-fit px-8 py-2 rounded-lg outline outline-slate-300 text-slate-600 font-medium">
            Isi formulir peminjaman dibawah ini !
        </p> -->

        
        <label for="peminjaman" class="form-control w-full flex lg:flex-row md:flex-col py-5 gap-6 items-end justify-end">

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


            

            
            <!-- <select id="kondisi" name="kondisi" class="select select-primary w-fit bg-gray-50">
                <option value="0">dipinjam</option>
                <option value="1">ready</option>
            </select> -->
            <form action="" method="post">   
                    <label for="keywordCari" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="flex flex-row relative">
                        
                        <input type="search" id="keywordCari" name="keywordCari" class="block w-96 h-[42px] p-4 ps-4 text-sm text-gray-900 border border-[#00A500] rounded-lg bg-gray-50 focus:ring-[#00A500] focus:border-[#00A500] " placeholder="Cari nama alat, Area">
                        <button type="submit" class="text-white absolute end-2.5 bottom-[0.260rem] hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 ">
                            <svg class="w-5 h-5 text-[#00A500] " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            <!-- <input type="text" placeholder="cari alat" class="input input-bordered w-72 h-10" /> -->
            <form action="" method="GET" id="form_id">
                <div class="form-group h-full">
                    <!-- <label for="exampleInputEmail1" class="sr-only">Jurusan</label> -->
                    <!-- gunakan event onchange untuk mengirim data secara otomatis  -->
                    <select class="bg-gray-50 border border-[#00A500] text-gray-900 text-sm font-semibold rounded-lg focus:ring-[#00A500] focus:border-[#00A500] block w-full p-2.5 h-full " name="cari" onChange="document.getElementById('form_id').submit();">
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
                            <div class="flex items-center">
                                Koordinator
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
                            <!-- if ($pinjamAlat['status'] == 1) { echo '-' } else { echo $pinjamAlat['area'] } -->
                            <?= ($pinjamAlat['status'] == 1) ? '-' : $pinjamAlat['area'] ; ?>
                        </td>
                        
                        
                        <td class="px-6 py-3">
                            <?= ($pinjamAlat['status'] == 1) ? '-' : $pinjamAlat['nama_po']; ?>
                        </td>
                        <td class="px-6 py-3">
                            <?= ($pinjamAlat['status'] == 1) ? '-' : $pinjamAlat['koordinator']; ?>
                        </td>
                        <td class="px-6 py-3">
                            <div class="flex flex-row items-center justify-center gap-x-2">

                                <!-- button pinjam Keluar ketika status tabel alat ==1 -->
                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" onclick="inputPeminjam(<?= $pinjamAlat['id']; ?>)" class="<?= ($pinjamAlat['status'] == 1) ? 'bg-blue-600 hover:bg-blue-800 text-white' : 'hidden'; ?> text-sm font-semibold px-4 py-2 rounded-md">pinjam</button>
                                <!-- end button pinjam -->
                                
                                
                                <!-- button selesai Keluar ketika status tabel alat == 0 -->
                                <button onclick="hapusPinjam(<?= ($pinjamAlat['status'] == 0) ? $pinjamAlat['id_peminjam'] : ''; ?>)" class="<?= ($pinjamAlat['status'] == 0) ? 'bg-red-600 hover:bg-red-800 text-white' : 'hidden'; ?> text-sm font-semibold px-4 py-2 rounded-md">selesai</button>
                                <!-- end button selesai -->

                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <!-- Modal -->
        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Pilih Proyek
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="" method="post"  class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <input type="hidden" id="idAlat" name="idAlat">
                            <!-- <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Alat</label>
                                <input type="text" name="lokasi" id="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Lokasi" required="">
                            </div> -->
                            <!-- <div>
                                <input type="text" disabled name="namaAlat" id="namaAlat">
                            </div> -->
                            
                            <div class="col-span-2">
                                <label for="proyek" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Proyek</label>
                                <select id="proyek" name="proyek" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                    <option disabled>pilih proyek</option>
                                    <?php foreach ($proyeks as $proyek) :?>
                                        <option value="<?= $proyek['id_proyek']; ?>"><?= $proyek['nama_po']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            
                        </div>
                        <button id="btnSubmit" name="btnSubmit" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Pinjam Alat
                        </button>
                    </form>
                </div>
            </div>
        </div> 
        <!-- End modal -->
        
    </div>
</div>

<?= $this->endSection(); ?>