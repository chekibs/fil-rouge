<?php
include 'inc/header.inc.php';
include 'inc/init.inc.php';

// ---------------------------------------------------------------------
// SELECT :

$result = $pdo->query("SELECT * FROM recettes");
?>
<section id="recettes" class="container">
    <div class="row">
        <div class="col-12">
            <?php
            while ($recette = $result->fetch(PDO::FETCH_OBJ)) {
                ?>


                <h3><?php echo $recette->titre; ?></h3>
                <img src="photos/recettes/<?php echo $recette->img; ?>"/>

                <div class="col-6>">
                    <p><?php echo $recette->chapo; ?></p>
                    <a href="recette.php?idRecette=<?php echo $recette->idRecette; ?>" class="btn btn-primary">Voir recette</a>
                    <div class="dropdown-divider"></div>


                <?php }
                ?></div>
        </div>
    </div>
</section>
<?php
include 'inc/footer.inc.php';
