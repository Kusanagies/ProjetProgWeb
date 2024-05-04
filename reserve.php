<?php
session_start();
include 'connexion-BDD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez la date sélectionnée depuis le formulaire
    $selectedDate = $_POST["date"];
    $idJeux = $_POST["idJeux"]; // Récupérez l'ID du jeu
    
    // Connexion à la base de données (remplacez les valeurs par celles de votre configuration)
    // Assurez-vous que votre fichier connexion-BDD.php contient les informations correctes
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données : " . $conn->connect_error);
    }

    // Récupérez l'ID du client à partir de la session
    if (isset($_SESSION['id_client'])) {
        $idClient = $_SESSION['id_client'];
    } else {
        // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
        header("Location: formulaire.php");
        exit;
    }

    // Échappez les variables pour éviter les injections SQL
$selectedDate = $conn->real_escape_string($selectedDate);
$idJeux = $conn->real_escape_string($idJeux);
$idClient = $conn->real_escape_string($idClient);

$checkExistingReservation = "SELECT COUNT(*) AS total FROM Commandes WHERE ID_Jeux = '$idJeux' AND dateReservation = '$selectedDate'";
$result = $conn->query($checkExistingReservation);
$row = $result->fetch_assoc();

// Insérez la réservation dans la table 'Commandes'

if ($row['total'] > 0) {
    // La date est déjà réservée pour ce jeu, affichez une alerte
    echo "<script>alert('Cette date est déjà réservée pour ce jeu. Veuillez choisir une autre date.Vous serez redirigez');</script>";
    echo '<meta http-equiv="refresh" content="1;url=reservation.php">';
} else {
    // La date n'est pas réservée, procédez à l'insertion
    $sql = "INSERT INTO Commandes (ID_Jeux, id_Client, dateReservation) VALUES ('$idJeux', '$idClient', '$selectedDate')";
    if ($conn->query($sql) === TRUE) {
        // Redirigez l'utilisateur vers la page de confirmation
        header("Location: confirmation.php?date=" . urlencode($selectedDate) . "&idJeux=" . urlencode($idJeux));
    } else {
        // Affichez un message d'erreur en cas d'échec de la requête
        echo "Erreur lors de l'exécution de la requête : " . $conn->error;
    }
}

    $conn->close();
}
?>
