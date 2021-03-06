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
                                INNER JOIN tipo_noticias t 
                                ON n.fk_id_tipo_noticia = t.id_tipo');
        $dados = $cmd->fetchall(PDO::FETCH_ASSOC);
        return $dados;
    }
    public function getNoticiaPorId($id)
    {
        $dados = array();
        $cmd = $this->con->prepare('SELECT n.*, t.descricao 
                                    FROM noticias n
                                    inner join tipo_noticias t
                                    on n.fk_id_tipo_noticia = t.id_tipo
                                    WHERE n.id_noticia = : id');

        $cmd->bindValue(':id', $id);
        $cmd->execute();
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        return $dados;
    }
}

?>