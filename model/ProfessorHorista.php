<?php 

class Horista extends People {
    private $valorHora; 
    private $horasTrabalhadas;

    public function setValorHora(){
        $this->valorHora = $valorHora;
    }

    public function getValorHora(){
        return $this->valorHora;
    }

    public function setHorasTrabalhadas(){
        $this->horasTrabalhadas = $horasTrabalhadas;         
    }

    public function getHorasTrabalhadas(){
        return $this->horasTrabalhadas;
    }

    public function __construct()
    {
        $this->setValorHora($valorHora);
        $this->setHorasTrabalhadas($horasTrabalhadas);
    }
    
}