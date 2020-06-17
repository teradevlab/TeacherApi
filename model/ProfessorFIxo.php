<?php

class Assalariado extends Pessoa {
    private $salario; 

    public function setSalario($salario){
        $this->salario = $salario; 
    }

    public function getSalario(){
        return $this->salario;
    }

    public function __construct($salario)
    {
        $this->setSalario($salario);       
    }
        

}
?>