<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            background-color: rgb(220, 220, 78);
        }

        table {
            width: 100%; /* Prendre toute la largeur */
            height: 100%; /* Prendre toute la hauteur */
            table-layout: fixed; /* Assurer une répartition fixe des cellules */
            border-collapse: collapse; /* Éliminer l'espace entre les cellules */
        }

        td {
            text-align: center; /* Aligner le contenu au centre */
            vertical-align: middle; /* Aligner verticalement */
            padding: 10px; /* Espacement intérieur */
            border: none; /* Pas de bordure par défaut */
        }

        tr:first-child {
            height: 10%; /* Définir la hauteur de la première ligne */
        }
        
        tr:last-child {
            height: 90%; /* Définir la hauteur de la dernière ligne */
        }
        
        .menu {
            height: 10%; 
            border-bottom: 1px solid black;
    
        }       

        .form-row {
            display: flex;
            justify-content: space-between; 
        }

        .form-left {
            display: flex;
            flex-direction: column;
            gap: 10px; 
            width: 40%;
        }

        .form-right {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 40%; 
            align-items: flex-end;
        }

        .form-container input,
        .form-container textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%; 
        }

        .form-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }
    </style>

    <script>
        // Fonction de validation du formulaire
        function validateForm() {
            // Récupérer tous les inputs et textarea du formulaire
            const inputs = document.querySelectorAll(".form-container input, .form-container textarea");
            for (const input of inputs) {
                if (input.value.trim() === "") { // Si un champ est vide ou seulement des espaces
                    alert("Tous les champs doivent être remplis."); // Alerte si vide
                    return false; // Empêche la soumission du formulaire
                }
            }
            return true; // Si tous les champs sont remplis, permet la soumission
        }
    </script>
</head>
<body>

<table>
    <tr class="menu">
        <td><button onclick="window.location.href='reservation.php'">Réservez ICI</button></td>
        <td><button onclick="window.location.href='aboutus.php'">Et nous?</button></td>
        <td><button onclick="window.location.href='joinus.php'">Contacter nous</button></td>
        <td><button onclick="window.location.href='compte.php'">Mon compte</button></td>
        <td><button onclick="window.location.href='accueil.php'"><img src="IMG/LogoAccueil.png" alt="Logo"></button></td>
    </tr>
    <tr>
        <td colspan="5">
            <div class="form-container">
                <h1>Vous avez quelque choise à nous dire? Dites le nous ici!</h1>
                <form action="/submit" method="post" onsubmit="return validateForm()"> <!-- Validation à la soumission -->
                    <div class="form-row">
                        <div class="form-left">
                            <label pour="name">Nom</label>
                            <input type="text" id="name" name="name" required>

                            <label pour="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" required>

                            <label pour="phone">Téléphone</label>
                            <input type="tel" id="phone" required>

                            <label pour="email">E-mail</label>
                            <input type="email" required>

                            <label pour="subject">Objet</label>
                            <input type="text" id="subject" required>
                        </div>

                        <div class="form-right">
                            <label pour="message">Votre message</label>
                            <textarea id="message" name="message" rows="20" required></textarea>

                            <button type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </td>
    </tr>
</table>

</body>
</html>
