<div class="container mx-auto max-w-screen-lg md:py-10">

  <div class="flex flex-col w-full text-gray-200 mt-5 md:mt-0">
    <div class="text-xl pb-3 px-2">Module de création de quiz</div>
    <div class="pb-3 px-2">Ajouter dans la bibliothèque</div>
    <div class="bg-gray-700 p-5 ring-black ring-2 ring-opacity-10 shadow">
      <form action="/" method="POST" novalidate>
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
            <option selected disabled>Choix de la catégorie</option>
            <?php
            foreach ($selectCategoryArray as $category) { ?>
              <option value="<?= $category['id_Category'] ?>"><?= $category['qCategory'] ?></option>
            <?php
            } ?>
          </select>
        </div>

        <button class="mt-5 bg-green-600 hover:bg-green-700 text-gray-200 font-bold py-2 px-4 rounded outline-none" name="create-quiz" type="submit" value="">
          Enregistrer
        </button>
      </form>
    </div>
  </div>
</div>