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
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            padding: 20px;
            gap: 20px; 
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

        .form-middle{
            display: flex;
            flex-direction: column;
            gap: 10px; 
            width: 20%;

        }

        .form-right {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 40%; 
            align-items: flex-end;
        }

        .form-container label {
            font-weight: bold;
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
</head>
<body>

<table>
    <tr>
        <?php include 'barre-menu.php'; ?>
    </tr>
    <tr>
        <td colspan="5">
            <div class="form-container">
            <form action="/submit" method="post">    
                <div class="form-row"> 
                    <div class="form-left">
                        <label for="name">Nom et Prénom</label>
                        <input type="text" id="name" name="name" required>

                        <label for="prenom"> Prénom</label>
                        <input type="text" id="prenom" name="prenom" required>

                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" required>

                        <label for="email">E-mail</label>
                        <input type="email" id="email" required>

                        <label for="subject">Objet</label>
                        <input type="text" id="subject" required>
                    </div>
                    <div class="form-middle">

                    </div>

                    <div class="form-right"> 
                        <label for="message">Votre message</label>
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