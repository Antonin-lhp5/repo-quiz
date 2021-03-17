<div class="pb-3">Modifier les questions et réponses</div>
<div class="bg-gray-700 p-5 border-green-500 border-2 shadow mb-20">
    <form action="modifyQuestion.php" method="POST">
        <input type="hidden" name="id_answer" value="<?= $questionInfoArray['id_answer'] ?>">
        <label class="block mb-2 text-gray-200" for="questionQuiz">La question <span class="text-red-500 ml-2"><?= $errors['questionQuiz'] ?? '' ?></span></label>
        <input class="w-full p-2 mb-6 text-gray-200 bg-gray-800 focus:border-transparent" type="text" name="questionQuiz" id="questionQuiz" placeholder="ex: Quel célèbre super-héro à pour origine la planère Krypton ?" value="<?= $questionInfoArray['qQuestion'] ?>">

        <label class="block mb-2 text-gray-200" for="goodOption">Bonne réponse <ion-icon class="text-green-400" name="checkmark-circle"></ion-icon> <span class="text-red-500 ml-2"><?= $errors['goodOption'] ?? '' ?></span> </label>
        <input class="w-full p-2 mb-6 text-gray-200 bg-gray-800 focus:border-transparent" type="text" name="goodOption" id="goodOption" placeholder="ex: Super-man" value="<?= $questionInfoArray['goodOption'] ?>">

        <label class="block mb-2 text-gray-200" for="option1">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon> <span class="text-red-500 ml-2"><?= $errors['option1'] ?? '' ?></span> </label>
        <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="option1" id="option1" placeholder="ex: Wonder Woman" value="<?= $questionInfoArray['option1'] ?>">

        <label class="block mb-2 text-gray-200" for="option2">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon> <span class="text-red-500 ml-2"><?= $errors['option2'] ?? '' ?></span> </label>
        <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="option2" id="option2" placeholder="ex: Hulk" value="<?= $questionInfoArray['option2'] ?>">

        <label class="block mb-2 text-gray-200" for="option3">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon> <span class="text-red-500 ml-2"><?= $errors['option3'] ?? '' ?></span> </label>
        <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="option3" id="option3" placeholder="ex: Wolverine" value="<?= $questionInfoArray['option3'] ?>">

        <div class="flex justify-between">
            <div>
                <button class="bg-green-600 hover:bg-green-700 text-gray-200 font-bold py-2 px-4 mr-1 rounded" name="updateQuestionBtn" type="submit" value="">
                    Modifier
                </button>
                <a href="addQuestion.php?idQuiz=<?= $_SESSION['idQuiz'] ?>" class="bg-gray-800 hover:bg-gray-900 text-gray-200 font-bold py-2 px-4 rounded">Retour</a>
            </div>
            <form action="">
                <button type="button" class="bg-red-700 hover:bg-red-600 text-white text-sm px-2 py-2 show-modal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-gray-200">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </form>
        </div>
    </form>
</div>


<div class="modal h-screen w-full fixed left-0 top-0 justify-center items-center bg-black bg-opacity-50 hidden">
    <!-- modal -->
    <div class="bg-black rounded shadow-lg w-1/3">
        <!-- modal header -->
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg">Suppression</h3>
            <button class="text-white close-modal"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- modal body -->
        <div id="nameQuiz" class="p-3">
            <p> Voulez-vous vraiment supprimer cette question ? Attention, ceci est irréversible !</p>
        </div>
        <div class="flex justify-end items-center w-100 border-t p-3">
            <form action="" method="POST">
                <button id="deleteBtnModal" href="addQuestion.php?idQuiz=<?= $_SESSION['idQuiz'] ?>" name="deleteBtn" type="submit" value="<?= $questionInfoArray['id_question'] ?>" class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-2">Supprimer</button>
            </form>
          
            <button class="bg-gray-600 hover:bg-gray-700 px-3 py-1 rounded text-white close-modal">Retour</button>
        </div>
    </div>
</div>

<script>
    const modal = document.querySelector('.modal');
    const closeModal = document.querySelectorAll('.close-modal');
    const allDelButton = document.querySelectorAll('.show-modal');

    allDelButton.forEach(element => {
        element.addEventListener('click', function() {
            // nameQuiz.innerHTML = element.dataset.quizname;
            // deleteBtnModal.value = element.dataset.quizid;
            modal.classList.remove('hidden')
            modal.classList.add('flex')
        });

    })

    closeModal.forEach(close => {
        close.addEventListener('click', function() {
            modal.classList.add('hidden')
        });
    });
</script>