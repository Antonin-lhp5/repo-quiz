<?php

// système de connexion 
$errorConnexion = null;
if (isset($_POST['connexion'])) {
    if (empty($_POST['username']) && empty($_POST['password'])) {
     $errorConnexion = "Renseignez vos ID";
    }
    if ($_POST['username'] === "root" && $_POST['password'] === "root") {
        session_start();
        $_SESSION['login'] = 1;
        header('location: /dashboard');
    } else {
        $errorConnexion = "Identifiants incorrects";
    }
}

// redirection login => dashboard si l'utilisateur est déjà connecté. 
require '../controller/connected.php';
    if (is_connected()) {
        header('Location: /dashboard.php');
        exit();
    }

