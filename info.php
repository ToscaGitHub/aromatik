<?php include("includes/headerBack.inc.php"); ?>

<?php
session_start();
if (!empty($_SESSION["connect"]) && $_SESSION["connect"] === true) { ?>

<!-- Plats -->
        <div class="card party">
            <h5 class="card-title">Info</h5>
            <div class="card-body">
                <form method="POST">
                    
                    <div class="mb-3">
                    <label class="form-label">Tel</label>
                    <input type="text" class="form-control" name="num_tel">
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
    if (!empty($_POST["num_tel"])) {
        $requetMenu = 'INSERT INTO info (num_tel) VALUES ("' . $_POST["num_tel"] . '")';
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
                url: "info.ajax.php",
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
                url: "info.ajax.php",
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