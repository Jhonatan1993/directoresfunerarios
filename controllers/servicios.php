<?php

class Servicios extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->render('servicios/index');
      
    }

   
}

?>