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
        $query = 'SELECT `qTitle`as `titre`, `qImg` as `image`, `qCategory` as `categorie`
        FROM `blablaquiz`.`library`
        INNER join `category` ON `library`.`id_category` = `category`.`id_category` ORDER BY `id_library` DESC';

        // Nous executons notre requête à l'aide de la méthode query
        $getAllQuizQuery = $this->database->query($query);

        // j'effectue la methode fetchAll pour obtenir le resultat sous forme de tableau
        return $getAllQuizQuery->fetchAll();
    }

    /**
     * Methode permettant de rajouter un patient dans notre base de donnée.
     *
     * @param array $quizDetails contient toutes les informations du patient
     * @return boolean Permet de savoir si la requête est bien passé
     */
    public function addQuiz(array $quizDetails)
    {
        // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
        $query = 'INSERT INTO `library` (`qTitle`)
        VALUES (:qTitle)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addQuizQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addQuizQuery->bindValue(':lastname', $quizDetails['lastname'], PDO::PARAM_STR);
        $addQuizQuery->bindValue(':firstname', $quizDetails['firstname'], PDO::PARAM_STR);
        $addQuizQuery->bindValue(':birthdate', $quizDetails['birthdate'], PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($addQuizQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
