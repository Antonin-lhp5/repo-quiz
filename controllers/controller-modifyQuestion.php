<?php 
require_once '../models/database.php';
require_once '../models/quiz.php';

$quizObj = new Quiz;
$allQuestionArray = $quizObj->getAllQuestions($_GET['idQuiz']);

$totalQuestions = count($allQuestionArray);

$questionInfoArray = $quizObj->getOneQuestionAndAnwser($_GET['idQuestion']);
