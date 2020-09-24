
<?php

class View{

    function __construct(){

        // echo "Vista Base";
    }

    function render($nombre){

        require 'views/' . $nombre . '.php';

    }
}

?>