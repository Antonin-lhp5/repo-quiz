<!-- component -->
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
						<!-- <td class="px-5 py-4 whitespace-nowrap"><img class="h-20 w-20 object-cover md:h-24 md:w-24 flex-shrink-0 rounded-lg" src="assets/upload<?= $quiz['image'] ?>" alt=""></td> -->
						<td class="px-5 py-4 whitespace-nowrap"><?= $quiz['titre'] ?></td>
						<td class="px-5 py-4 whitespace-nowrap"><?= $quiz['categorie'] ?></td>

						<td class="px-5 py-4 whitespace-nowrap">
							<a href="detailsQuiz.php?idQuiz=<?= $quiz['id_library']?>" name="idQuiz" class="bg-gray-700 mx-auto hover:bg-gray-600 text-white text-sm px-4 py-2 mr-3">
								détails
							</a>
							<a href="addQuestion.php?idQuiz=<?= $quiz['id_library']?>" name="idQuiz" class="bg-blue-700 mx-auto hover:bg-blue-600 text-white text-sm px-4 py-2">
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
								<button class="bg-red-700 mx-auto hover:bg-red-600 text-white text-sm px-2 py-2">
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