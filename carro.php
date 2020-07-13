<?php

class Carro {

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

//faltou a implementação dos métodos getters e setters

public function imprimir() {
  //os acessos deveriam ser feitos nos métodos getAtributos... getMarca, getCor, getPlaca etc.
	echo "Classe Carro" . "</br>" . "</br>" . "Marca: " . $this->marca . "</br>Cor: " . $this->cor . "</br>Placa: " . $this->placa . "</br>Modelo: " . $this->modelo . "</br>" . "</br>";
}

}





?>
