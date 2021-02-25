<div class="container mx-auto max-w-screen-lg md:py-10">
  <div class="flex flex-col w-full text-gray-200 mt-5 md:mt-0">
    <div class="text-xl pb-3 px-2">Module de création de quiz</div>
    <div class="pb-3 px-2">Ajouter dans la bibliothèque</div>

    <div class="bg-gray-700 p-5 ring-black ring-2 ring-opacity-10 shadow">
      <form action="" method="POST" enctype="multipart/form-data" novalidate>
        <div>
          <label class="block mb-2 text-gray-200" for="titleQuiz">Nom du quiz <span class="text-red-500 ml-2"><?= $errors['titleQuiz'] ?? '' ?></span></label>
       
          <input class="w-full p-2 mb-6 text-gray-200 bg-gray-800 focus:border-transparent" type="text" name="titleQuiz" id="titleQuiz" placeholder="ex: L'origine de nos super-héros">
        </div>
        <div>
          <label class="block mb-2 text-gray-200" for="imgQuiz">Image du quiz <span class="text-red-500 ml-2"><?= $errors['imgQuiz'] ?? '' ?></span></label>
            <input class="mb-6" type="file" id="myFile" name="imgQuiz">
        </div>
        <div>
          <label class="block mb-2 text-gray-200" for="categoryQuiz">Catégorie du quiz <span class="text-red-500 ml-2"><?= $errors['categoryQuiz'] ?? '' ?></span></label>
          <select class="bg-gray-800" name="categoryQuiz" id="categoryQuiz">
            <option selected disabled>Choix de la catégorie</option>
            <?php
            foreach ($allCategoryArray as $category) { ?>
              <option value="<?= $category['id_category'] ?>"><?= $category['categorie'] ?></option>
            <?php
            } ?>
          </select>
        </div>
        <button class="mt-5 bg-green-600 hover:bg-green-700 text-gray-200 font-bold py-2 px-4 rounded outline-none" name="addQuiz" type="submit" value="">
          Enregistrer
        </button>
      </form>
    </div>
  </div>
</div>