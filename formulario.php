<?php

    if(isset($_POST['submit'])){
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $NomeResp = $_POST['NomeResp'];
        $CPFResp = $_POST['CPFResp'];
        $Idade = $_POST['Idade']; 
        $PlanoSaude = $_POST['PlanoSaude'];
        $Convenio = $_POST['Convenio'];
        $sexo = $_POST['sexo'];
        $TipoSangue = $_POST['TipoSangue'];
        

        $result = mysqli_query($conexao,"INSERT INTO pacientes(nome,cpf,email,telefone,NomeResp,CPFResp,Idade,PlanoSaude,Convenio,sexo,TipoSangue) VALUES('$nome','$cpf','$email','$telefone','$NomeResp','$CPFResp','$Idade','$PlanoSaude','$Convenio','$sexo','$TipoSangue')");
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
                    <input type="text" name="CPFResp" id="CPFResp" class="inputUser" required>
                    <label for="CPFResp" class="labelInput">CPF do Responsável</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Idade" id="Idade" class="inputUser" required>
                    <label for="Idade" class="labelInput">Idade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="PlanoSaude" id="PlanoSaude" class="inputUser" required>
                    <label for="PlanoSaude" class="labelInput">Plano de Saúde</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Convenio" id="Convenio" class="inputUser" required>
                    <label for="Convenio" class="labelInput">Convenio</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="sexo" id="sexo" class="inputUser" required>
                    <label for="sexo" class="labelInput">Sexo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="TipoSangue" id="TipoSangue" class="inputUser" required>
                    <label for="TipoSangue" class="labelInput">Tipo Sanguíneo</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>