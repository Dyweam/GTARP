<?php require('../session.php'); ?>

<?php include_once('../component/head.php'); ?>

<?php confirm_logged_in(); ?>

<?php redirect_is_moderator(); ?>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <?php include_once('../component/navbar.php') ?>

        <div style="min-height: 100vh;" class="font-sans back bg-cover pt-14 md:pt-0 md:ml-64 w-full">
            <div class="w-full mx-auto h-full flex flex-col" style="min-height: 90vh;">
                <div class="py-4 px-4 bg-gray-600 text-white font-semibold">Membres</div>
                <a href="/member/memberAdd.php" class="ml-auto my-6 mx-12 px-4 py-1 text-gray-900 font-light tracking-wider bg-gray-100 hover:bg-gray-200 rounded" type="submit">Ajouter un membre</a>

                <?php echo isset($_SESSION['error']) ? '<div class="md:mx-12 md:rounded p-6 bg-white border-b border-gray-200 mb-4">' . $_SESSION['error'] . '</div>' : ""  ?>

                <?php include_once('../component/members.php') ?>

                <!-- <div class="p-2" style="margin: 0 0 0 auto;">
                    <form action="member/memberDelete.php" method="POST" class="d-inline">
                        <input type="hidden" value="" name="user_id">
                        <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                            <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                        </button>
                    </form>
                </div>
                <div class="p-2">
                    <form action="member/members.php" method="POST" class="d-inline">
                        <input type="hidden" value="" name="user_id">
                        <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                            <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                        </button>
                    </form>
                </div> -->
            </div>
            <div class="bg-gray-600 px-8 py-4 flex">
                <p class="mt-auto block px-4 py-1 text-sm font-semibold text-gray-100 mx-auto" href="#">Copyright © Gabriel DELAHAYE 2021</p>
            </div>
        </div>
    </div>
</body>

</html>

<?php require('../clearError.php'); ?>