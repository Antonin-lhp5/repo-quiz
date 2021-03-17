<?php 
require_once '../models/database.php';
require_once '../models/quiz.php';

// Creation d'un tableau contenant les quiz avec comme info : titre, image, catégorie
$quizObj = new Quiz;
$allQuizArray = $quizObj->getAllQuiz();

$categoryObj = new Quiz;
$allCategoryArray = $categoryObj->getAllCategory();
