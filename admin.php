<?php include("includes/headerBack.inc.php"); ?>

<?php
session_start();
if (!empty($_SESSION["connect"]) && $_SESSION["connect"] === true) { ?>
    <!-- menu -->
    <div class="bigDiv">
        <div class="card party">
            <h5 class="card-title">Menu</h5>
            <div class="card-body">
                <form method="POST" id="J&M">
                    <div class="mb-3">
                        <label class="form-label">Titre Menu</label>
                        <input id="TitreId" type="text" class="form-control" name="titre_menu">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Entrer</label>
                        <textarea id="MaJokeId" class="form-control" name="entre_menu" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Plats Viande</label>
                        <textarea id="MaJokeId" class="form-control" name="viande_menu" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Plats poisson</label>
                        <textarea id="MaJokeId" class="form-control" name="poisson_menu" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dessert</label>
                        <textarea id="MaJokeId" class="form-control" name="dessert_menu" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix</label>
                        <input id="TitreId" type="number" class="form-control" name="prix_menu">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item print"></li>
            </ul>
        </div>

    </div>
    <?php
    if (!empty($_POST["titre_menu"]) && !empty($_POST["entre_menu"]) && !empty($_POST["viande_menu"]) && !empty($_POST["poisson_menu"]) && !empty($_POST["dessert_menu"]) && !empty($_POST["prix_menu"])) {
        $requetMenu = 'INSERT INTO menu_menu_aromatik (titre_menu,entre_menu,viande_menu,poisson_menu,dessert_menu,prix_menu) VALUES ("' . $_POST["titre_menu"] . '","' . $_POST["entre_menu"] . '","' . $_POST["viande_menu"] . '","' . $_POST["poisson_menu"] . '","' . $_POST["dessert_menu"] . '","' . $_POST["prix_menu"] . '")';
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
                url: "supprimer.php",
                data: {
                    affichage: "menu"
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
                url: "supprimer.php",
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