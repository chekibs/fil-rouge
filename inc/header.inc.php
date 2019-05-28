<?php include 'inc/init.inc.php'; 

?>
<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="author" content="Chekib Succaram">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Alice|Sacramento&display=swap" rel="stylesheet">

        <title>Cooking</title>
    </head>

    <body>

        <!-- Navbar -->

        <nav class="site-header py-1">
            <div id="nav" class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-none d-md-inline-block" href="recette-detail.php">Recettes</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Menus</a>
                <a class="py-2" href="index.php">
                    <img id="logo" src="images/logo-cooking.png" alt="Logo Cooking">
                </a>
                <a class="py-2 d-none d-md-inline-block" href="membre.php">Membres</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Contact</a>
                <form class="form-inline my-2 my-lg-0" method="post" action="resultat.php">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Recherche recette" aria-label="Search">
                    <button id="search" class="btn recherche my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>

        </nav>
        <!-- END Navbar -->