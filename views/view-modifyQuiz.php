<div class="container mx-auto max-w-screen-md md:py-10">
    <div class="flex flex-col w-full text-gray-200 mt-5 md:mt-0">
        <div class="text-xl pb-3 px-2">Module de création de quiz</div>
        <div class="pb-3 px-2">Modifier le quiz</div>

        <?php
        // Nous allons afficher le formulaire : 
        //    si modifyQuiz n'est pas vide = nous venons bien de la page detailQuiz
        //    si le tableau d'erreurs n'est pas vide = le formulaire contient des erreurs
        if (!empty($_POST['modifyQuiz']) || !empty($errors)) { ?>
            <p class="text-lg text-center text-red-500"><?= $messages['updateQuiz'] ?? '' ?></p>
        <?php
            include 'include/form-modifyQuiz.php';
            // si la requête d'update passe, nous l'indiquons à l'utilisateur via un message
        } else if ($updateQuizInBase) { ?>
            <div class="w-full text-white bg-green-500">
                <div class="container flex items-center px-6 py-4 mx-auto">
                    <div class="flex">
                        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                        </svg>
                        <p class="mx-3"><?= $messages['updateQuiz'] ?? '' ?></p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a type="button" href="library.php" class="bg-purple-700 mx-auto hover:bg-purple-600 text-white text-sm px-4 py-2">Bibliothèque</a>
            </div>
        <?php
            // si aucune condition n'est remplie, cela nous indique que l'utilisateur a directement saisi l'URL, nous lui indiquons donc via un message
        } else { ?>
            <p class="text-lg text-center text-red-500"><?= $messages['updateQuiz'] ?? '' ?></p>
            <div class="text-center mt-4">
                <a type="button" href="library.php" class="bg-purple-700 mx-auto hover:bg-purple-600 text-white text-sm px-4 py-2">Bibliothèque</a>
            </div>
        <?php
        } ?>
    </div>
</div>
</div>