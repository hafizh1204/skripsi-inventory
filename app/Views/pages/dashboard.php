
<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        
        <h4 class="text-2xl font-bold dark:text-white">Dashboard</h4>

        <div class="flex flex-wrap py-5 gap-x-5">      
            <a href="#" class=" overflow-hidden flex flex-row items-center border-2 rounded-lg bg-white shadow-md hover:bg-slate-200 w-2/6  ">
                <img src="/img/tools-icon.svg" alt="icon-tools" class="bg-green-800 fill-green-500 rounded-lg object-cover aspect-square w-[100px] scale-90 p-4">
                <div class=" px-6">
                    <h5 class="text-lg capitalize font-semibold">data alat</h5>
                    <h5 class=" text-2xl font-bold text-slate-700 ">30</h5>    
                </div>
            </a>
            <a href="#" class=" overflow-hidden flex flex-row items-center border-2 rounded-lg bg-white shadow-md hover:bg-slate-200 w-2/6  ">
            <img src="/img/tools-icon.svg" alt="icon-tools" class="bg-green-800 fill-green-500 rounded-lg object-cover aspect-square w-[100px] scale-90 p-4">
                <div class=" px-6">
                    <h5 class="text-lg capitalize font-semibold">Alat dipinjam</h5>
                    <h5 class=" text-2xl font-bold text-slate-700 ">30</h5>    
                </div>
            </a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>