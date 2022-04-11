<?php

class Core
{
    public function __construct()
    {
        $this->run();
    }
    public function run()
    {
        // $parametros = array();
        if(isset($_GET['pag']))
        {
            $url = $_GET['pag'];
            // $url = htmlentities(addslashes($_GET['pag']));
        }

        // possui informação após domínio www.sitex/classe/função/parâmetro
        if(!empty($url)) // && $url != '/') //Existe metodo
        {
            $url = explode('/', $url);
            $controller = $url[0].'Controller'; // mensagemController
            array_shift($url);

            //se o usuário mandou função
            if(isset($url[0]) && !empty($url[0]))
            {
                $metodo = $url[0];
                array_shift($url);
            }
            else //enviou somente classe
            {
                $metodo = 'index';                
            }
            if(count($url)>0)
            {
                $parametros = $url;
            }
        }
        else // possui informação até domínio www.sitex/
        {
            $controller = 'homeController';
            $metodo = 'index';
        }

        $caminho = 'MVC/Controllers/'.$controller.'.php';

        if(file_exists($caminho) && method_exists($controller, $metodo))
        {
            $controller = 'homeController';
            $metodo = 'index';
        }

        $c = new $controller;

        call_user_func_array(array($c, $metodo), $parametros);
    }
}