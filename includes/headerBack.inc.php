<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aromatik ADMIN</title>
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css">
    <?php require_once("includes/init.inc.php"); ?>
</head>

<body>
    <script src="js/jquery.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="plats.php">Plats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="boissons.php">Boissons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.php">info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="horaire.php">horaire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>