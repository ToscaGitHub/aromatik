<?php

    $result = $pdo->exec("CREATE TABLE menu_repas_aromatik (
                            id_repas INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                            type_repas VARCHAR(40),
                            titre_repas VARCHAR(200),
                            prix_repas INT(3) NULL
                     ");
 
 
 
 



//Insertion
//$result = $pdo->exec("INSERT INTO questions (question, id_reponse) VALUES('Question2', 2)");
//echo $result . '<br>'; 
// renvoi le nombre de valeur qui on été ajoutées


 //Modification
//$result = $pdo->exec("UPDATE questions SET question = 'Quelle est ......'");
//echo $result . '<br>';


//Suppression
//$result = $pdo->exec("DELETE FROM questions");
//echo $result . '<br>';



//Affichage
//$result = $pdo->query("SELECT * FROM questions WHERE question = 'Question1'");
//$question = $result->fetch(PDO::FETCH_OBJ);
//var_dump($question);


//Affichage multiple
//$result = $pdo->query("SELECT * FROM questions");
//while($question = $result->fetch(PDO::FETCH_OBJ)) {


?>