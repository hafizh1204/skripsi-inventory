<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    
    <link rel="stylesheet" href="/css/app.css">
    <title><?= $title; ?></title>
</head>
<body>

    <!-- top bar start -->

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <a href="#" class="flex ml-2 md:mr-24">
            <img src="/img/logo-djm.png" class="h-10 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">DJM Inventory</span>
            </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ml-3">
                <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900 dark:text-white" role="none">
                        Neil Sims
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        neil.sims@flowbite.com
                        </p>
                    </div>
                    <ul class="py-1" role="none">
                        <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                        </li>
                        <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                        </li>
                        <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                        </li>
                        <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    </nav>

    <!-- top bar end -->

    <?= $this->include('layout/sidebar'); ?>

    <!-- main content start -->

    
    <?= $this->renderSection('mainContent'); ?>


    <!-- main content end-->


    <!--  -->


<!-- footer start -->

<!-- tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- flowbite -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

<script src="node_modules/flowbite/dist/flowbite.min.js"></script>





<!-- summernote -->
<!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> -->

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->

<script>
    ClassicEditor
        .create( document.querySelector( '#keterangan' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<!-- <script>
    const gambar = document.querySelector('#gambar');
    const gambarLabel = document.querySelector('.custom-file-label');
    
    gambarLabel.textContent = sampul.files[0].name;

    const fileGambar = new FileReader();
    fileGambar.readAsDataURL(gambar.files[0]);
        

</script> -->


<!-- Javascript -->
<script>
    function hapusPinjam($id) {
        $result = confirm('Apakah anda yakin?');

        if($result) {
            window.location = "<?php echo site_url("/pinjam/hapusPinjam") ?>/" + $id;
        }
    }

    // fungsi pemanggilan id / modal
    function inputPeminjam($id) {
        // alert($id);
        // $.ajax({
        //     url: "/ + $id",
        //     type: "get",
        //     success: function(hasil) {

        //     }
        // });
        $('#idAlat').val($id);
        // $('#namaAlat').val($id);
    }

    // $('#summernote','.summernote').summernote({
    //     placeholder: 'ketikkan keterangan spesifikasi dan lainnya',
    //     tabsize: 2,
    //     height: 120,
    //     toolbar: [
    //     ['style', ['style']],
    //     ['font', ['bold', 'underline', 'clear']],
    //     ['color', ['color']],
    //     ['para', ['ul', 'ol', 'paragraph']],
    //     ['table', ['table']],
    //     ['insert', ['link', 'picture', 'video']],
    //     ['view', ['fullscreen', 'codeview', 'help']]
    //     ]
    // });

    $(function(){
        CKEDITOR.replace('keterangan');
    });
</script>

</body>
</html>


<!-- footer end -->