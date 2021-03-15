<?php
session_start();
if (!empty($_SESSION["connect"])) {
    if ($_SESSION["connect"] === true) {
    } else {
        header("Location: connexion.php");
        exit;
    }
}
?>