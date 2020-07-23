<?php

require_once 'pessoa.php';
require_once 'carro.php';
require_once 'livro.php';


$pessoa1 = new Pessoa();
$pessoa1->setNome("Paulo");
$pessoa1->setIdade (16);
$pessoa1->setPeso (80);
$pessoa1->setSexo ("Masculino");
$pessoa1->imprimir();

$carro1 = new Carro();
$carro1->setMarca ("Volkswagen");
$carro1->setCor ("Branco");
$carro1->setPlaca ("abc 2302");
$carro1->setModelo ("Gol");													
$carro1->imprimiir();

$livro1 = new Livro();
$livro1->setTitulo  ("As Aventuras de Sherlock Holmes");
$livro1->setAutor  ("Arthur Conan Doyle");
$livro1->setAno  ("14 de outubro de 1892");
$livro1->setEdicao  ("George Newnes");												
$livro1->imprimiiir();












?>