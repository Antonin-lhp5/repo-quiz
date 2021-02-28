<!-- component -->
<div class="shadow overflow-auto m-6 max-w-screen-xl mx-auto rounded-lg">
	<form action="library.php" method="GET">
		<table class="w-full divide-y divide-gray-400">
			<thead class="bg-purple-900">
				<tr>
					<th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Image</th>
					<th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Nom du quiz</th>
					<th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Catégorie</th>
					<th class="px-5 py-3 text-left  font-medium text-gray-200 uppercase tracking-wider">Action</th>
				</tr>
			</thead>
			<tbody class="bg-gray-800 divide-y divide-gray-400">
				<?php foreach ($allQuizArray as $quiz) { ?>
					<tr>
						<td class="px-5 py-4 whitespace-nowrap"><img class="h-20 w-20 object-cover md:h-24 md:w-24 flex-shrink-0 rounded-lg" src="assets/upload<?= $quiz['image'] ?>" alt=""></td>
						<td class="px-5 py-4 whitespace-nowrap"><?= $quiz['titre'] ?></td>
						<td class="px-5 py-4 whitespace-nowrap"><?= $quiz['categorie'] ?></td>

						<td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">
							<div class="flex justify-start space-x-1">
								<button class="border-2 border-indigo-200 rounded-md p-1">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-indigo-500">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
									</svg>
								</button>
								<button class="border-2 border-indigo-200 rounded-md p-1">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-gray-500">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
									</svg>
								</button>
								<button class="border-2 border-indigo-200 rounded-md p-1">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-red-500">
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