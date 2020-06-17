<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>TeacherAPI</title>
</head>
<body>
    <div class="container">
        <form class="Cadastro">
            <div class="form-group">
                <label for="idProfessor" id="idProfessor" placeholder="Identificação ID">ID</label>
                <input type="text" class="for-control">               
            </div>
            <div class="form-group">
                <label for="nomeProfessor" id="nomeProfessor">Nome</label>
                <input type="text" class="for-control">               
            </div>
            <div class="form-group">
                <label for="idadeProfessor">Idade</label>
                <input type="text" class="for-control">                
            </div>
            <div class="form-group">
                <label for="maspProfessor" placeholder = "MASP/Matrícula">MASP/Matrícula</label>
                <input type="text" class="for-control">                
            </div>                 
            
        </form>
        <a class="navbar-brand" href="../view/index.php">Início</a>
        <a class="navbar-brand btn-primary bg-dark" href="#">Cadastrar</a>
    </div>   
</body>            