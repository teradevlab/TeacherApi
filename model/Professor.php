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

    public function setNome(){
        $this->nome = $nome;    
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade(){
        $this->idade = $idade;
    }

    public function getIdade(){
        return-> $this-> $idade;
    }

    public function setMatricula(){
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this-> $matricula;
    }

    public function __($id, $name, $idade, $matricula)
        {
        $this->setId($id);
        $this->setNome($name);
        $this->setIdade($idade); 
        $this->setMatricula($matricula);
        }

}