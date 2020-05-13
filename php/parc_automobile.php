<?php
use \ChrisS\Autoloader;
use \ChrisS\HTML\Html;
require "../classes/Autoloader.php";
Autoloader::register();
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
        <br>
        <?php
                $html->a('../php/affichagevoitures.php','Affichage des voitures');
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