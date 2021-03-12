<!-- component -->
<div class="text-lg text-center pt-3"><?= $messages['delete'] ?? '' ?></div>

<div class="shadow overflow-auto m-6 max-w-screen-xl mx-auto rounded-lg">
	<form action="library.php" method="GET">
		<table class="w-full divide-y divide-gray-400">
			<thead class="bg-purple-900">
				<tr>
					<!-- <th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Image</th> -->
					<th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Nom du quiz</th>
					<th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Catégorie</th>
					<th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Gestion</th>
					<th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Action</th>
				</tr>
			</thead>
			<tbody class="bg-gray-800 divide-y divide-gray-400">
				<?php foreach ($allQuizArray as $quiz) { ?>
					<tr>
						<td class="px-5 py-4 whitespace-nowrap">
							<div class="flex items-center"><?= $quiz['titre'] ?>
								<a href="detailsQuiz.php?idQuiz=<?= $quiz['id_library'] ?>" name="idQuiz">
									<svg class="w-6 h-6 ml-2 text-gray-300 hover:text-gray-50" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
										<path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z"></path>
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</div>
						</td>
						<td class="px-5 py-4 whitespace-nowrap"><?= $quiz['categorie'] ?></td>

						<td class="px-5 py-4 whitespace-nowrap">
							<a href="addQuestion.php?idQuiz=<?= $quiz['id_library'] ?>" name="idQuiz" class="bg-blue-700 mx-auto hover:bg-blue-600 text-white text-sm px-4 py-2">
								+ Questions
							</a>
						</td>
						<td class="px-5 py-4 whitespace-nowrap flex items-center">
							<select value="user.role" class="bg-gray-800 mr-4">
								<option value="user">brouillon</option>
								<option value="admin">publié</option>
							</select>
							<div class="flex">
								<button class="bg-green-700 mx-auto hover:bg-green-600 text-white text-sm px-4 py-2 mr-2">
									Enregistrer
								</button>
								<button type="button" data-quizid="<?= $quiz['id_library'] ?>" data-quizname="<?= $quiz['titre']?>" class="bg-red-700 mx-auto hover:bg-red-600 text-white text-sm px-2 py-2 show-modal">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-gray-200">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
									</svg>
								</button>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</form>
</div>

<button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white m-5 show-modal">show modal</button>

<div class="modal h-screen w-full fixed left-0 top-0 justify-center items-center bg-black bg-opacity-50 hidden">
	<!-- modal -->
	<div class="bg-black rounded shadow-lg w-1/3">
		<!-- modal header -->
		<div class="border-b px-4 py-2 flex justify-between items-center">
			<h3 class="font-semibold text-lg">Module de suppression</h3>
			<button class="text-black close-modal">&cross;</button>
		</div>
		<!-- modal body -->
		<div id="nameQuiz" class="p-3">
			
		</div>
		<div class="flex justify-end items-center w-100 border-t p-3">
			<form action="" method="POST">
				<button id="deleteBtnModal" name="deleteBtn" type="submit" class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-2">Supprimer</button>
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
			nameQuiz.innerHTML= element.dataset.quizname;
			deleteBtnModal.value= element.dataset.quizid;
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