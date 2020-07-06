<?php

class carro {

public $marca;
public $cor;
public $placa;
public $modelo;

public function __construct($argMarca = '', $argCor = '', $argPlaca = '', $argModelo= ''){
   $this->marca = $argMarca;
   $this->cor = $argCor;
   $this->placa = $argPlaca;
   $this->modelo = $argModelo;
}
public function imprimiir() {
	echo "Classe Carro" . "</br>" . "</br>" . "Marca: " . $this->marca . "</br>Cor: " . $this->cor . "</br>Placa: " . $this->placa . "</br>Modelo: " . $this->modelo . "</br>" . "</br>";
}

}





?>