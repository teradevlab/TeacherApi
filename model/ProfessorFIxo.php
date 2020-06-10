<?php

class Assalariado extends Pessoa {
    private $salario; 

    public function setSalario(){
        $this->salario = $salario; 
    }

    public function getSalario(){
        return $this->salario;
    }

    public function __construct()
    {
        $this->setSalario($salario);       
    }
        

}