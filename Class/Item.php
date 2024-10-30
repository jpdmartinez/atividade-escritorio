<?php

class Item{
    
    private string $nome;
    private string $descricao;

    public function __construct($nome, $descricao){

        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function setNome(string $nome): void{
        if(empty($nome)){
            $this->nome = 'Nome do item';
        } else {
            $this->nome = $nome;
        }
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setDescricao(string $descricao){
        if(empty($descricao)){
            $this->descricao = 'Descrição do item';
        } else {
            $this->descricao = $descricao;
        }
    }

    public function getDescricao(): string{
        return $this->descricao;
    }
}
