<?php
include "inc/init.inc.php";
include "inc/header.inc.php";


$query2 = "SELECT * FROM membres";

$result = $pdo->query($query2);
?>

<div class="container">
    <div class="row justify-content-center">
        <table>
            <tbody>
                <?php
                while ($membre = $result->fetch(PDO::FETCH_OBJ)) {
                    ?>

                    <tr>
                        <td><a href="membre-detail.php?idMembre=<?php echo $membre->idMembre; ?>"><?php echo $membre->login; ?></a></td>


                        <td><img src="photos/gravatars/<?php echo $membre->gravatar; ?>"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



<?php
include "inc/footer.inc.php";
