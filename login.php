<?php require('session.php'); ?>

<?php include_once('component/headOUT.php'); ?>

<?php
if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
    <?php
}
?>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <div @click.away="open = false" class="h-auto md:h-screen z-30 fixed bg-gray-700 flex flex-col w-full md:w-64 text-gray-100 bg-white flex-shrink-0" x-data="{ open: false }">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-100 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">DeepCity LSPD</a>
            </div>
            <!-- <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block py-4 px-4 md:pb-0 md:overflow-y-auto">
                <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="#">Se connecter</a>
                <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="#">S'inscrire</a>
            </nav> -->
        </div>

        <div class="h-screen font-sans backOUT bg-cover pt-14 md:pt-0 md:ml-64 w-full">
            <div class="container w-full mx-auto h-full flex flex-1 justify-center items-center">
                <div class="w-full max-w-lg">
                    <div class="leading-loose">
                        <form class="w-full p-10 bg-white bg-opacity-50 shadow-xl" method="POST" action="processlogin.php" method="post">
                            <p class="text-white font-medium text-center text-lg font-bold">Connexion</p>
                            <div class="mt-2">
                                <label class="block text-sm text-white" for="email">Pseudonyme</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="text" id="username" name="username" placeholder="JohnDoe" aria-label="email" required>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-white">Mot de passe</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="password" id="password" name="password" placeholder="*******" arial-label="password" required>
                            </div>

                            <div class="mt-4 items-center flex justify-between">
                                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded" type="submit">Confirmer</button>
                                <!-- <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400" href="#">Esqueceu a senha ?</a> -->
                            </div>

                            <div class="mt-6">
                                    <?php echo isset($_SESSION['error']) ? $_SESSION['error'] : "";?>
                            </div>

                            <!-- <div class="text-center mt-6">
                                    Vous n'avez pas de compte, créez en un 
                                    <a href="/register.php" class="font-semibold">
                                        ici
                                    </a>
                                    !
                                </div> -->
                        </form>
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

<?php require('clearError.php'); ?>