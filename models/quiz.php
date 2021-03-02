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
     * Méthode permettant d'obtenir les catégories des quiz
     * 
     * @return array 
     */
    public function getAllCategory(){
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

}