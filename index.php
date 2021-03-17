<?php require_once("includes/header.inc.php"); ?>

    


<!-- Corps du Site avec les différentes DIV représentant les catégories de la NAVBAR. -->

    
    <main>
        <div class=".uk-animation-slide-right socialmedia">

            <a href="" class="social" uk-icon="icon: facebook"></a>
            <a href="" class="social" uk-icon="icon: instagram"></a>
            <a href="tel:0033633310165" class="social" uk-icon="icon: receiver"></a>

        </div>
        


            <div> 


                    
                <div class="parallax">
                    <div class="uk-animation-toggle" id="propos" tabindex="0">

                        <div class=".uk-animation-slide-left propos" id="apropos">
                            
                            <h2>A Propos</h2>
                            
                            <p>Aromatik vous propose une fine cuisine française moderne originale, dont ravioli de foie gras, dnas un restaurant cosy avec terrasse</p>
                            
                        </div>
                    </div>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                        <li>
                            <div class="uk-panel">
                                <img src="images/slider1.jpg" alt="">
                                <div class="uk-position-center uk-panel"><h1>1</h1></div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="images/slider2.jpg" alt="">
                                <div class="uk-position-center uk-panel"><h1>2</h1></div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="images/slider3.jpg" alt="">
                                <div class="uk-position-center uk-panel"><h1>3</h1></div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="images/slider4.jpg" alt="">
                                <div class="uk-position-center uk-panel"><h1>4</h1></div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="images/slider5.jpg" alt="">
                                <div class="uk-position-center uk-panel"><h1>5</h1></div>
                            </div>
                            
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>
                </div>    
                        
                        
                <div class="web" id="noscartes">
                    
                    
                    <button type="button" class="buttonMenu buttonMenuRepas" data-bs-toggle="modal" data-bs-target="#repasModal">
                        <h3>Carte des Repas</h3>
                    </button>
                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id="repasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content carteFood">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Carte des Repas</h3>
                                </div>
                                <div class="modal-body">
                                    
                                    <h5>Les Entrees</h5>
                                    
                                    <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'entree'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($entrees = $result->fetch(PDO::FETCH_ASSOC)) { 
                                    ?>

                                        <p class="titleCard">
                                        <span><?php echo $entrees['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $entrees['prix_repas']. "€"?></span></p>
                                

                                
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucune Entrée Disponible</p>
                                
                                <?php
                                }
                                ?>
                            


                            <h5>Les Poissons</h5>

                                <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'poisson'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($poissons = $result->fetch(PDO::FETCH_ASSOC)) { 
                                    ?>
    
                                        <p class="titleCard">
                                        <span><?php echo $poissons['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $poissons['prix_repas']. "€"?></span></p>
                                    
    
                                    
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucun Poisson Disponible</p>
                                
                                <?php
                                }
                                ?>

                            <h5>Les Viandes</h5>
                                <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'viande'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($viandes = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
    
                                        <p class="titleCard">
                                        <span><?php echo $viandes['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $viandes['prix_repas']. "€"?></span></p>
                                    
    
                                    
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucune Viande Disponible</p>
                                
                                <?php
                                }
                                ?>


                            <h5>Les Fromages</h5>
                                <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'fromage'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($fromages = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
    
                                        <p class="titleCard">
                                        <span><?php echo $fromages['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $fromages['prix_repas']. "€"?></span></p>
                                    
    
                                    
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucun Fromage Disponible</p>
                                
                                <?php
                                }
                                ?>


                            <h5>Les Desserts</h5>
                                <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'dessert'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($desserts = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
    
                                        <p class="titleCard">
                                        <span><?php echo $desserts['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $desserts['prix_repas']. "€"?></span></p>
                                    
    
                                    
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucun Dessert Disponible</p>
                                
                                <?php
                                }
                                ?>






                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                        </div>
                    </div>
                    </div>


                    <span class="separation"></span>

                    <button type="button" class="buttonMenu buttonMenuBoisson" data-bs-toggle="modal" data-bs-target="#boissonModal">
                        <div id="DIVcarteDrink">
                            <h3 class="H3carteDrink">Carte des Boissons</h3>
                            <h3 class="H3carteDrink">et des Vins</h3>
                        </div>
                    </button>

                                <!-- Modal -->
                    <div class="modal fade" id="boissonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content carteDrinks">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Carte des Boissons</h3>
                            <h3 class="modal-title" id="exampleModalLabel">et des Vins</h3>
                        </div>
                        <div class="modal-body">
                                    
                                    <h5>Nos Vins Rouges</h5>
                                    
                                    <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'entree'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($entrees = $result->fetch(PDO::FETCH_ASSOC)) { 
                                    ?>

                                        <p class="titleCard">
                                        <span><?php echo $entrees['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $entrees['prix_repas']. "€"?></span></p>
                                

                                
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucun Vin Rouge Disponible</p>
                                
                                <?php
                                }
                                ?>
                            


                            <h5>Les Poissons</h5>

                                <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'poisson'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($poissons = $result->fetch(PDO::FETCH_ASSOC)) { 
                                    ?>
    
                                        <p class="titleCard">
                                        <span><?php echo $poissons['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $poissons['prix_repas']. "€"?></span></p>
                                    
    
                                    
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucun Poisson Disponible</p>
                                
                                <?php
                                }
                                ?>

                            <h5>Les Viandes</h5>
                                <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'viande'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($viandes = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
    
                                        <p class="titleCard">
                                        <span><?php echo $viandes['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $viandes['prix_repas']. "€"?></span></p>
                                    
    
                                    
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucune Viande Disponible</p>
                                
                                <?php
                                }
                                ?>


                            <h5>Les Fromages</h5>
                                <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'fromage'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($fromages = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
    
                                        <p class="titleCard">
                                        <span><?php echo $fromages['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $fromages['prix_repas']. "€"?></span></p>
                                    
    
                                    
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucun Fromage Disponible</p>
                                
                                <?php
                                }
                                ?>


                            <h5>Les Desserts</h5>
                                <?php
                                
                                $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'dessert'");

                                if (!empty($result)) {
                                    
                                    
                                    while ($desserts = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
    
                                        <p class="titleCard">
                                        <span><?php echo $desserts['titre_repas']; ?></span>
                                        <span class="priceCard"><?php echo $desserts['prix_repas']. "€"?></span></p>
                                    
    
                                    
                                <?php 
                                    }
                                }
                                else {
                                ?>

                                    <p>Aucun Dessert Disponible</p>
                                
                                <?php
                                }
                                ?>








                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                        </div>
                    </div>
                    </div>

                    
                  
                            
                </div>
                       
                    <div class="parallax"></div>
                            
                <div class="web" id="reservation">

                    <iframe src='https://bookings.zenchef.com/results?rid=353548&fullscreen=1' frameborder='0' scrolling='yes' width='100%' height='875'></iframe>
                    <iframe src='https://commands.zenchef.com/results?rid=353548&fullscreen=1' frameborder='0' scrolling='yes' width='100%' height='875'></iframe>

                    
                </div>
                       
                    <div class="parallax"></div>
                                  
                <div class="web" id="contact">



                                    
                </div>
                                    
                                    
            </div>
        
        
    </main>


<?php require_once("includes/footer.inc.php"); ?>