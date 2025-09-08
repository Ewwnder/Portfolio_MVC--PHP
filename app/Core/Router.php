<?php

class Router{
    public function run(){
        $controller = isset($_GET['controller']) ? $_GET['controller']:'home';
        $controller = ucfirst(strtolower($controller)) . 'Controller';

        $controllerFile = ".../app/Controllers/$controller.php";

        if(file_exists($controllerFile)){
            require_once $controllerFile;
            $controllerInstance = new $controller();

            if (method_exists($controllerInstance, 'index')){
                $controllerInstance->index();
            }
            else{
                echo "Erro: Método 'index' não encontrado no controlador.";
            }
        }
        else{
            echo "Erro 404: Página não encontrada.";
        }


    }
}