<?php

    include("includes/init.inc.php"); 
    
    $table = "menu_repas_aromatik";
    $values = "id_repas INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                type_repas VARCHAR(40),
                titre_repas VARCHAR(200),
                prix_repas INT(3) NULL";

    $result = $pdo->exec("CREATE TABLE $table ($values)");



//     CREATE TABLE menu_boisson_aromatik (
//          id_boisson INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
//          type_boisson VARCHAR(50),
//          titre_boisson VARCHAR(200),
//          description_boisson VARCHAR(200),
//          prix_boisson INT(4) NULL,
//          prix2_boisson INT(4) NULL,
//          contenance_boisson INT(4) NULL,
//          contenance2_boisson INT(4) NULL

//      );


//      CREATE TABLE menu_menu_aromatik (
//          id_menu INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
//          titre_menu VARCHAR(100),
//          entre_menu VARCHAR(200),
//          plat_menu VARCHAR(200),
//          dessert_menu VARCHAR(200),
//          prix_menu VARCHAR(200)

//       );


//       CREATE TABLE horaire_aromatik (
//          id_horaire INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
//          ouverture_midi INT(5) NULL,
//          fermeture_midi INT(5) NULL,
//          ouverture_soir INT(5) NULL,
//          fermeture_soir INT(5) NULL

//        );

//        CREATE TABLE info (
//          id_info INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
//          num_tel INT
//        );

//        CREATE TABLE admin_aromatik (
//          id_login INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
//          admin_name VARCHAR(40),
//          admin_password VARCHAR(100)
//        );

                // FAIRE ENSUITE CECI DANS LA TABLE admin_aromatik
                // INSERT INTO admin_aromatik(admin_name, admin_password)
                // VALUES (
                // 'admin',
                // '51b522a58081badeae72493832a4662f'
                // );

                // CELA CRÉE UN USER ADMIN
                // pseudo:  admin
                // mdp:     aromatik











    if ($result) 
    {
        echo "La Table $table a été créé!<br /><br />";
    }
    else 
    {
        echo "La Table $table n'a été créé! <br /><br />";
    }
    ?>
 
 
 



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