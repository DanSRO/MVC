<?php

class noticiasController extends Controller
{
    public function index()  //padrao www.nome.com/
    {
        //chama um model
        $n = new Noticias();
        $dados =  $n->getNoticias();
        //chama uma view
        //fazer junção de back com front
        
        $this->carregarTemplate('noticias',array(), $dados);
    }
    
    public function entretenimento($id_noticia)  //padrao www.nome.com/
    {
        $n =  new Noticias();
        $dados = $n->getNoticiaPorId($id_noticia);
        echo '<pre>';
        print_r($dados);
        echo '<pre>';
        //chama um model
        //chama uma view
        //fazer junção de back com front
                
        $this->carregarTemplate('entretenimento', $dados);
    }

    public function futebol()  //padrao www.nome.com/
    {
        echo "deu certo entrou em futebol";
        //chama um model
        //chama uma view
        //fazer junção de back com front
        exit;        
        $this->carregarTemplate('futebol');
    }
}

?>