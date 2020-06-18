<?php

require "../model/Conexao";
require "../model/Conteudo"; 
require "../model/Professor";
require "../model/ProfessorFixo"; 
require "../model/ProfessorHorista";

class TeachearAPI{
    public function index(){
        include "view/index.php";
    }
    public function dashboard(){
        include "view/home.php";
    }
    public function consulta(){
        include "view/consulta.php";
    }
    public function cadastro(){
        include "view/cadastro.php";
    }
    public function salariohora(){
        include "view/salarioHora.php";
    }
    public function login(){
        include "view/login.php";
    }

}
?>