<div class="container mx-auto max-w-screen-md md:py-10">
  <div class="flex flex-col w-full text-gray-200 mt-5 md:mt-0">
    <div class="text-xl pb-3 px-2">Module de création de quiz</div>
    <div class="pb-3 px-2">Ajouter dans la bibliothèque</div>

    <?php
    // Mise en place d'une condition pour ne plus afficher le formulaire quand la patient a bien été enregistré
    if (!$addQuizInBase) { ?>

      <!-- si le quiz n'est pas enregistré nous indiquons l'utilisateur via un message -->

      <p class="text-red-500"><?= $messages['addQuiz'] ?? '' ?></p>

    <?php
      // Mise en place d'un include pour la mise en place du formulaire
      include 'include/form-addQuiz.php';
    } else { ?>

      <!-- si le quiz a bien été enregistré nous indiquons l'utilisateur via un message -->
      <div class="w-full text-white bg-green-500">
        <div class="container flex items-center px-6 py-4 mx-auto">
          <div class="flex">
            <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
              <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
            </svg>
            <p class="mx-3"><?= $messages['addQuiz'] ?? '' ?></p>
          </div>
        </div>
      </div>

      <section class="flex flex-col mx-auto md:flex-row justify-center md:h-48 mb-12 sm:mt-12">
        <div class="shadow-lg flex flex-col-reverse sm:flex-row w-full max-w-2xl">
          <div class="w-full bg-blue-900 p-4 text-white text-center flex flex-col justify-center ">

            <h2 class="text-lg">Espace questions</h2>
            <p class="text-md mt-2">Ajouter vos questions et réponses</p>
            <button class="bg-blue-700 mx-auto hover:bg-blue-600 mt-4 text-white text-sm px-4 py-2 w-3/5">
              Ajouter
            </button>

          </div>
          <div class="w-full bg-purple-900 p-4 text-white text-center flex flex-col justify-center ">

            <h2 class="text-lg">Quiz</h2>
            <p class="text-md mt-2">Retournez à la bibliothèque des quiz</p>
            <button class="bg-purple-700 mx-auto hover:bg-purple-600 mt-4 text-white text-sm px-4 py-2 w-3/5">
              Quiz
            </button>

          </div>
        </div>
      </section>


    <?php
    } ?>
  </div>
</div>