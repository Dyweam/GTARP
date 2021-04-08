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
        <a class="cst-btn w-full block px-4 py-2 text-xs font-semibold text-gray-100" href="/index.php">Accueil</a>
        <a class="cst-btn w-full block px-4 py-2 text-xs font-semibold text-gray-100" href="/member/members.php">Membres</a>
        <a class="cst-btn w-full block px-4 py-2 text-xs font-semibold text-gray-100" href="/citizen/citizens.php">Citoyens</a>
        <a class="cst-btn w-full block px-4 py-2 text-xs font-semibold text-gray-100" href="/casier/casiers.php">Casier</a>
        <div @click.away="open = false" class="relative outline-none" x-data="{ open: false }">
            <a @click="open = !open" class="cursor-pointer cst-btn border-none outline-none flex flex-row items-center w-full px-4 py-2 text-xs font-semibold text-left bg-transparent">
                <span><?php echo $_SESSION['user']['username']?></span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-300 transform md:-mt-1">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                <div class="px-2 py-2 bg-gray-700 shadow">
                    <a class="cst-btn w-full block px-4 py-2 text-xs font-semibold text-gray-100" href="#">Profil</a>
                    <a class="cst-btn w-full block px-4 py-2 text-xs font-semibold text-gray-100" href="../logout.php">Deconnexion</a>
                </div>
            </div>
            <p class="mx-6 my-6 md:hidden">Bienvenue, <b><?php echo $_SESSION['user']['username']?></b> !</p>
        </div>
    </nav>
    <p class="mx-6 my-6 hidden md:block">Bienvenue, <b><?php echo $_SESSION['user']['username']?></b> !</p>
</div>