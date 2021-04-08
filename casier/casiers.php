<?php require('../session.php'); ?>

<?php include_once('../component/head.php'); ?>

<?php confirm_logged_in(); ?>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
    <?php include_once('../component/navbar.php') ?>

        <div style="min-height: 100vh;" class="font-sans back bg-cover pt-14 md:pt-0 md:ml-64 w-full">
            <div class="w-full mx-auto h-full flex flex-col" style="min-height: 90vh;">
                <div class="py-4 px-4 bg-gray-600 text-white font-semibold">Casiers</div>
                <a href="/casier/casierAdd.php" class="ml-auto my-6 mx-12 px-4 py-1 text-gray-900 font-light tracking-wider bg-gray-100 hover:bg-gray-200 rounded" type="submit">Ajouter un casier</a>

                <div class="md:mx-12 md:rounded p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0">
                            <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>

                        <div class="ml-3">
                            <div class="font-medium text-base text-gray-800">N°671748645</div>
                            <div class="font-medium text-sm text-gray-500">John Doe</div>
                        </div>
                    </div>

                    <br>

                    <div class="ml-3" style="display: flex; margin: auto;">
                        <div class="p-2" style="margin: 0 0 0 auto;">
                            <a href="/casier/casierEdit.php" type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                            </a>
                        </div>
                        <div class="p-2">
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                    <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bg-gray-600 px-8 py-4 flex">
                <p class="mt-auto block px-4 py-1 text-sm font-semibold text-gray-100 mx-auto" href="#">Copyright © Gabriel DELAHAYE 2021</p>
            </div>
        </div>
    </div>
</body>

</html>

<?php require('../clearError.php'); ?>