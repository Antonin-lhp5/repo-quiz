<div class="bg-gray-700 p-5 ring-black ring-2 ring-opacity-10 shadow">
    <div>
        <label class="block mb-2 text-gray-200" for="titleQuiz">Nom du quiz</label>
        <input class="w-full p-2 mb-6 text-gray-400 bg-gray-800 focus:border-transparent" type="text" name="titleQuiz" id="titleQuiz" value="<?= $detailsQuizArray['qTitle'] ?>" disabled>
    </div>
    <div>
        <label class="block text-gray-200 mb-2" for="imgQuiz">Image du quiz</label>
        <img class="h-20 w-20 object-cover md:h-24 md:w-24 flex-shrink-0 rounded-lg mb-2" src="assets/upload<?= $detailsQuizArray['qImg'] ?>" alt="">
        <input class="mb-6" type="file" class="hidden" id="myFile" name="imgQuiz" disabled>

        <!-- nouveau input -->

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
                <button type="submit" class="bg-gray-600 border-2 border-transparent hover:border-green-600 text-gray-200 font-bold py-2 px-4 rounded focus:outline-none mr-3" name="modifyQuiz" value="<?= $detailsQuizArray['id_library'] ?>">Modifier</button>
            </form>
            <a type="button" href="library.php" class="bg-gray-900 hover:bg-gray-800 text-gray-200 font-bold py-2 px-4 rounded">Retour</a>
        </div>

    </div>

    <div class="">
        <p class="pt-5 pb-2">Questions <span><?= $totalQuestions ?>/10</span></p>
        <?php foreach ($detailsQuestionAndAnswerArray as $details) { ?>
            <div class="bg-gray-800 p-4 mb-2 rounded-md flex-col">
                <div> <?= $details['qQuestion'] ?> </div>
                <div class="flex">
                    <div class="w-1/2">
                        <div class="flex items-center"><span class="mr-3">
                                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </span><?= $details['goodOption'] ?></div>
                        <div class="flex items-center"><span class="mr-3">
                                <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                            </span><?= $details['option1'] ?></div>
                    </div>
                    <div class="w-1/2">
                        <div class="flex items-center"><span class="mr-3">
                                <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                            </span><?= $details['option2'] ?></div>
                        <div class="flex items-center"><span class="mr-3">
                                <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                            </span><?= $details['option3'] ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


</div>