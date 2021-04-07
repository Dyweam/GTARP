<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Connexion | DeepCity LSPD</title>
</head>

<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        <div @click.away="open = false" class="h-auto md:h-screen z-30 fixed bg-gray-700 flex flex-col w-full md:w-64 text-gray-100 bg-white flex-shrink-0" x-data="{ open: false }">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-100 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">DeepCity LSPD</a>
                <!-- <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button> -->
            </div>
            <!-- <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block py-4 px-4 md:pb-0 md:overflow-y-auto">
                <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="#">Se connecter</a>
                <a class="cst-btn w-full block px-4 py-2 text-sm font-semibold text-gray-100" href="#">S'inscrire</a>
            </nav> -->
        </div>

        <div class="h-screen font-sans back bg-cover pt-14 md:pt-0 md:ml-64 w-full">
            <div class="container w-full mx-auto h-full flex flex-1 justify-center items-center">
                <div class="w-full max-w-lg">
                    <div class="leading-loose">
                        <form class="w-full p-10 bg-white bg-opacity-50 shadow-xl">
                            <p class="text-white font-medium text-center text-lg font-bold">Connexion</p>
                            <div class="mt-2">
                                <label class="block text-sm text-white" for="email">E-mail</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email" placeholder="johndoe@gmail.com" aria-label="email" required>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-white">Mot de passe</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="password" id="password" placeholder="*******" arial-label="password" required>
                            </div>

                            <div class="mt-4 items-center flex justify-between">
                                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded" type="submit">Confirmer</button>
                                <!-- <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400" href="#">Esqueceu a senha ?</a> -->
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
            <style>
                .back {
                    /*
                        background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
                    */
                    /* background: url('http://bit.ly/2gPLxZ4'); */
                    background: url('car.jpg');
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