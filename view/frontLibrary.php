<main id="news" class="bg-black md:p-10">

    <div class="container mx-auto max-w-screen-xl bg-gray-900 pt-2 px-3 md:px-5 md:rounded-3xl">

        <div class="flex items-center relative">
            <svg class="w-6 h-6 absolute text-gray-400 top-4 left-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input type="text" class="group bg-gray-900 h-14 pl-10 w-full  border-none focus:outline-none focus:ring-transparent	hover:cursor-pointer" placeholder="Rechercher un quiz">
        </div>

        <hr class="border-1 border-gray-700 pb-3">

        <div class="flex justify-between items-center pb-3">
            <div class="relative inline-block">
                <div id="menu-btn">
                    <button href="all" type="button" class="inline-flex justify-center px-4 py-2 rounded-xl text-sm font-medium text-gray-200 bg-gray-800 focus:outline-none" id="options-menu" aria-haspopup="true" aria-expanded="true">
                        Art et lettre
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Dropdown -->

                <div id="dropdown" class="hidden absolute left-0 top-0 w-40 rounded-md shadow-lg bg-gray-800 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:text-gray-50" role="menuitem">TOUT</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:text-gray-50" role="menuitem">Nature</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:text-gray-50" role="menuitem">Arts et Lettres</a>
                    </div>
                </div>
            </div>
            <div class="font-light">
                <div>10 Quiz </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 md:gap-4">

            <?php
            for ($i = 1; $i <= 14; $i++) { ?>

                <div>
                    <a href="#" class="flex py-2 md:py-3 px-3 group rounded-lg bg-gray-800 ring-1 ring-black ring-opacity-10 shadow-lg hover:bg-gray-700 transition duration-300 ease-in-out">
                        <img class="h-20 w-20 object-cover md:h-24 md:w-24 flex-shrink-0 rounded-lg" src="img/gameconsole.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Loisirs</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Nos anciennes consoles de jeux vidéos !</h2>
                        </div>
                    </a>
                </div>

            <?php } ?>

        </div>

        <div class="py-6 md:py-8 flex justify-center">
            <ul class="flex pl-0 rounded list-none flex-wrap">
                <li>
                    <a href="#" class="text-md font-semibold flex px-3 py-2 md:px-6 md:py-4 rounded-xl leading-tight text-white bg-gray-600 hover:bg-gray-700 mr-2">
                        Précédent
                    </a>
                </li>
                <li>
                    <a href="#" class="text-md font-semibold flex px-3 py-2 md:px-6 md:py-4 rounded-xl leading-tight text-white bg-pink-600 hover:bg-pink-700">
                        Suivant
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>
