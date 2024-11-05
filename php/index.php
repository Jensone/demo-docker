<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-200 to-blue-50 h-screen flex flex-col gap-4 items-center justify-center">
    <h1 class="text-7xl font-bold text-blue-800">
        <?php 
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "Bonjour " . $_POST['prenom'];
        } else {
            echo "Bonjour";
        } ?>
    </h1>
    <form action="" method="post" class="max-w-md mx-auto mt-4">
        <input type="text" name="prenom" class="w-full p-2 border border-blue-300 rounded" placeholder="Votre prénom">
        <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded mt-2">Envoyer</button>
    </form>
    <p class="text-sm text-center">
        &copy; <?php
            $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
            echo $date->format('Y');
        ?>
    </p>
</body>
</html>
