<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>


<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                <span class="inline-flex items-center text-sm font-medium text-gray-700 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                        <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
                        <path d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                        <path fill-rule="evenodd" d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z" clip-rule="evenodd" />
                    </svg>

                    Data Proyek
                </span>
                </li>
                
            </ol>
        </nav>
        
        <h4 class="text-2xl font-bold dark:text-white">Data Proyek</h4>

        
        
        <div class="w-full flex flow-row justify-between items-center mt-6">
            <?php if(session()->getFlashdata('sukses-simpan-data')) :?>
                <div id="alert-3" class="w-3/5 flex items-center py-3 px-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        <?= session()->getFlashdata('sukses-simpan-data'); ?>
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            <?php endif; ?>


            <?php if(session()->getFlashdata('sukses-hapus-data')) :?>
            <div id="alert-2" class="w-3/5 flex items-center py-3 px-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    <?= session()->getFlashdata('sukses-hapus-data'); ?>
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('sukses-update-data')) :?>
            <div id="alert-1" class=" w-3/5 flex items-center py-3 px-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                <?= session()->getFlashdata('sukses-update-data'); ?>
            </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            </div>
            <?php endif; ?>

            <div class="w-full h-fit flex flex-row justify-end">
                <a href="/Proyek/insertProyek" class="bg-lime-600 text-white py-2 px-5 flex flex-row items-center gap-x-3 rounded-lg shadow-md hover:bg-lime-800 hover:shadow-none">
                    <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                    </svg>
                    Tambah Proyek Baru
                </a>
            </div>
        
        </div>
        

            
        <div class="relative shadow-md sm:rounded-lg my-5">
            <table class="w-full text-md text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            nama proyek
                        </th>
                        <th scope="col" class="px-6 py-3">
                            area
                        </th>
                        <th scope="col" class="px-6 py-3">
                            tanggal mulai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            tanggal selesai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                <span class="sr-only">gambar</span>
                            </div>
                        </th>

                        
                        
                        
                        
                        
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($proyek as $proyekdjm) : ?>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $i++; ?>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $proyekdjm['nama_po']; ?>
                        </th>
                        <td class="px-6 py-3">
                            <?= $proyekdjm['area']; ?>
                        </td>
                        <td class="px-6 py-3">
                            <?= $proyekdjm['tanggal_mulai']; ?>
                        </td>
                        <td class="px-6 py-3">
                            <?= $proyekdjm['tanggal_selesai']; ?>
                        </td>

                        <td class="px-6 py-3">
                            <div class="flex flex-row items-center justify-center gap-x-2">

                            <a href="/proyek/editProyek/<?= $proyekdjm['id_proyek']; ?>" class="bg-blue-600 hover:bg-blue-800 text-white text-sm font-semibold px-4 py-2 rounded-md">Ubah</a>
                            <a href="/proyek/hapusProyek/<?= $proyekdjm['id_proyek']; ?>" class="bg-red-600 hover:bg-red-800 text-white text-sm font-semibold px-4 py-2 rounded-md">Hapus</a>

                                <!-- <form action="/proyek/hapusProyek/<?= $proyekdjm['id_proyek']; ?>" method="post" class="inline">
                                    <input type="hidden" name="_method" value="delete">

                                    <button class="bg-red-600 hover:bg-red-800 text-white text-sm font-semibold px-4 py-2 rounded-md" >Hapus</button>
                                </form> -->

                                <a href="/proyek/<?= $proyekdjm['id_proyek']; ?>" class="bg-slate-400 hover:bg-slate-800 text-white text-sm font-semibold px-4 py-2 rounded-md">Info</a>

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