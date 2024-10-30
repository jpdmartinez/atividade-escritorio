<?php

require_once('Item.php');

class Objeto extends Item {
    private float $peso;

    public function __construct($nome, $descricao, $peso){
        parent::__construct($nome, $descricao);
        $this->setPeso($peso);
    }

    public function setPeso(float $peso): void{
        if ($peso<0){
            $this->peso = 0;
        } else {
            $this->peso = $peso;
        }
    }

    public function getPeso(): float{
        return $this->peso;
    }
}
