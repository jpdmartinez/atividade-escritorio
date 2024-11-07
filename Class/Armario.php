<?php

require_once('Item.php');
require_once('Documento.php');
require_once('Objeto.php');
require_once('Pasta.php');
require_once('Gaveta.php');

class Armario {

    private array $gavetas = [];
    private Gaveta $gaveta;

    public function setGaveta(Gaveta $gaveta): void {
        $this->gaveta = $gaveta;
    }

    public function getGaveta(): Gaveta {
        return $this->gaveta;
    }

    public function adicionarGaveta(Gaveta $gaveta): void {
        $this->gaveta = $gaveta;
        array_push($this->gavetas, $gaveta);
        echo "Gaveta adicionada com sucesso. <br>";
    }

    public function removerGaveta(int $indice){
        if(empty($this->gavetas)){
            echo "<h2>Gavetas no Armário</h2>";
            echo "O armário está vazio";
        }else {
            foreach($this->gavetas as $chave => $gaveta){
                if($chave == $indice){
                    unset($this->gavetas[$indice]);
                    echo "Gaveta removida com sucesso!<br>";
                }
            }
        }
    }

    public function listarGavetas(): void {
        if(empty($this->gavetas)){
            echo "<h2>Gavetas no Armário</h2>";
            echo "O armário está vazio";
        }else {
            echo "<h2>Gavetas no Armário</h2>";
            echo "<ul>";
            foreach ($this->gavetas as $chave => $gaveta) {
                echo "{$gaveta->listarItens()}";
            }
            echo "</ul>";
        }
    }
}