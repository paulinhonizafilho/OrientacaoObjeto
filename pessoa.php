<?php

class pessoa {

public $nome;
public $idade;
public $peso;
public $sexo;

public function __construct($argNome = '', $argIdade = 0, $argPeso = 0, $argSexo= ''){
   $this->nome = $argNome;
   $this->idade = $argIdade;
   $this->peso = $argPeso;
   $this->sexo = $argSexo;
}
//faltou a implementação dos métodos getters e setters

public function imprimir() {
	echo "Classe Pessoa" . "</br>" . "</br>" . "Nome: " . $this->nome . "</br>Idade: " . $this->idade . "</br>Peso: " . $this->peso . "</br>Sexo: " . $this->sexo . "</br>" . "</br>";
}

}





?>
