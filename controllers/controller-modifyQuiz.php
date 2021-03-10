<?php

require_once '../models/database.php';
require_once '../models/quiz.php';

$categoryObj = new Quiz;
$allCategoryArray = $categoryObj->getAllCategory();

// regex 
$errors = [];
$regexTitle = '/^[A-zÀ-û 0-9œ\-\',?%ç]+$/';

// mise en place d'une variable permettant de savoir si nous avons créer le quiz dans la base
$updateQuizInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

// Nous testons si nous avons bien une valeur non NULL dans le $_POST ModifyQuiz qui signifie que nous venons bien de la page detailsQuiz
if (!empty($_POST['modifyQuiz'])) {
    // Création d'un nouvel objet
    $quizObj = new Quiz;
    // Nous allons récupérer les informations de notre quiz nous permettant de pré-remplir le formulaire
    $quizInfoArray = $quizObj->getDetailsQuiz($_POST['modifyQuiz']);
 
}

if (isset($_POST['updateQuizBtn'])) {

    // check titre du quiz
    if (isset($_POST['titleQuiz'])) {

        if (!preg_match($regexTitle, $_POST['titleQuiz'])) {
            $errors['titleQuiz'] = 'Veuillez écrire des caractères alphanumériques';
        }

        if (empty($_POST['titleQuiz'])) {
            $errors['titleQuiz'] = 'Veuillez renseigner ce champ';
        }
    }

    // check select 
    if (isset($_POST['categoryQuiz'])) {

        if (empty($_POST['categoryQuiz'])) {
            $errors['categoryQuiz'] = 'Veuillez selectionner une catégorie';
        }
    }

    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {
        $quizObj = new Quiz;

        // Création d'un tableau contenant toutes les infos du formulaire
        $quizInfo = [
            'qTitle' => htmlspecialchars($_POST['titleQuiz']),
            'id_category' => htmlspecialchars($_POST['categoryQuiz']),
            // je recupère mon id que j'ai stocké
            'id_library' => $_POST['updateQuizBtn']
        ];

        if ($quizObj->updateQuiz($quizInfo)) {
            $updateQuizInBase = true;
            $messages['updateQuiz'] = 'Les modifications ont bien été prises en compte';
        } else {
            $messages['updateQuiz'] = 'Erreur de connexion lors de la modification';
        }
    }
}
