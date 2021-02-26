<?php

require_once '../model/database.php';
require_once '../model/quiz.php';

$categoryObj = new Quiz;
$allCategoryArray = $categoryObj->getAllCategory();

// regex 
$errors = [];
$regexTitle = '/^[A-zÀ-û 0-9œ\-\',?%ç]+$/';

var_dump($_POST, $_FILES);

// vérification du fu 

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

    if (isset($_FILES['imgQuiz'])) {

        if ($_FILES['imgQuiz']['error'] === 4) {
            $errors['imgQuiz'] = 'Veuillez sélectionner une image';
        }

    }

    // check select 

    if (isset($_POST['categoryQuiz'])) {

        if (empty($_POST['categoryQuiz'])) {
            $errors['categoryQuiz'] = 'Veuillez selectionner une catégorie';
        }
    }
} 
