<!-- navbar goes here -->
<nav class="bg-gray-800">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between">

      <div class="flex items-baseline space-x-4">
        <!-- logo -->
        <div>
          <a href="index.php" class="flex py-5 md:py-0 px-2">
            <div class="font-bold font-title text-white text-lg md:text-xl">Blablaquiz</div>
          </a>
        </div>

        <!-- primary nav -->
        <div class="hidden md:flex space-x-1">
          <a href="index.php" class="px-3 py-5 hover:bg-purple-700 ">Accueil</a>
          <a href="explorer.php" class="px-3 py-5  hover:bg-purple-700">Explorer</a>
          <a href="index.php#news" class="px-3 py-5  hover:bg-purple-700">Nouveautés</a>
        </div>
      </div>

      <!-- administration nav -->
      <div class="hidden md:flex items-center">
        <a href="" class="transition duration-300 ease-in-out focus:outline-none focus:shadow-outline bg-purple-700 hover:bg-purple-900 text-white font-normal py-2 px-4 mr-2 rounded">Quiz</a>
        <a href="" class="transition duration-300 ease-in-out focus:outline-none focus:shadow-outline bg-indigo-700 hover:bg-indigo-900 text-white font-normal py-2 px-4 rounded">Créer</a>
  
        <a href="/deconnexion" class="py-2 px-3 bg-red-700 hover:bg-red-800 rounded transition duration-300 ml-6">Se déconnecter</a>

      </div>

      <!-- mobile button goes here -->
      <div class="md:hidden flex">
        <button class="mobile-menu-button focus:outline-none">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- mobile menu -->
  <div class="mobile-menu hidden md:hidden">
    <a href="#" class="block py-2 px-4 text-sm hover:bg-purple-700">Accueil</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-purple-700">Explorer</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-purple-700">Nouveautés</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-purple-900">Quiz</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-indigo-900">Créer</a>
    <a href="index.php#news" class="block py-2 px-4 text-sm bg-red-700 hover:bg-red-800">Se déconnecter</a>
  </div>
</nav>

