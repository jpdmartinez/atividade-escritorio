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
        $adicionarItem = [
            "Item" => $item,
        ];
        array_push($this->itens, $adicionarItem);
        echo "Item {$item->getNome()} adicionado com sucesso. <br>";
    }

    public function removerItem(string $nome){
        foreach($this->itens as $chave => $item){
            if($item['Item']->getNome() == $nome){
                unset($this->itens[$chave]);
                echo "{$item['Item']->getNome()} removido com sucesso!<br>";
            }
        }
    }

    public function listarItens(): void {
        echo "<h2>Lista de Itens na Gaveta</h2>";
            echo "<ul>";
            foreach ($this->itens as $item) {
                echo "<li>{$item['Item']->getNome()} - {$item['Item']->getDescricao()} </li>";
            }
            echo "</ul>";
    }
}

//isset
//instanceoff