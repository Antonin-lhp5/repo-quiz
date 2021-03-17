<?php
require_once '../models/database.php';
require_once '../models/quiz.php';

if (isset($_GET['idQuiz']) && isset($_GET['idQuestion'])) {
    $_SESSION['idQuiz'] = $_GET['idQuiz'];
    $_SESSION['idQuestion'] = $_GET['idQuestion'];
}

$quizObj = new Quiz;
$allQuestionArray = $quizObj->getAllQuestions($_SESSION['idQuiz']);

$totalQuestions = count($allQuestionArray);

$questionInfoArray = $quizObj->getOneQuestionAndAnwser($_SESSION['idQuestion']);

// regex 
$errors = [];
$regexText = '/^[A-zÀ-û 0-9œ\-\',?%ç]+$/';

// mise en place d'une variable permettant de savoir si nous avons créer les questions et réponses dans la base
$updateQuizInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

if (isset($_POST['updateQuestionBtn'])) {

    // check titre du quiz
    if (isset($_POST['questionQuiz'])) {

        if (!preg_match($regexText, $_POST['questionQuiz'])) {
            $errors['questionQuiz'] = 'Les caractères spéciaux utilisés ne sont pas autorisés';
        }

        if (empty($_POST['questionQuiz'])) {
            $errors['questionQuiz'] = 'Veuillez renseigner ce champ';
        }
    }

    // check goodOption = bonne réponse 
    if (isset($_POST['goodOption'])) {

        if (!preg_match($regexText, $_POST['goodOption'])) {
            $errors['goodOption'] = 'Les caractères spéciaux utilisés ne sont pas autorisé';
        }

        if (empty($_POST['goodOption'])) {
            $errors['goodOption'] = 'Veuillez renseigner ce champ';
        }
    }

    // check option1 = mauvaise réponse 1
    if (isset($_POST['option1'])) {

        if (!preg_match($regexText, $_POST['option1'])) {
            $errors['option1'] = 'Les caractères spéciaux utilisés ne sont pas autorisés';
        }

        if (empty($_POST['option1'])) {
            $errors['option1'] = 'Veuillez renseigner ce champ';
        }
    }

    // check option2 = mauvaise réponse 2
    if (isset($_POST['option2'])) {

        if (!preg_match($regexText, $_POST['option2'])) {
            $errors['option2'] = 'Les caractères spéciaux utilisés ne sont pas autorisés';
        }

        if (empty($_POST['option2'])) {
            $errors['option2'] = 'Veuillez renseigner ce champ';
        }
    }

    // check option3 = mauvaise réponse
    if (isset($_POST['option3'])) {

        if (!preg_match($regexText, $_POST['option3'])) {
            $errors['option3'] = 'Les caractères spéciaux utilisés ne sont pas autorisés';
        }

        if (empty($_POST['option3'])) {
            $errors['option3'] = 'Veuillez renseigner ce champ';
        }
    }

    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {
        $quizObj = new Quiz;

        // Création d'un tableau contenant toutes les infos du formulaire
        $updateQuestion = [
            'qQuestion' => htmlspecialchars($_POST['questionQuiz']),
            'id_library' => $_SESSION['idQuiz'],
            'goodOption' => htmlspecialchars($_POST['goodOption']),
            'option1' => htmlspecialchars($_POST['option1']),
            'option2' => htmlspecialchars($_POST['option2']),
            'option3' => htmlspecialchars($_POST['option3']),
            'id_question' => $_SESSION['idQuestion']
        ];

        var_dump($updateQuestion);

        if ($quizObj-> updateQuestionAndAnswer($updateQuestion)) {
            $updateQuizInBase = true;
            $messages['updateQuestion'] = 'Les modifications ont bien été prises en compte';
        } else {
            $messages['updateQuestion'] = 'Erreur de connexion lors de la modification';
        }
    }
}
