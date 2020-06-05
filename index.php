<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/font/fontello/css/fontello.css">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body>
<header><?php include("header.php");?></header>
<main class="main_index">
   

   
    <h1>Actualités</h1>
    <h2>A la Une</h2>
    <div class="news">
        <div class="infos">
            <img src="src/img/doctor-563428_1920.jpg" alt="photo article">
            <h3><a href="https://www.lemonde.fr/sante/video/2020/04/26/pourquoi-le-coronavirus-a-mis-a-l-epreuve-les-hopitaux-francais_6037799_1651302.html" target="blank">Pourquoi le coronavirus a mis à l’épreuve les hôpitaux français</a></h3>
            <p> Pas assez réformé, ou réformé trop vite ? Manque de personnel ou manque de souplesse ? « Le Monde » fait le point, en vidéo, sur les avancées et les limites de plusieurs décennies de transformations de l’hôpital public français.</p>
            <span>Publié le 26 avril 2020 à 08h00 - Mis à jour le 26 avril 2020 à 14h41</span>
        </div>
        <div class="infos">
            <img src="src/img/eiffel-tower-975004_1920.jpg" alt="photo article">
            <h3><a href="https://www.lemonde.fr/sante/video/2020/03/18/coronavirus-les-images-d-un-paris-quasi-desert_6033555_1651302.html" target="blank">Coronavirus : les images d’un Paris quasi désert</a></h3>
            <p> Des Champs-Elysées à Montmartre, les rues et les places de la capitale sont quasiment vides, mardi 18 mars, face à l’épidémie de Covid-19.</p>
            <span>Publié le 18 mars 2020 à 15h32</span>
        </div>
        <div class="infos">
            <img src="src/img/protest.webp" alt="photo article">
            <h3><a href="https://www.lemonde.fr/international/article/2020/06/04/being-black-de-ferguson-a-minneapolis_6041743_3210.html" target="blank">« Being Black » aux Etats-Unis, de la mort de Michael Brown à celle de George Floyd</a></h3>
            <p> Alors que les manifestations après la mort de George Floyd lors de son interpellation entrent dans leur deuxième semaine, Barack Obama a estimé que les Noirs ont joué un rôle prépondérant pour « réveiller » le pays..</p>
            <span>Publié aujourd’hui à 11h23, mis à jour à 13h51</span>
        </div>
    </div>
    <h2>Débat</h2>
    <p>Venez débattre des dernières actualités dans le <a href="discussion.php">chat</a></p>

</main>
<footer><?php include("footer.php");?></footer>
</body>
</html>