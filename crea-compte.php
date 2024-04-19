<?php
session_start();
include 'connexion-BDD.php';
$sql = "SELECT * FROM user WHERE nomutilisateur='$username'";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['nomutilisateur'];
    $email = $_POST['email'];
    $password = $_POST['motdepasse'];

    // Validate input fields
    if (empty($username) || empty($email) || empty($password)) {
        echo '<p style="color: red;">Please fill in all required fields.</p>';
    } else {
        if($result->num_rows > 0){
            echo "Nom d'utilisateur déjà utilisé.";
        } else {
            // Insertion de l'utilisateur dans la base de données
            $sql = "INSERT INTO user (nomutilisateur, email, motdepasse) VALUES ('$username', '$email', '$password')";
    
            if ($conn->query($sql) === TRUE) {
            header('Location: compte.php');
            }
        }
    }
}
$conn->close();
?>