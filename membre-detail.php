<?php
include "inc/init.inc.php";
include "inc/header.inc.php";


if (!empty($_GET)) {

    $idMembre = $_GET['idMembre'];
    $query = "SELECT * FROM membres WHERE idMembre=$idMembre";
    $result = $pdo->query($query);
    $membre = $result->fetch(PDO::FETCH_OBJ);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <table>
                <thead>
                    <tr>
                        <td colspan="2"><img src="photos/gravatars/<?php echo $membre->gravatar; ?>"></td>
                    </tr></thead>
                <tbody>
                    <tr>
                        <td><h6>Nom</h6></td>
                        <td><h6><?php echo $membre->nom; ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Prénom</h6></td>
                        <td><h6><?php echo $membre->prenom; ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Login</h6></td>
                        <td><h6><?php echo $membre->login; ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Statut</h6></td>
                        <td><h6><?php echo $membre->statut; ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Date création</h6></td>
                        <td><h6><?php echo $membre->dateCrea; ?></h6></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><?php
}



include "inc/footer.inc.php";
