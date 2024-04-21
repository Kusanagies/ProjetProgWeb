
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
                $sql1 = "SELECT id_client FROM client WHERE nomutilisateur = '$username'";
                $result1 = $conn->query($sql1);
                if ($result1->num_rows > 0) {
                    $row = $result1->fetch_assoc();
                    $id_client = $row['id_client'];
                    $_SESSION['id_client'] = $id_client;
                } else {
                    // Gérez le cas où l'utilisateur n'est pas trouvé (par exemple, affichez un message d'erreur)
                    echo "Utilisateur non trouvé.";
                }
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