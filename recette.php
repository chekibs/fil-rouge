<?php
include 'inc/header.inc.php';
include 'inc/init.inc.php';

if (!empty($_GET)) {

    $idRecette = $_GET['idRecette'];
    $query = "SELECT * FROM recettes WHERE idRecette=$idRecette";
    $result = $pdo->query($query);
    $recette = $result->fetch(PDO::FETCH_OBJ);
    ?>
    <div class="container">

        <h1><?php echo $recette->titre; ?></h1>
        <img src="photos/recettes/<?php echo $recette->img; ?>" alt="Image de la recette">
        <div class="dropdown-divider"></div>
        <h5> <?php echo $recette->chapo; ?> </h5>
        <p><?php echo $recette->ingredient; ?></p>
        <p><?php echo $recette->preparation; ?></p>

    </div>
    <?php
}

include 'inc/footer.inc.php';
