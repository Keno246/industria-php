<?php 
class Produto{
    private $id;
    private $codigo;
    private $nome;
    private $preco;
    private $quantidade;

    public function getQuantidade (){
        return $this->quantidade;
    }
}

?>