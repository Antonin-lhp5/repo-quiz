<div class="container mx-auto max-w-screen-md md:py-10">
  <div class="flex flex-col w-full text-gray-200 mt-5 md:mt-0">
    <div class="text-xl pb-3 px-2">Module de création de quiz</div>
    <div class="pb-3 px-2">Détails du quiz</div>

    <?php
    // Nous testons si nous arrivons à obtenir les infos du quiz sous forme d'un tableau
    if ($detailsQuizArray) {
      include 'include/details-quiz.php';
      // si KO, nous indiquons à l'utilisateur que le quiz n'est pas présent
    } else { ?>
      <p class="text-lg text-red-500 text-center py-3"></i>Quiz non présent</p>
      <div class="text-center">
        <a type="button" href="detailsQuiz.php" class="mt-5 bg-blue-600 hover:bg-blue-700 text-gray-200 font-bold py-2 px-4 rounded outline-none">Retour</a>
      </div>
    <?php
    } ?>

  </div>
</div>
</div>