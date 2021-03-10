<div class="pb-3">Ajouter les questions et réponses</div>
<div class="bg-gray-700 p-5 ring-black ring-2 ring-opacity-10 shadow mb-20">
    <form action="" method="POST">
        <label class="block mb-2 text-gray-200" for="questionQuiz">La question <span class="text-red-500 ml-2"><?= $errors['questionQuiz'] ?? '' ?></span></label>
        <input class="w-full p-2 mb-6 text-gray-200 bg-gray-800 focus:border-transparent" type="text" name="questionQuiz" id="questionQuiz" placeholder="ex: Quel célèbre super-héro à pour origine la planère Krypton ?">

        <label class="block mb-2 text-gray-200" for="goodOption">Bonne réponse  <ion-icon class="text-green-400" name="checkmark-circle"></ion-icon> <span class="text-red-500 ml-2"><?= $errors['goodOption'] ?? '' ?></span> </label>
        <input class="w-full p-2 mb-6 text-gray-200 bg-gray-800 focus:border-transparent" type="text" name="goodOption" id="goodOption" placeholder="ex: Super-man">

        <label class="block mb-2 text-gray-200" for="option1">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon> <span class="text-red-500 ml-2"><?= $errors['option1'] ?? '' ?></span> </label>
        <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="option1" id="option1" placeholder="ex: Wonder Woman">

        <label class="block mb-2 text-gray-200" for="option2">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon> <span class="text-red-500 ml-2"><?= $errors['option2'] ?? '' ?></span> </label>
        <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="option2" id="option2" placeholder="ex: Hulk">

        <label class="block mb-2 text-gray-200" for="option3">Mauvaise réponse <ion-icon class="text-red-500" name="close-circle"></ion-icon> <span class="text-red-500 ml-2"><?= $errors['option3'] ?? '' ?></span> </label>
        <input class="w-full p-2 mb-6 text-gray-200  bg-gray-800 focus:border-transparent" type="text" name="option3" id="option3" placeholder="ex: Wolverine">

        <div>
            <button class="bg-blue-600 hover:bg-blue-700 text-gray-200 font-bold py-2 px-4 rounded" name="addQuestionBtn" type="submit" value="">
                Ajouter
            </button>
        </div>
    </form>
</div>