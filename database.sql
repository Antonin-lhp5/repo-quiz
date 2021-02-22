-- category 
SELECT * FROM category;
INSERT INTO category (qCategory)
VALUE ('Arts & Lettres'), ('Nature'),('Sciences'), ('Sports'), ('Loisirs'), ('Histoire');

-- selection 
SELECT qTitle as `titre`, qCategory as `categorie`, qImg as `image` ,qQuestion as `question`, gAnwser as `goodOption`, wAnswer1 as `option1`, wAnswer2 as `option2`, wAnswer3 as `option3` FROM anwser
INNER JOIN question ON anwser.id_anwser = question.id_question
INNER JOIN library ON question.id_question = library.id_library
INNER join category ON library.id_category = category.id_category