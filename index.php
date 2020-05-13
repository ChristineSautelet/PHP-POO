<?php
use \ChrisS\HTML\Html;
require "classes/HTML/Html.php";
$html = new Html();
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <?php
            $html->metac();
            $html->metan("viewport", "width=device-width, initial-scale=1.0");
            $html->title("HOME");
            $html->css();
        ?>

    </head>

    <body>
        <?php
        $html->a("php/indexform.php","exercice 1 - FORMULAIRE");
        $html->a("php/parc_automobile.php","Parc automobile");
        ?>
        
    </body>

</html>