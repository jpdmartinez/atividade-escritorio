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
        $adicionarGaveta = [
            "Gaveta" => $gaveta,
        ];
        array_push($this->gavetas, $adicionarGaveta);
        echo "Gaveta adicionada com sucesso. <br>";
    }

    public function listarGavetas(): void {
        echo "<h2>Lista de Gavetas no Armário</h2>";
            echo "<ul>";
            foreach ($this->gavetas as $chave => $gaveta) {
                echo "<li>{$gaveta[$chave]}</li>";
            }
            echo "</ul>";
    }
}