<?php include ("inc/header.inc.php"); ?>
<?php include ('inc/login.php'); ?>


<?php
$pdo = new PDO('mysql:host=localhost;dbname=cooking', $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// ---------------------------------------------------------------------
// SELECT :

$result = $pdo->query("SELECT * FROM recettes");

$recette = $result->fetch(PDO::FETCH_OBJ);
?>
<section id="recettes" class="container">
    <div class="row">
        <div class="col-12">
            <?php
            while ($recette = $result->fetch(PDO::FETCH_OBJ)) {
                ?>


                <h3><?php echo $recette->titre; ?></h3>
                <img src="images/<?php echo $recette->img; ?>"/>
                <div class="col-6>">
                    <p><?php echo $recette->chapo; ?></p>

                    <?php echo $recette->preparation; ?>
                    <?php echo $recette->ingredient; ?></div>

            <?php }
            ?></div>
    </div>
</section>
<?php include ("inc/footer.inc.php"); ?>
    