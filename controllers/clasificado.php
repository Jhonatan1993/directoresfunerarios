<?php

class Clasificado extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->render('clasificado/index');
      
    }

   
}

?>