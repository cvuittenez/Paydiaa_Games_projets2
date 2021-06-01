
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    $pdo = new PDO (
        'host=localhost;dbname=paydiaa',
        'root',
        'root'
    );

    //Écrire l'ordre SQL

    $query = "SELECT * FROM jeu ORDER BY nom_du_jeu";

    $requete = $pdo->prepare($query);

    if($requete->execute()) {
        $i = 1;
        while ($donnees = $requete->fetch()) {

            echo $i . "-" . $donnees('nom_du_jeu') . "<br/>";
        }
    }

    else{

        echo "Requête Incorrecte";

    }