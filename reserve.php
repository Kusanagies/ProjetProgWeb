
<?php
session_start();
include 'connexion-BDD.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez la date sélectionnée depuis le formulaire
    $selectedDate = $_POST["date"];
    $idJeux = $_POST["idJeux"]; // Récupérez l'ID du jeu
    
    // Connexion à la base de données (remplacez les valeurs par celles de votre configuration)
    include 'connexion-BDD.php';

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

    // Insérez la réservation dans la table 'Commandes'
    $sql = "INSERT INTO Commandes (ID_Jeux, id_client, dateReservation) VALUES ('$idJeux','$idClient','$selectedDate')";
    echo $idClient;
    

    $conn->close();
}
?>