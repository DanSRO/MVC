<!-- exemplo de exibição de imagens: -->

<div class="noticias">    

<?php
    for($i=0;$i<count($this->$dados2);$i++)
    {
        ?>
        <a href="<?php echo 'noticias/'.$this->dados2[$i]['descricao'].'/'.$this->$dados2[$i]['id_noticia'];?>">
            <div>
                <img src="<?php echo 'Midias/'.$this->dados2[$i]['nome-imagem'];?>">
                <h3><?php echo $this->dados2[$i]['titulo'];?></h3>
            </div>
        </a> 
        <?php
    }
        ?>
    

</div>

<?php

print_r($this->$dados2);

