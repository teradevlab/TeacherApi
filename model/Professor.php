<?php 

class People {
    private $id;
    private $nome;
    private $idade; 
    private $matricula;


    public function setId($id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id; 
    }

    public function setNome($nome){
        $this->nome = $nome;    
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return$this->idade;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function __construct($id, $name, $idade, $matricula)
        {
        $this->setId($id);
        $this->setNome($name);
        $this->setIdade($idade); 
        $this->setMatricula($matricula);
        }

}
?>