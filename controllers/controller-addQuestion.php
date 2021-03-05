<?php
var_dump($_SESSION);
require_once '../models/database.php';
require_once '../models/quiz.php';

// enregistrement
$addQuestionInBase = false;

// regex 
$errors = [];
$regexText = '/^[A-zÀ-û 0-9œ\-\',?%ç]+$/';

$quizObj = new Quiz;

if (isset($_GET['idQuiz'])) {
    $_SESSION['idQuiz'] = $_GET['idQuiz'];
}

if (isset($_POST['addQuestionBtn'])) {

    // check titre du quiz
    if (isset($_POST['questionQuiz'])) {

        if (!preg_match($regexText, $_POST['questionQuiz'])) {
            $errors['questionQuiz'] = 'Veuillez écrire des caractères alphanumériques';
        }

        if (empty($_POST['questionQuiz'])) {
            $errors['questionQuiz'] = 'Veuillez renseigner ce champ';
        }
    }

    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {
        $quizObj = new Quiz;

        // Création d'un tableau contenant toutes les infos du formulaire
        $quizInfo = [
            'qQuestion' => htmlspecialchars($_POST['questionQuiz']),
            'id_library'=> $_SESSION['idQuiz']
        ];

        if ($quizObj->addQuestion($quizInfo)) {
            $addQuestionInBase = true;
            $messages['addQuestion'] = 'Quiz enregistré';
        } else {
            $messages['addQuestion'] = 'Erreur de connexion lors de l\'enregistrement';
        }
    }
}

