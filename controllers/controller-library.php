<?php
require_once '../models/database.php';
require_once '../models/quiz.php';

// Creation d'un tableau contenant les quiz avec comme info : titre, image, catégorie
$quizObj = new Quiz;

//on definie un tableau de message
$messages = [];

// nous controllons si nous avons appuyé sur notre bouton delete via la methode POST
if(isset($_POST['deleteBtn'])){
    if($quizObj->deleteQuiz($_POST['deleteBtn'])){
        $messages['deleteYes'] = 'Le quiz a bien été supprimé';
    } else {
        $messages['deleteNo'] = 'Le quiz n\'a pas pu être supprimé';
    }
}

if(isset($_POST['publish'])){
    if($quizObj->setUpdate($_POST['publish'],($_POST['publication']))) {
        $messages['publishYes'] = 'Le quiz a bien été publié';;
    } else {
        $messages['publishNo'] = 'Le quiz n\'a pas pu être publié';
    }
}


// Création d'un tableau contenant tous les quiz pour les afficher dans notre vue
$allQuizArray = $quizObj->getAllQuizAdmin();


