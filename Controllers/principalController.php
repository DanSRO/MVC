<?php

class principalController extends Controller
{
    public function index()  //padrao www.nome.com/
    {
        //chama um model
        $p = new Paginas();
        $dados =  $p->getPaginas();
        //chama uma view
        //fazer junção de back com front
        
        $this->carregarTemplate('paginaUm',array(), $dados);
    }
    
    public function paginaDois()  //padrao www.nome.com/
    {
        //chama um model
        //chama uma view
        //fazer junção de back com front
        
        $this->carregarTemplate('paginaDois');
    }
}

?>