<?php include("includes/headerBack.inc.php"); ?>

<?php
session_start();
if (!empty($_SESSION["connect"]) && $_SESSION["connect"] === true) { ?>

<!-- Plats -->
        <div class="card party">
            <h5 class="card-title">Boissons</h5>
            <div class="card-body">
                <form method="POST">
                    <label class="form-label">Type Boisson</label>
                    <select class="form-select" aria-label="Default select example" name="type_boisson">
                        <option selected>Type Boisson</option>
                        <option value="vin rouge">Vin Rouge</option>
                        <option value="vin rose">Rosé</option>
                        <option value="vin blanc">Vin Blanc</option>
                        <option value="boisson fraiche">Boisson Fraiche</option>
                        <option value="digestif">Digestif</option>
                        <option value="boisson chaude">Boisson Chaudes</option>
                        <option value="verre de vin">Verre De Vin</option>
                        
                    </select>
                    <div class="mb-3">
                        <label class="form-label">Titre boisson</label>
                        <textarea class="form-control" name="titre_boisson" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description boisson</label>
                        <textarea class="form-control" name="description_boisson" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Prix</label>
                    <input type="number" class="form-control" name="prix_boisson">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Contenance</label>
                    <input type="number" class="form-control" name="contenance_boisson">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Prix 2</label>
                    <input type="number" class="form-control" name="prix2_boisson">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Contenance 2</label>
                    <input type="number" class="form-control" name="contenance2_boisson">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >Envoyer</button>
                    </div>
                </form>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item print"></li>
            </ul>
        </div>
    </div>
    <?php
    if (!empty($_POST["type_boisson"]) && !empty($_POST["titre_boisson"]) && !empty($_POST["description_boisson"]) && !empty($_POST["prix_boisson"]) && !empty($_POST["contenance_boisson"])) {

        if (!empty($_POST['prix2_boisson']) && !empty($_POST['contenance2_boisson'])) {
            
            $requetMenu = 'INSERT INTO menu_boisson_aromatik (type_boisson,titre_boisson,description_boisson,prix_boisson,contenance_boisson,prix2_boisson,contenance2_boisson) VALUES ("' . $_POST["type_boisson"] . '","' . $_POST["titre_boisson"] . '","' . $_POST["description_boisson"] .'","' . $_POST["prix_boisson"] .'","' . $_POST["contenance_boisson"] .'","' . $_POST["prix2_boisson"] .'","' . $_POST["contenance2_boisson"] . '")';
            $execMenu = $pdo->exec($requetMenu);

        } else {

            $requetMenu = 'INSERT INTO menu_boisson_aromatik (type_boisson,titre_boisson,description_boisson,prix_boisson,contenance_boisson) VALUES ("' . $_POST["type_boisson"] . '","' . $_POST["titre_boisson"] . '","' . $_POST["description_boisson"] .'","' . $_POST["prix_boisson"] .'","' . $_POST["contenance_boisson"] . '")';
            $execMenu = $pdo->exec($requetMenu);

        }
    }

    ?>
<?php
} else {
    header("Location: adminconect.php");
    exit;
}
?>

<script>
    $(document).ready(function() {

        var jqxhr = $.ajax({
                method: "POST",
                url: "boissons.ajax.php",
                data: {
                    affichage: "plat"
                }
            })
            .done(function(contenuDeLaPage) {
                $('.print').html(contenuDeLaPage);
            })
            .fail(function() {
                alert("error");
            })
            .always(function() {
                // alert( "complete" );
            });

    });

    function supr(val) {
        var jqxhr = $.ajax({
                method: "POST",
                url: "boissons.ajax.php",
                data: {
                    sup: val
                }
            })
            .done(function(contenuDeLaPage) {
                $('.print').html(contenuDeLaPage);
            })
            .fail(function() {
                alert("error");
            })
            .always(function() {
                //rt( "complete" );)
            });
    }
</script>
<?php include("includes/footerBack.inc.php"); ?>