<div class="bg-gray-700 p-5 ring-green-600 ring-2 shadow">
    <div>
        <label class="block mb-2 text-gray-200" for="titleQuiz">Nom du quiz</label>
        <input class="w-full p-2 mb-6 bg-gray-800 focus:border-transparent" type="text" name="titleQuiz" id="titleQuiz" value="<?= $quizInfoArray['qTitle']  ?? (isset($_POST['qTitle']) ? htmlspecialchars($_POST['qTitle']) : '')?>">
    </div>
    <div>
        <label class="block text-gray-200 mb-2" for="imgQuiz">Image du quiz</label>
        <input class="mb-6" type="file" id="myFile" name="imgQuiz">
    </div>
    <div>
        <label class="block mb-2 text-gray-200" for="categoryQuiz">Catégorie du quiz</label>
        <select class="bg-gray-800" name="categoryQuiz" id="categoryQuiz">
            <option selected disabled>Choix de la catégorie</option>
            <?php
            foreach ($allCategoryArray as $category) { ?>
                <option value="<?= $category['id_category'] ?>" <?= $category['id_category'] == $quizInfoArray['id_category'] ? 'selected' : '' ?>><?= $category['categorie'] ?></option> 
            <?php 
            } ?>
        </select>

        <form action="modifyQuiz.php" method="POST">
            <button type="submit" class="mt-5 bg-green-600 hover:bg-green-700 text-gray-200 font-bold py-2 px-4 rounded outline-none" name="updateQuizBtn">Modifier</button>
            <a type="button" href="library.php" class="mt-5 bg-gray-900 hover:bg-gray-800 text-gray-200 font-bold py-2 px-4 rounded outline-none">Retour</a>
        </form>
    </div>
</div>