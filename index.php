<?php

require_once('./Class/Objeto.php');
require_once('./Class/Pasta.php');
require_once('./Class/Item.php');
require_once('./Class/Documento.php');
require_once('./Class/Armario.php');
require_once('./Class/Escritorio.php');
require_once('./Class/Gaveta.php');

$item1 = new Item('Caderno', 'Caderno de anotações');

echo "{$item1->getNome()}: {$item1->getDescricao()} <br>";

$documento1 = new Documento('Contrato', 'Contrato de Aluguel', '30/10/2024');

echo "{$documento1->getNome()}: {$documento1->getDescricao()} - {$documento1->getDataCriacao()} <br>";

$objeto1 = New Objeto('Caderno', 'Caderno de protocolo', 1);

echo "{$objeto1->getNome()}: {$objeto1->getDescricao()} - {$objeto1->getPeso()} Kg<br>";

$pasta1 = new Pasta('Pasta', 'Pasta de documentos', 'Documentos');

echo "{$pasta1->getNome()}: {$pasta1->getDescricao()} - {$pasta1->getCategoria()}<br>";

//Adicionar itens na gaveta
$gaveta1 = new Gaveta();
$gaveta1->adicionarItem($item1);
$gaveta1->adicionarItem($documento1);
$gaveta1->adicionarItem($pasta1);
$gaveta1->adicionarItem($objeto1);

$gaveta1->removerItem("Pasta");
$gaveta1->adicionarItem($pasta1);
$gaveta1->removerItem("Caderno");
$gaveta1->listarItens();

$armario1 = new Armario();
$armario1->setGaveta($gaveta1);
$armario1->adicionarGaveta($gaveta1);
$armario1->adicionarGaveta($gaveta1);
$armario1->listarGavetas();

$escritorio1 = new Escritorio();
$escritorio1->adicionarArmario($armario1);
$armario1->removerGaveta(0);
$escritorio1->adicionarArmario($armario1);
//$escritorio1->listarArmarios();
$escritorio1->removerArmario(0);
//$escritorio1->listarArmarios();
$escritorio1->auditoria();