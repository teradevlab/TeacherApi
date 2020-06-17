<?php 

class Horista extends People {
    private $valorHora; 
    private $horasTrabalhadas;

    public function setValorHora($valorHora){
        $this->valorHora = $valorHora;
    }

    public function getValorHora(){
        return $this->valorHora;
    }

    public function setHorasTrabalhadas($horasTrabalhadas){
        $this->horasTrabalhadas = $horasTrabalhadas;         
    }

    public function getHorasTrabalhadas(){
        return $this->horasTrabalhadas;
    }

    public function __construct($valorHora, $horasTrabalhadas)
    {
        $this->setValorHora($valorHora);
        $this->setHorasTrabalhadas($horasTrabalhadas);
        
    }  
    
    public function calcularSalario(){
        $salarioMensal= ($horasTrabalhadas * $valorHora);

        echo "O salário hora é: " .$this->salarioMensal; 
        
        


    }
    
}
?>