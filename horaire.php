<?php include("includes/headerBack.inc.php"); ?>

<?php
session_start();
if (!empty($_SESSION["connect"]) && $_SESSION["connect"] === true) { ?>

<!-- Plats -->
        <div class="card party">
            <h5 class="card-title">Horaire</h5>
            <div class="card-body">
                <form method="POST">
                    
                    <div class="mb-3">
                    <label class="form-label">Horaire ouverture Midi</label>
                    <input type="number" class="form-control" name="HOM">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Horaire fermeture Midi</label>
                    <input type="number" class="form-control" name="HFM">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Horaire ouverture Soir</label>
                    <input type="number" class="form-control" name="HOS">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Horaire fermeture Soir</label>
                    <input type="number" class="form-control" name="HFS">
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
    if (!empty($_POST["HOM"]) && !empty($_POST["HFM"]) && !empty($_POST["HOS"]) && !empty($_POST["HFS"])) {
        $requetMenu = 'INSERT INTO horaire_aromatik (ouverture_midi,femeture_midi,ouverture_soir,femeture_soir) VALUES ("' . $_POST["HOM"] . '","' . $_POST["HFM"] . '","' . $_POST["HOS"] .'","' . $_POST["HFS"] .'")';
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
                url: "horaire.ajax.php",
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
                url: "horaire.ajax.php",
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