<?php
require('../connect.php');
require('../session.php');
?>

<?php include_once('../component/head.php'); ?>

<?php confirm_logged_in(); ?>

<?php redirect_is_moderator(); ?>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <?php include_once('../component/navbar.php') ?>



        <div style="min-height: 100vh;" class="font-sans back bg-cover pt-14 md:pt-0 md:ml-64 w-full">
            <?php

            $query = "SELECT * FROM users where id = " . $_POST['user_id'];
            $result = mysqli_query($conn, $query);

            if ($result) {
                $row = mysqli_fetch_row($result);
            }

            ?>
            <div class="w-full mx-auto h-full flex flex-col" style="min-height: 90vh;">
                <div class="py-4 px-4 bg-gray-600 text-white font-semibold">Édition d'un membre</div>
                <a href="/member/members.php" class="ml-auto mr-12 md:mr-20 lg:mr-32 my-6 px-4 py-1 text-gray-900 font-light tracking-wider bg-gray-100 hover:bg-gray-200 rounded" type="submit">Retour</a>

                <?php echo isset($_SESSION['error']) ? '<div class="md:mx-20 lg:mx-32 md:rounded p-6 bg-white border-b border-gray-200 mb-4">' . $_SESSION['error'] . '</div>' : ""  ?>

                <div class="md:mx-20 lg:mx-32 md:rounded p-6 bg-white border-b border-gray-200">
                    <div class="p-2 font-semibold">
                        Remplissez les informations nécessaires
                    </div>

                    <form method="POST" class="md:px-10" method="POST" action="/member/memberPatch.php">
                        <input name="user_id" type="hidden" value=<?php echo $row[0]; ?>>
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="name">
                                Pseudonyme
                            </label>
                            <input value="<?php echo $row[1]; ?>" class="p-2 bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="username" type="text" disabled autofocus="autofocus">
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="newPassword">
                                Nouveau Mot de passe
                            </label>
                            <input class="p-2 bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="newPassword" type="password" name="newPassword">
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="newPasswordConfirm">
                                Confirmation nouveau Mot de passe
                            </label>
                            <input class="p-2 bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="newPasswordConfirm" type="password" name="newPasswordConfirm">
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="password">
                                Mot de passe *
                            </label>
                            <input class="p-2 bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="password" type="password" name="password" required>
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="passwordConfirm">
                                Confirmation Mot de passe *
                            </label>
                            <input class="p-2 bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="passwordConfirm" type="password" name="passwordConfirm" required>
                        </div>

                        <div class="mt-4">
                            <label class="inline-flex items-center mt-3">
                                <input <?php echo ($row[3] ? 'checked' : '');?> name="moderator" id="moderator" type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Modérateur</span>
                            </label>
                        </div>

                        <div class="mt-4 text-xs">Les champs avec un * (astérisque) sont obligatoires.</div>

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