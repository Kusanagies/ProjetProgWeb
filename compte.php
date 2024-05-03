<?php
session_start();
// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['id_client'])) {
  // Si l'utilisateur est connecté, afficher le contenu de la page
?>


 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<table>
<tr>
        <td><button onclick="window.location.href='reservation.php'">Réservez ICI</button></td>
        <td><button onclick="window.location.href='aboutus.php'">Et nous?</button></td>
        <td><button onclick="window.location.href='joinus.php'">Contacter nous</button></td>
        <td><button onclick="window.location.href='compte.php'">Mon compte</button></td>
        <td><button onclick="window.location.href='accueil.php'"><img src="IMG/LogoAccueil.png" alt="Logo"></button></td>
    </tr>
    <tr>
        <td colspan="5">
            <h1>Mon Compte</h1> <!-- Titre pour la page -->
            <!-- Utilisation du même style pour la section principale -->
            <div class="container">
                <p>Bienvenue dans votre espace compte, <?php echo isset($_SESSION['id_client']) ? htmlspecialchars($_SESSION['id_client'], ENT_QUOTES, 'UTF-8') : 'Utilisateur'; ?>.</p>
                
                <!-- Exemples de contenu spécifique à "Mon Compte" -->
                <form action='deco-compte.php' method='post'>
                    <input type='submit' value='Déconnexion'>
                </form>
                
                <!-- Ajoutez ici d'autres éléments pertinents pour la gestion du compte -->
            </div>
        </td>
    </tr>
</table>

</body>
</html>
<?php
} else {
  // Si l'utilisateur n'est pas connecté, lancer la page de vérification de connexion
  include 'formulaire.php';
}
?>