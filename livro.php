<?php

class livro {

public $titulo;
public $autor;
public $ano;
public $edicao;

public function __construct($argTitulo = '', $argAutor = '', $argAno = '', $argEdicao= ''){
   $this->titulo = $argTitulo;
   $this->autor = $argAutor;
   $this->ano = $argAno;
   $this->edicao = $argEdicao;
}
public function imprimiiir() {
	echo "Classe Livro" . "</br>" . "</br>" . "Titulo: " . $this->titulo . "</br>Autor: " . $this->autor . "</br>Ano: " . $this->ano . "</br>Edição: " . $this->edicao . "</br>";
}

}





?>