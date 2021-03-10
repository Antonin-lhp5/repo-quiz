<div class="container mx-auto max-w-screen-xl">
  <div class="flex flex-wrap md:flex-nowrap pt-10 mx-5">
    <div class="flex flex-col w-full md:w-1/3 space-y-3 md:mr-10">
      <div class="text-gray-200">
        <div class="text-lg pb-3">Questions du quiz</div>
        <div class="flex justify-between items-center">
          <div><?= $totalQuestions ?>/10</div>
          <button class="focus:outline-none"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
            </svg></button>
        </div>
      </div>
      <?php foreach ($allQuestionArray as $quiz)  { 
        ?>
        <div class="flex items-center p-2 border rounded shadow">
          <div class="mr-2">
            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
            </svg>
          </div>
          <span class="text-gray-200"><a href="" class="hover:underline"> <?= $quiz['qQuestion'] ?> </a></span>
        </div>
      <?php } ?>
    </div>

    <div class="flex flex-col w-full md:w-2/3 text-gray-200 mt-5 md:mt-0">
      <div class="text-lg pb-3">Création du quiz</div>

      <?php include 'include/form-addQuestion.php' ?>
    </div>
  </div>
</div>
</div>