<div class="container mx-auto max-w-screen-xl">
  <div class="flex flex-wrap md:flex-nowrap pt-10 mx-5">
    <div class="flex flex-col w-full md:w-1/3 space-y-3 md:mr-10">
      <div class="text-gray-200">
        <div class="text-lg pb-3">Questions du quiz</div>
        <div class="flex justify-between items-center">
          <div>6/10</div>
          <button class="focus:outline-none"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
            </svg></button>
        </div>
      </div>
      <?php for ($i = 1; $i <= 2; $i++) { ?>
        <div class="flex items-center p-2 border rounded shadow">
          <div class="mr-2">
            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
            </svg>
          </div>
          <span class="text-gray-200"><a href="">Quel célèbre super-héro a pour origine la planète Krypton ?</a></span>
        </div>
      <?php } ?>
    </div>

    <div class="flex flex-col w-full md:w-2/3 text-gray-200 mt-5 md:mt-0">
      <div class="text-lg pb-3">Création du quiz</div>

      <div class="pb-3">Étape 1 : ajouter dans la bibliothèque</div>
      <div class="bg-gray-700 p-5 ring-black ring-2 ring-opacity-10 shadow">
        <form action="" method="GET">
          <div>
            <label class="block mb-2 text-gray-200" for="nameQuiz">Nom du quiz</label>
            <input class="w-full p-2 mb-6 text-gray-200 bg-gray-800 focus:border-transparent" type="text" name="nameQuiz" id="nameQuiz" placeholder="ex: L'origine de nos super-héros">
          </div>
          <div class="w-1/2">
            <label class="block mb-2 text-gray-200" for="imgQuiz">Image du quiz</label>
            <input type="file" class="h-full w-full mb-6" name="imgQuiz" id="imgQuiz">
          </div>
          <div class="w-1/2">
            <label class="block mb-2 text-gray-200" for="categoryQuiz">Catégorie du quiz</label>
            <select class="bg-gray-800" name="categoryQuiz" id="categoryQuiz">
              <option value="nature">Nature</option>
              <option value="sciences">Sciences</option>
              <option value="histoire">Histoire</option>
              <option value="loisirs">Loisirs</option>
              <option value="sports">Sports</option>
              <option value="arts-et-lettres">Arts et Lettres</option>
            </select>
          </div>

          <button class="mt-5 bg-green-600 hover:bg-green-700 text-gray-200 font-bold py-2 px-4 rounded outline-none" name="create-quiz" type="submit" value="">
            Valider
          </button>
        </form>
      </div>

      <div class="pb-3 mt-5">Étape 2 : ajouter les questions et réponses</div>
      <div class="bg-gray-700 p-5 shadow mb-20">
        <form action="">
          <label class="block mb-2 text-gray-200" for="titleQuiz">La question</label>
          <input class="w-full p-2 mb-6 text-gray-200 bg-gray-800 focus:border-transparent" type="text" name="titleQuiz" id="titleQuiz" placeholder="ex: Quel célèbre super-héro à pour origine la planère Krypton ?">

          <label class="block mb-2 text-gray-200" for="goodAnswer">Bonne réponse <ion-icon class="text-green-400" name="checkmark-circle"></ion-icon></label>
          <input class="w-full p-2 mb-6 text-gray-200 bg-gray-800 focus:border-transparent" type="text" name="goodAnswer" id="goodAnswer" placeholder="ex: Super-man">

          <label class="block mb-2 text-gray-200" for="FirstWrong">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon></label>
          <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="FirstWrong" id="FirstWrong" placeholder="ex: Wonder Woman">

          <label class="block mb-2 text-gray-200" for="thirdWrong">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon></label>
          <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="thirdWrong" id="thirdWrong" placeholder="ex: Hulk">

          <label class="block mb-2 text-gray-200" for="fourthWrong">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon></label>
          <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="fourthWrong" id="fourthWrong" placeholder="ex: Wolverine">

          <div>
            <button class="bg-blue-600 hover:bg-blue-700 text-gray-200 font-bold py-2 px-4 rounded" name="create-question" type="submit" value="">
              Ajouter
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>