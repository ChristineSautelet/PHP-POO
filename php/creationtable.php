<?php
    $serveur = "localhost";
    $dbname = "parc_voitures";
    $user = "christinesautelet";
    $pass = "user";
    
    try{

        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

        $form = "
        CREATE TABLE voitures(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            numero_immatriculation CHAR,
            mise_en_circulation DATE,
            kilometrage INT,
            modele TEXT,
            marque TEXT,
            couleur TEXT,
            poids INT,
            reservation TEXT,
            categorie TEXT,
            pays TEXT,
            utilisation TEXT,
            age INT,
            photo VARCHAR(30)
        )
        ";
        $dbco->exec($form);
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }
?>