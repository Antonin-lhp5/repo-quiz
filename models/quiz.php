<?php

class Quiz extends Database
{
    /**
     * Méthode permettant d'obtenir la liste de tous les quiz
     *
     * @return array
     */
    public function getAllQuiz()
    {
        // Nous stockons ici notre requête 
        $query = 'SELECT `qTitle`as `titre`, `qImg` as `image`, `qCategory` as `categorie`, `id_library`
        FROM `blablaquiz`.`library`
        INNER join `category` ON `library`.`id_category` = `category`.`id_category` ORDER BY `id_library` DESC';

        // Nous executons notre requête à l'aide de la méthode query
        $getAllQuizQuery = $this->database->query($query);

        // j'effectue la methode fetchAll pour obtenir le resultat sous forme de tableau
        return $getAllQuizQuery->fetchAll();
    }

    /**
     * Méthode permettant d'obtenir les catégories des quiz
     * 
     * @return array 
     */
    public function getAllCategory()
    {
        $query = ' SELECT id_category, `qCategory` as `categorie`
        FROM blablaquiz.category ';

        $getAllCategory = $this->database->query($query);

        return $getAllCategory->fetchAll();
    }


    /**
     * Methode permettant d'ajouter un quiz 
     *
     * @param array $quizInfo
     * @return boolean en fonction de l'execution de la requête
     */
    public function addQuiz(array $quizInfo)
    {
        // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
        $query = 'INSERT INTO `blablaquiz`.`library` (`qTitle`, `qImg`, `id_category`)
        VALUES (:qTitle, :qImg, :id_category)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addQuizQuery = $this->database->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addQuizQuery->bindValue(':qTitle', $quizInfo['qTitle'], PDO::PARAM_STR);
        $addQuizQuery->bindValue(':qImg', $quizInfo['qImg'], PDO::PARAM_STR);
        $addQuizQuery->bindValue(':id_category', $quizInfo['id_category'], PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($addQuizQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Methode permettant d'obtenir les infos d'un quiz selon son ID
     *
     * @param string $idQuiz
     * @return array ou false si la requête ne passe pas
     */
    public function getDetailsQuiz(string $idQuiz)
    {
        // requete me permettant de recup les données des quiz 
        $query = 'SELECT * FROM library WHERE id_library = :idQuiz';

        // je prépare ma requête à l'aide de la methode prepare pour me prémunir des injections SQL
        $getDetailsQuizQuery = $this->database->prepare($query);

        // je bind ma value idQuiz à mon paramètre $idQuiz 
        $getDetailsQuizQuery->bindValue(':idQuiz', $idQuiz, PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur 
        if ($getDetailsQuizQuery->execute()) {
            // je retourne le resultat sous forme de tableau via la methode fetch car une seule ligne comme résultat
            return $getDetailsQuizQuery->fetch();
        } else {
            return false;
        }
    }

    public function updateQuiz(array $quizInfo)
    {
        // requête me permettant de modifier mon quiz 
        $query =  'UPDATE `blablaquiz`.`library` SET
        `qTitle` = :qTitle,
        `id_category` = :id_category

        WHERE id_library = :idQuiz';

        // je prépare ma requête à l'aide de la methode prepare pour me prémunir des injections SQL
        $updateQuizQuery = $this->database->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $updateQuizQuery->bindValue(':qTitle', $quizInfo['qTitle'], PDO::PARAM_STR);
        $updateQuizQuery->bindValue(':id_category', $quizInfo['id_category'], PDO::PARAM_STR);
        $updateQuizQuery->bindValue(':idQuiz', $quizInfo['id_library'], PDO::PARAM_STR);

        if ($updateQuizQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addQuestion(array $quizQuestion)
    {
        // requête me permettant d'ajouter une question à l'id_library d'un quiz 
        $queryQuestion = 'INSERT INTO `blablaquiz`.`question` (`qQuestion`, `id_library`)
        VALUES (:qQuestion, :id_library)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addQuestionQuery = $this->database->prepare($queryQuestion);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addQuestionQuery->bindValue(':qQuestion', $quizQuestion['qQuestion'], PDO::PARAM_STR);
        $addQuestionQuery->bindValue(':id_library', $quizQuestion['id_library'], PDO::PARAM_STR);

        // requête me permettant d'ajouter des réponses à l'id_library d'un quiz
        $queryAnswer = 'INSERT INTO `answer` (`goodOption`, `option1`, `option2`, `option3`, `id_question`)
        VALUES (:goodOption, :option1, :option2, :option3, :id_question)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addAnswerQuery = $this->database->prepare($queryAnswer);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addAnswerQuery->bindValue(':goodOption', $quizQuestion['goodOption'], PDO::PARAM_STR);
        $addAnswerQuery->bindValue(':option1', $quizQuestion['option1'], PDO::PARAM_STR);
        $addAnswerQuery->bindValue(':option2', $quizQuestion['option2'], PDO::PARAM_STR);
        $addAnswerQuery->bindValue(':option3', $quizQuestion['option3'], PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($addQuestionQuery->execute()) {
            $idQuestion = $this->database->lastInsertId();

            $addAnswerQuery->bindValue(':id_question', $idQuestion, PDO::PARAM_INT);

            if ($addAnswerQuery->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public function getAllQuestions(string $idQuiz)
    {
        // requete me permettant de recup les données des questions du quiz
        $query = 'SELECT `qQuestion`, `id_question` FROM `blablaquiz`.`question` WHERE `id_library` = :idQuiz';

        // je prépare ma requête à l'aide de la methode prepare pour me prémunir des injections SQL
        $getQuestionQuery = $this->database->prepare($query);

        // je bind ma value idQuiz à mon paramètre $idQuiz 
        $getQuestionQuery->bindValue(':idQuiz', $idQuiz, PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur 
        if ($getQuestionQuery->execute()) {
            // je retourne le resultat sous forme de tableau via la methode fetch car une seule ligne comme résultat
            return $getQuestionQuery->fetchAll();
        } else {
            return false;
        }
    }

    public function getOneQuestionAndAnwser(string $idQuestion)
    {
        // requete me permettant de recup les données des questions du quiz
        $query = 'SELECT `qQuestion`, `goodOption`, `option1`, `option2`, `option3`, `question`.`id_question`
        FROM `answer`
        INNER join `question` ON `question`.`id_question`  = `answer`.`id_question`
        WHERE `question`.`id_question` = :idQuestion';

        // je prépare ma requête à l'aide de la methode prepare pour me prémunir des injections SQL
        $getQuestionQuery = $this->database->prepare($query);

        // je bind ma value idQuiz à mon paramètre $idQuiz 
        $getQuestionQuery->bindValue(':idQuestion', $idQuestion, PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur 
        if ($getQuestionQuery->execute()) {
            // je retourne le resultat sous forme de tableau via la methode fetch car une seule ligne comme résultat
            return $getQuestionQuery->fetch();
        } else {
            return false;
        }
    }

    public function getQuestionAndAnwser(string $idQuiz)
    {
        // requête me permettant de recup les données 
        $query = 'SELECT `qQuestion`, `goodOption`, `option1`, `option2`, `option3`
        FROM `answer`
        INNER join `question` ON `question`.`id_question`  = `answer`.`id_question`
        WHERE `id_library` = :idQuiz';

        $getQuestionAndAnwserQuery = $this->database->prepare($query);

        $getQuestionAndAnwserQuery->bindValue(':idQuiz', $idQuiz, PDO::PARAM_STR);

        if ($getQuestionAndAnwserQuery->execute()) {
            return $getQuestionAndAnwserQuery->fetchAll();
        }
        return false;
    }

    /**
     * methode permettant d'effacer un quiz
     *
     * @param string $quizId
     * @return boolean permettant de savoir si le delete est ok
     */
    public function deleteQuiz(string $idQuiz)
    {
        // Mise en place de la requête
        $query = 'DELETE FROM `library` WHERE `id_library` = :idQuiz';

        $deleteQuizQuery = $this->database->prepare($query);

        $deleteQuizQuery->bindValue(':idQuiz', $idQuiz, PDO::PARAM_STR);

        if ($deleteQuizQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateQuestionAndAnswer(array $quizInfo)
    {
        // requête me permettant de modifier les questions
        $query =  'UPDATE `blablaquiz`.`question` SET
        `qQuestion` = :qQuestion

        WHERE id_library = :idQuiz';

        // je prépare ma requête à l'aide de la methode prepare pour me prémunir des injections SQL
        $updateQuestionQuery = $this->database->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $updateQuestionQuery->bindValue(':qQuestion', $quizInfo['qQuestion'], PDO::PARAM_STR);

        // requête me permettant de modifier les réponses
        $query =  'UPDATE `blablaquiz`.`answer` SET
        `goodOption` = :goodOption,
        `option1` = :option1,
        `option2` = :option2,
        `option3` = :option3

        WHERE id_library = :idQuiz';

        // je prépare ma requête à l'aide de la methode prepare pour me prémunir des injections SQL
        $updateAnswerQuery = $this->database->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $updateAnswerQuery->bindValue(':goodOption', $quizInfo['goodOption'], PDO::PARAM_STR);
        $updateAnswerQuery->bindValue(':option1', $quizInfo['option1'], PDO::PARAM_STR);
        $updateAnswerQuery->bindValue(':option2', $quizInfo['option2'], PDO::PARAM_STR);
        $updateAnswerQuery->bindValue(':option3', $quizInfo['option3'], PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($updateQuestionQuery->execute()) {
            $idQuestion = $this->database->lastInsertId();

            $updateAnswerQuery->bindValue(':id_library', $idQuestion, PDO::PARAM_INT);

            if ($updateAnswerQuery->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
