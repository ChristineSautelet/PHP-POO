<?php

namespace ChrisS\HTML;

class Html{

    public function metac($name = "UTF-8") {
        echo "<meta charset='" . $name . "'>";
    }
    public function metan($name = "", $content ="") {
        echo "<meta name='" . $name . "' content ='" . $content . "'>";
    }

    public function metah($name = "", $content ="") {
        echo "<meta http-equiv='" . $name . "' content ='" . $content . "'>";
    }

    public function title($name = "Document"){
        echo "<title>" . $name . "</title>";
    }

    public function img($src = "", $alt = "") {
        echo "<img src=img/'" . $src . "' alt='" . $alt . "'>";
    }

    public function a($url = "#", $text="") {
        echo "<a href='" . $url . "'>" . $text . "</a>";
    }

    public function css($url = "css/style.css") {
        echo "<link rel='stylesheet' href='" . $url . "'>";
    }

    public function script($src = "script.js") {
        echo "<script src='js/" . $src . "'></script>";
    }

}