<div class="bg-gray-700 p-5 ring-black ring-2 ring-opacity-10 shadow">
    <div>
        <label class="block mb-2 text-gray-200" for="titleQuiz">Nom du quiz</label>
        <input class="w-full p-2 mb-6 text-gray-400 bg-gray-800 focus:border-transparent" type="text" name="titleQuiz" id="titleQuiz" value="<?= $detailsQuizArray['qTitle'] ?>" disabled>
    </div>
    <div>
        <label class="block text-gray-200 mb-2" for="imgQuiz">Image du quiz</label>
        <img class="h-20 w-20 object-cover md:h-24 md:w-24 flex-shrink-0 rounded-lg mb-2" src="assets/upload<?= $detailsQuizArray['qImg'] ?>" alt="">
        <input class="mb-6" type="file" id="myFile" name="imgQuiz" disabled>
    </div>
    <div>
        <label class="block mb-2 text-gray-200" for="categoryQuiz">Catégorie du quiz</label>
        <select class="bg-gray-800" name="categoryQuiz" id="categoryQuiz" disabled>
            <option selected disabled>Choix de la catégorie</option>
            <?php
            foreach ($allCategoryArray as $category) { ?>
                <option value="<?= $category['id_category'] ?>" <?= $category['id_category'] == $detailsQuizArray['id_category'] ? 'selected' : '' ?>><?= $category['categorie'] ?></option>
            <?php
            } ?>
        </select>
        <div class="flex mt-5">
            <form action="modifyQuiz.php" method="POST">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-gray-200 font-bold py-2 px-4 rounded focus:outline-none mr-3" name="modifyQuiz" value="<?= $detailsQuizArray['id_library'] ?>">Modifier</button>
            </form>
            <a type="button" href="library.php" class="bg-gray-900 hover:bg-gray-800 text-gray-200 font-bold py-2 px-4 rounded">Retour</a>
        </div>

    </div>
</div>