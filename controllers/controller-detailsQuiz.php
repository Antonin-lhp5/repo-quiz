<?php 
require_once '../models/database.php';
require_once '../models/quiz.php';

$quizObj = new Quiz;

if (isset($_GET['idQuiz'])) {
     // Nous recuperons les détails du quiz à l'aide de son id
     $detailsQuizArray = $quizObj->getDetailsQuiz($_GET['idQuiz']);

 } else {
 
     $detailsQuizArray = false;
 }

