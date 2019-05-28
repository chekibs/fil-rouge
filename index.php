<?php include "inc/init.inc.php";
include "inc/header.inc.php";
?> 


<!-- ******************************************************* -->
<!-- Content -->
<section class="container-fluid">

    <!-- Carousel -->
    <div id="carousel" class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="photos/fruits-legumes/carotte.jpg" alt="Photo de crème de petits">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="photos/fruits-legumes/carotte.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="photos/fruits-legumes/carotte.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- END CAROUSEL -->

</section>

<section class="margin-section container">
    
    <div class="row justify-content-between">
        
        <div class="card" style="width: 18rem;">
            <img src="photos/recettes/risotto-feves-asperges.jpg" class="card-img-top" alt="Recette du jour">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Voir recette</a>
            </div>
        </div>
        
        <div class="card" style="width: 18rem;">
            <img src="photos/recettes/carottes-glacees-orange.jpg" class="card-img-top" alt="Recette du jour">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Voir recette</a>
            </div>
        </div>
        
        <div class="card" style="width: 18rem;">
            <img src="photos/recettes/creme-petits-poids.jpg" class="card-img-top" alt="Recette du jour">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Voir recette</a>
            </div>
        </div>
        
    </div>
</section>

<section class="margin-section container">
    <div class="row">
        <div class="col-9">
            <button type="button" class="btn btn-primary">Se connecter</button>
        </div>
        <div class="col-9">
            <button type="button" class="btn btn-secondary">Créer un compte</button>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-success">Déposer une recette</button>
        </div>
    </div>
</section>
<!-- ******************************************************* -->
<?php
include "inc/footer.inc.php";
