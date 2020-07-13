<?php

require_once 'pessoa.php';
require_once 'carro.php';
require_once 'livro.php';


$pessoa1 = new Pessoa();
$pessoa1->nome = "Paulo";
$pessoa1->idade = 16;
$pessoa1->peso = 80;
$pessoa1->sexo = "Masculino";
$pessoa1->imprimir();

$carro1 = new Carro();
$carro1->marca = "Volkswagen";
$carro1->cor = "Branco";
$carro1->placa = "abc 2302";
$carro1->modelo = "Gol";
$carro1->imprimir();

$livro1 = new Livro();
$livro1->titulo = "As Aventuras de Sherlock Holmes";
$livro1->autor = "Arthur Conan Doyle";
$livro1->ano = "14 de outubro de 1892";
$livro1->edicao = "George Newnes";
$livro1->imprimir();












?>
