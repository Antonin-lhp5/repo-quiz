<?php
// session_start();

require_once '../models/database.php';
require_once '../models/quiz.php';
var_dump($_POST);

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
    // Pour plus de sécurité, je stock l'id du quiz à modifier dans une variable de session
    $_SESSION['idQuizToUpdate'] = $quizInfoArray['id_library'];
    var_dump($quizInfoArray);
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
            // je recupère mon id que j'ai stocké dans ma variable de session
            // 'id_library' => $_SESSION['idQuizToUpdate']
        ];

        if ($quizObj->updateQuiz($quizInfo)) {
            $addQuizInBase = true;
            $messages['updateQuiz'] = 'Quiz modifié';
        } else {
            $messages['updateQuiz'] = 'Erreur de connexion lors de la modification';
        }
    }
}
