<?php

class carro {

private $marca;
private $cor;
private $placa;
private $modelo;

public function getMarca(){
	return $this->marca;
}
public function setMarca($argMarca){
	 $this->marca = $argMarca;
}
public function getCor(){
	return $this->cor;
}
public function setCor($argCor){
	 $this->cor = $argCor;
}
public function getPlaca(){
	return $this->placa;
}
public function setPlaca($argPlaca){
	$this->placa = $argPlaca;
}
public function getModelo(){
	return $this->modelo;
}
public function setModelo($argModelo){
	$this->modelo = $argModelo;
}

public function imprimiir() {
	echo "Classe Carro" . "</br>" . "</br>" . "Marca: " . $this->marca . "</br>Cor: " . $this->cor . "</br>Placa: " . $this->placa . "</br>Modelo: " . $this->modelo . "</br>" . "</br>";
}

}





?>