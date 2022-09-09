<?php

    if(isset($_POST['submit'])){
        //print_r($_POST['nome']);
        //print_r($_POST['cpf']);
        //print_r($_POST['email']);
        //print_r($_POST['telefone']);
        //print_r($_POST['temperatura']);
        //print_r($_POST['altura']);
        //print_r($_POST['peso']);
        //print_r($_POST['oxigenacao']);
        //print_r($_POST['saturacao']);
        //print_r($_POST['sexo']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $NomeResp = $_POST['NomeResp'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso']; 
        $oxigenacao = $_POST['oxigenacao'];
        $saturacao = $_POST['saturacao'];
        $sexo = $_POST['sexo'];
        

        $result = mysqli_query($conexao,"INSERT INTO pacientes(nome,cpf,email,telefone,NomeResp,altura,peso,oxigenacao,saturacao,sexo) VALUES('$nome','$cpf','$email','$telefone','$NomeResp','$','$peso','$oxigenacao','$saturacao','$sexo')");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="NomeResp" id="NomeResp" class="inputUser" required>
                    <label for="NomeResp" class="labelInput">Nome do Responsável</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="altura" id="altura" class="inputUser" required>
                    <label for="altura" class="labelInput">Altura</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="peso" id="peso" class="inputUser" required>
                    <label for="peso" class="labelInput">Peso</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="oxigenacao" id="oxigenacao" class="inputUser" required>
                    <label for="oxigenacao" class="labelInput">Oxigenação</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="saturacao" id="saturacao" class="inputUser" required>
                    <label for="saturacao" class="labelInput">Saturação</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="sexo" id="sexo" class="inputUser" required>
                    <label for="sexo" class="labelInput">Sexo</label>
                </div>

                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>