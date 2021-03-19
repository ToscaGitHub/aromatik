
<?php
include("includes/init.inc.php");


        if (isset($_POST["sup"])) {
            $suprMenu = 'DELETE FROM menu_menu_aromatik WHERE id_menu= "' . $_POST["sup"] . '" ';
            $menuSpr = $pdo->exec($suprMenu);
        }

        $requestTitreMenu = 'SELECT titre_menu, id_menu FROM menu_menu_aromatik';
        $envoieTitreMenu = $pdo->query($requestTitreMenu);
        while ($printerMenu = $envoieTitreMenu->fetch(PDO::FETCH_ASSOC)) {
?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $printerMenu["titre_menu"] ?></h5>
                            <button class="btn btn-primary" value="<?php echo $printerMenu['id_menu'] ?>" onclick="supr(this.value)">supprimer</button>
                        </div>
                    </div>
                </div>
            <?php
        }
 

?>