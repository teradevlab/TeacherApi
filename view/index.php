<?php 

require "controller/TeacherAPI.php";
$pagina = isset ($_GET["pagina"]) ? $_GET["pagina"]: "index";

$ctrl = new TeacherAPI();

switch($pagina){
    case "index": 
        $ctrl->index();
    break;
    case "dashboard": 
        $ctrl->dashboard();
    break;
    case "consulta": 
        $ctrl->consulta();
    break;
    case "cadastro":
        $ctrl->cadastro();
    break;
    case "salariohora": 
        $ctrl->salariohora();
    break;
    case "login": 
        $ctrl->login();
    break; 
}