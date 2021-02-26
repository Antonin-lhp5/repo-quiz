<?php
require_once '../controller/dashboard.ctrl.php';
user_connecte();
require_once '../controller/controller-creer.php';
require_once '../view/header.php'; ?>

<?php
// Mise en place d'une condition pour ne plus afficher le formulaire quand la patient a bien été enregistré
if (!$addQuizInBase) { ?>
    <!-- si le patient n'est pas enregistré nous indiquons l'utilisateur via un message -->
    <p class="text-center text-xl text-red-600"><?= $messages['addQuiz'] ?? '' ?></p>

<?php
    // Mise en place d'un include pour la mise en place du formulaire
    require_once '../view/creer.html.php';
} else { ?>
    <!-- si le patient a bien été enregistré nous indiquons l'utilisateur via un message -->
    <p class="h5 text-center text-info"><?= $messages['addQuiz'] ?? '' ?></p>
    <div class="text-center mt-4">
        <a href="library.php" class="text-md font-semibold flex px-3 py-2 md:px-6 md:py-4 rounded-xl leading-tight text-white bg-green-600 hover:bg-green-700 mr-2">
            Quiz
        </a>
        <a href="library.php" class="text-md font-semibold flex px-3 py-2 md:px-6 md:py-4 rounded-xl leading-tight text-white bg-green-600 hover:bg-green-700 mr-2">
            Ajouter questions 
        </a>
    </div>

<?php
} ?>

<?php require_once '../view/footer.php'; ?>