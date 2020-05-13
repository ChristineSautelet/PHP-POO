<?php
use \ChrisS\HTML\Form;
use \ChrisS\HTML\Html;
use \ChrisS\Autoloader;
require "../classes/Autoloader.php";
Autoloader::register();
$html = new Html();
$form = new Form($_POST);
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <?php
            $html->metac();
            $html->metan("viewport", "width=device-width, initial-scale=1.0");
            $html->title("Balises dans Head");
            $html->css("../css/style.css");
        ?>

    </head>

    <body>

        <form action="" method="post">
            <?php
            $form->input('Pseudo');
            $form->radio("Gender", ["Male","Female"]);
            $form->select("language", ["English", "Français", "Nederlands"]);
            $form->checkbox("Choice", ["Technical","Administrative", "Other"]);
            $form->textarea("Question");
            $form->submit();
            ?>
        </form>
        <?php
                $html->a('../index.php','Retour à l\'index');
        ?>

        
    </body>

</html>











