<?php

class Database
{
    protected $database;

    private $user = 'pdo';
    private $password = 'pdo';
    private $dbName = 'blablaquiz';

    public function __construct()
    {
        // Nous effectuons un try and catch pour obtenir un message d'erreur explicite en cas de non connexion
        try {
            // Nous effectuons une instance PDO pour nous connecter à la base de données
            $this->database = new PDO("mysql:host=localhost;dbname=$this->dbName;charset=utf8", $this->user, $this->password);
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage()); 
        }
    }
}