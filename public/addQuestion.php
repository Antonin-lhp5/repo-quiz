<?php var_dump($_POST);
require_once '../controllers/controller-dashboard.php';
user_connecte();
require_once '../controllers/controller-addQuestion.php';
require_once '../views/header.php';
require_once '../views/view-addQuestion.php';
require_once '../views/footer.php';

