<?php require_once("includes/header.inc.php"); ?>

<?php 

// AUTHENTIFICATION DE L'ADMINISTRATEUR

session_start();
if (!empty($_SESSION["connect"])) {
    if ($_SESSION["connect"] === true) {
    } else {
        header("Location: connexion.php");
        exit;
    }
}

?>

<?php require_once("includes/footer.inc.php"); ?>