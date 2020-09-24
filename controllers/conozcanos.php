<?php

class Conozcanos extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->render('conozcanos/index');
      
    }

   
}

?>