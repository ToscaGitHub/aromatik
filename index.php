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


                    <button type="button" class="sendAll" data-bs-toggle="modal" data-bs-target="#repasModal">
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
                            
                        <h5>Les Entrées</h5>
                            
                            <?php
                            
                            $result = $pdo->query("SELECT titre_repas, prix_repas FROM menu_repas_aromatik WHERE type_repas = 'entree'");


                            while ($entrees = $result->fetch(PDO::FETCH_ASSOC)) { 
                            
                                
                                ?>

                                <p> <?php echo $entrees['titre_repas']; ?> </p>
                            

                            
                            <?php } ?>

                            


                            <h5>Les Poissons</h5>



                            <h5>Les Viandes</h5>



                            <h5>Les Fromages</h5>



                            <h5>Les Desserts</h5>







                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                        </div>
                    </div>
                    </div>


                    <button type="button" class="sendAll" data-bs-toggle="modal" data-bs-target="#boissonModal">
                    <h3>Carte des Boissons</h3>
                    <h3>et des Vins</h3>
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
                    
                </div>
                       
                    <div class="parallax"></div>
                                  
                <div class="web" id="contact">
                                    
                </div>
                                    
                                    
            </div>
        
        
    </main>


<?php require_once("includes/footer.inc.php"); ?>