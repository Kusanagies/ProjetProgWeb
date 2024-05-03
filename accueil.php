<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<table>
    <tr> <!-- Première ligne avec des boutons -->
        <td><button onclick="window.location.href='reservation.php'">Réservez ICI</button></td>
        <td><button onclick="window.location.href='aboutus.php'">Et nous?</button></td>
        <td><button onclick="window.location.href='joinus.php'">Contacter nous</button></td>
        <td><button onclick="window.location.href='compte.php'">Mon compte</button></td>
        <td><button onclick="window.location.href='accueil.php'"><img src="IMG/LogoAccueil.png" alt="Logo"></button></td>
    </tr>
    <tr> <!-- Bordure en haut pour séparer les rangées -->
        <td colspan="5">
            <h1>Voici le site de réservation pour x escape game</h1>
            <div class="center-container"> <!-- Flexbox pour centrer -->
                <a href="avion-description.php" class="image-link">
                    <img src="IMG/AvionDescription.webp" alt="Escape game Avion">
                </a>
                </a>
            </div>
        </td>
    </tr>
</table>

</body>
</html>
