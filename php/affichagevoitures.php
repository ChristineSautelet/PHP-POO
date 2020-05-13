<?php
include '_01connexionvoitures.php';
$resultat = $bdd->query('SELECT * FROM voitures ORDER BY marque ASC');
use \ChrisS\Autoloader;
use \ChrisS\HTML\Html;
use \ChrisS\Voiture;
require "../classes/Autoloader.php";
Autoloader::register();
$voiture= new Voiture();
$html = new Html();
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <?php
            $html->metac();
            $html->metan("viewport", "width=device-width, initial-scale=1.0");
            $html->title("Parc automobiles");
            $html->css("../css/style.css");
        ?>

    </head>

    <body>
    <div>
    <form action="#" method="POST">
					<table>
						<tr>
							<th>Marque</th>
                            <th>Modele</th>
                            <th>Numero</th>
                            <th>Mise circulation</th>
                            <th>Kms</th>
                            <th>Couleur</th>
                            <th>Poids</th>
                            <th>Reservation</th>
                            <th>Categorie</th>
                            <th>Pays</th>
                            <th>Utilisation</th>
                            <th>Age</th>
                            <th>Photo</th>

						<?php
						while ($donnees = $resultat->fetch()){
							echo '<tr>';
                            echo "<td><input type='text' name='".$donnees['marque']."' value='".$donnees['marque']."'></td>";
                            echo "<td><input type='text' name='".$donnees['modele']."' value='".$donnees['modele']."'></td>";
                            echo "<td><input type='text' name='".$donnees['numero_immatriculation']."' value='".$donnees['numero_immatriculation']."'></td>";
                            echo "<td><input type='text' name='".$donnees['mise_en_circulation']."' value='".$donnees['mise_en_circulation']."'></td>";
                            echo "<td><input type='text' name='".$donnees['kilometrage']."' value='".$donnees['kilometrage']."'></td>";
                            echo "<td><input type='text' name='".$donnees['couleur']."' value='".$donnees['couleur']."'></td>";
                            echo "<td><input type='text' name='".$donnees['poids']."' value='".$donnees['poids']."'></td>";
                            echo "<td><input type='text' name='".$donnees['reservation']."' value='".$donnees['reservation']."'></td>";
                            echo "<td><input type='text' name='".$donnees['categorie']."' value='".$donnees['categorie']."'></td>";
                            echo "<td><input type='text' name='".$donnees['pays']."' value='".$donnees['pays']."'></td>";
                            echo "<td><input type='text' name='".$donnees['utilisation']."' value='".$donnees['utilisation']."'></td>";
                            echo "<td><input type='text' name='".$donnees['age']."' value='".$donnees['age']."'></td>";
                            echo "<td><img src=".$donnees['photo'].">";
							echo '</tr>';
						}
						$resultat->closeCursor();					
						?>
					</table>
					<div">
					<button type="submit" id="supp" class="btn">Modifier</button>
                    </div>
    </form>
    </div>
    <div>
        <br>
        <?php
                $html->a('../php/parc_automobile.php','Retour au menu du parc');
        ?>
    </div>
    <div>
        <br>
        <?php
                $html->a('../index.php','Retour à l\'index');
        ?>
    </div>
           
    </body>

</html>