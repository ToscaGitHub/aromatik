<?php include("includes/headerBack.inc.php"); ?>

<?php
session_start();
if (!empty($_SESSION["connect"]) && $_SESSION["connect"] === true) { ?>

<!-- Plats -->
        <div class="card party">
            <h5 class="card-title">Plat</h5>
            <div class="card-body">
                <form method="POST">
                    <label class="form-label">Type Plats</label>
                    <select class="form-select" aria-label="Default select example" name="type_plats">
                        <option selected>Type Plats</option>
                        <option value="entree">Entree</option>
                        <option value="viande">Viande</option>
                        <option value="poisson">Poisson</option>
                        <option value="fromage">Fromage</option>
                        <option value="dessert">Dessert</option>
                    </select>
                    <div class="mb-3">
                        <label class="form-label">Titre Plats</label>
                        <textarea class="form-control" name="titre_plats" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Prix</label>
                    <input type="number" class="form-control" name="prix_plats">
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
    if (!empty($_POST["type_plats"]) && !empty($_POST["titre_plats"]) && !empty($_POST["prix_plats"])) {
        $requetMenu = 'INSERT INTO menu_repas_aromatik (type_repas,titre_repas,prix_repas) VALUES ("' . $_POST["type_plats"] . '","' . $_POST["titre_plats"] . '","' . $_POST["prix_plats"] . '")';
        $execMenu = $pdo->exec($requetMenu);
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
                url: "plats.ajax.php",
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
                url: "plats.ajax.php",
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