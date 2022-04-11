<?php

class homeController extends Controller
{
    public function index()  //padrao www.nome.com/
    {
        //chama um model
        //chama uma view
        //fazer junção de back com front
        
        $this->carregarTemplate('home');
    }
}

?>