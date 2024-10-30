<?php

require_once('Item.php');

class Pasta extends Item{

    private string $categoria;

    public function __construct($nome, $descricao, $categoria){
        parent::__construct($nome, $descricao);
        $this->setCategoria($categoria);
    }

    public function setCategoria(string $categoria): void{
        if(empty($categoria)){
            $this->categoria = 'Categoria da Pasta';
        } else {
            $this->categoria = $categoria;
        }
    }
    
    public function getCategoria(): string {
        return $this->categoria;
    }

}
