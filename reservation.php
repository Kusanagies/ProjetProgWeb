<?php
session_start();
include 'connexion-BDD.php';
// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['id_client'])) {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
    header("Location: formulaire.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Réservation d'activité</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Réserver une date pour votre activité</h1>
        <form action="reserve.php" method="POST">
            <label for="Jeux">Choisissez le jeu :</label>
            <select id="Jeux" name="idJeux">
                <option value="1">Avion</option>
                <option value="2">Hélicoptère</option>
            </select>
            <br>
            <label for="date">Choisissez une date :</label>
            <input type="date" id="date" name="date" required>
            <br>
            <input type="submit" value="Réserver">
        </form>
    </div>
</body>
</html>
