
<?= $this->extend('layout/template'); ?>

<?= $this->section('mainContent'); ?>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        
        <h4 class="text-2xl font-bold dark:text-white">Dashboard</h4>

        <div class="flex flex-wrap my-5 gap-2 w-full justify-stretch">

            <div class="bg-[#E5F6E5] w-full h-[20rem] flex flex-row justify-between items-center rounded-2xl border-2 border-green-300 relative overflow-hidden">
                <div class="flex flex-col gap-3 p-16">
                    <h1 class="text-5xl font-bold text-lime-800">Selamat Datang Admin</h1>
                    <h3 class="text-2xl font-medium">CV DIAN JAYA MANDIRI Inventory System</h3>
                    
                </div>
                <span class="absolute w-full h-[45.2px] bg-[#66C966] bottom-0"></span>
                <a href="https://www.vecteezy.com/free-vector/construction" class=" right-0 bottom-0 absolute">
                    <img src="img/construction-site.png" alt="" class="w-[500px]">
                </a>
            </div>
            <!-- <a href="#" class=" overflow-hidden flex flex-row items-center border-2 rounded-lg bg-white shadow-md hover:bg-slate-200 w-[380px]  ">
                <img src="/img/tools-icon.svg" alt="icon-tools" class="bg-green-800 fill-green-500 rounded-lg object-cover aspect-square w-[100px] scale-90 p-4">
                <div class=" px-6">
                    <h5 class="text-lg capitalize font-semibold">total alat</h5>
                    <h5 class=" text-2xl font-bold text-slate-700 ">30</h5>    
                </div>
            </a>
            <a href="#" class=" overflow-hidden flex flex-row items-center border-2 rounded-lg bg-white shadow-md hover:bg-slate-200 w-[380px]  ">
            <img src="/img/tools-icon.svg" alt="icon-tools" class="bg-green-800 fill-green-500 rounded-lg object-cover aspect-square w-[100px] scale-90 p-4">
                <div class=" px-6">
                    <h5 class="text-lg capitalize font-semibold">Alat Standby</h5>
                    <h5 class=" text-2xl font-bold text-slate-700 ">30</h5>    
                </div>
            </a>
            <a href="#" class=" overflow-hidden flex flex-row items-center border-2 rounded-lg bg-white shadow-md hover:bg-slate-200 w-[380px]  ">
            <img src="/img/tools-icon.svg" alt="icon-tools" class="bg-green-800 fill-green-500 rounded-lg object-cover aspect-square w-[100px] scale-90 p-4">
                <div class=" px-6">
                    <h5 class="text-lg capitalize font-semibold">Alat Rusak</h5>
                    <h5 class=" text-2xl font-bold text-slate-700 ">30</h5>    
                </div>
            </a>
            <a href="#" class=" overflow-hidden flex flex-row items-center border-2 rounded-lg bg-white shadow-md hover:bg-slate-200 w-[380px]  ">
            <img src="/img/tools-icon.svg" alt="icon-tools" class="bg-green-800 fill-green-500 rounded-lg object-cover aspect-square w-[100px] scale-90 p-4">
                <div class=" px-6">
                    <h5 class="text-lg font-semibold">Alat di Lapangan</h5>
                    <h5 class=" text-2xl font-bold text-slate-700 ">30</h5>    
                </div>
            </a>
            <a href="#" class=" overflow-hidden flex flex-row items-center border-2 rounded-lg bg-white shadow-md hover:bg-slate-200 w-[380px]  ">
            <img src="/img/tools-icon.svg" alt="icon-tools" class="bg-green-800 fill-green-500 rounded-lg object-cover aspect-square w-[100px] scale-90 p-4">
                <div class=" px-6">
                    <h5 class="text-lg font-semibold">Alat </h5>
                    <h5 class=" text-2xl font-bold text-slate-700 ">30</h5>    
                </div>
            </a> -->
            
        </div>
    </div>
</div>

<?= $this->endSection(); ?>