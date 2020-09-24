<?php

class Requiem extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->render('requiem/index');
      
    }

   
}

?>