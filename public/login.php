<?php
$error = null;
if (isset($_POST['admin'])) {
    if (empty($_POST['username']) && empty($_POST['password'])) {
     $error = "Renseignez vos ID";
    }
    if ($_POST['username'] === "admin" && $_POST['password'] === "admin") {
        session_start();
        $_SESSION['connecte'] = 1;
        header('location: /dashboard.php');
    } else {
        $error = "Identifiants incorrects";
    }
}

require_once '../controllers/controller-dashboard.php';
if (est_connecte()) {
    header('Location: /dashboard.php');
    exit();
}    
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="styles.css" rel="stylesheet">
    <title>Connexion</title>
</head>

<body class="flex h-screen bg-gray-900 font-body">

    <div class="max-w-xs w-full m-auto">
        <h1 class="text-4xl font-title text-center mb-5 font-bold text-gray-200">Babla<span class="text-indigo-500">quiz</span></h1>
        <?php if ($error) : ?>
            <p class="bg-red-600 text-red-100 p-2 mb-2 text-center">
                <?php echo $error ?>
            </p>
        <?php endif ?>

        <form action="" method="POST" class="bg-gray-700 rounded-lg p-5 ring-black ring-2 ring-opacity-10 shadow">
            <div class="mb-6">
                <label class="block mb-2 text-gray-200" for="username">Identifiant</label>
                <input class="w-full p-2 text-gray-200 bg-gray-800 border-transparent ring-1 ring-gray-900 focus:border-transparent focus:ring-pink-600" type="text" name="username" id="username">

            </div>
            <div class="mb-6">
                <label class="block mb-2 text-gray-200" for="password">Mot de passe</label>
                <input class="w-full p-2 text-gray-200 bg-gray-800 border-transparent ring-1 ring-gray-900 focus:border-transparent focus:ring-pink-600" type="password" name="password" id="password">
            </div>


            <div>
                <button type="submit" name="admin" class="w-full bg-pink-700 hover:bg-pink-600 text-gray-200 font-bold py-2 px-4 rounded outline-none">
                    Se connecter
                </button>
            </div>
        </form>
    </div>
</body>

</html>