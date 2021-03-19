<?php require_once("includes/header.inc.php"); ?>

    


<!-- Corps du Site avec les différentes DIV représentant les catégories de la NAVBAR. -->

    
    <main>
        <div class=".uk-animation-slide-right socialmedia">

            <a href="https://www.facebook.com/profile.php?id=100064815141991" class="social" target="_blank" uk-icon="icon: facebook"></a>
            <a href="https://www.instagram.com/aromatik_mds/?hl=fr" class="social" target="_blank" uk-icon="icon: instagram"></a>
            <a href="tel:0033633310165" class="social" uk-icon="icon: receiver"></a>

        </div>
        


            


                    
                <div class="parallax" id="paraPropos">

               

                    <div class="uk-animation-toggle" id="propos" tabindex="0">
                        
                        <div class=".uk-animation-slide-left propos" id="apropos">
                            
                            <h2>A Propos</h2>
                            
                            <p>Aromatik vous propose une fine cuisine française moderne originale, dont ravioli de foie gras, dnas un restaurant cosy avec terrasse</p>
                            
                        </div>
                    </div>
                    <div class="uk-position-relative uk-visible-toggle uk-light carrouselContainer" tabindex="-1" uk-slider>

                        
                        
                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                <li>
                                    <div class="uk-panel carrousel">
                                        <img src="images/carrousel/1.png" alt="">
                                        <div class="uk-position-center uk-panel"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel carrousel">
                                        <img src="images/carrousel/2.png" alt="">
                                        <div class="uk-position-center uk-panel"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel carrousel">
                                        <img src="images/carrousel/3.png" alt="">
                                        <div class="uk-position-center uk-panel"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel carrousel">
                                        <img src="images/carrousel/4.png" alt="">
                                        <div class="uk-position-center uk-panel"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel carrousel">
                                        <img src="images/carrousel/5.png" alt="">
                                        <div class="uk-position-center uk-panel">></div>
                                    </div>
                                    
                                </li>
                            </ul>
                            
                            <a class="el-slidenav uk-position-center-left uk-icon uk-slidenav-previous uk-slidenav carrouselPrevious" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="el-slidenav uk-position-center-right uk-icon uk-slidenav-next uk-slidenav carrouselNext" href="#" uk-slidenav-next uk-slider-item="next"></a>

                            
                        
                    </div>

                    
                </div>
                
                
                
                
                
            <div class="web" id="noscartes">
                
               
                        
                        <div class="carteSelect" id="carteFoodSelect">

                            <button type="button" class="buttonMenu buttonMenuRepas" data-bs-toggle="modal" data-bs-target="#repasModal">
                                <div id="DIVcarteRepas">
                                    <h3 class="H3carteRepas">Carte des Repas</h3>
                                </div>
                            </button>
                            
                        </div>
                       
                        
                    
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

                                            <p>Aucune Entrées Disponibles</p>
                                        
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

                                            <p>Aucun Poissons Disponibles</p>
                                        
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

                                            <p>Aucune Viandes Disponibles</p>
                                        
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

                                            <p>Aucun Fromages Disponibles</p>
                                        
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

                                            <p>Aucun Desserts Disponibles</p>
                                        
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

                    
                        <div class="carteSelect" id="carteDrinkSelect">

                            <button type="button" class="buttonMenu buttonMenuBoisson" data-bs-toggle="modal" data-bs-target="#boissonModal">
                                <div id="DIVcarteDrink">
                                    <h3 class="H3carteDrink">Carte des Boissons</h3>
                                    <h3 class="H3carteDrink">et des Vins</h3>
                                </div>
                            </button>

                        </div>

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
                                        
                                        $result = $pdo->query("SELECT titre_boisson, description_boisson, prix_boisson, prix2_boisson, contenance_boisson, contenance2_boisson FROM menu_boisson_aromatik WHERE type_boisson = 'vin rouge'");

                                        if (!empty($result)) {
                                            
                                            
                                            while ($vinrouges = $result->fetch(PDO::FETCH_ASSOC)) { 
                                            ?>

                                                <div class="oneDrink">

                                                    <div class="textDrink">

                                                        <div class="titleDrink">
                                                            
                                                            <p><?php echo $vinrouges['titre_boisson'] . ","; ?></p>
                                                            
                                                        </div>
                                                        <div class="descDrink">
                                                            
                                                            <p><?php echo $vinrouges['description_boisson']; ?></p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="numDrink">

                                                        <?php

                                                        if (!empty($vinrouges['contenance_boisson']) ||!empty($vinrouges['prix_boisson']) || $vinrouges['prix_boisson'] == 0 && $vinrouges['prix_boisson'] != NULL ) {

                                                        ?>

                                                        <div>
                                                            
                                                            <p><?php echo $vinrouges['contenance_boisson'] . "cl " . $vinrouges['prix_boisson']. "€"?></p>
                                                            
                                                        </div>

                                                        <?php } ?>

                                                        <?php

                                                        if (!empty($vinrouges['contenance2_boisson']) ||!empty($vinrouges['prix2_boisson']) || $vinrouges['prix2_boisson'] == 0 && $vinrouges['prix2_boisson'] != NULL ) {
                                                        
                                                        ?>
                                                            <div>

                                                                <p><?php echo $vinrouges['contenance2_boisson'] . "cl " . $vinrouges['prix2_boisson']. "€"?></p>
                                                            
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    
                                                </div>

                                        
                                        <?php 
                                            }
                                        }
                                        else {
                                        ?>

                                            <p>Aucun Vins Rouges Disponibles</p>
                                        
                                        <?php
                                        }
                                        ?>
                                    


                                        <h5>Nos Vins Roses</h5>

                                        <?php
                                        
                                        $result = $pdo->query("SELECT titre_boisson, description_boisson, prix_boisson, prix2_boisson, contenance_boisson, contenance2_boisson FROM menu_boisson_aromatik WHERE type_boisson = 'vin rose'");

                                        if (!empty($result)) {
                                            
                                            
                                            while ($vinroses = $result->fetch(PDO::FETCH_ASSOC)) { 
                                            ?>

                                            <div class="oneDrink">

                                                <div class="textDrink">

                                                    <div class="titleDrink">
                                                        
                                                        <p><?php echo $vinroses['titre_boisson'] . ","; ?></p>
                                                        
                                                    </div>
                                                    <div class="descDrink">
                                                        
                                                        <p><?php echo $vinroses['description_boisson']; ?></p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="numDrink">

                                                    <?php

                                                    if (!empty($vinroses['contenance_boisson']) ||!empty($vinroses['prix_boisson']) || $vinroses['prix_boisson'] == 0 && $vinroses['prix_boisson'] != NULL ) {

                                                    ?>

                                                    <div>
                                                        
                                                        <p><?php echo $vinroses['contenance_boisson'] . "cl " . $vinroses['prix_boisson']. "€"?></p>
                                                        
                                                    </div>

                                                    <?php } ?>

                                                    <?php

                                                    if (!empty($vinroses['contenance2_boisson']) ||!empty($vinroses['prix2_boisson']) || $vinroses['prix2_boisson'] == 0 && $vinroses['prix2_boisson'] != NULL ) {
                                                    
                                                    ?>
                                                        <div>

                                                            <p><?php echo $vinroses['contenance2_boisson'] . "cl " . $vinroses['prix2_boisson']. "€"?></p>
                                                        
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>

                                    
                                        <?php 
                                            }
                                        }
                                        else {
                                        ?>

                                            <p>Aucun Vins Rosés Disponibles</p>
                                        
                                        <?php
                                        }
                                        ?>

                                        
                                        
                                        
                                        <h5>Nos Vins Blancs</h5>
                                        <?php
                                        
                                        $result = $pdo->query("SELECT titre_boisson, description_boisson, prix_boisson, prix2_boisson, contenance_boisson, contenance2_boisson FROM menu_boisson_aromatik WHERE type_boisson = 'vin blanc'");

                                        if (!empty($result)) {
                                            
                                            
                                            while ($vinblancs = $result->fetch(PDO::FETCH_ASSOC)) { 
                                            ?>

                                            <div class="oneDrink">

                                                <div class="textDrink">

                                                    <div class="titleDrink">
                                                        
                                                        <p><?php echo $vinblancs['titre_boisson'] . ","; ?></p>
                                                        
                                                    </div>
                                                    <div class="descDrink">
                                                        
                                                        <p><?php echo $vinblancs['description_boisson']; ?></p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="numDrink">

                                                    <?php

                                                    if (!empty($vinblancs['contenance_boisson']) ||!empty($vinblancs['prix_boisson']) || $vinblancs['prix_boisson'] == 0 && $vinblancs['prix_boisson'] != NULL ) {

                                                    ?>

                                                    <div>
                                                        
                                                        <p><?php echo $vinblancs['contenance_boisson'] . "cl " . $vinblancs['prix_boisson']. "€"?></p>
                                                        
                                                    </div>

                                                    <?php } ?>
                                                    
                                                    <?php

                                                    if (!empty($vinblancs['contenance2_boisson']) ||!empty($vinblancs['prix2_boisson']) || $vinblancs['prix2_boisson'] == 0 && $vinblancs['prix2_boisson'] != NULL ) {
                                                    
                                                    ?>
                                                        <div>

                                                            <p><?php echo $vinblancs['contenance2_boisson'] . "cl " . $vinblancs['prix2_boisson']. "€"?></p>
                                                        
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>

                                    
                                        <?php 
                                            }
                                        }
                                        else {
                                        ?>

                                            <p>Aucun Vins Blancs Disponibles</p>
                                        
                                        <?php
                                        }
                                        ?>





                                        <h5>Nos Verres de Vins</h5>
                                        <?php
                                        
                                        $result = $pdo->query("SELECT titre_boisson, description_boisson, prix_boisson, prix2_boisson, contenance_boisson, contenance2_boisson FROM menu_boisson_aromatik WHERE type_boisson = 'verre de vin'");

                                        if (!empty($result)) {
                                            
                                            
                                            while ($verreVins = $result->fetch(PDO::FETCH_ASSOC)) { 
                                            ?>

                                            <div class="oneDrink">

                                                <div class="textDrink">

                                                    <div class="titleDrink">
                                                        
                                                        <p><?php echo $verreVins['titre_boisson'] . ","; ?></p>
                                                        
                                                    </div>
                                                    <div class="descDrink">
                                                        
                                                        <p><?php echo $verreVins['description_boisson']; ?></p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="numDrink">

                                                    <?php

                                                    if (!empty($verreVins['contenance_boisson']) ||!empty($verreVins['prix_boisson']) || $verreVins['prix_boisson'] == 0 && $verreVins['prix_boisson'] != NULL ) {

                                                    ?>

                                                    <div>
                                                        
                                                        <p><?php echo $verreVins['contenance_boisson'] . "cl " . $verreVins['prix_boisson']. "€"?></p>
                                                        
                                                    </div>

                                                    <?php } ?>

                                                    <?php

                                                    if (!empty($verreVins['contenance2_boisson']) ||!empty($verreVins['prix2_boisson']) || $verreVins['prix2_boisson'] == 0 && $verreVins['prix2_boisson'] != NULL ) {
                                                    
                                                    ?>
                                                        <div>

                                                            <p><?php echo $verreVins['contenance2_boisson'] . "cl " . $verreVins['prix2_boisson']. "€"?></p>
                                                        
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>

                                    
                                        <?php 
                                            }
                                        }
                                        else {
                                        ?>

                                            <p>Aucun Vins Blancs Disponibles</p>
                                        
                                        <?php
                                        }
                                        ?>



                                        
                                        
                                        <h5>Nos Boissons Fraiches</h5>
                                        <?php
                                        
                                        $result = $pdo->query("SELECT titre_boisson, description_boisson, prix_boisson, prix2_boisson, contenance_boisson, contenance2_boisson FROM menu_boisson_aromatik WHERE type_boisson = 'boisson fraiche'");

                                        if (!empty($result)) {
                                            
                                            
                                            while ($freshDrinks = $result->fetch(PDO::FETCH_ASSOC)) { 
                                            ?>

                                            <div class="oneDrink">

                                                <div class="textDrink">

                                                    <div class="titleDrink">
                                                        
                                                        <p><?php echo $freshDrinks['titre_boisson'] . ","; ?></p>
                                                        
                                                    </div>
                                                    <div class="descDrink">
                                                        
                                                        <p><?php echo $freshDrinks['description_boisson']; ?></p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="numDrink">

                                                    <?php

                                                    if (!empty($freshDrinks['contenance_boisson']) ||!empty($freshDrinks['prix_boisson']) || $freshDrinks['prix_boisson'] == 0 && $freshDrinks['prix_boisson'] != NULL ) {

                                                    ?>

                                                    <div>
                                                        
                                                        <p><?php echo $freshDrinks['contenance_boisson'] . "cl " . $freshDrinks['prix_boisson']. "€"?></p>
                                                        
                                                    </div>

                                                    <?php } ?>
                                                    
                                                    <?php

                                                    if (!empty($freshDrinks['contenance2_boisson']) ||!empty($freshDrinks['prix2_boisson']) || $freshDrinks['prix2_boisson'] == 0 && $freshDrinks['prix2_boisson'] != NULL ) {
                                                    
                                                    ?>
                                                        <div>

                                                            <p><?php echo $freshDrinks['contenance2_boisson'] . "cl " . $freshDrinks['prix2_boisson']. "€"?></p>
                                                        
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>

                                    
                                        <?php 
                                            }
                                        }
                                        else {
                                        ?>

                                            <p>Aucune Boissons Fraiches Disponibles</p>
                                        
                                        <?php
                                        }
                                        ?>


                                        
                                        
                                        <h5>Nos Digestifs</h5>
                                        <?php
                                        
                                        $result = $pdo->query("SELECT titre_boisson, description_boisson, prix_boisson, prix2_boisson, contenance_boisson, contenance2_boisson FROM menu_boisson_aromatik WHERE type_boisson = 'digestif'");

                                        if (!empty($result)) {
                                            
                                            
                                            while ($digestifs = $result->fetch(PDO::FETCH_ASSOC)) { 
                                            ?>

                                            <div class="oneDrink">

                                                <div class="textDrink">

                                                    <div class="titleDrink">
                                                        
                                                        <p><?php echo $digestifs['titre_boisson'] . ","; ?></p>
                                                        
                                                    </div>
                                                    <div class="descDrink">
                                                        
                                                        <p><?php echo $digestifs['description_boisson']; ?></p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="numDrink">

                                                    <?php

                                                    if (!empty($digestifs['contenance_boisson']) ||!empty($digestifs['prix_boisson']) || $digestifs['prix_boisson'] == 0 && $digestifs['prix_boisson'] != NULL ) {

                                                    ?>

                                                    <div>
                                                        
                                                        <p><?php echo $digestifs['contenance_boisson'] . "cl " . $digestifs['prix_boisson']. "€"?></p>
                                                        
                                                    </div>

                                                    <?php } ?>
                                                    
                                                    <?php

                                                    if (!empty($digestifs['contenance2_boisson']) ||!empty($digestifs['prix2_boisson']) || $digestifs['prix2_boisson'] == 0 && $digestifs['prix2_boisson'] != NULL ) {
                                                    
                                                    ?>
                                                        <div>

                                                            <p><?php echo $digestifs['contenance2_boisson'] . "cl " . $digestifs['prix2_boisson']. "€"?></p>
                                                        
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>

                                    
                                        <?php 
                                            }
                                        }
                                        else {
                                        ?>

                                            <p>Aucun Digestifs Disponibles</p>
                                        
                                        <?php
                                        }
                                        ?>





                                        <h5>Nos Boissons Chaudes</h5>
                                        <?php
                                        
                                        $result = $pdo->query("SELECT titre_boisson, description_boisson, prix_boisson, prix2_boisson, contenance_boisson, contenance2_boisson FROM menu_boisson_aromatik WHERE type_boisson = 'boisson chaude'");

                                        if (!empty($result)) {
                                            
                                            
                                            while ($hotDrinks = $result->fetch(PDO::FETCH_ASSOC)) { 
                                            ?>

                                            <div class="oneDrink">

                                                <div class="textDrink">

                                                    <div class="titleDrink">
                                                        
                                                        <p><?php echo $hotDrinks['titre_boisson'] . ","; ?></p>
                                                        
                                                    </div>
                                                    <div class="descDrink">
                                                        
                                                        <p><?php echo $hotDrinks['description_boisson']; ?></p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="numDrink">

                                                    <?php

                                                    if (!empty($hotDrinks['contenance_boisson']) ||!empty($hotDrinks['prix_boisson']) || $hotDrinks['prix_boisson'] == 0 && $hotDrinks['prix_boisson'] != NULL ) {

                                                    ?>

                                                    <div>
                                                        
                                                        <p><?php echo $hotDrinks['contenance_boisson'] . "cl " . $hotDrinks['prix_boisson']. "€"?></p>
                                                        
                                                    </div>

                                                    <?php } ?>
                                                    
                                                    <?php

                                                    if (!empty($hotDrinks['contenance2_boisson']) ||!empty($hotDrinks['prix2_boisson']) || $hotDrinks['prix2_boisson'] == 0 && $hotDrinks['prix2_boisson'] != NULL ) {
                                                    
                                                    ?>
                                                        <div>

                                                            <p><?php echo $hotDrinks['contenance2_boisson'] . "cl " . $hotDrinks['prix2_boisson']. "€"?></p>
                                                        
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>

                                    
                                        <?php 
                                            }
                                        }
                                        else {
                                        ?>

                                            <p>Aucune Boissons Chaudes Disponibles</p>
                                        
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
                    </div>
                    
                    
                    <div class="parallax2">

                        <div id="titreAffaire">
                            <?php
                             $result = $pdo->query("SELECT entre_menu, plat_menu, dessert_menu, prix_menu FROM menu_menu_aromatik");
    
                                if (!empty($result)) {
                                                
                                                
                                    while ($menu = $result->fetch(PDO::FETCH_ASSOC)) { 
                                    ?>
                                    
                                    <h3 id="titreMenuAffaire">Le Menu Affaire - <?php echo $menu['prix_menu'] . 'e'; ?></h3>
    
                                                    
                                            
    
                                            
                                <?php 
                                    }
                                }
                                else {
                                ?>
    
                                    <h3 id="titreMenuAffaire">Aucun Menu</h3>
                                            
                                <?php
                                }
                                ?>           
                        
                        </div>
                        
                        <div id="menuAffaire">
                            
                            
                            
                            
                            <h5>Les Entrees</h5>
                            
                            
                                                <?php
                                            
                                            $result = $pdo->query("SELECT entre_menu, plat_menu, dessert_menu, prix_menu FROM menu_menu_aromatik");
    
                                            if (!empty($result)) {
                                                
                                                
                                                while ($entrees = $result->fetch(PDO::FETCH_ASSOC)) { 
                                                ?>
    
                                                    <p class="contentMenuAffaire">
                                                    <?php echo $entrees['entre_menu']; ?>
                                                    </p>
                                            
    
                                            
                                            <?php 
                                                }
                                            }
                                            else {
                                            ?>
    
                                                <p>Aucune Entrées Disponibles</p>
                                            
                                            <?php
                                            }
                                            ?>
    
                            <h5>Les Plats, Poisson ou Viande</h5>
                                                
                                                <?php
                                            
                                            $result = $pdo->query("SELECT entre_menu, plat_menu, dessert_menu, prix_menu FROM menu_menu_aromatik");
    
                                            if (!empty($result)) {
                                                
                                                
                                                while ($plats = $result->fetch(PDO::FETCH_ASSOC)) { 
                                                ?>
    
                                                    <p class="contentMenuAffaire">
                                                    <?php echo $plats['plat_menu']; ?>
                                                    </p>
                                            
    
                                            
                                            <?php 
                                                }
                                            }
                                            else {
                                            ?>
    
                                                <p>Aucun Plâts Disponibles</p>
                                            
                                            <?php
                                            }
                                            ?>
    
                            <h5>Les Desserts</h5>
                                                
                                                <?php
                                            
                                            $result = $pdo->query("SELECT entre_menu, plat_menu, dessert_menu, prix_menu FROM menu_menu_aromatik");
    
                                            if (!empty($result)) {
                                                
                                                
                                                while ($desserts = $result->fetch(PDO::FETCH_ASSOC)) { 
                                                ?>
    
                                                    <p class="contentMenuAffaire">
                                                    <?php echo $desserts['dessert_menu']; ?>
                                                    </p>
                                            
    
                                            
                                            <?php 
                                                }
                                            }
                                            else {
                                            ?>
    
                                                <p>Aucun Desserts Disponibles</p>
                                            
                                            <?php
                                            }
                                            ?>
    
                    
                        

                </div>

            </div>
                
            <div id="reservation">

                <h3>Reserver ou Commander</h3>
                        
                <div class="web" id="resa">
    
    
    
                    <iframe src='https://bookings.zenchef.com/results?rid=353548&fullscreen=1' frameborder='0' scrolling='yes' width='100%' height='875'></iframe>
                    <iframe src='https://commands.zenchef.com/results?rid=353548&fullscreen=1' frameborder='0' scrolling='yes' width='100%' height='875'></iframe>
    
                        
                </div>

            </div>
                    
                       
            <div class="parallax">

                <div class="ContactDiv" id="contact">

                    <div id="phone">

                    <?php
                    $result = $pdo->query("SELECT num_tel FROM info");
                    $num = $result->fetch(PDO::FETCH_ASSOC);
                    ?>

                        <span uk-icon="icon: receiver; ratio: 3"></span>
                        <p>Tel : <?php echo $num['num_tel'];?></p>

                    </div>

                    <div id="location">

                        <span uk-icon="icon: location; ratio: 3"></span>
                        <p>Aromatik</p>
                        <p>5 Rue du Collège Chappuisien</p>
                        <p>74000 Annecy</p>
                    
                    </div>

                    <div id="media">
                        
                        <a href="https://www.facebook.com/profile.php?id=100064815141991" target="_blank" uk-icon="icon: facebook; ratio: 3"></a>
                        <a href="https://www.instagram.com/aromatik_mds/?hl=fr" target="_blank" uk-icon="icon: instagram; ratio: 3"></a>

                    </div>

                </div>

            </div>
                
                
            <div class="wRu">

                <div class="map">

                    <iframe src="https://snazzymaps.com/embed/298448" width="650px" height="400px" style="border:none;"></iframe>

                </div>
                <div class="horaire">

                <?php

                $result = $pdo->query("SELECT ouverture_midi, fermeture_midi, ouverture_soir, fermeture_soir FROM horaire_aromatik");
                $horaires = $result->fetch(PDO::FETCH_ASSOC);

                if (!empty($horaires)) {
                
                    ?>
                    

                    <p>Du Mardi au Samedi</p>
                    <p>Le Midi de <?php echo $horaires['ouverture_midi'] ?> à <?php echo $horaires['fermeture_midi'] ?></p>
                    <hr>
                    <p>Le Soir de <?php echo $horaires['ouverture_soir'] ?> à <?php echo $horaires['fermeture_soir'] ?></p>

                <?php
                } else {
                ?>
                    <p>Du Mardi au Samedi</p>
                    <p>Le Midi de .. à .. .</p>
                    <hr>
                    <p>Le Soir de .. à .. .</p>

                <?php
                }
                ?>
                </div>

            </div>
                                 
                       
        
        
    </main>


<?php require_once("includes/footer.inc.php"); ?>