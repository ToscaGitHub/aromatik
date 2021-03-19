<?php
include("includes/init.inc.php");
if (isset($_POST["sup"])) {
        $suprMenu = 'DELETE FROM info WHERE id_info= "' . $_POST["sup"] . '" ';
        $menuSpr = $pdo->exec('DELETE FROM info WHERE id_info= "' . $_POST["sup"] . '" ');
    }

    $requestTitreMenu = 'SELECT num_tel, id_info FROM info';
    $envoieTitreMenu = $pdo->query($requestTitreMenu);
    while ($printerMenu = $envoieTitreMenu->fetch(PDO::FETCH_ASSOC)) {
            ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $printerMenu["num_tel"] ?></h5>
                            <button class="btn btn-primary" value="<?php echo $printerMenu['id_info'] ?>" onclick="supr(this.value)">supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
    ?>