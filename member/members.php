<?php //require('../session.php'); 
?>

<?php include_once('../component/head.php'); ?>

<?php //confirm_logged_in(); 
?>

<?php //redirect_is_moderator(); 
?>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <?php include_once('../component/navbar.php') ?>

        <div style="min-height: 100vh;" class="font-sans back bg-cover pt-14 md:pt-0 md:ml-64 w-full">
            <div class="w-full mx-auto h-full flex flex-col" style="min-height: 90vh;">

                <div class="py-4 px-4 bg-gray-600 text-white font-semibold">Membres</div>

                <div class="md:mx-12 lg:mx-40 xl:mx-52 2xl:mx-72 pt-8 flex flex-col">

                    <div class="mt-8 bg-white border-t-4 border-indigo-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                                </svg></div>
                            <div>
                                <p class="font-bold">Message</p>
                                <p class="text-sm">Le mot de passe renseigné n'est pas correct !</p>
                            </div>
                        </div>
                    </div>

                    <a href="/member/memberAdd.php" class="ml-auto mr-4 md:mr-0 mt-8 px-4 py-1 text-gray-900 text-base font-normal tracking-wider bg-white hover:bg-gray-200 rounded" type="submit">Ajouter un membre</a>

                    <div class="relative w-full text-gray-600 mt-8">
                        <input class="p-6 bg-red h-10 rounded text-sm focus:outline-none w-full" type="search" name="search" placeholder="Recherchez ici ...">
                        <button type="submit" class="absolute right-0 top-0 mt-4 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>

                    <div class="mt-8 md:rounded p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            <div class="ml-6">
                                <div class="font-medium text-base text-gray-800">NAME</div>
                                <div class="font-medium text-sm text-gray-500">LSPD - 89</div>
                            </div>
                        </div>

                        <br>

                        <div class="ml-3" style="display: flex; margin: auto;">
                            <div class="p-2" style="margin: 0 0 0 auto;">
                                <form action="../member/memberEdit.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="../member/memberDelete.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 md:rounded p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            <div class="ml-6">
                                <div class="font-medium text-base text-gray-800">NAME</div>
                                <div class="font-medium text-sm text-gray-500">LSPD - 89</div>
                            </div>
                        </div>

                        <br>

                        <div class="ml-3" style="display: flex; margin: auto;">
                            <div class="p-2" style="margin: 0 0 0 auto;">
                                <form action="../member/memberEdit.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="../member/memberDelete.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 md:rounded p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            <div class="ml-6">
                                <div class="font-medium text-base text-gray-800">NAME</div>
                                <div class="font-medium text-sm text-gray-500">LSPD - 89</div>
                            </div>
                        </div>

                        <br>

                        <div class="ml-3" style="display: flex; margin: auto;">
                            <div class="p-2" style="margin: 0 0 0 auto;">
                                <form action="../member/memberEdit.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="../member/memberDelete.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 md:rounded p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            <div class="ml-6">
                                <div class="font-medium text-base text-gray-800">NAME</div>
                                <div class="font-medium text-sm text-gray-500">LSPD - 89</div>
                            </div>
                        </div>

                        <br>

                        <div class="ml-3" style="display: flex; margin: auto;">
                            <div class="p-2" style="margin: 0 0 0 auto;">
                                <form action="../member/memberEdit.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="../member/memberDelete.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 md:rounded p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            <div class="ml-6">
                                <div class="font-medium text-base text-gray-800">NAME</div>
                                <div class="font-medium text-sm text-gray-500">LSPD - 89</div>
                            </div>
                        </div>

                        <br>

                        <div class="ml-3" style="display: flex; margin: auto;">
                            <div class="p-2" style="margin: 0 0 0 auto;">
                                <form action="../member/memberEdit.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="../member/memberDelete.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 md:rounded p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            <div class="ml-6">
                                <div class="font-medium text-base text-gray-800">NAME</div>
                                <div class="font-medium text-sm text-gray-500">LSPD - 89</div>
                            </div>
                        </div>

                        <br>

                        <div class="ml-3" style="display: flex; margin: auto;">
                            <div class="p-2" style="margin: 0 0 0 auto;">
                                <form action="../member/memberEdit.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="../member/memberDelete.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 md:rounded p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            <div class="ml-6">
                                <div class="font-medium text-base text-gray-800">NAME</div>
                                <div class="font-medium text-sm text-gray-500">LSPD - 89</div>
                            </div>
                        </div>

                        <br>

                        <div class="ml-3" style="display: flex; margin: auto;">
                            <div class="p-2" style="margin: 0 0 0 auto;">
                                <form action="../member/memberEdit.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="../member/memberDelete.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 md:rounded p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            <div class="ml-6">
                                <div class="font-medium text-base text-gray-800">NAME</div>
                                <div class="font-medium text-sm text-gray-500">LSPD - 89</div>
                            </div>
                        </div>

                        <br>

                        <div class="ml-3" style="display: flex; margin: auto;">
                            <div class="p-2" style="margin: 0 0 0 auto;">
                                <form action="../member/memberEdit.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="p-2">
                                <form action="../member/memberDelete.php" method="POST" class="d-inline">
                                    <input type="hidden" value="TEST" name="user_id">
                                    <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <?php //echo isset($_SESSION['error']) ? '<div class="md:mx-12 md:rounded p-6 bg-white border-b border-gray-200 mb-4">' . $_SESSION['error'] . '</div>' : ""  
                ?>

                <?php //include_once('../component/members.php') 
                ?>

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

<?php //require('../clearError.php'); 
?>