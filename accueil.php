<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <style>
        .slideshow-container {
            position: relative;
            max-width: 100%;
            overflow: hidden;
        }

        .slide {
            display: none;
        }

        .visible {
            display: block;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: 0.4;
            }
            to {
                opacity: 1;
            }
        }

        .throbber {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background-color: #ccc;
            border-radius: 10px;
            animation: throb 5s linear infinite;
        }

        @keyframes throb {
            0% { width: 0; }
            100% { width: 100%; }
        }

        .image-link-v1 img{
            max-width: auto; 
            max-height: 500px;
        }

        .image-link-v2 img{
            max-width: auto; 
            height: auto;
        }
    </style>
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

    <tr class="menu">
        <td  colspan ="5"  ><h2>Bienvenue à votre prochaine aventure d'escape game !<h2><br><br>

<p>Choisissez votre équipe :
Vous avez la possibilité de constituer des équipes de 2 à 6 personnes, ou de jouer en solo si vous vous sentez l'âme d'un détective solitaire. Formez votre équipe avec vos amis, votre famille ou vos collègues pour vivre une expérience inoubliable.<p>

<p>Avant de commencer :
Nous vous expliquerons les règles du jeu, les consignes de sécurité et quelques astuces pour maximiser votre réussite. Vous recevrez également un briefing sur le scénario de votre escape game : une mission pleine de mystère et de suspense.<p>

<p>Le but du jeu :
Votre équipe devra résoudre des énigmes, déchiffrer des codes et trouver des indices pour accomplir votre mission et vous échapper de la pièce dans le temps imparti. Vous devrez faire preuve de logique, de coopération et de créativité pour réussir.<p>

<p>Que se passe-t-il après le jeu ?
À la fin de la partie, découvrez si vous avez réussi à sortir à temps ou si vous avez besoin de quelques indices supplémentaires pour achever votre quête. Quel que soit le résultat, le plaisir est assuré !<p>

<p>Pourquoi nous choisir ?<br>

    Nos salles d'escape game sont entièrement privatisées pour votre groupe, garantissant une expérience personnalisée.<br>
    Nos maîtres du jeu sont des experts qui vous guideront tout au long de votre aventure, tout en vous laissant suffisamment de liberté pour résoudre les énigmes.<br>
    Nous offrons une large gamme de niveaux de difficulté pour convenir à tous, des débutants aux joueurs expérimentés.<br>
    Nous pouvons personnaliser votre expérience d'escape game pour des événements spéciaux, comme des anniversaires ou des sorties d'entreprise.<br><br>

Alors, êtes-vous prêt à relever le défi ? Venez découvrir votre prochain escape game avec nous et plongez dans une aventure inoubliable au coeur de Nanterre !</td>
        

    </tr>
    <tr >
        <td colspan="5">
            <h1>Voici le site de réservation pour 4 escape game</h1>
            <div class="center-container"> <!-- Flexbox pour centrer -->
                <div class="slideshow-container">
                    <div class="slide fade visible">
                        <a href="avion-description.php" class="image-link">
                            <img src="IMG/AvionDescription.webp" alt="Escape game Avion">
                        </a>
                    </div>
                    <div class="slide fade">
                        <a href="basemilitaire-description.php" class="image-link-v1">
                            <img src="IMG/BaseMilitaireDescription.webp" alt="Escape game Base militaire">
                        </a>
                    </div>
                    <div class="slide fade">
                        <a href="crime-description.php" class="image-link">
                            <img src="IMG/Crime.webp" alt="Escape game Enquête de meurtre">
                        </a>
                    </div>
                    <div class="slide fade">
                        <a href="chateau-description.php" class="image-link-v2">
                            <img src="IMG/ChateauHante.webp" alt="Escape game Château hanté">
                        </a>
                    </div>
                </div>
                <div class="throbber"></div>
            </div>
        </td>
    </tr>
</table>

<script src="script.js"></script>
<script>
    // Afficher la première image immédiatement
    document.querySelector('.slide').classList.add('visible');
</script>

</body>
</html>
