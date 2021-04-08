<?php require('../session.php'); ?>

<?php include_once('../component/head.php'); ?>

<?php confirm_logged_in(); ?>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
    <?php include_once('../component/navbar.php') ?>

        <div style="min-height: 100vh;" class="font-sans back bg-cover pt-14 md:pt-0 md:ml-64 w-full">
            <div class="w-full mx-auto h-full flex flex-col" style="min-height: 90vh;">
                <div class="py-4 px-4 bg-gray-600 text-white font-semibold">Ajout d'un membre</div>
                <a href="/casier/casiers.php" class="ml-auto mr-12 md:mr-20 lg:mr-32 my-6 px-4 py-1 text-gray-900 font-light tracking-wider bg-gray-100 hover:bg-gray-200 rounded" type="submit">Retour</a>

                <div class="md:mx-20 lg:mx-32 md:rounded p-6 bg-white border-b border-gray-200">
                    <div class="p-2 font-semibold">
                        Remplissez les informations nécessaires
                    </div>
                    <form method="POST" class="md:px-10">
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="name">
                                Pseudonyme
                            </label>
                            <input class="p-2 bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="name" type="text" name="name" required="required" autofocus="autofocus">
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="password">
                                Mot de passe
                            </label>
                            <input class="p-2 bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="password" type="password" name="password" required="required">
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="passwordConfirm">
                                Confirmation Mot de passe
                            </label>
                            <input class="p-2 bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="passwordConfirm" type="password" name="passwordConfirm" required="required">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
                                Validate
                            </button>
                        </div>
                    </form>

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