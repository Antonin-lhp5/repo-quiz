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


}
