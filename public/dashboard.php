<?php 
require '../controller/connexion.php';
var_dump(is_connected());
header('location: /login.php');
exit();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="styles.css" rel="stylesheet">
    <title>Administration</title>
</head>

<body class="bg-gray-900 text-gray-200 font-body">

    <?php include '../view/dashboard.php'; ?>

    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>

</html>