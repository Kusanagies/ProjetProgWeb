<?php
session_start();
// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['id_client'])) {
  // Si l'utilisateur est connecté, afficher le contenu de la page
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>Mon espace</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <section style="height: 80px;">
      <?php include 'barre-menu.php'; ?>
    </section>
    <div class="container">
      <h1>Bienvenue dans votre espace, <?= $_SESSION['id_client'] ?> !</h1>
      <form action='deco-compte.php' method='post'>
        <input type='submit' value='Déconnexion'>
      </form>
    </div>
  </body>

  </html>
<?php
} else {
  // Si l'utilisateur n'est pas connecté, lancer la page de vérification de connexion
  include 'formulaire.php';
}
?>