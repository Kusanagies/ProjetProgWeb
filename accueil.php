<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
 <style>


      
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

       
        tr:first-child {
            height: 10%; 
        }
        
        tr:last-child {
            height: 90%; 
        }
    </style>
<body>

<table>
    <tr>
      
        <td><button onclick="window.location.href='reservation.php'">Réservez ICI</button></td>
        
        <td><button onclick="window.location.href='aboutus.php'">Et nous?</button></td>
        <td> <button onclick="window.location.href='joinus.php'">Contacter nous</button></td>
        <td><button onclick="window.location.href='compte.php'">Mon compte</button></td>
        <td><button onclick="window.location.href='accueil.php'"><img src="IMG/LogoAccueil.png" alt="Logo"></button></td>
    </tr>
    <tr>
      
        <td colspan="5"><h1>Voici le site de réservation pour x escape game</h1></td> <!-- On fusionne 5 colonnes -->
    </tr>
</table>
   

</body>
</html>

