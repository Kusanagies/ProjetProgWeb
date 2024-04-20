
<?php

session_start();

include 'connexion-BDD.php';



// In conn-compte.php (or your login processing script)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['nomutilisateur'];
    $password = $_POST['motdepasse'];
    $sql = "SELECT * FROM client WHERE nomutilisateur='$username'";
    $result = $conn->query($sql);

    // Validate input fields
    if (empty($username) || empty($password)) {
        echo '<p style="color: red;">Please enter both username and password.</p>';
    } else {

        if ($result->num_rows == 1) {
            // Utilisateur trouvé
            $user = $result->fetch_assoc();
            if ($password == $user['motdepasse']) {
                // Mot de passe correct
                $id_client = "SELECT id_client FROM client WHERE nomutilisateur = '$username'";
                $_SESSION['id_client'] = $id_client;
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