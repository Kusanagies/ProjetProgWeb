
<?php

session_start();

include 'connexion-BDD.php';

$sql = "SELECT * FROM user WHERE nomutilisateur='$username'";
$result = $conn->query($sql);

// In conn-compte.php (or your login processing script)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['nomutilisateur'];
    $password = $_POST['motdepasse'];

    // Validate input fields
    if (empty($username) || empty($password)) {
        echo '<p style="color: red;">Please enter both username and password.</p>';
    } else {

        if ($result->num_rows == 1) {
            // Utilisateur trouvé
            $user = $result->fetch_assoc();
            if ($password == $user['MotDePasse']) {
                // Mot de passe correct
                $_SESSION['nomutilisateur'] = $username;
                header('Location: accueil.php');
                exit();
            } else {
                echo 'Nom d\'utilisateur ou mot de passe incorrect.';
            }
        } else {
            // Utilisateur inexistant dans la BDD
            echo 'Nom d\'utilisateur inexistant.';
        }
    }
}
$conn->close();
?>