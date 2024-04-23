<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
 <style>
        /* Pour que le tableau prenne toute la page */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        /* Pour que le tableau s'étende sur toute la page */
        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse; /* Pour des bordures propres */
        }

        /* Pour les bordures et l'alignement */
        td {
            border: 1px solid black; /* Bordures pour voir les cellules */
            text-align: center;      /* Centrer le texte */
            vertical-align: middle; /* Centrer verticalement */
        }

        /* Hauteur des lignes */
        tr:first-child {
            height: 10%; /* Première ligne occupe la moitié de la hauteur */
        }
        
        tr:last-child {
            height: 90%; /* Deuxième ligne occupe l'autre moitié */
        }
    </style>
<body>

<table>
    <tr>
        <!-- Première ligne avec 5 colonnes -->
        <td><button onclick="window.location.href='reservation.php'">Réservez ICI</button></td>
        
        <td><button onclick="window.location.href='aboutus.php'">Et nous?</button></td>
        <td> <button onclick="window.location.href='joinus.php'">Nous rejoindre!</button></td>
        <td><button onclick="window.location.href='compte.php'">Mon compte</button></td>
        <td><button onclick="window.location.href='accueil.php'"><img src="IMG/LogoAccueil.png" alt="Logo"></button></td>
    </tr>
    <tr>
        <!-- Deuxième ligne avec une seule colonne -->
        <td colspan="5"><h1>Voici le site de réservation pour x escape game</h1></td> <!-- On fusionne 5 colonnes -->
    </tr>
</table>
   

</body>
</html>

