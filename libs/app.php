<?php
require_once 'controllers/errores.php';
class App{

    function __construct(){
        // echo"<p>Nueva App</p>";

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/',$url);

        if(empty($url[0])){
            $controlador = 'controllers/main.php';
            require_once $controlador;
            $controller = new Main();
            return false;
            // require_once 'views/main/index.php';
        }
        else{

            $controlador = 'controllers/' . $url[0] . '.php';
    
            if(file_exists($controlador)){
    
                require_once($controlador);
                $controller = new $url[0];
    
                if(isset($url[1])){
    
                  
                    $controller->{$url[1]}();
                }
    
            }else{
                
                $controller = new Errores();
            }
        }
        // var_dump($url);
        // echo $url;
    }

}


?>