<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aromatik</title>

    
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendors/uikit/css/uikit.min.css"    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
 
    <script src="vendors/bootstrap/js/bootstrap.js"></script>
    <script src="vendors/uikit/js/uikit.min.js"></script>
    <script src="vendors/uikit/js/uikit-icons.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>

</head>
<body id="accueilpage">

    <?php 

        include("includes/init.inc.php"); 

    ?>
        
        <div class="uk-cover-container" id="accueil">

            <nav class="nav_bar">
                    
                    <div class="logo">
                        
                        <img src="images/logo.png" alt="logo">
                        
                    </div>
                    <div class="onglets">
                        
                        <a href="#accueilpage">ACCUEIL</a>
                        <a href="#propos">À PROPOS</a>
                        <a href="#noscartes">NOS CARTES</a>
                        <a href="#reservation">RÉSERVATION</a>
                        <a href="#contact">NOUS CONTACTER</a>
                        
                    </div>
                    

            </nav>

        
            <div class="video"> 

                <video autoplay muted loop src="videos/aromatik.mp4" type="video/mp4"></video>

            <!-- src="videos/aromatik.mp4" -->
            </div>

        </div>
            