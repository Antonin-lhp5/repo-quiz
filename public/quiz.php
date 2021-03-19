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

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link href="/assets/stylequiz.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">


</head>

<body class="font-body">

    <!-- <div class="container">
        <div id="quiz" class="bg-purple-800 max-w-4xl mx-auto flex-col justify-center p-5 sm:mt-12 rounded-lg">
            <div class="flex justify-between items-center">

                <h1 class="text-center text-4xl font-bold font-title pb-5">Quiz</h1>

                <p id="progress" class=""></p>
            </div>


            <h2 id="question" class="text-xl text-center py-10"></h2>

            <h3 id="score"></h3>


            <div class="choices">

                <div class="grid lg:grid-cols-2 gap-2 md:gap-4 mt-10 text-white mx-5 choices">
                    <button id="option0" onclick="calcScore(this)" class="bg-black rounded-lg p-6">
                        <p id="choice0"></p>
                    </button>

                    <button id="option1" onclick="calcScore(this)" class="bg-black rounded-lg p-6">
                        <p id="choice1"></p>
                    </button>

                    <button id="option2" onclick="calcScore(this)" class="bg-black rounded-lg p-6">
                        <p id="choice2"></p>
                    </button>

                    <button id="option3" onclick="calcScore(this)" class="bg-black rounded-lg p-6">
                        <p id="choice3"></p>
                    </button>
                </div>

            </div>

        </div>
    </div> -->

    <!-- start Quiz button -->
    <div class="start_btn bg-gray-500"><button>Lancer le quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Quelques règles pour ce quiz</span></div>
        <div class="info-list">
            <div class="info">1. Vous avez seulement <span>15 secondes</span> par question.</div>
            <div class="info">2. Une fois que vous avez sélectionné votre réponse, elle ne peut pas être annulée.</div>
            <div class="info">3. Vous ne pouvez sélectionner aucune option une fois le temps écoulé.</div>
            <div class="info">4. Vous ne pouvez pas quitter le Quiz pendant que vous jouez.</div>
            <div class="info">5. Vous obtiendrez des points avec vos bonnes réponses.</div>
        </div>
        <div class="buttons">
            <button class="quit">Quitter</button>
            <button class="restart">Continuer</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title"><?= $detailsQuizArray['qTitle'] ?></div>
            <div class="timer">
                <div class="time_left_txt">Temps</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Suivant</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Tu as terminé !</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Relancer le Quiz</button>
            <button class="quit">Quitter</button>
        </div>
    </div>

   <?php require_once 'assets/js/script.php'; ?>

    

</body>

</html>