<?php

require_once 'Conexao.php';

class Paginas
{
    private $con;

    public function __construct()
    {
        $this->con = Conexao::getConexao();
    }
    public function getPaginas()
    {
        $dados = array();
        $cmd = $this->con->query('SELECT id_usuario, nome, telefone, email, senha FROM usuarios');
        $dados = $cmd->fetchall();
        return $dados;
    }
}

?>