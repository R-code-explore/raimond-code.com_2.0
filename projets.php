<?php
$page_title = "Raimond-code.com / Blog";
$css_link = "./css/style.css";

$header_pages_1 = "Contact";
$header_link_1 = "./index.php#contact";

$header_pages_2 = "Accueil";
$header_link_2 = "./index.php";

$header_pages_3 = "Blog";
$header_link_3 = "./blog.php";

$header_pages_4 = "A propos";
$header_link_4 = "./index.php#about_id";

$header_pages_5 = "Ce que je propose";
$header_link_5 = "./index.php#services_id";

include './includes/header.php';
?>

<div class="project_content">

<!---------------------------------->
    
<div class="title_project_div">
    <h3 id="to_top">Réalisations & projets</h3>
    <p class="para">Ici je poste et posterais certains de mes projets mais ils n'y seront pas tous, pour la simple raison qu'il n'est pas réellement intéressant pour moi de montrer tout ce sur quoi je travail, car pas toute chose est importante au public que je vise ou bien même à ma clientèle. Il y aura très certaintement cependant, des projets sur lesquels je parlerais dans le <a href="./blog.php">blog directement.</a></p>
</div>

<div class="sep_bar"></div>

<h3 class="title_project">Projet "CFenetres.fr"</h3>
<div class="section_projets">
    <p>
        Conception, maquettage et développement du site cfenetres.fr.
        <br>
        <strong>Technos et langages utilisés:</strong>
        <br><br>
        <strong>Back-end:</strong>
        <br>
        - SQL
        <br>
        - PHP
        <br>
        - MySql
        <br><br>
        <strong>Front-end:</strong>
        <br>
        - PHP
        <br>
        - HTML
        <br>
        - JavaScript
        <br>
        - Framework CSS Bootstrap.
        <br><br>
        Ce projet était plus ou moins mon premier projet complet, on parle ici de la gérance de plusieurs tables en base de données ainsi qu’une génération dynamique du contenu qui ont été nécessaires afin d’améliorer la gérance en autonomie de son site pour mon client.
<br>
En ce qui concerne la partie Front-End, j’ai utilisé comme noté plus haut, des technologies simple et qui me paraissent largement suffisantes pour cette demande étant donné que le plus gros à été a faire en Back-End.

    </p>
    
    <div class="img_project_session">
        <img src="./assets/Site_1/Capture.PNG" class="">
        <img src="./assets/Site_1/Capture_02.PNG">
        <img src="./assets/Site_1/Capture_03.PNG">
    </div>

</div>

<div class="sep_bar"></div>

<h3 class="title_project">Projet "Corps-conscience.com"</h3>
<div class="section_projets">

    <p>
        Conception et développement du site corps-conscience.com .
        <br>
        <strong>Langages et technos utilisés:</strong>
        <br><br>
        <strong>Back-end:</strong>
        <br>
        - SQL, MySql
        <br>
        - PHP
        <br><br>
        <strong>Front-end:</strong>
        <br>
        - PHP
        <br>
        - HTML
        <br>
        - JavaScript
        <br>
        - JQuery
        <br>
        - Bootstrap
        <br><br>
        <strong>Gestion de la base de données</strong>
        - Gestion par commandes SQL.
        <br><br>
        La demande du client était simple:
<br>
Un site de présentation de son activité, avec une interface interconnecté, reliant front et commandes en back, lui permettant de gérer son site à son aise.
<br>
Une petite différence est tout de même apparu dans ce projet, et cette dernière étant ma collaboration avec l’agence <strong><a href="https://terredeconnexion.com/" class="terredeco">Terre de connexion</a></strong>.
    <style>.terredeco:hover{color: orange;}</style>
<br>
Une collaboration qui signe le début d’une longue aventure avec de beaux projets à venir.

    </p>

    <div class="img_project_session">
        <img src="./assets/Site_2/img_1.PNG">
        <img src="./assets/Site_2/img_2.PNG">
        <img src="./assets/Site_2/img_3.PNG">
    </div>

</div>

<div class="sep_bar"></div>

<h3 class="title_project">Projet "Dice-roll-game"</h3>
<div class="section_projets">
    <p>
    Conception et développement du site hypnoconect.com .
<br>
Pour ce projet la maquette m'a été fournie.
<br>
Langages et technos utilisés:
<br><br>
Back-end:
<br>
- SQL, MySql
<br>
- PHP
<br><br>
Front-end:
<br>
- HTML
<br>
- JavaScript
<br>
- CSS

Celui-ci, c’est un projet qui a été généré en Javascript et ce pour une bonne raison. En utilisant le PHP, il est possible de générer ou de modifier du contenu dynamiquement mais cela nécessite quasi systématiquement un rechargement de la page, ce qui dans ce cas n’était absolument pas possible, je suis donc passer sur un changement dynamique des informations et ce, sans rechargement de page, directement via javascript.
<br>
Le projet en sois et son algorithme ne sont pas si complexe que ce ça en a l’air, ce dernier est disponible d’ailleurs sur github en cliquant <a href="https://github.com/R-code-explore/dice-roll-game" target="_blank"><strong>juste ici</strong></a>.
    </p>
    
    <div class="img_project_session">
        <img src="./assets/Site_3/Capture.PNG" class="">
        <img src="./assets/Site_3/Capture_02.PNG">
        <img src="./assets/Site_3/Capture_03.PNG">
    </div>

</div>

<div class="sep_bar"></div>

<!---------------------------------->

</div>

<style>
    .sep_bar{
        margin: 40px auto;
    }
</style>

<?php include './includes/footer.html'; ?>