<?php

class Controller
{
    public $dados;
    public $dados2;

    public function __construct()
    {
        $this->dados = array();

    }
    //chamado por todos os CONTROLLERS
    public function carregarTemplate($nomeView, $dadosModel = array(), $dados2 = array())
    {
        $this->dados = $dadosModel;
        $this->dados2 = $dados2;
        require 'views/template.php';
    }

    //chamado no template
    public function carregarViewNoTemplate($nomeView, $dadosModel = array())
    {
        extract($dadosModel);

        require 'views/'.$nomeView.'.php'; //dinamico
    }
}

?>