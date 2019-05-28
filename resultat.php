<?php
include 'inc/header.inc.php';
include 'inc/init.inc.php';

$search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);

$result = $pdo->query("SELECT * FROM recettes WHERE titre LIKE '%$search%'");
while ($recette = $result->fetch(PDO::FETCH_OBJ)) {
    ?>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src='photos/recettes/<?php echo $recette->img; ?>' class="card-img-top" alt="Recette">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $recette->titre; ?></h5>
                    <p class="card-text">
                        <?php echo $recette->chapo; ?>
                    </p>
                    <a href="recette.php?idRecette=<?php echo $recette->idRecette; ?>" class="btn btn-primary">Voir recette</a>
                </div>
            </div>

        </div>
    </div>
    <?php
}

include 'inc/footer.inc.php';