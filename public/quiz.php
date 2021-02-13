<?php 
$titleQuiz = "Les couleurs"; //titre du quiz

$quiz_data = array(
    1 => array(
        'question' => "Quelle est la couleur du cheval blanc d'Henry IV",
        'good_answer' => "Blanc",
        'anwser1' => "Noir",
        'anwser2' => "Jaune",
        'anwser3' => "Rouge",
        
    ),
    2 => array(
        'question' => "Quelle est la couleur des petits poids",
        'good_answer' => "Vert",
        'anwser1' => "Blanc",
        'anwser2' => "Rouge",
        'anwser1' => "Jaune",
            
    ),
    3 => array(
        'question' => "Quelle est la couleur du soleil",
        'good_answer' => "Jaune",
        'anwser1' => "Blanc",
        'anwser2' => "Noir",
        'anwser3' => "Bleu",
            
    ),
);



?>

<script> 
function correction() {
    if (answer == <?php echo $quiz_data['good_anwser']; ?>) {
        document.getElementById('correction').innerHTML = "Correct"
    } else {
        document.getElementById('correction').innerHTML = "Incorrect"
    }
}

</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link href="styles.css" rel="stylesheet">

</head>

<body class="font-body">

    <div class="mx-auto max-w-lg mt-20">
        <h1 class="text-center text-4xl font-bold font-title"><?= $titleQuiz ?></h1>
        <div class="text-center mt-5">1/5</div>
        <div id="correction"></div>

        <from method="POST" action="">
        <?php 
            $i = 0;
            $next = 1; 
            if (isset($_POST['next'])) {
                ++$next;
                }
            var_dump($next);
            foreach ($quiz_data as $value) { 
            if(++$i > $next) break;

           
        ?>
         <p class="text-center text-lg mt-10"><?php echo $value['question']?></p>
            <div class="grid lg:grid-cols-2 gap-2 md:gap-4 mt-10">
            
                    <label for="option1" class="w-full h-20 bg-black rounded-lg p-4 inline-flex items-center">
                        <input type="radio" id="option1" name="choice" value="1" class="form-radio h-5 w-5 text-pink-600 focus:ring-transparent focus:ring-offset-transparent"><span class="ml-2 text-white"><?php echo $value['good_answer']?></span>
                    </label>

                    <label for="option2" class="w-full h-20 bg-black rounded-lg p-4 inline-flex items-center">
                        <input type="radio" id="option2" name="choice" value="2" class="form-radio h-5 w-5 text-pink-600 focus:ring-transparent focus:ring-offset-transparent"><span class="ml-2 text-white"><?php echo $value['anwser1']?></span>
                    </label>

                    <label for="option3" class="w-full h-20 bg-black rounded-lg p-4 inline-flex items-center">
                        <input type="radio" id="option3" name="choice" value="3" class="form-radio h-5 w-5 text-pink-600 focus:ring-transparent focus:ring-offset-transparent"><span class="ml-2 text-white"><?php echo $value['anwser2']?></span>
                    </label>

                    <label for="option4" class="w-full h-20 bg-black rounded-lg p-4 inline-flex items-center">
                        <input type="radio" id="option4" name="choice" value="4" class="form-radio h-5 w-5 text-pink-600 focus:ring-transparent focus:ring-offset-transparent"><span class="ml-2 text-white"><?php echo $value['anwser3']?></span>
                    </label>
          
            </div>
            <?php } ?>
            <div class="py-6 md:py-8 flex justify-center">
            <ul class="flex pl-0 rounded list-none flex-wrap">
                <li>
                    <button type="submit" name="next" class="text-md font-semibold flex px-3 py-2 md:px-6 md:py-4 rounded-xl leading-tight text-white bg-pink-600 hover:bg-pink-700 focus:outline-none mr-2">
                        Suivant
                    </button>
                </li>
            </ul>
        </div>
        </from>

    </div>

</body>

</html>