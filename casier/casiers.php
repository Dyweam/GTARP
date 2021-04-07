<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Menu | DeepCity LSPD</title>
</head>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <div @click.away="open = false" class="h-auto md:h-screen z-30 fixed bg-gray-700 flex flex-col w-full md:w-64 text-gray-100 bg-white flex-shrink-0" x-data="{ open: false }">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-100 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">DeepCity LSPD</a>
                <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block py-4 px-4 md:pb-0 md:overflow-y-auto">
            <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="/index.php">Accueil</a>
                <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="/member/members.php">Membres</a>
                <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="/citizen/citizens.php">Citoyens</a>
                <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="/casier/casiers.php">Casier</a>
                <div @click.away="open = false" class="relative outline-none" x-data="{ open: false }">
                    <a @click="open = !open" class="cursor-pointer cst-btn border-none outline-none flex flex-row items-center w-full px-4 py-2 text-sm font-semibold text-left bg-transparent">
                        <span>Dropdown</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-300 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-gray-700 shadow">
                            <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="#">Blog</a>
                            <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="#">Blog</a>
                            <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="#">Blog</a>
                        </div>
                    </div>
                    <p class="mx-6 my-6 md:hidden">Bienvenue, <b>Gabriel</b> !</p>
                </div>
            </nav>
            <p class="mx-6 my-6 hidden md:block">Bienvenue, <b>Gabriel</b> !</p>
        </div>

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
            <style>
                .back {
                    /*
                        background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
                    */
                    /* background: url('http://bit.ly/2gPLxZ4'); */
                    background: url('../car.jpg');
                    background-repeat: no-repeat;
                    background-size: cover;

                    /* filter: blur(8px);
                    -webkit-filter: blur(8px); */
                }
            </style>
            <div class="bg-gray-600 px-8 py-4 flex">
                <p class="mt-auto block px-4 py-1 text-sm font-semibold text-gray-100 mx-auto" href="#">Copyright © Gabriel DELAHAYE 2021</p>
            </div>
        </div>
    </div>
</body>

</html>