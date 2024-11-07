<?php

require_once('Item.php');
require_once('Documento.php');
require_once('Objeto.php');
require_once('Pasta.php');
require_once('Gaveta.php');
require_once('Armario.php');

class Escritorio{

    private array $armarios = [];
    private array $gavetas = [];

    public function setArmario($armario): void {
        $this->armarios = $armario;
    }

    public function getArmario(): array {
        return $this->armarios;
    }

    public function adicionarArmario(Armario $armario): void {
        $this->armario = $armario;
        array_push($this->armarios, $armario);
        echo "Armario adicionado com sucesso. <br>";
    }

    public function removerArmario(int $indice){
        if(empty($this->armarios)){
            echo "<h2>Lista de Armários no Escritório</h2>";
            echo "O armário está vazio";
        }else {
            foreach($this->armarios as $chave => $armario){
                if($chave == $indice){
                    unset($this->armarios[$indice]);
                    echo "Armario removido com sucesso!<br>";
                }
            }
        }
    }

    public function listarArmarios(): void {
        if(empty($this->armarios)){
            echo "<h2>Armários no Escritório</h2>";
            echo "O escritório está vazio";
        }else {
            echo "<h2>Armários no Escritório</h2>";
            echo "<ul>";
            foreach ($this->armarios as $chave => $armario) {
                echo "<li>{$armario->listarGavetas()}</li>";
            }
            echo "</ul>";
        }
    }

    public function auditoria(): void{
        if(empty($this->armarios)){
            echo "<h2>Armários no Escritório</h2>";
            echo "O escritório está vazio";
        }else {
            echo "<h2>Armários no Escritório</h2>";
            echo "<ul>";
            foreach ($this->armarios as $chave => $armario) {
                foreach($this->gavetas as $chave=> $gaveta){
                    echo "{$gaveta->listarItens()}";
                }
                echo "{$armario->listarGavetas()}";
            }
            echo "</ul>";
        }
    }

}