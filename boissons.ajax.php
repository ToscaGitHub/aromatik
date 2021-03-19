<?php
include("includes/init.inc.php");
if (isset($_POST["sup"])) {
        $suprMenu = 'DELETE FROM menu_boisson_aromatik WHERE id_boisson= "' . $_POST["sup"] . '" ';
        $menuSpr = $pdo->exec('DELETE FROM menu_boisson_aromatik WHERE id_boisson= "' . $_POST["sup"] . '" ');
    }

    $requestTitreMenu = 'SELECT titre_boisson, id_boisson FROM menu_boisson_aromatik';
    $envoieTitreMenu = $pdo->query($requestTitreMenu);
    while ($printerMenu = $envoieTitreMenu->fetch(PDO::FETCH_ASSOC)) {
            ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $printerMenu["titre_boisson"] ?></h5>
                            <button class="btn btn-primary" value="<?php echo $printerMenu['id_boisson'] ?>" onclick="supr(this.value)">supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
    ?>