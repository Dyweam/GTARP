<?php require('session.php'); ?>

<?php include_once('component/headOUT.php'); ?>

<?php confirm_logged_in(); ?>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <?php include_once('component/navbar.php') ?>
        <div style="min-height: 100vh;" class="font-sans backOUT bg-cover pt-14 md:pt-0 md:ml-64 w-full">
            <div class="w-full mx-auto h-full flex flex-col" style="min-height: 90vh;">
                <div class="py-4 px-4 bg-gray-600 text-white font-semibold">Accueil</div>

                <div class="p-6">
                    <div class="md:mx-12 md:rounded p-6 bg-white border-b border-gray-200">
                        Bienvenue
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