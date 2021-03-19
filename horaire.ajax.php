<?php
include("includes/init.inc.php");
if (isset($_POST["sup"])) {
        $suprMenu = 'DELETE FROM horaire_aromatik WHERE id_horaire= "' . $_POST["sup"] . '" ';
        $menuSpr = $pdo->exec('DELETE FROM horaire_aromatik WHERE id_horaire= "' . $_POST["sup"] . '" ');
    }

    $requestTitreMenu = 'SELECT id_horaire FROM horaire_aromatik';
    $envoieTitreMenu = $pdo->query($requestTitreMenu);
    while ($printerMenu = $envoieTitreMenu->fetch(PDO::FETCH_ASSOC)) {
            ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> Horaire En Place</h5>
                            <button class="btn btn-primary" value="<?php echo $printerMenu['id_horaire'] ?>" onclick="supr(this.value)">supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
    ?>