<?php

require_once('Item.php');

class Documento extends Item {
    private string $dataCriacao;
    
    public function __construct(string $nome, string $descricao, string $dataCriacao){
        $this->setDataCriacao($dataCriacao);
        parent::__construct($nome, $descricao);
    }

    public function setDataCriacao($dataCriacao): void{
        if(empty($dataCriacao)){
            $this->dataCriacao = 'Data da Criação do documento';
        } else {
            $this->dataCriacao = $dataCriacao;
        }
    }
    
    public function getDataCriacao(): string {
        return $this->dataCriacao;
    }
    
}
