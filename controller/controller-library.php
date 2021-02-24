<?php

require_once '../model/database.php';
require_once '../model/quiz.php';

// Creation d'un tableau contenant les quiz avec comme info : titre, image, catégorie
$quizObj = new Quiz;
$allQuizArray = $quizObj->getAllQuiz();

