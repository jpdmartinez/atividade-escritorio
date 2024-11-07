<?php

require_once('Item.php');
require_once('Documento.php');
require_once('Objeto.php');
require_once('Pasta.php');

class Gaveta{
    private array $itens = [];
    private Item $item;

    public function setItem(Item $item): void {
        $this->item = $item;
    }

    public function getItem(int $indice): Item {
        return $this->getItem;
    }

    public function adicionarItem(Item $item){
        array_push($this->itens, $item);
        echo "Item {$item->getNome()} adicionado com sucesso. <br>";
    }

    public function removerItem(string $nome){
        foreach($this->itens as $chave => $item){
            if($item->getNome() == $nome){
                unset($this->itens[$chave]);
                echo "{$item->getNome()} removido com sucesso!<br>";
            }
        }
    }

    public function listarItens(): void {
        echo "<h2>Itens na Gaveta</h2>";
            echo "<ul>";
            foreach ($this->itens as $item) {
                echo "<li>{$item->getNome()} - {$item->getDescricao()} </li>";
            }
            echo "</ul>";
    }
}

//isset
//instanceoff