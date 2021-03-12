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

$quizObj = new Quiz;

if (isset($_GET['idQuiz'])) {
    // Nous recuperons les détails du quiz à l'aide de son id
    $detailsQuestionAndAnswerArray = $quizObj->getQuestionAndAnwser($_GET['idQuiz']);

    // Nous recuperons la session pour faire apparaître le compteur des questions
    $_SESSION['idQuiz'] = $_GET['idQuiz'];
    $idQuiz = $_SESSION['idQuiz'];
    $allQuestionArray = $quizObj->getAllQuestions($idQuiz);
    $totalQuestions = count($allQuestionArray);

} else {

    $detailsQuestionAndAnswerArray = false;
}
