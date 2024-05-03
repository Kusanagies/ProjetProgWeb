<!DOCTYPE html>
<html>

<head>
  <title>Connexion</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  </style>
</head>

<body>
  <section style="height: 80px;">
    <table>
    <td><button onclick="window.location.href='accueil.php'"><img src="IMG/LogoAccueil.png" alt="Logo"></button></td>
  </table>
  </section>
  <table>
  <div style='display: flex; justify-content: center; align-items: center; height: 10vh;'>
    <div class='form-column'>
      <tr><div>
        <!-- Formulaire pour les nouveaux utilisateurs -->
        <h2> Nouvel utilisateur</h2>
        <br>
        <form action='crea-compte.php' method='post'>
          <label for='user'>Nom d'utilisateur :</label>
          <input type='text' id='nomutilisateur' name='nomutilisateur' required>

          <label for='email'>Email :</label>
          <input type='email' id='email' name='email' required>

          <label for='motdepasse'>Mot de passe :</label>
          <input type='password' id='motdepasse' name='motdepasse' required>

          <input type='submit' value="S'inscrire">
        </form>
      </div></tr>
      <!-- Formulaire pour les utilisateurs déjà enregistrés -->
      <tr><div>
        <h2>Déjà inscrit ?</h2>
        <br>
        <form action='conn-compte.php' method='post'>
          <label for='nomutilisateur'>Nom d'utilisateur :</label>
          <input type='text' id='nomutilisateur' name='nomutilisateur' required>

          <label for='motdepasse'>Mot de passe :</label>
          <input type='password' id='motdepasse' name='motdepasse' required>

          <input type='submit' value='Se connecter'>
        </form>
      </div></tr>
    </div>
  </div>
</table>
  </body>
</html>