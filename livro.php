<?php

class livro {

private $titulo;
private $autor;
private $ano;
private $edicao;

public function getTitulo(){
	return $this->titulo;
}
public function setTitulo($argTitulo){
	$this->titulo = $argTitulo;
}
public function getAutor(){
	return $this->autor;
}
public function setAutor($argAutor){
	$this->autor = $argAutor;
}
public function getAno(){
	return $this->ano;
}
public function setAno($argAno){
	$this->ano = $argAno;
}
public function getEdicao(){
	return $this->edicao;
}
public function setEdicao($argEdicao){
	 $this->edicao = $argEdicao;
}

public function imprimiiir() {
	echo "Classe Livro" . "</br>" . "</br>" . "Titulo: " . $this->titulo . "</br>Autor: " . $this->autor . "</br>Ano: " . $this->ano . "</br>Edição: " . $this->edicao . "</br>";
}

}





?>