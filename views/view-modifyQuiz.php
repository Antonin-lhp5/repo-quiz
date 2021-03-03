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
            <p class="text-lg text-center text-green-500">Les modifications ont bien été prises en compte</p>
            <div class="text-center mt-4">
                <a type="button" href="library.php" class="bg-purple-700 mx-auto hover:bg-purple-600 text-white text-sm px-4 py-2">Bibliothèque</a>
            </div>
        <?php
            // si aucune condition n'est remplie, cela nous indique que l'utilisateur a directement saisi l'URL, nous lui indiquons donc via un message
        } else { ?>
            <p class="text-lg text-center text-red-500">Veuillez selectionner un quiz dans la bibliothèque</p>
            <div class="text-center mt-4">
                <a type="button" href="library.php" class="bg-purple-700 mx-auto hover:bg-purple-600 text-white text-sm px-4 py-2">Bibliothèque</a>
            </div>
        <?php
        } ?>
    </div>
</div>
</div>