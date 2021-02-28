<?php

require_once '../model/database.php';
require_once '../model/quiz.php';

$categoryObj = new Quiz;
$allCategoryArray = $categoryObj->getAllCategory();

// enregistrement
$addQuizInBase = false;

// regex 
$errors = [];
$regexTitle = '/^[A-zÀ-û 0-9œ\-\',?%ç]+$/';



if (isset($_POST['addQuiz'])) {

    // check input nameQuiz
    if (isset($_POST['titleQuiz'])) {

        if (!preg_match($regexTitle, $_POST['titleQuiz'])) {
            $errors['titleQuiz'] = 'Veuillez écrire des caractères alphanumériques';
        }

        if (empty($_POST['titleQuiz'])) {
            $errors['titleQuiz'] = 'Veuillez renseigner ce champ';
        }
    }

    // check image

    if (isset($_FILES['imgQuiz']) && $_FILES['imgQuiz']['error'] == 0) {
        $extensionsAllowed = ['image/jpeg', 'image/png']; 
        $mimeTypeUploadedFile = mime_content_type($_FILES['imgQuiz']['tmp_name']);
        if (in_array($mimeTypeUploadedFile, $extensionsAllowed)) {
            if ($_FILES['imgQuiz']['size'] <= 50000) {
                $pathInfoUploadedFile = pathinfo($_FILES['imgQuiz']['name']);
                $newUploadedFileName = uniqid($pathInfoUploadedFile['filename']);
                $fileExtension = $pathInfoUploadedFile['extension'];
                $targetDirectory = 'assets/upload';
                $newUploadedFileNamePlusTargetDirectory = $targetDirectory . $newUploadedFileName . '.' . $fileExtension;
                if (move_uploaded_file($_FILES['imgQuiz']['tmp_name'], $newUploadedFileNamePlusTargetDirectory)) {
                    $message = 'Quiz enregistré !';
                } else {
                    $errors['imgQuiz'] = 'Une erreur est survenue lors de l\'upload du fichier, veuillez réessayer';
                }
            } else {
                $errors['imgQuiz'] = 'Votre fichier est trop lourd, la taille maximale est de 5MB.';
            }
        } else {
            $errors['imgQuiz'] = 'Veuillez choisir un fichier image (jpeg / jpg, png).';
        }
    } else {
        $errors['imgQuiz'] = 'Votre fichier n\'a pu être envoyé, veuillez réessayer.';
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
            'qImg' => $newUploadedFileName . '.' . $fileExtension,
            'id_category' => htmlspecialchars($_POST['categoryQuiz']),
        ];

        if ($quizObj->addQuiz($quizInfo)) {
            $addQuizInBase = true;
            $messages['addQuiz'] = 'Quiz enregistré';
        } else {
            $messages['addQuiz'] = 'Erreur de connexion lors de l\'enregistrement';
        }
    }
}

