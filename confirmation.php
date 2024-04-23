<?php
session_start();
include 'connexion-BDD.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['id_client'])) {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
    header("Location: formulaire.php");
    exit;
}

// Récupérez l'ID du client à partir de la session
$idClient = $_SESSION['id_client'];

// Récupérez les informations de la réservation depuis la base de données
$sql = "SELECT ID_Jeux, dateReservation FROM Commandes WHERE id_client = '$idClient'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Affichez les détails de la réservation (une seule fois)
    $row = $result->fetch_assoc();
    $idJeux = $row['ID_Jeux'];
    $dateReservation = $row['dateReservation'];

    // Récupérez le nom du jeu à partir de la table des jeux (remplacez 'Jeux' par le nom de votre table)
    $sql_jeu = "SELECT Nom_Jeux FROM Jeux WHERE ID_Jeux = '$idJeux'";
    $result_jeu = $conn->query($sql_jeu);
    $row_jeu = $result_jeu->fetch_assoc();
    $nomJeu = $row_jeu['Nom_Jeux'];

    echo "Confirmation de réservation pour le jeu $nomJeu le $dateReservation.";
    
    // Redirigez l'utilisateur vers la page d'accueil après 10 secondes
    echo '<meta http-equiv="refresh" content="10;url=accueil.php">';
} else {
    echo "Aucune réservation trouvée.";
}

$conn->close();
?>

