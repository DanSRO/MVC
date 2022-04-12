<?php

require_once 'Conexao.php';

class Noticias
{
    private $con;

    public function __construct()
    {
        $this->con = Conexao::getConexao();
    }
    public function getNoticias()
    {
        $dados = array();
        $cmd = $this->con->query('SELECT n.id_noticia,
                                         n.titulo,
                                         n.nome_imagem,
                                         n.texto,
                                         t.descricao 
                                FROM noticias n
                                INNER JOIN tipos_noticias t 
                                ON n.fk_id_tipo_noticia = t.id_tipo');
        $dados = $cmd->fetchall();
        return $dados;
    }
}

?>