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
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Réservation d'activité</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Ajoutez des styles CSS pour le menu ou le conteneur principal */
        .container {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
        <tr> <!-- Modifier ci-dessous par < ?php include 'barre-menu.php';?> Attendre Sylvain -->
            <td><button onclick="window.location.href='reservation.php'">Réservez ICI</button></td>
            <td><button onclick="window.location.href='aboutus.php'">Et nous?</button></td>
            <td><button onclick="window.location.href='joinus.php'">Contacter nous</button></td>
            <td><button onclick="window.location.href='compte.php'">Mon compte</button></td>
            <td><button onclick="window.location.href='accueil.php'"><img src="IMG/LogoAccueil.png" alt="Logo"></button></td>
        </tr>
        <tr> <!-- Deuxième ligne pour le contenu principal -->
            <td colspan="5"> <!-- Utilisation de colspan pour couvrir toute la ligne -->
                <div class="container"> <!-- Conteneur pour le contenu -->
                    <h1>Réserver une date pour votre activité</h1>
                    <form action="reserve.php" method="POST"> <!-- Formulaire -->
                        <label pour="Jeux">Choisissez le jeu :</label>
                        <select id="Jeux" name="idJeux"> <!-- Choix du jeu -->
                        <option value="1">Avion</option>
                        <option value="2">Hélicoptère</option>
                    </select>
                    <br>
                    <label pour="date">Choisissez une date :</label>
                    <input type="date" id="date" name="date" required> <!-- Date à choisir -->
                    <br>
                    <input type="submit" value="Réserver"> <!-- Bouton de soumission -->
                    </form>
                </div>
            </td>
        </tr>
    


</table>


</body>
</html>