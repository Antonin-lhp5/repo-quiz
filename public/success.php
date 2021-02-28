<?php require_once '../view/header.php'; ?>

<div class="container mx-auto max-w-screen-md md:py-10">
  <div class="flex flex-col w-full text-gray-200 mt-5 md:mt-0">
    <div class="text-xl pb-3 px-2">Module de création de quiz</div>
    <div class="pb-3 px-2">Ajouter dans la bibliothèque</div>


      <div class="w-full text-white bg-green-500">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
          <div class="flex">
            <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
              <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
            </svg>
            <p class="mx-3"><?= $messages['addQuiz'] ?? '' ?></p>
          </div>

          <a href="addQuiz.php" type="submit" class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 ">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </div>


      <section class="flex flex-col md:flex-row justify-center md:h-48 sm:mt-5">
        <div class="shadow-lg flex flex-col sm:flex-row w-full">
          <div class="w-full bg-blue-900 p-4 text-white text-center flex flex-col justify-center ">

            <h2 class="text-lg">Espace questions</h2>
            <p class="text-md mt-2">Ajouter vos questions et réponses</p>
            <a href="library.php" class="bg-blue-700 mx-auto hover:bg-blue-600 mt-4 text-white text-sm px-4 py-2 w-3/5">
              Ajouter
            </a>

          </div>
          <div class="w-full bg-purple-900 p-4 text-white text-center flex flex-col justify-center ">

            <h2 class="text-lg">Quiz</h2>
            <p class="text-md mt-2">Retournez à la bibliothèque des quiz</p>
            <a href="library.php" class="bg-purple-700 mx-auto hover:bg-purple-600 mt-4 text-white text-sm px-4 py-2 w-3/5">
              Quiz
            </a>

          </div>
        </div>
      </section>
      </div>
    </div>
  </div>
</div>

<?php require_once '../view/footer.php'; ?>